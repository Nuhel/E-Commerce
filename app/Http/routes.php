<?php
use App\Product;
use App\Cart;
use App\User;
use Illuminate\Support\Facades\Input;
use App\Category;
use App\Contact;
use App\Order;
use App\Subcategory;
use App\Wishlist;
use App\Requestproduct;



Route::get('login/facebook', 'UserController@redirectToProvider')->name('login/facebook');
Route::get('login/facebook/callback', 'UserController@handleProviderCallback')->name('login/facebook/callback');

Route::get('login/google', 'UserController@redirectToProvider2')->name('login/google');
Route::get('login/google/callback', 'UserController@handleProviderCallback2')->name('login/google/callback');
Route::get('/admin/check', 'HomeController@check');

Route::post('/codesubmit', 'UserController@codesubmit')->name('codesubmit');

Route::get('template', 'HomeController@template');
Route::get('design', 'HomeController@design');

Route::get('page1', 'HomeController@page1');
Route::get('page2', 'HomeController@page2');
Route::get('page3', 'HomeController@page3');
Route::get('page4', 'HomeController@page4');
Route::get('/shop/try2', 'ProductController@try2');
Route::get('/shop/try3', 'ProductController@try3');
Route::post('shop', 'ProductController@shop')->name('shop');
Route::get('shop/', 'ProductController@shop')->name('shop');
Route::post('sortby', 'ProductController@sortby')->name('sortby');
Route::get('sortby', 'ProductController@sortby')->name('sortby');
Route::get('specialsave/{for}', 'ProductController@specialsave')->name('specialsave');
Route::get('contactclear', 'contactController@contactclear')->name('contactclear');
Route::get('topproduct', 'ProductController@topproduct')->name('topproduct');
Route::post('topproduct', 'ProductController@topproduct')->name('topproduct');
Route::post('specialproduct', 'ProductController@specialproduct')->name('specialproduct');
Route::get('specialproduct', 'ProductController@specialproduct')->name('specialproduct');
Route::post('saveupto', 'ProductController@saveupto')->name('saveupto');
Route::get('saveupto', 'ProductController@saveupto')->name('saveupto');
Route::post('popular', 'ProductController@popular')->name('popular');
Route::get('popular', 'ProductController@popular')->name('popular');

Route::resource('contact', 'ContactController');
Route::resource('requestproduct', 'RequestproductController');
Route::resource('category', 'CategoryController');
Route::resource('subcategory', 'SubcategoryController');
Route::resource('newsletter', 'NewsletterController');
Route::resource('blog', 'BlogController');
Route::get('blog/showsingle/{id}', 'BlogController@showsingle')->name('showsingle');
Route::get('blogmanage', 'BlogController@blogmanage')->name('blogmanage');
Route::get('blogdetails/{id}', 'BlogController@blogdetails')->name('blogdetails');
Route::get('unsubscribe/{email}', 'BlogController@unsubscribe')->name('unsubscribe');


 Route::group(['middleware' => 'admins'], function () {
        
   Route::resource('item', 'ProductController');

        
    });


Route::post('changestatus', 'HomeController@changestatus');

 Route::post('/productsearch', 'ProductController@productsearch')->name('productsearch');
 Route::get('/productsearch', 'ProductController@productsearch')->name('productsearch');
 Route::get('subproduct/{id}', 'ProductController@subproduct')->name('subproduct');
 Route::post('subproduct/{id}', 'ProductController@subproduct')->name('subproduct');
 Route::get('categoryproduct/{id}', 'ProductController@categoryproduct')->name('categoryproduct');
 Route::post('categoryproduct/{id}', 'ProductController@categoryproduct')->name('categoryproduct');
 Route::get('faq', 'UserController@faq')->name('faq');
 Route::get('sitemap', 'UserController@sitemap')->name('sitemap');

 Route::get('categoryinfo', 'CategoryController@categoryinfo')->name('categoryinfo');
 Route::get('subcategoryinfo/{id}', 'SubcategoryController@subcategoryinfo')->name('subcategoryinfo');
  Route::get('subcategoryinfoblade/{id}', 'SubcategoryController@subcategoryinfoblade')->name('subcategoryinfoblade');
  Route::get('subcategoryshow/{id}', 'SubcategoryController@subcategoryshow')->name('subcategoryshow');

         Route::get('single_order/{id}', [
            'uses' => 'AdminController@single_order',
            'as' => 'single_order',
            'middleware' => 'admins'
              ]);

                  Route::get('single_order2', [
            'uses' => 'AdminController@single_order2',
            'as' => 'single_order2',
            'middleware' => 'admins'
              ]);

    

Route::get('/', [
    'uses' => 'ProductController@index2',
    'as' => 'product.index2'
]); 


Route::get('index2', 'ProductController@index2')->name('index');
Route::get('quickview/{id}/{sucategory_id}', 'ProductController@quickview')->name('quickview');

