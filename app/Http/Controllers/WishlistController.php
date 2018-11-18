<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;
use Redirect;
use DB;
use App\Wishlist;
use App\Product;
use App\Admin;


class WishlistController extends Controller
{
    public $flagwish;

    public function __construct()
    {
         //$this->middleware('auth:admins');

       $flagwish=__class__;
   
       session()->put('flagwish',$flagwish);

    }


    public function addToWishlist(Request $request){

    	$user_id = Auth::user()->id;
    	
        $id = $request->id;

    	$check = Wishlist::where(['user_id'=>$user_id, 'product_id'=>$id])->get();

    	if (count($check)>0) {
    		return redirect()->route('product.index')->with('success', 'Added to wishlist');
    	}else{
    		$user = new Wishlist([
            'user_id' => $user_id,
            'product_id' => $id
        ]);

        $user->save();
        return Response()->json(200);
    	}
    	 
    }

    public function wishlist(){

        $user_id = Auth::user()->id;
        $wishlist = DB::table('wishlists')
            ->leftjoin('products','wishlists.product_id' , '=', 'products.id')
            ->select('products.*','wishlists.id as wishlist_id')
            ->where('wishlists.user_id',$user_id)
            ->get();

            $count=count($wishlist);
            session()->put('count',$count);
       return view('user.wishlist',['wishlists' => $wishlist, 'count'=>$count, 'user_id'=>$user_id]);
    }


public function removeWishlist($wishlist_id){

 $wishlist = Wishlist::find($wishlist_id);
 $wishlist->delete();
  return Redirect::back();
// return view('user.wishlist',['wishlists' => $wishlist]);
    }


     public function listadmin()
    {
        $admin = Admin::all();   
        return view('admin.listadmin')->with('admin', $admin);
    }




}
