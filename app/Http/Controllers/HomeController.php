<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Cart;
use App\Wish;
use App\Product;
use App\User;
use App\Order;
use App\Category;
use App\Subcategory;
use Illuminate\Support\Facades\Input;
 use Redirect;
 use route;
use Session;
use Auth;
use Stripe\Charge;
use Stripe\Stripe;
use Image;
use Storage;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

     public function template()
    {
        return view('layouts.template');
    }


    public function design()
    {
             return view('layouts.design');
        
    }

     public function check()
    {
        return view('admin.check');
    }

     public function check2()
    {
        return view('admin.check2');
    }
 public function welcome()
    {
        return view('welcome');
    }

     public function aboutus()
    {
        return view('contact.aboutus');
    }

     public function page1()
    {
        return view('page1');
    }
 public function page2()
    {
        return view('categories');
    }


 public function pagenotfound()
    {
        return view('errors.503');
    }

 public function page3()
    {
        return view('single');
    }

     public function page4()
    {
        return view('contact');
    }

     public function changestatus()
    {   $id=$_POST['id'];
        $orders=Order::find($id);
         $orders->status = 'Delivered';
         $orders->save();
        return Redirect::back();
    }

     public function orderconfirm($id)
    {  
        $orders=Order::find($id);
         $orders->status = 'Delivered';
         $orders->save();
        return Redirect::back();
    }

        public function reconsider($id)
    {  
        $orders=Order::find($id);
         $orders->status = 'Pending';
         $orders->save();
        return Redirect::back();
    }

     public function ordercancel($id)
    {  
        $orders=Order::find($id);
         $orders->status = 'Cencelled';
         $orders->save();
        return Redirect::back();
    }
}