Route::get('shop-details/{id}/{sucategory_id}', 'ProductController@details');
Route::get('compare/{id}/{sucategory_id}', 'ProductController@compare')->name('compare');
Route::get('productreview/{id}', 'ProductController@productreview')->name('productreview')->middleware('admins');

Route::get('welcome', 'HomeController@welcome');




Route::get('/add-to-cart', [
    'uses' => 'ProductController@getAddToCart',
    'as' => 'product.addToCart'
]);

Route::get('pagenotfound', 'HomeController@pagenotfound')->name('notfound');

Route::get('/newslettertext', [
    'uses' => 'BlogController@newslettertext',
    'as' => 'newsletter.newslettertext'
]);

Route::post('/add-to-cart/{id}', [
    'uses' => 'ProductController@getAddToCart',
    'as' => 'product.addToCart'
]);

Route::get('/add-to-wish/{id}', [
    'uses' => 'WishlistController@getAddToWish',
    'as' => 'product.addToWish'
]);



Route::get('add-to-wishlist', [
    'uses' => 'WishlistController@addToWishlist',
    'as' => 'product.addToWishlist'
]);

Route::get('/remove-wishlist/{id}', [
    'uses' => 'WishlistController@remove-wishlist',
    'as' => 'product.remove-wishlist'
]);


Route::get('/reduce', [
    'uses' => 'ProductController@getReduceByOne',
    'as' => 'product.reduceByOne'
]);

Route::get('/increase', [
    'uses' => 'ProductController@getIncreaseByOne',
    'as' => 'product.increaseByOne'
]);




Route::get('/remove', [
    'uses' => 'ProductController@getRemoveItem',
    'as' => 'product.remove'
]);


Route::get('/shopping-cart', [
    'uses' => 'ProductController@getCart',
    'as' => 'product.shoppingCart'
]);

Route::get('/shopping-wish', [
    'uses' => 'ProductController@getWish',
    'as' => 'product.shoppingWish'
]);

Route::get('/shopping-details/{id}', [
    'uses' => 'ProductController@details',
    'as' => 'product.details'
]);

Route::get('/checkout', [
    'uses' => 'ProductController@getCheckout',
    'as' => 'checkout',
    'middleware' => 'auth'
]);

Route::post('/checkout', [
    'uses' => 'ProductController@postCheckout',
    'as' => 'checkout',
    'middleware' => 'auth'
]);



Route::get('/bikash', [
    'uses' => 'ProductController@getbikash',
    'as' => 'bikash',
    'middleware' => 'auth'
]);

Route::post('/bikash', [
    'uses' => 'ProductController@postbikash',
    'as' => 'bikash',
    'middleware' => 'auth'
]);



Route::get('/cashondelivery', [
    'uses' => 'ProductController@getcashondelivery',
    'as' => 'cashondelivery',
    'middleware' => 'auth'
]);

Route::post('/cashondelivery', [
    'uses' => 'ProductController@postcashondelivery',
    'as' => 'cashondelivery',
    'middleware' => 'auth'
]);


 Route::get('/wishlist', 'WishlistController@wishlist')->middleware('auth');
 
 Route::get('/wishlist/{wishlist_id}', 'WishlistController@removeWishlist');

Route::group(['prefix' => 'user'], function () {
    Route::group(['middleware' => 'guest'], function () {
        Route::get('/signup', [
            'uses' => 'UserController@getSignup',
            'as' => 'user.signup'
        ]);


Route::post('/signup', [
            'uses' => 'UserController@postSignup',
            'as' => 'user.signup'
        ]);

        Route::get('/signin', [
            'uses' => 'UserController@getSignin',
            'as' => 'user.signin'
        ]);

        Route::post('/signin', [
            'uses' => 'UserController@postSignin',
            'as' => 'user.signin'
        ]);
    });

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/profile', [
            'uses' => 'UserController@getProfile',
            'as' => 'user.profile'
        ]);

        

        Route::get('/logout', [
            'uses' => 'UserController@getLogout',
            'as' => 'user.logout'
        ]);
    });
});


        Route::get('admin/signup', [
            'uses' => 'AdminController@getSignup',
            'as' => 'admin.signup'
        ])->middleware('admins');

        Route::post('admin/signup', [
            'uses' => 'AdminController@postSignup',
            'as' => 'admin.add',
             
        ]);

                Route::post('admin/add', [
            'uses' => 'AdminController@postadmin2',
            'as' => 'admin.add',
             
        ]);

                        Route::get('admin/add', [
            'uses' => 'AdminController@postadmin2',
            'as' => 'admin.add',
             
        ]);

        Route::get('admin/signin', [
            'uses' => 'AdminController@getSignin',
            'as' => 'admin.signin'
        ]);

        Route::post('admin/signin', [
            'uses' => 'AdminController@postSignin',
            'as' => 'admin.signin'
        ]);


      


        Route::get('check2', [
            'uses' => 'AdminController@getProfile',
            'as' => 'check2',
            'middleware' => 'admins'
              ]);

        Route::get('dashboardadmin', [
            'uses' => 'DashboardController@dashboardadmin',
            'as' => 'dashboardadmin',
            'middleware' => 'admins'
              ])->name('dashboardadmin');

        Route::get('admin/profile', [
            'uses' => 'AdminController@getProfile',
            'as' => 'admin.profile',
            'middleware' => 'admins'
              ]);

               Route::get('admin/logout', [
            'uses' => 'AdminController@getLogout',
            'as' => 'admin.logout',
              'middleware' => 'admins'

        ]);

    Route::get('comments/create', ['uses' => 'CommentsController@create', 'as' => 'comments.create']);
    Route::post('comments/{id}/{category_id}', ['uses' => 'CommentsController@store', 'as' => 'comments.store']);
    Route::get('comments/{id}/edit', ['uses' => 'CommentsController@edit', 'as' => 'comments.edit']);
    Route::get('edituser/{id}/{proid}/{catid}', ['uses' => 'CommentsController@edituser', 'as' => 'comments.edituser']);
    Route::put('comments/{id}', ['uses' => 'CommentsController@update', 'as' => 'comments.update']);
    Route::put('comments/{id}/{proid}/{catid}', ['uses' => 'CommentsController@updateuser', 'as' => 'comments.updateuser']);
    Route::delete('comments/{id}', ['uses' => 'CommentsController@destroy', 'as' => 'comments.destroy']);
    Route::get('destroyuser/{id}', ['uses' => 'CommentsController@destroyuser', 'as' => 'comments.destroyuser']);
    Route::get('comments/{id}/delete', ['uses' => 'CommentsController@delete', 'as' => 'comments.delete']);


