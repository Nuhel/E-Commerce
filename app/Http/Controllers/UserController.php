<?php

namespace App\Http\Controllers;

//use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Mail\Mailer;
use App\Http\Requests;
use App\Mail\EmailVerification;
use App\Order;
use App\User;
use Auth;
use Redirect;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Session;
use Illuminate\Support\Facades\Validator;
use Nexmo\Laravel\Facade\Nexmo;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{

       public $flag7;

    public function __construct()
    {
         //$this->middleware('auth:admins');

       $flag7=__class__;
   
       session()->put('flag7',$flag7);
    }


    public function getSignup()
    {
        return view('user.signup');
    }

    public function postSignup(Request $request)
    {
        $this->validate($request, [
           
            'name' => 'required|alpha|min:3',
            'email' => 'email|required|unique:users',
            'phone' => 'regex:/(01)[0-9]{9}/',
            'password' => 'required|min:4',
        ]);

        $user = new User([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'email_token' => rand(1111,9999)
        ]);

        try
        { 

            $user->save();
            $user = User::find($user->id)->toArray();;

            /*Mail::send('emails.confirm', $user, function($message) use ($user) {
                $message->to($user['email']);
                $message->subject('Sign Up');
            });*/

            $code=$user['email_token'];
             Nexmo::message()->send([
            'to'   => '+8801682891068',
            'from' => 'Warehouse',
            'text' => 'Verify Code: '.$code, 
            ]);
Session::put('code', $code);
            DB::commit(); 
            return redirect()->to("/EmailConfirm");

        }
        catch(Exception $e)
        {
            DB::rollback(); 
            return back();
        }

        // return Redirect::to('/');
    }
    // Verified the User


    public function  codesubmit(){

    //echo Session::get('code');
    $inputcode = Input::get ( 'code' );
    if (Session::get('code')==$inputcode) {
        $user = User::where('email_token',$inputcode)->first();

        if ($user) {   

            $user->verified = 1;
            $user->email_token = null;
            $user->save();

            Auth::login($user);
            if (Session::has('oldUrl')) {
                $oldUrl = Session::get('oldUrl');
                Session::forget('oldUrl');
                return redirect()->to($oldUrl);
            }
            Session::flash('verified', 'Congratulaitons! your account is verified successfully!');
            return Redirect::to('/');
        }
    }
      
        else{
            Session::put('mismatch', 'Incorrect Code!');
            return redirect::back();
        }
    
  }
    public function verify($token)
    {
        // The verified method has been added to the user model and chained here
        // for better readability
        
        $user = User::where('email_token',$token)->first();

        if ($user) {   

            $user->verified = 1;
            $user->email_token = null;
            $user->save();

            Auth::login($user);
            if (Session::has('oldUrl')) {
                $oldUrl = Session::get('oldUrl');
                Session::forget('oldUrl');
                return redirect()->to($oldUrl);
            }

            return Redirect::to('/');
        }        
        else{
            return redirect()->to('/');
        }
    }

    public function getSignin()
    {
        return view('user.signin');
    }

    public function postSignin(Request $request)
    {
        $this->validate($request, [
            'email' => 'email|required',
            'password' => 'required|min:4'
        ]);

        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password'), 'verified' => '1'])) {
            if (Session::has('oldUrl')) {
                $oldUrl = Session::get('oldUrl');
                Session::forget('oldUrl');
                return redirect()->to($oldUrl);
            }
            return Redirect::to('/');
        }
        return redirect()->back();
    }

     public function getProfile() {
        $orders = Auth::user()->orders;
        $orders->transform(function($order, $key) {
            $order->cart = unserialize($order->cart);
            return $order;
        });
        return view('user.profile', ['orders' => $orders]);
    }

    public function getLogout() {
        Auth::logout();
        return Redirect::route('user.signin');
    }


    // **************Password Reset*************

    public function reset()
    {
        return view('user.passwords.email');
    }
    public function resetlink(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ' email|required',
        ]);

        if ($validator->fails()) {
            return back()
            ->withErrors($validator)
            ->withInput();
        }

        $user = User::where('email','=',$request->email)->first();

        if ($user) {
        
            try
            {   
                $user->email_token = str_random(10);
                $user->save();

                $user = User::find($user->id)->toArray();;

                Mail::send('emails.reset', $user, function($message) use ($user) {
                    $message->to($user['email']);
                    $message->subject('Password Reset');
                });

                DB::commit(); 
                return redirect()->back()->with('msg', 'We have sent a password reset link to your email.'); 

            }
            catch(Exception $e)
            {
                DB::rollback(); 
                return back();
            }

        }
        else{
            return redirect()->back()->with('msg', 'Email not found'); 
        }
        // return Redirect::to('/');
    }
    public function resetmail($token)
    {
        $user = User::where('email_token',$token)->first();
        if ($user) {
            return view('user.passwords.reset')->with('token',$token);
        }
        else{
            return redirect('/');
        }
    }

    public function resetpassword(Request $request)
    {
       
            
        $validator = Validator::make($request->all(), [
            'email' => ' email|required',
            'password' => 'required|min:4|confirmed',
        ]);

        if ($validator->fails()) {  
            return back()
            ->withErrors($validator)
            ->withInput();
        }

        $user = User::where([['email','=',$request->email],['email_token','=',$request->token]])->first();

        if ($user) {

             $user->password = bcrypt($request->password); 
             $user->email_token = null; 
             $user->save();
             return redirect('user/signin');

        }
        else{
            return redirect()->back()->with('msg', 'Email not found'); 
        }
    }
   
     /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }


     public function handleProviderCallback()
    {   

         $userSocial = Socialite::driver('facebook')->user();

        $findUser = User::Where('email', $userSocial->email)->first();
        if ($findUser) {
            Auth::login($findUser);
              return Redirect::to('/');
        }
       else {
        $user= new User;
        $user->email = $userSocial->email;
        $user->password = bcrypt('123456');
        $user->save();
        Auth::login($user);
         return Redirect::to('/');
         Session::flash('login', 'You are sussucesfully logged in with    $user->email ');


       }

        
    }


 public function redirectToProvider2()
    {
        return Socialite::driver('google')->redirect();
    }


     public function handleProviderCallback2()
    {   

         $userSocial = Socialite::driver('google')->stateless()->user();

        $findUser = User::Where('email', $userSocial->email)->first();
        if ($findUser) {
            Auth::login($findUser);
              return Redirect::to('/');
        }
       else {
        $user= new User;
        $user->email = $userSocial->email;
        $user->password = bcrypt('123456');
        $user->save();
        Auth::login($user);
         return Redirect::to('/');
         Session::flash('login', 'You are sussucesfully logged in with    $user->email ');


       }

        
    }

     public function registeruser(){
        
          $registeruser = User::orderBy('email', 'asc')->paginate(10);
         return view('admin.registerUser')->withregisteruser($registeruser);
    }

        public function faq(){

         return view('user.faq');
    }

          public function sitemap(){
            
         return view('user.sitemap');
    }
}
