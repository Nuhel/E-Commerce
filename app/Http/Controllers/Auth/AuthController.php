<?php

namespace App\Http\Controllers\Auth;

use Mail;
use App\Mail\EmailVerification;
use App\Http\Controllers\Controller;
use App\User;
use DB;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Support\Facades\DB;
use Validator;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
         
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $user = User::create(
          
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'email_token' => str_random(10),
        ]);

        try
        {
        	// After creating the user send an email with the random token generated in the create method above
        	$email = new EmailVerification(new User(['email_token' => $user->email_token]));
        	Mail::to($user->email)->send($email);
        	DB::commit();
        	return redirect()->to("/EmailConfirm");

        }
        catch(Exception $e)
        {
        	DB::rollback(); 
        	return back();
        }

    }
}