Route::get('/EmailConfirm', function () { 
        return view('emails.email'); 
});

Route::get('register/verify/{token}', 'UserController@verify');

Route::get('password/reset', 'UserController@reset');
Route::post('password/email', 'UserController@resetlink');

Route::get('password/reset/{token}', 'UserController@resetmail');
Route::post('password/reset', 'UserController@resetpassword');

Route::get('registeruser', 'UserController@registeruser')->middleware('admins');
Route::get('dashboard-admin', 'AdminController@dashboard-admin');
Route::get('message', 'ContactController@message')->name('message')->middleware('admins');
Route::get('messageseen/{id}', 'ContactController@messageseen')->name('messageseen')->middleware('admins');
Route::get('listadmin', 'WishlistController@listadmin')->name('listadmin')->middleware('admins');
Route::get('removeadmin/{id}', 'AdminController@removeadmin')->name('removeadmin');
Route::get('orderconfirm/{id}', 'HomeController@orderconfirm')->name('orderconfirm');
Route::get('ordercancel/{id}', 'HomeController@ordercancel')->name('ordercancel');
Route::get('reconsider/{id}', 'HomeController@reconsider')->name('reconsider');
Route::get('aboutus', 'HomeController@aboutus')->name('aboutus');
Route::get('payment', 'ProductController@payment');


    View::composer(['*'], function ($view){

    $data=Category::pluck('category', 'id')->toArray();
    $category = Category::orderBy('category', 'asc')->get();
    $subcategory = Subcategory::orderBy('subcategory', 'asc')->get();
    $topmost = Product::orderBy('id', 'DESC')->where('review',5)->take(3)->get();
    $message = Contact::orderBy('id', 'DESC')->where('seen','')->count();
    $messagenotify = Contact::orderBy('id', 'DESC')->where('seen','')->get();
    $order = Order::orderBy('id', 'DESC')->where('seen',0)->count();
    $ordernofify = Order::orderBy('id', 'DESC')->where('seen',0)->get();
    $productrequest = Requestproduct::orderBy('id', 'DESC')->where('seen',0)->get();
    $productrequestnotify = Requestproduct::orderBy('id', 'DESC')->where('seen',0)->count();
    $newproduct111 = Product::orderBy('title', 'asc')->get();
    
    if(Auth::user())
{
     $wishlistnumber = Wishlist::orderBy('id', 'DESC')->where('user_id', Auth::user()->id)->count();
     Session::put('count', $wishlistnumber);
}

   
    if (Session::has('cart')) {
            
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $totalPrice =  $cart->totalPrice;
        $cartprolist = $cart->items;
    }
 

        if (!empty($totalPrice)) {
             $view->with('category', $category)->with('subcategory', $subcategory)->with('totalPrice', $totalPrice)->with('cartprolist', $cartprolist)->with('data', $data)->with('topmost', $topmost)->with('message111', $message)->with('messagenotify', $messagenotify)->with('order', $order)->with('ordernofify', $ordernofify)->with('productrequest', $productrequest)->with('productrequestnotify', $productrequestnotify)->with('newproduct111', $newproduct111);
        } else {
             $view->with('category', $category)->with('subcategory', $subcategory)->with('data', $data)->with('topmost', $topmost)->with('message111', $message)->with('messagenotify', $messagenotify)->with('order', $order)->with('ordernofify', $ordernofify)->with('productrequest', $productrequest)->with('productrequestnotify', $productrequestnotify)->with('newproduct111', $newproduct111);
        }


});