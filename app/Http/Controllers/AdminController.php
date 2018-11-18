<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\Auth\Guard;

use App\Admin;
use App\Order;
use App\User;
use App\Contact;
use App\Cart;
use Illuminate\Http\Request;

use DB;

use App\Http\Requests;
use Auth;
use Session;

class AdminController extends Controller
{
   public $flag2;

    public function __construct()
    {
         //$this->middleware('auth:admins');

       $flag2=__class__;
   
       session()->put('flag2',$flag2);

    }


    public function dashboardadmin()
    {

        $message2 = Contact::where('seen','=', '')->get();
         $number2= count($message2);

          session()->put('message', $number2);

        return view('admin.dashboardadmin');
    }

 
     public function removeadmin($id)
    
    {    
        \DB::table('admins')->delete($id);
        Session::flash('success', 'Removed successfully!');
        return redirect()->route('listadmin');
    }

    
    public function getSignup()
    {
        return view('admin.signup');
    }

    public function postSignup(Request $request)
    {
        $this->validate($request, [
            'email' => 'email|required|unique:admins',
            'password' => 'required|min:4'
        ]);

        $admin = new Admin([
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);
        $admin->save();


     Session::flash('success', 'Added successfully!');
        return redirect()->route('listadmin');
    }


    public function getSignin()
    {
        return view('admin.signin');
    }



    public function postSignin(Request $request)
     {
        $this->validate($request, [
            'email' => 'email|required',
            'password' => 'required|min:4'
        ]);

         if (auth()->guard('admins')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')]))
        {
            $user = auth()->guard('admins')->user();

            $admin = $user->id;
             
            session()->put('adminid',$admin);

            return redirect('dashboardadmin');
        }
        return redirect()->back();
    }



   public function getProfile() {
    $orders = Order::orderBy('id', 'desc')->paginate(10);
            $orders->transform(function($order, $key) {
            $order->cart = unserialize($order->cart);
            
            return $order;
        });
        return view('admin.profile', ['orders' => $orders]);
    }
    
   public function single_order($id) {

            DB::table('orders')
            ->where('id', $id)
            ->update(['seen' => 1]);

           $orders = Order::all();
            $orders->transform(function($order, $key) {
            $order->cart = unserialize($order->cart);
            
            return $order;
        });
        return view('admin.single_order')->with('orders', $orders)->with('id', $id);
    }

    public function getLogout()
    {


        Auth::guard('admins')->logout();

        //$request->session('admins')->flush();

       // $request->session()->regenerate();

        return redirect()->route('admin.signin');
    } 

   public function single_order2() {

           $newto = Order::all();
           $orders = Order::all();
        $totalprice22=0;
            $orders->transform(function($order, $key) {

            $order->cart = unserialize($order->cart);
$newto = Order::all();
          
                foreach($newto as $orders){
             foreach($order->cart->items as $item){
                                    
                                // echo    $item['item']['title']."<br>" ;
                                // echo    $item['item']['id']."<br>" ;
                                     $abc =$item['item']['price'] ;
                                    
                                     $totalprice22 +=$abc;

                                
                                    
                   } }     } 
                             
                  
            
            //return $order;
        ); echo   $totalprice22;
            exit();
        return view('admin.single_order')->with('orders', $orders)->with('id', $id);
    }


}
