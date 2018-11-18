<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Cart;
use App\Wish;
use App\Product;
use Illuminate\Mail\Mailer;
use App\Blog;
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
use DB;
use Illuminate\Support\Facades\Mail;
use Storage;


class ProductController extends Controller
{


  public $flag;

  public function __construct()
  {
        //blockio init
   $flag=__class__;
   
   session()->put('flag',$flag);
 }

 
 public function index()
 {

  $item =\DB::table('products')
  ->join('categories', 'products.category_id', '=', 'categories.id')
  ->join('subcategories', 'products.subcategory_id', '=', 'subcategories.id')
  ->get();
  $items=Product::paginate(200);

  return view('item.index')->withitem($item)->withitems($items);
}

public function productsearch(Request $request)

{

  $a = Input::get ( 'title' );
  //$b=soundex($a);
  $category = Input::get ( 'category_id' );
  //$products = Product::all();
if ($a==''|| $a==' ' || $a=='  ') {

       
  
}
     if (empty($category)) {

       $product = Product::where ( 'title', 'LIKE', '%' .$a. '%')->get();
       if (count ( $product ) > 0){
        return view ( 'shop.productsearch' )->withDetails( $product )->withProducts($product);
      }

      else{ 
      session::flash('noitem', 'Sorry! No Item Found!');
      Session::push('flash.old', 'noitem');   /*
        return view ( 'shop.productsearch' )->withDetails( $product )->withProducts($product);
*/
        return view ( 'shop.productsearch' )->with('success', 'No item found!')->withDetails( $product )->withProducts($product);
      }


    }

 /*   else{
      return redirect()->back()->with('success', 'no item found!');
    }
  */

     else if (!empty($category)) {

       $product = Product::where ( 'title', 'LIKE', '%' .$a. '%')->where('category_id', $category)->get();
       if (count ( $product ) > 0){
        return view ( 'shop.productsearch' )->withDetails( $product )->withProducts($product);
      }

      else{ 

         session::flash('noitem', 'Sorry! No Item Found!');  
         Session::push('flash.old', 'noitem'); 
          return view ( 'shop.productsearch' )->with('success', 'No item found!')->withDetails( $product )->withProducts($product);
      }


    }



}


public function create()
{   
  $data=Category::pluck('category', 'id')->toArray(); 
  $data2=Subcategory::pluck('subcategory', 'id')->toArray(); 
  return view('item.create')->with('data',$data)->with('data2',$data2);
}



public function store(Request $request)
{
 $this->validate($request, array(
  'imagePath'         => 'sometimes|image',
  'title'             => 'required',
  'description'       => 'required|min:5',
  'details'       => 'required|min:10',
  'price'             => 'required|numeric',
  'category_id'       => 'required',
  'subcategory_id'    => 'required'

));


 $item = new Product;

 $item->title = $request->title;
 $item->description = $request->description;
 $item->price = $request->price;
 $item->stock = $request->stock;
 $item->category_id = $request->category_id;
 $item->subcategory_id = $request->subcategory_id;
 $item->type = $request->type;
 $item->details = $request->details;



 if ($request->hasFile('imagePath')) {

  $image = $request->imagePath;
  $filename = time() . '.' . $image->getClientOriginalExtension();
  $location =('items/' . $filename);
  Image::make($image)->save($location);

  $item->imagePath = $filename;

}
$item->save();

Session::flash('item', 'Item Added!');

return redirect()->route('item.show', $item->id);
}


public function show($id)
{    $product = Product::find($id);
 $item = Product::find($id);
 return view('item.show')->with('product', $product)->with('item', $item);

}


public function productreview($id)
{   
 $product = Product::find($id);
 $item = Product::find($id);
 return view('admin.productreview', ['product' => $product], ['item' => $item]);

}

public function edit($id)
{

  $data=Category::pluck('category', 'id')->toArray(); 
  $data2=Subcategory::pluck('subcategory', 'id')->toArray();
  $item = Product::find($id);
  return view('item.edit')->with('data',$data)->with('data2',$data2)->with('item',$item);
}

public function update(Request $request, $id)
{

 $this->validate($request, array(
  'imagePath'         => 'sometimes|image',
  'title'             => 'required',
  'description'       => 'required|min:5',
  'details'       => 'required|min:10',
  'price'             => 'required|numeric',
  'category_id'       => 'required',
  'subcategory_id'    => 'required'

));



 $item = Product::find($id);

 $item->title = $request->input('title');
 $item->description = $request->input('description');
 $item->price = $request->input('price');
 $item->category_id = $request->input('category_id');
 $item->subcategory_id = $request->input('subcategory_id');
 $item->type = $request->input('type');
 $item->stock = $request->input('stock');
 $item->details = $request->input('details');

 if ($request->hasFile('imagePath')) {

  $image = $request->file('imagePath');
  $filename = time() . '.' . $image->getClientOriginalExtension();
  $location =('items/' . $filename);
  Image::make($image)->save($location);

  $oldFilename = $item->imagePath;  
  $item->imagePath = $filename;

  Storage::delete($oldFilename);


}
$item->save();

Session::flash('success', 'Product Info Updated!');

return redirect()->route('item.show', $item->id);
}


public function destroy($id)
{
 $item = Product::find($id);

 Storage::delete($item->imagePath);

 $item->delete();
$items=Product::paginate(200);

  return view('item.index')->withitem($item)->withitems($items);

}


public function try2()
{
  return view('shop.try2');
}

public function try3()
{
 $products = Product::all();
 return view('shop.try3', ['products' => $products]);   
}

public function getIndex()
{

  $data=Category::pluck('category', 'id')->toArray();
  $products = Product::all();
  return view('shop.index')->with('data',$data)->with('products',$products);
}

public function index2()
{

  $data=Category::pluck('category', 'id')->toArray();
  $productsdb = Product::orderBy('id', 'desc')->where('type','F')->take(10)->get();
  $blog = Blog::orderBy('id', 'desc')->get();
  $hotdeals = Product::where('type', 'H')->orderBy('id', 'DESC')->take(1)->get();
  $bests = Product::orderBy('review', 'DESC')->take(3)->get();
  $special = Product::where('type', 'S')->orderBy('id', 'DESC')->take(10)->get();
  $populars = Product::orderBy('viewcount', 'DESC')->take(10)->get();
  return view('shop.index2')->with('data',$data)->with('productsdb',$productsdb)->with('hotdeals',$hotdeals)->with('special',$special)->with('blog',$blog)->with('populars',$populars)->with('bests',$bests);
}

public function specialsave($for){


  if ($for == 'newarrival'){
  session::put('newarrival', 'newarrival');
  $specialsave = Product::orderBy('id', 'DESC')->paginate(12);
  $special = Product::where('type', 'S')->take(2)->get();
  $newproduct = Product::orderBy('id', 'desc')->take(2)->get();
  return view('shop.specialsave')->with('specialsave',$specialsave)->with('special',$special)->with('newproduct',$newproduct);
  }

  if ($for == 'save'){
  $specialsave = Product::where('type', $for)->get();
  $special = Product::where('type', 'S')->take(2)->get();
  $newproduct = Product::orderBy('id', 'desc')->take(2)->get();
  return view('shop.specialsave')->with('specialsave',$specialsave)->with('special',$special)->with('newproduct',$newproduct);
  }

    if ($for == 'special'){
      session::put('special', 'special');
  $specialsave = Product::where('type', 'S')->get();
  $newproduct = Product::orderBy('id', 'desc')->take(2)->get();
  $special = Product::where('type', 'S')->take(2)->get();
  return view('shop.specialsave')->with('specialsave',$specialsave)->with('special',$special)->with('newproduct',$newproduct);
  }
 
 
}

public function topproduct(){

  

  $sort = Input::get ( 'myselect' );

  if (!empty($sort)) {
    if ($sort=='1') {
       $productsdb = Product::orderBy('price', 'desc')->where('review',5)->paginate(12);
     session()->flash('price', 'price');
   }
   elseif($sort=='2'){
       $productsdb = Product::orderBy('price', 'asc')->where('review',5)->paginate(12);
     session()->flash('lowerprice', 'Lower Price');
   }
   elseif ($sort=='3') {
      $productsdb = Product::orderBy('title', 'asc')->where('review',5)->paginate(12);
     session()->flash('productname', 'Product Name');
   }

   elseif ($sort=='0') {
       $productsdb = Product::orderBy('id', 'asc')->where('review',5)->paginate(12);
     session()->flash('productname', 'Product Name');
   }
 }

 else {
   $productsdb = Product::orderBy('id', 'desc')->where('review',5)->paginate(12);
       // session::put('productid', 'Position');
   session()->flash('productid', 'Position');
 }

$topproduct = Product::orderBy('id', 'DESC')->where('type','S')->take(3)->get();

 $data=Category::pluck('category', 'id')->toArray();

 return view('shop.topproduct')->with('data',$data)->with('productsdb',$productsdb)->with('topproduct',$topproduct);
  }



public function popular(){

  

/*  $sort = Input::get ( 'myselect' );

  if (!empty($sort)) {
    if ($sort=='1') {
       $productsdb = Product::orderBy('price', 'desc')->orderBy('viewcount', 'desc')->paginate(12);
     session()->flash('price', 'price');
   }
   elseif($sort=='2'){
       $productsdb = Product::orderBy('price', 'asc')->orderBy('viewcount', 'desc')->paginate(12);
     session()->flash('lowerprice', 'Lower Price');
   }
   elseif ($sort=='3') {
      $productsdb = Product::orderBy('title', 'asc')->orderBy('viewcount', 'desc')->paginate(12);
     session()->flash('productname', 'Product Name');
   }

   elseif ($sort=='0') {
       $productsdb = Product::orderBy('id', 'asc')->orderBy('viewcount', 'desc')->paginate(12);
     session()->flash('productname', 'Product Name');
   }
 }

 else {
   $productsdb = Product::orderBy('id', 'desc')->orderBy('viewcount', 'desc')->paginate(12);
       // session::put('productid', 'Position');
   session()->flash('productid', 'Position');
 }
*/
 $productsdb = Product::orderBy('viewcount', 'desc')->orderBy('id', 'desc')->paginate(15);
$topproduct = Product::orderBy('id', 'DESC')->where('type','S')->take(3)->get();

 $data=Category::pluck('category', 'id')->toArray();

 return view('shop.popular')->with('data',$data)->with('productsdb',$productsdb)->with('topproduct',$topproduct);
  }




public function specialproduct(){

  

  $sort = Input::get ( 'myselect' );

  if (!empty($sort)) {
    if ($sort=='1') {
       $productsdb = Product::orderBy('price', 'desc')->where('type','S')->paginate(12);
     session()->flash('price', 'price');
   }
   elseif($sort=='2'){
       $productsdb = Product::orderBy('price', 'asc')->where('type','S')->paginate(12);
     session()->flash('lowerprice', 'Lower Price');
   }
   elseif ($sort=='3') {
      $productsdb = Product::orderBy('title', 'asc')->where('type','S')->paginate(12);
     session()->flash('productname', 'Product Name');
   }

   elseif ($sort=='0') {
       $productsdb = Product::orderBy('id', 'asc')->where('type','S')->paginate(12);
     session()->flash('productname', 'Product Name');
   }
 }

 else {
   $productsdb = Product::orderBy('id', 'desc')->where('type','S')->paginate(12);
       // session::put('productid', 'Position');
   session()->flash('productid', 'Position');
 }

$topproduct = Product::orderBy('id', 'DESC')->where('review',5)->take(3)->get();

 $data=Category::pluck('category', 'id')->toArray();

 return view('shop.specialproduct')->with('data',$data)->with('productsdb',$productsdb)->with('topproduct',$topproduct);
  }


public function quickview($id,$sucategory_id)
{
  $product = Product::find($id);
  $products = Product::all();
  $related_products = Product::where([
    ['id', '!=', $id],['subcategory_id', '=', $sucategory_id],
  ])->get();
  return view('shop.quickview', ['product' => $product], ['related' => $related_products]);
}



public function shop()
{
  $sort = Input::get ( 'myselect' );

  if (!empty($sort)) {
    if ($sort=='1') {
     $productsdb = Product::orderBy('price', 'DESC')->paginate(12);
     session()->flash('price', 'price');
   }
   elseif($sort=='2'){
     $productsdb = Product::orderBy('price', 'asc')->paginate(12);
     session()->flash('lowerprice', 'Lower Price');
   }
   elseif ($sort=='3') {
     $productsdb = Product::orderBy('title', 'asc')->paginate(12);
     session()->flash('productname', 'Product Name');
   }

   elseif ($sort=='0') {
     $productsdb = Product::orderBy('id', 'asc')->paginate(12);
     session()->flash('productname', 'Product Name');
   }
 }

 else {
   $productsdb = Product::orderBy('id', 'asc')->paginate(12);
       // session::put('productid', 'Position');
   session()->flash('productid', 'Position');
 }

$topproduct = Product::orderBy('id', 'DESC')->where('review',5)->inRandomOrder()->take(3)->get();

 $data=Category::pluck('category', 'id')->toArray();

 return view('shop.shop')->with('data',$data)->with('productsdb',$productsdb)->with('topproduct',$topproduct);

}

public function getCategory2(Request $request)
{
  $products = Product::all();
  $products = Product::where('category_id','2')->get();
  return view('shop.category2', ['products' => $products ]);

}



public function details($id,$sucategory_id)
{


  
    $product = Product::find($id);
    $products = Product::all();
    $related_products = Product::where([
      ['id', '!=', $id],['subcategory_id', '=', $sucategory_id],
    ])->inRandomOrder()->limit(10)->get();


    $best_products = Product::where([
      ['id', '!=', $id],['review', '=', 5],
    ])->inRandomOrder()->limit(10)->get();

$data=Product::find($id);
  $view= $data->viewcount;
  // echo $view;
$data->viewcount = $view+1;
//echo $data->viewcount;

//$data->viewcount = $count;
$data->save();
    return view('shop.shopping-details')->with('best', $best_products)->with('product', $product)->with('related', $related_products);
  

}

public function compare($id,$sucategory_id){




  $product = \DB::select("select imagePath,review,stock,id,category_id,subcategory_id,id,description,
    title,price
    FROM products
    WHERE id='".$id."'");

  foreach ($product as $first) {
    $productname= $first->title;
    $price= $first->price;
    $review= $first->review;
    $imagePath= $first->imagePath;
    $description= $first->description;
    $stock = $first->stock;
    $category_id = $first->category_id;
    $subcategory_id = $first->subcategory_id;
    $id = $first->id;

  }


  $related_products = Product::where([
    ['id', '!=', $id],['subcategory_id', '=', $sucategory_id],
  ])->inRandomOrder()->limit(3)->get();

  $i=0;
  foreach ($related_products as $second) {
    $i++;
    if ($i==1) {
      $productname1= $second->title;
      $price1= $second->price;
      $review1= $second->review;
      $imagePath1= $second->imagePath;
      $description1= $second->description;
      $stock1= $second->stock;
      $subcategory_id1 = $second->subcategory_id;
      $id1 = $second->id;
    }

    if ($i==2) {
      $productname2= $second->title;
      $price2= $second->price;
      $review2= $second->review;
      $imagePath2= $second->imagePath;
      $description2= $second->description;
      $stock2= $second->stock;
      $subcategory_id2 = $second->subcategory_id;
      $id2 = $second->id;
    }
    if ($i==3) {
      $productname3= $second->title;
      $price3= $second->price;
      $review3= $second->review;
      $imagePath3= $second->imagePath;
      $description3= $second->description;
      $stock3= $second->stock;
      $subcategory_id3 = $second->subcategory_id;
      $id3 = $second->id;
    }


  }

  return view ('shop.compare')->with('product', $product)->with('productname', $productname)->with('imagePath', $imagePath)->with('description', $description)->with('price', $price)->with('related', $related_products)->with('productname1', $productname1)->with('productname2', $productname2)->with('productname3', $productname3)->with('price1', $price1)->with('price2', $price2)->with('price3', $price3)->with('imagePath1', $imagePath1)->with('imagePath2', $imagePath2)->with('imagePath3', $imagePath3)->with('description1', $description1)->with('description2', $description2)->with('description3', $description3)->with('review', $review)->with('review1', $review1)->with('review2', $review2)->with('review3', $review3)->with('stock', $stock)->with('stock1', $stock1)->with('stock2', $stock2)->with('stock3', $stock3)->with('id', $id)->with('subcategory_id', $subcategory_id)->with('id1', $id1)->with('subcategory_id1', $subcategory_id1)->with('id2', $id2)->with('subcategory_id2', $subcategory_id2)->with('id3', $id3)->with('subcategory_id3', $subcategory_id3);


}

public function getAddToCart(Request $request)
{
  $product = Product::find($request->id);
  $oldCart = Session::has('cart') ? Session::get('cart') : null;
  $cart = new Cart($oldCart);
/*                
if (Session::has('cart')->$product->id!=$id) {*/
 $cart->add($product, $product->id);
 /*      }*/

 $request->session()->put('cart', $cart);


 return Response()->json(200);
}


public function getAddToWish(Request $request, $id)
{
  $product = Product::find($id);
  $oldWish = Session::has('wish') ? Session::get('wish') : null;
  $wish = new Wish($oldWish);
        //$wish->$product->id != $items->$id;
        // $wish = Wish::where('id', '!=', $product->id)->get();
  $wish->add2($product, $product->id);

  $request->session()->put('wish', $wish);

  return Response()->json(200);
}


public function getReduceByOne(Request $request) {
  $id = $request->id;
  $oldCart = Session::has('cart') ? Session::get('cart') : null;
  $cart = new Cart($oldCart);
  $cart->reduceByOne($id);

  if (count($cart->items) > 0) {
    Session::put('cart', $cart);
  } else {
    Session::forget('cart');
  }
  return Response()->json(200);
}

public function getIncreaseByOne(Request $request) {
  $id = $request->id;
  $oldCart = Session::has('cart') ? Session::get('cart') : null;
  $cart = new Cart($oldCart);
  $cart->increaseByOne($id);


  if (count($cart->items) > 0) {
    Session::put('cart', $cart);
  } else {
    Session::forget('cart');
  }
  return Response()->json(200);
}

public function getRemoveItem(Request $request) {
  $id = $request->id;
  $oldCart = Session::has('cart') ? Session::get('cart') : null;
  $cart = new Cart($oldCart);
  $cart->removeItem($id);

  if (count($cart->items) > 0) {
    Session::put('cart', $cart);
  } else {
    Session::forget('cart');
  }

  return Response()->json(200);
}

public function getCart()
{
  if (!Session::has('cart')) {
    return view('shop.shopping-cart');
  }
  if (Session::has('cart')) {
    $oldCart = Session::get('cart');
    $cart = new Cart($oldCart);
    return view('shop.shopping-cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
  }
}


public function getWish()
{
  if (!Session::has('wish')) {
    return view('shop.shopping-wish');
  }
  $oldWish = Session::get('wish');
  $wish = new Wish($oldWish);


  $order = new Order();
  $order->wish = serialize($wish);

  Auth::user()->orders()->save($order);

  return view('shop.shopping-wish', ['products' => $wish->items, 'totalPrice' => $wish->totalPrice]);
}





public function getCheckout()
{
  if (!Session::has('cart')) {
    return view('shopping-cart');
  }
  $oldCart = Session::get('cart');
  $cart = new Cart($oldCart);
  $total = $cart->totalPrice;
  return view('shop.checkout', ['total' => $total]);
}

public function postCheckout(Request $request)
{
  if (!Session::has('cart')) {
    return redirect::to('shoppingCart');
  }
  $oldCart = Session::get('cart');
  $cart = new Cart($oldCart);

  Stripe::setApiKey('sk_test_5jKG3R5Jrs3411OvHWrm6VNM');
  try {
    $charge = Charge::create(array(
      "amount" => $cart->totalPrice * 100,
      "currency" => "usd",
                "source" => $request->input('stripeToken'), // obtained with Stripe.js
                "description" => "Test Charge"
              ));
    $order = new Order();
    $order->cart = serialize($cart);
    $order->address = $request->input('address');
    $order->name = $request->input('name');
    $order->method = 'card';
    $order->payment_id = $charge->id;
  
    Auth::user()->orders()->save($order);


  } catch (\Exception $e) {

   return redirect()->route('checkout')->with('error', $e->getMessage());
 }

 Session::forget('cart');
 return redirect::to('/')->with('success', 'Successfully purchased products!');
}


public function payment(){

 return view('shop.payment');
}



public function getbikash()
{
  if (!Session::has('cart')) {
    return view('shopping-cart');
  }
  $oldCart = Session::get('cart');
  $cart = new Cart($oldCart);
  $total = $cart->totalPrice;
  return view('shop.bikash', ['total' => $total]);
}


public function postbikash(Request $request){


 if (!Session::has('cart')) {
  return redirect::to('shoppingCart');
}
$oldCart = Session::get('cart');
$cart = new Cart($oldCart);

try {

  $order = new Order();
  $order->cart = serialize($cart);
  $order->address = $request->input('address');
  $order->name = $request->input('name');
  $order->method = 'bikash';
  $order->payment_id = $request->input('mobile');

  Auth::user()->orders()->save($order);
} catch (\Exception $e) {

 return redirect()->route('bikash')->with('error', $e->getMessage());
}

Session::forget('cart');
return redirect::to('/')->with('success', 'Successfully purchased products!');
}




public function getcashondelivery()
{
  if (!Session::has('cart')) {
    return view('shopping-cart');
  }
  $oldCart = Session::get('cart');
  $cart = new Cart($oldCart);
  $total = $cart->totalPrice;
  return view('shop.cashondelivery', ['total' => $total]);
}


public function postcashondelivery(Request $request){



 if (!Session::has('cart')) {
  return redirect::to('shoppingCart');
}
$oldCart = Session::get('cart');
$cart = new Cart($oldCart);

try {

  $order = new Order();
  $order->cart = serialize($cart);
  $order->address = $request->input('address');
  $order->name = $request->input('name');
  $order->method = 'cash on delivery';
  $order->payment_id = $request->input('mobile');

  Auth::user()->orders()->save($order);
} catch (\Exception $e) {

 return redirect()->route('cashondelivery')->with('error', $e->getMessage());
}

Session::forget('cart');
return redirect::to('/')->with('success', 'Successfully purchased products!');
}


public function sortby(){
 $q = Input::get ( 'myselect' );

 if ($q==1) {
   $data=Category::pluck('category', 'id')->toArray();

   $products = Product::orderBy('price', 'desc')->paginate(500);
   return view('shop.shop')->with('data',$data)->with('products',$products);
 }

 elseif($q==2){
   $data=Category::pluck('category', 'id')->toArray();

   $products = Product::orderBy('price', 'asc')->paginate(500);
   return view('shop.shop')->with('data',$data)->with('products',$products);
 }

 elseif($q==3){
   $data=Category::pluck('category', 'id')->toArray();

   $products = Product::orderBy('title', 'asc')->paginate(500);
   return view('shop.shop')->with('data',$data)->with('products',$products);
 }



}


public function saveupto()
{
  $sort = Input::get ( 'myselect' );

  if (!empty($sort)) {
    if ($sort=='1') {
     $productsdb = Product::where('type', 'S')->orderBy('price', 'DESC')->paginate(12);
     session()->flash('price', 'price');
   }
   elseif($sort=='2'){
     $productsdb = Product::where('type', 'S')->orderBy('price', 'asc')->paginate(12);
     session()->flash('lowerprice', 'Lower Price');
   }
   elseif ($sort=='3') {
     $productsdb = Product::where('type', 'S')->orderBy('title', 'asc')->paginate(12);
     session()->flash('productname', 'Product Name');
   }

   elseif ($sort=='0') {
     $productsdb = Product::where('type', 'S')->orderBy('id', 'asc')->paginate(12);
     session()->flash('productname', 'Product Name');
   }
 }

 else {
   $productsdb = Product::where('type', 'S')->orderBy('id', 'asc')->paginate(12);
       // session::put('productid', 'Position');
   session()->flash('productid', 'Position');
 }

$topproduct = Product::orderBy('id', 'DESC')->where('review',5)->inRandomOrder()->take(3)->get();

 $data=Category::pluck('category', 'id')->toArray();

 return view('shop.saveupto')->with('data',$data)->with('productsdb',$productsdb)->with('topproduct',$topproduct);

}

public function subproduct($id)
{

  session::put('proid', $id); 
  $sort = Input::get ( 'myselect' );

  if (!empty($sort)) {
    if ($sort=='1') {
     $productsdb = Product::orderBy('price', 'DESC')->where('subcategory_id', $id)->paginate(12);
     session()->flash('price', 'price');
   }
   elseif($sort=='2'){
     $productsdb = Product::orderBy('price', 'asc')->where('subcategory_id', $id)->paginate(12);
     session()->flash('lowerprice', 'Lower Price');
   }
   elseif ($sort=='3') {
     $productsdb = Product::orderBy('title', 'asc')->where('subcategory_id', $id)->paginate(12);
     session()->flash('productname', 'Product Name');
   }

   elseif ($sort=='0') {
     $productsdb = Product::orderBy('id', 'asc')->where('subcategory_id', $id)->paginate(12);
     session()->flash('productname', 'Product Name');
   }
 }

 else {
   $productsdb = Product::orderBy('id', 'asc')->where('subcategory_id', $id)->paginate(12);
       // session::put('productid', 'Position');
   session()->flash('productid', 'Position');
 }

$topproduct = Product::orderBy('id', 'DESC')->where('review',5)->inRandomOrder()->take(3)->get();

 $data=Category::pluck('category', 'id')->toArray();

 return view('shop.subproduct')->with('data',$data)->with('productsdb',$productsdb)->with('topproduct',$topproduct);

}

public function categoryproduct($id)
{
  
  session::put('proid', $id); 

  $sort = Input::get ( 'myselect' );

  if (!empty($sort)) {
    if ($sort=='1') {
     $productsdb = Product::orderBy('price', 'DESC')->where('category_id', $id)->paginate(12);
     session()->flash('price', 'price');
   }
   elseif($sort=='2'){
     $productsdb = Product::orderBy('price', 'asc')->where('category_id', $id)->paginate(12);
     session()->flash('lowerprice', 'Lower Price');
   }
   elseif ($sort=='3') {
     $productsdb = Product::orderBy('title', 'asc')->where('category_id', $id)->paginate(12);
     session()->flash('productname', 'Product Name');
   }

   elseif ($sort=='0') {
     $productsdb = Product::orderBy('id', 'asc')->where('category_id', $id)->paginate(12);
     session()->flash('productname', 'Product Name');
   }
 }

 else {
   $productsdb = Product::orderBy('id', 'asc')->where('category_id', $id)->paginate(12);
       // session::put('productid', 'Position');
   session()->flash('productid', 'Position');
 }

$topproduct = Product::orderBy('id', 'DESC')->where('review',5)->inRandomOrder()->take(3)->get();

 $data=Category::pluck('category', 'id')->toArray();

 return view('shop.categoryproduct')->with('data',$data)->with('productsdb',$productsdb)->with('topproduct',$topproduct);

}






}


