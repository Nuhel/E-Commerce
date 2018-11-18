<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\Auth\Guard;

use App\Admin;
use App\Order;
use App\User;
use App\Comment;
use App\Product;
use App\Category;
use App\Contact;
use App\Subcategory;
use App\Requestproduct;
use App\Cart;
use App\Blog;
use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use Session;

class DashboardController extends Controller
{
   public $flag6;

    public function __construct()
    {
         //$this->middleware('auth:admins');

       $flag6=__class__;
   
       session()->put('flag6',$flag6);
    }


    public function dashboardadmin()
    {
       $usernumber = User::count();
       $messageall = Contact::count();
       $productnumber = Product::count();
       $ordernumber = Order::count();
       $requestnumber = Requestproduct::count();
       $commentnumber = Comment::count();
       $categorynumber = Category::count();
       $subcategorynumber = Subcategory::count();
       $blognumber = Blog::count();
         
        return view('admin.dashboardadmin')->with('usernumber', $usernumber)->with('productnumber', $productnumber)->with('ordernumber', $ordernumber)->with('requestnumber', $requestnumber)->with('commentnumber', $commentnumber)->with('categorynumber', $categorynumber)->with('subcategorynumber', $subcategorynumber)->with('blognumber', $blognumber)->with('messageall', $messageall);

    }

    
}