<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">

<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Warehouse</title>



<link rel="shortcut icon" type="front/image/x-icon" href="favicon.ico">

<!-- Google Fonts -->
<link href="{{asset('https://fonts.googleapis.com/css?family=PT+Sans:400,700italic,700,400italic')}}" rel='stylesheet' type='text/css'>

<link href="{{asset('https://fonts.googleapis.com/css?family=Arimo:400,400italic,700,700italic')}}" rel='stylesheet' type='text/css'>

<link href="{{asset('https://fonts.googleapis.com/css?family=Dosis:400,300,200,500,600,700,800')}}" rel='stylesheet' type='text/css'>

<!-- CSS Style -->

<!-- Bootstrap CSS -->
{!! Html::style('front/css/bootstrap.min.css')!!}
{!! Html::style('front/css/font-awesome.css')!!}
{!! Html::style('front/css/simple-line-icons.css')!!}
{!! Html::style('front/css/owl.carousel.css')!!}
{!! Html::style('front/css/owl.theme.css')!!}
{!! Html::style('front/css/owl.transitions.css')!!}
{!! Html::style('front/css/animate.css')!!}
{!! Html::style('front/css/flexslider.css')!!}
{!! Html::style('front/css/jquery-ui.css')!!}
{!! Html::style('front/css/revolution-slider.css')!!}
{!! Html::style('front/css/style.css')!!}
{!! Html::style('front/css/quick_view_popup.css')!!}

</head>

<body class="cms-index-index cms-home-page">

  @if(Session::has('contact'))     
        <div  class="alert alert-success"><h3><i> {{ Session::get('contact') }}</i></h3></div>
  @endif
  @if(Session::has('newsletter'))     
        <div  class="alert alert-success"><h3><i> {{ Session::get('newsletter') }}</i></h3></div>
  @endif

  @if(Session::has('comments'))     
        <div  class="alert alert-success"><p><i> {{ Session::get('comments') }}</i></p></div>
  @endif

  @if(Session::has('review'))     
        <div  class="alert alert-success"><h3><i> {{ Session::get('review') }}</i></h3></div>
  @endif

  @if(Session::has('verified'))     
        <div  class="alert alert-success"><h3><i> {{ Session::get('verified') }}</i></h3></div>
  @endif

    @if(Session::has('success'))     
        <div  class="alert alert-success" style="background-color: #ecebe3;"><center><h5><i> {{ Session::get('success') }}</i></h5></center></div>
  @endif
                                @if ($errors->has('emails'))
                                 <div  class="alert alert-warnign"><h3><i> {{ $errors->first('emails') }}</i></h3></div>   
                                @endif
<div id="mobile-menu">
  <ul>
    <li><a href="{{url('/')}}" class="home1">Home</a>
      <ul>
        <li><a href="index.html"><span>Home Version 1</span></a></li>
        <li><a href="Version2/index.html"><span>Home Version 2</span></a></li>
        <li><a href="Version3/index.html"><span>Home Version 3</span></a></li>
        <li><a href="Version4/index.html"><span>Home Version 4</span></a></li>
        <li><a href="Version5/index.html"><span>Home Version 5</span></a></li>
        <li><a href="rtl-version/index.html"><span>RTL Version</span></a></li>
        <li><a href="rtl-version1/index.html"><span>Home Version 1 RTL</span></a></li>
        </ul>
    </li>
    <li><a href="shop_grid.html">Pages</a>
      <ul>
        <li><a href="#" class="">Shop Pages </a>
          <ul>
            <li> <a href="shop_grid.html"> Shop grid </a> </li>
            <li> <a href="shop_grid_right_sidebar.html"> Shop grid right sidebar</a> </li>
            <li> <a href="shop_list.html"> Shop list </a> </li>
            <li> <a href="shop_list_right_sidebar.html"> Shop list right sidebar</a> </li>
            <li> <a href="shop_grid_full_width.html"> Shop Full width </a> </li>
          </ul>
        </li>
        <li><a href="#">Ecommerce Pages </a>
          <ul>
            <li> <a href="{{ url('wishlist') }}"> Wishlists </a> </li>
            <li> <a href="checkout.html"> Checkout </a> </li>
            <li> <a href="compare.html"> Compare </a> </li>
            <li> <a href="shopping_cart.html"> Shopping cart </a> </li>
            <li> <a href="quick_view.html"> Quick View </a> </li>
          </ul>
        </li>
        <li> <a href="#">Static Pages </a>
          <ul>
            <li> <a href="account_page.html"> Create Account Page </a> </li>
            <li> <a href="{{url('aboutus')}}"> About Us </a> </li>
            <li> <a href="contact_us.html"> Contact us </a> </li>
            <li> <a href="404error.html"> Error 404 </a> </li>
            <li> <a href="{{ url('faq') }}"> FAQ </a> </li>
          </ul>
        </li>
        <li> <a href="#">Product Categories </a>
          <ul>
            <li> <a href="cat-3-col.html"> 3 Column Sidebar </a> </li>
            <li> <a href="cat-4-col.html"> 4 Column Sidebar</a> </li>
            <li> <a href="cat-4-col-full.html"> 4 Column Full width </a> </li>
            <li> <a href="cat-6-col.html"> 6 Columns Full width</a> </li>
          </ul>
        </li>
        <li> <a href="#">Single Product Pages </a>
          <ul>
            <li><a href="single_product.html"> single product </a> </li>
            <li> <a href="single_product_left_sidebar.html"> single product left sidebar</a> </li>
            <li> <a href="single_product_right_sidebar.html"> single product right sidebar</a> </li>
            <li> <a href="single_product_magnify_zoom.html"> single product magnify zoom</a> </li>
          </ul>
        </li>
        
      </ul>
    </li>
    <li><a href="contact_us.html">Contact us</a></li>
    <li><a href="{{url('aboutus')}}">About us</a></li>
    <li><a href="{{url('blog')}}">Blog</a>
    
    </li>
    
  </ul>
</div>
<!-- end mobile menu -->
<div id="page"> 
 

  <!-- Header -->
  <header>
    <div class="header-container">
      <div class="header-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-sm-4 hidden-xs"> 
              <!-- Default Welcome Message -->
              <div class="welcome-msg ">Call Us: +017.456.789</div>
              <a href="{{url('requestproduct/create')}}"><span class="phone hidden-sm">Send us Product Request!</span></a> </div>
            
            <!-- top links -->
            <div class="headerlinkmenu col-lg-8 col-md-7 col-sm-8 col-xs-12">
              <div class="links">
        @if(Auth::check())
               

               <!--  <div class="list"><a title="My Wishlist" href="{{ url('wishlist') }}"><i class="fa fa-heart"></i><span class="hidden-xs">Wishlist</span><span id="checkout_items" class="checkout_items">@if (Auth::check()) 
                                  
                                         @if(Session::has('count')) 
                                          {{ Session::get('count') }}
                                         @else
                                         {{ Session::get('wishlistnumber') }}
                                         @endif

                       @else
                           0
                      @endif</span></a></div> -->
                 <div class="myaccount"><a title="My Account" href="{{ route('user.profile') }}"><i class="fa fa-user"></i><span class="hidden-xs">My Account</span></a></div>
                <div class="myaccount"><a title="Logout" href="{{ route('user.logout') }}"><i class="fa fa-user"></i><span class="hidden-xs">Log Out</span></a></div>
        @else
                <div class="login"><a href="{{ route('user.signin') }} "><i class="fa fa-unlock-alt"></i><span class="hidden-xs">Sign in</span></a></div>
                <div class="blog"><a title="Blog" href="{{ route('user.signup') }}"><i class="fa fa-rss"></i><span class="hidden-xs">Sign Up</span></a></div>
              </div>
        @endif

              
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-3 col-md-3 col-xs-12"> 
            <!-- Header Logo -->
            <div class="logo"><a title="warehouse" href="{{url('/')}}"><img alt="responsive theme logo" src="{{asset('front/images/logo.png')}}"></a> </div>

            <!-- End Header Logo --> 
          </div>
          <div class="col-xs-9 col-sm-6 col-md-6"> 
            <!-- Search -->
            
            <div class="top-search" style="position: relative;">
              <div id="search">
                {!! Form::open(['route' => 'productsearch','files' => true, 'id'=>'abcd']) !!}
                  <div class="input-group">
                   
              
                    {!! Form::select('category_id' , array('' => 'All Categories') + $data,null, ['class' => 'cate-dropdown hidden-xs'] ) !!}

                    {{ Form::text('title', null, array('class' => 'cate-dropdown hidden-xs nuhel', 'maxlength' => '255', 'id'=>'match' ,'autocomplete'=>'off')) }}


                    <button class="btn-search" type="submit"><i class="fa fa-search"></i></button>
                  </div>
                {!! Form::close() !!}
              </div>
              <div class="autosearch" id="auto" style="width:66%; height: auto;background: white; color:black;  display: none; position: absolute; top: 55px;right: 57px; z-index: 999">

            
   
                
              </div>
            </div>
            
            <!-- End Search --> 
          </div>
          <!-- top cart -->
          
          <!-- <div class="col-lg-3 col-xs-3 top-cart">
            <div class="top-cart-contain">
              <div class="mini-cart">
                <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"> <a href="#">
                  <div class="cart-icon"><i class="fa fa-shopping-cart"></i></div>
                  <div class="shoppingcart-inner hidden-xs"><span class="cart-title">Shopping Cart</span> <span id="checkout_items_cart" class="checkout_items">{{ Session::has('cart') ? Session::get('cart')->totalQty : '0' }} Item(s): <?php if(!empty($totalPrice)){ echo "$".$totalPrice;} ?></span></div>
                  </a></div>
                <div>
                  
                  <div class="top-cart-content">
                    <div class="block-subtitle hidden-xs"> </div>
                    <ul id="cart-sidebar" class="mini-products-list">
          @if(Session::has('cart'))
                 @foreach($cartprolist as $cartprolist)  
                      <li class="item odd"> <a href="shopping_cart.html" title="Ipsums Dolors Untra" class="product-image"><img src="{{ asset('/items/' . $cartprolist['item']['imagePath']) }}" alt="product" width="65"></a>
                        <div class="product-details"> <a href="#" title="Remove This Item" class="remove-cart"><i class="icon-close"></i></a>
                          <p class="product-name"><a href="shopping_cart.html">{{ $cartprolist['item']['title'] }}</a> </p>
                          <strong>{{ $cartprolist['qty'] }}</strong> x <span class="price">${{ $cartprolist['item']['price']  }} = ${{ $cartprolist['price'] }}</span> </div>
                      </li>

                @endforeach                      
              @endif
                      
                    </ul>
                    
                    <div class="top-subtotal">Total: <span class="price"><?php if(!empty($totalPrice)){ echo "$".$totalPrice;} ?></span></div>              
                    
                    <div class="actions">
                      <button class="btn-checkout" type="button" onclick="location.href = '{{ url('payment') }}';"><i class="fa fa-check"></i><span>Checkout</span></button>
                      <button class="view-cart" type="button" onclick="location.href = '{{ route('product.shoppingCart') }}';"><i class="fa fa-shopping-cart"></i> <span>View Cart</span></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </header>
  <!-- end header --> 
  
  <!-- Navbar -->
  <nav>
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-4">
          <div class="mm-toggle-wrap">
            <div class="mm-toggle"> <i class="fa fa-align-justify"></i> </div>
            <span class="mm-label">Categories</span> </div>
          <div class="mega-container visible-lg visible-md visible-sm">
            <div class="navleft-container">
              <div class="mega-menu-title">
                <h3>Categories</h3>
              </div>
              <div class="mega-menu-category">
                <ul class="nav">


              @foreach ($category as $category)
                  <li> <a href="{{route('categoryproduct', $category->id)}}"><i class="icon fa fa-camera fa-fw"></i> {{$category->category}} <?php $catid=$category->id; ?></a>
                    <div class="wrap-popup">
                      <div class="popup">
                        <div class="row">
                          
                          <div class="col-md-4 col-sm-6">

                            <ul class="nav">
                              @foreach ($subcategory as $aaa)
                              
                              <?php $subcatid = $aaa->category_id; 
                             if ($catid == $subcatid) { ?>
                             <a href="{{route('subproduct', $aaa->id)}}"><span>
                              <?php  echo $aaa->subcategory;
                              } ?>
                                </span></a>
                                @endforeach
                            </ul>
                             
                          </div>
                         
                      <!-- <div class="col-md-4 has-sep hidden-sm">
                            <div class="custom-menu-right">
                              <div class="box-banner menu-banner">
                                <div class="add-right"><a href="#"><img src="{{asset('front/images/menu-img4.jpg')}}" alt="product"></a></div>
                              </div>
                            </div>
                          </div> -->
                        </div>
                      </div>
                    </div>
                  </li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-9 col-sm-8">
          <div class="mtmegamenu">
            <ul>
              <li class="mt-root demo_custom_link_cms">
                <div class="mt-root-item"><a href="{{url('shop')}}">
                  <div class="title title_font"><span class="title-text">Shop</span></div>
                  </a></div>
              </li>
              <li class="mt-root">
                <div class="mt-root-item"><a href="{{route('popular')}}">
                  <div class="title title_font"><span class="title-text">Popular</span></div>
                  </a></div>
                
              </li>
                <li class="mt-root">
                    <div class="mt-root-item bestselleritem"><a href="{{url('topproduct')}}">
                      <div class="title title_font"><span class="title-text">Best Seller</span></div></a>
                    </div>

                    <ul class="bestselleritemsmenu menu-items col-xs-12">
                       @foreach($topmost as $topmost)
                      <li class="menu-item depth-1 product menucol-1-3 withimage">
                        <div class="product-item">
                          <div class="item-inner">
                            <div class="product-thumbnail">
                              <div class="icon-sale-label sale-left">Sale</div>
                              <div class="pr-img-area"> <a title="" href="{{url('shop-details/'.$topmost->id.'/'.$topmost->subcategory_id)}}">
                                <figure> <img class="first-img" src="{{asset('/items/' . $topmost->imagePath)}}" alt="product"> <img class="hover-img" src="{{asset('/items/' . $topmost->imagePath)}}" alt="product"></figure>
                                </a>
                                <!--  <a type="button" href="{{ route('product.addToCart', ['id' => $topmost->id]) }}" class="add-to-cart-mt" id="aaaa" data-id="{{ $topmost->id }}">add to cart</a> -->
                              </div>
                              <div class="pr-info-area">
                                <div class="pr-button"> 
                                 <!--  <div class="mt-button add_to_wishlist">@if(Auth::check()) <a  href="{{ route('product.addToWishlist',['id' => $topmost->id]) }}" class="addToWish2" data-id="{{ $topmost->id }}"> <i class="fa fa-heart"></i> </a>@else
                                    <a  href="{{ route('user.signin') }}" title="Please Sign in First!"> <i class="fa fa-heart"></i> </a>@endif </div>
 -->
                                  <div class="mt-button add_to_compare"> <a href="{{url('compare/'.$topmost->id.'/'.$topmost->subcategory_id)}}"> <i class="fa fa-signal"></i> </a> </div>
                              <div class="mt-button quick-view"> <a href="{{url('quickview/'.$topmost->id.'/'.$topmost->subcategory_id)}}"> <i class="fa fa-search"></i> </a> </div>
                                </div>
                              </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="{{ $topmost->title }}" href="{{url('shop-details/'.$topmost->id.'/'.$topmost->subcategory_id)}}">{{ $topmost->title }}</a> </div>
                                <div class="item-content">
                                  <div class="rating">
                                   <?php $pr=$topmost->review;
                                      if ($pr==0) {
                                         echo "not rated yet";
                                       }else{
                                        for($i=0; $i<5; $i++){ 
                                        if ($i<$pr) {?> 
                                         <i class="fa fa-star"></i>
                                        <?php  }
                                        else{ ?>
                                          <i class="fa fa-star-o"></i>
                                        <?php  }
                                         }
                                       } ?> 
                                 </div>
                                  <div class="item-price">
                                    <div class="price-box"> <span class="regular-price"> <span class="price">${{ $topmost->price }}</span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                       @endforeach
                    </ul><!-- best seller end-->
              </li>
              
              <li class="mt-root">
                <div class="mt-root-item"><a href="{{url('contact/create')}}">
                  <div class="title title_font"><span class="title-text">Contact Us</span> </div>
                  </a></div>
              </li>
              <li class="mt-root">
                <div class="mt-root-item"><a href="{{url('aboutus')}}">
                  <div class="title title_font"><span class="title-text">about us</span></div>
                  </a></div>
              </li>
              <li class="mt-root demo_custom_link_cms">
                <div class="mt-root-item"><a href="{{url('blog')}}">
                  <div class="title title_font"><span class="title-text">Blog</span></div>
                  </a></div>
              </li>
             <!--  new design -->
           

              <li class="mt-root">
                <div class="mt-root-item">

                <div class="title title_font"><a style="color:#15142d;" title="My Wishlist" href="{{ url('wishlist') }}"><i class="fa fa-heart" style="font-size: 23px;"></i><span class="hidden-xs"></span><span style="font-size: 10px;" id="checkout_items" class="checkout_items">@if (Auth::check()) 
                                  
                                         @if(Session::has('count')) 
                                          {{ Session::get('count') }}
                                         @else
                                         {{ Session::get('wishlistnumber') }}
                                         @endif

                       @else
                           0
                      @endif</span></a></div></div>
              </li>
              <li class="mt-root">
                                   
                   <div class="top-cart-contain top-cart-containtwo">
                      <div class="mini-cart">
                        <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"> <a href="#">
                          <div class="cart-icon" ><i class="fa fa-shopping-cart"></i></div>
                  <div class="shoppingcart-inner hidden-xs"><span style="margin-bottom: -25px; padding-bottom: 4px;" class="cart-title">Shopping Cart</span> <span style="padding-top: 5px;" id="checkout_items_cart" class="checkout_items">{{ Session::has('cart') ? Session::get('cart')->totalQty : '0' }} Item(s): <?php if(!empty($totalPrice)){ echo "$".$totalPrice;} ?></span></div>
                  </a></div>

                        <div>
                          <div class="top-cart-content top-cart-contenttwo">
                           
                            
                            <div class="top-subtotal"><span class="price"></span></div>
                            <div class="actions">
                              <button class="btn-checkout" type="button" onclick="location.href = '{{ url('payment') }}';"><i class="fa fa-check"></i><span>Checkout</span></button>
                      <button class="view-cart" type="button" onclick="location.href = '{{ route('product.shoppingCart') }}';"><i class="fa fa-shopping-cart"></i> <span>View Cart</span></button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>              
                
              </li><!--end -->
             <!--  new design -->
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <!-- end nav --> 


  @yield('content')

  <footer>
    <div class="footer-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-7">
            {!! Form::open(['route' => 'newsletter.store','files' => true]) !!}
              <h3 class="hidden-sm">Sign up for newsletter</h3>
              <div class="newsletter-inner">
                
{{ Form::email('emails', null, array('class' => 'newsletter-email', 'required' => '', 'placeholder' => 'Your Email')) }}

                {{ Form::submit('Subscribe', array('class' => 'button subscribe')) }}
              </div>
            {!! Form::close() !!}
          </div>

          <div class="social col-md-4 col-sm-5">
            <ul class="inline-mode">
              <li class="social-network fb"><a title="Connect us on Facebook" target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
              <li class="social-network googleplus"><a title="Connect us on Google+" target="_blank" href="#"><i class="fa fa-google-plus"></i></a></li>
              <li class="social-network tw"><a title="Connect us on Twitter" target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
              <li class="social-network linkedin"><a title="Connect us on Linkedin" target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
              <li class="social-network rss"><a title="Connect us on RSS" target="_blank" href="#"><i class="fa fa-rss"></i></a></li>
              <li class="social-network instagram"><a title="Connect us on Instagram" target="_blank" href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-4 col-xs-12 col-lg-3">
          <div class="footer-logo"><a href="index.html"><img src="{{asset('front/images/logo.png')}}" alt="fotter logo"></a> </div>
          <p>Find your product and get it ASAP from warehouse!.</p>
          <div class="footer-content">
            <div class="email"> <i class="fa fa-envelope"></i>
              <p><a href="mailto:warehouse@shop.com">warehouse@shop.com</a></p>
            </div>
            <div class="phone"> <i class="fa fa-phone"></i>
              <p>(800) 0123 456 789</p>
            </div>
            <div class="address"> <i class="fa fa-map-marker"></i>
              <p> warehouse, 12/34 - West 21st Street, Sylhet, Bangladesh</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-xs-12 col-lg-3 collapsed-block">
          <div class="footer-links">
            <h3 class="links-title">Information<a class="expander visible-xs" href="#TabBlock-1">+</a></h3>
            <div class="tabBlock" id="TabBlock-1">
              <ul class="list-links list-unstyled">
                
                <li><a href="{{ url('sitemap') }}">Sitemap</a></li>
                <li><a href="{{ url('aboutus') }}">Privacy Policy</a></li>
                <li><a href="{{ url('faq') }}">FAQs</a></li>
                <li><a href="{{url('aboutus')}}">Terms &amp; Condition</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-xs-12 col-lg-3 collapsed-block">
          <div class="footer-links">
            <h3 class="links-title">Insider<a class="expander visible-xs" href="#TabBlock-3">+</a></h3>
            <div class="tabBlock" id="TabBlock-3">
              <ul class="list-links list-unstyled">
                <li> <a href="{{ url('sitemap') }}"> Sites Map </a> </li>
                <li> <a href="{{url('blog')}}">News</a> </li>
                <li> <a href="{{url('shop')}}">Trends</a> </li>
                <li> <a href="{{url('aboutus')}}">About Us</a> </li>
                <li> <a href="{{url('contact/create')}}">Contact Us</a> </li>
                <li> <a href="{{ route('user.profile') }}">My Orders</a> </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-2 col-xs-12 col-lg-3 collapsed-block">
          <div class="footer-links">
            <h3 class="links-title">Service<a class="expander visible-xs" href="#TabBlock-4">+</a></h3>
            <div class="tabBlock" id="TabBlock-4">
              <ul class="list-links list-unstyled">
                <li> <a href="{{ route('user.profile') }}">Account</a> </li>
                <li> <a href="{{ url('wishlist') }}">Wishlist</a> </li>
                <li> <a href="{{url('shopping-cart')}}">Shopping Cart</a> </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-coppyright">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-xs-12 coppyright"> Copyright © 2018 <a href="#"> Warehouse </a>. All Rights Reserved. </div>
          <div class="col-sm-6 col-xs-12">
            <div class="payment">
              <ul>

                <li><a href="#"><img title="Visa" alt="Visa" src="{{asset('front/images/visa.png')}}"></a></li>
                <li><a href="#"><img title="Paypal" alt="Paypal" src="{{asset('front/images/paypal.png')}}"></a></li>
                <li><a href="#"><img title="Discover" alt="Discover" src="{{asset('front/images/discover.png')}}"></a></li>
                <li><a href="#"><img title="Master Card" alt="Master Card" src="{{asset('front/images/master-card.png')}}"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a href="#" class="totop"> </a> 
  <!-- End Footer --> 

  </div>

  <!--  -->
  @foreach($newproduct111 as $newproduct)

    <input type="hidden" name="" class="productval" value="{{$newproduct->title}}">

  @endforeach

<!-- JS --> 

{!! Html::script('front/js/jquery.min.js'); !!}
{!! Html::script('front/js/bootstrap.min.js'); !!}
{!! Html::script('front/js/owl.carousel.min.js'); !!}
{!! Html::script('front/js/jquery.bxslider.js'); !!}
{!! Html::script('front/js/revolution-slider.js'); !!}
{!! Html::script('front/js/jquery.flexslider.js'); !!}
{!! Html::script('front/js/megamenu.js'); !!}
{!! Html::script('js/custom.js'); !!}
<script type="text/javascript">
  /* <![CDATA[ */   
  var mega_menu = '0';
  
  /* ]]> */
  </script> 

<!-- jquery.mobile-menu js --> 
{!! Html::script('front/js/mobile-menu.js'); !!}
<!--jquery-ui.min js --> 
{!! Html::script('front/js/jquery-ui.js'); !!}
<!-- main js --> 
{!! Html::script('front/js/main.js'); !!}
<!-- countdown js --> 
{!! Html::script('front/js/countdown.js'); !!}
{!! Html::script('front/js/cloud-zoom.js'); !!}
<!-- Revolution Slider --> 
<script type="text/javascript">
          jQuery(document).ready(function() {
                 jQuery('.tp-banner').revolution(
                  {
                      delay:9000,
                      startwidth:1170,
                      startheight:530,
                      hideThumbs:10,

                      navigationType:"bullet",              
                      navigationStyle:"preview1",

                      hideArrowsOnMobile:"on",
                      
                      touchenabled:"on",
                      onHoverStop:"on",
                      spinner:"spinner4"
                  });
          });
</script> 

<!-- Hot Deals Timer 1--> 
<script type="text/javascript">
      var dthen1 = new Date("12/25/16 11:59:00 PM");
      start = "08/04/15 03:02:11 AM";
      start_date = Date.parse(start);
      var dnow1 = new Date(start_date);
      if(CountStepper>0)
          ddiff= new Date((dnow1)-(dthen1));
      else
          ddiff = new Date((dthen1)-(dnow1));
      gsecs1 = Math.floor(ddiff.valueOf()/1000);
      
      var iid1 = "countbox_1";
      CountBack_slider(gsecs1,"countbox_1", 1);
  </script>

<script type="text/javascript">
    if (window.location.hash && window.location.hash == '#_=_') {
        window.location.hash = '';
    }
</script>


 <script>
        
        
          $(window).scroll(function() {    
            var scroll = $(window).scrollTop();

             //>=, not <=
            if (scroll >= 20) {
                //clearHeader, not clearheader - caps H
                $("nav").addClass("borderbottom");
                $(".bestselleritem").addClass("deletebetseller"); 
            }else{
                 $("nav").removeClass("borderbottom");
            }

            
        });
        
        
        // add to cart
        var addedcartlist = document.getElementById('addedcart');

        addedcartlist.addEventListener('click', function() {
            var self = this;
            self.textContent = 'Added to Cart';

            setTimeout(function() {
                self.textContent = 'Add to Cart';
            }, 500);
        });
        
        
    </script>


<script>

var someNumbers = [];
  $(".productval").each(function () {
  someNumbers.push($(this).val());
});


  
   // console.log($(document.activeElement));

   $(document).on("click", function (event) {
   
        if(!($(event.target).hasClass('autosearchval') || $(event.target).hasClass('nuhel'))){
          $("#auto").hide();
        }

    });

    //


$("#match").focus(function () {
  $("#auto").show();
});






$("#match").keyup(function () {
  $("#auto").empty();
  
  var eles = [];
  var key = $('#match').val();

  key = key.toLowerCase();

   key = key.charAt(0).toUpperCase() + key.slice(1);
    
  /*key = key.toLowerCase();
  var traingIds = $.makeArray(key);
  console.log(traingIds);
  traingIds[0] =  traingIds[0].toUpperCase();

  
  console.log(traingIds);*/

  if (key.length == 0) {
    $("#auto").hide();
    return;
  }

  $("#auto").show();

  for (var i = 0; i < someNumbers.length; i++) {

    if (someNumbers[i].match("^" + key)) {
      // do this if begins with Hello
      eles.push(someNumbers[i]);
    }

  }


  $.each(eles, function (index, el) {
    $("#auto").append('<p class="autosearchval">' + el + '</p>');
  });

  $('.autosearchval').click(function (event) {
    $('#match').val($(this).text());
    $("#auto").hide();
    $("#abcd").submit() ;
  });
});




</script>

<style type="text/css">
  .autosearchval{
    cursor: pointer;
    margin: 0;
  }
</style>

{{-- Ajax --}}
    <!-- index::Add cart -->    
   
  <!--   <script>
        $(document).ready(function() { 
            $('.add-to-cart-mt').on('click', function(e) {     
                e.preventDefault();

                var product_id=$(this).attr("data-id");
               
                var item = $('#checkout_items_cart').html();

                $.ajax({
                    url : "add-to-cart",
                    type: "GET",
                    data: {'id':product_id},
                    dataType: "JSON",
                    success: function (data) {
                        parseitem=parseInt(item);
                        if (item == "") {
                            addcart = 1;
                        }
                        else{
                           addcart = parseitem + 1; 
                        }
                        $("#checkout_items_cart").html(addcart);
                    },
                    error: function (textStatus, errorThrown) {
                        alert("Somethimg Error")
                    }
                });                 
            }); 
         
   
            $('.addToWish2').on('click', function(ea) {     
                ea.preventDefault();

                var product_id=$(this).attr("data-id");
                var item = $('#checkout_items').html();

                $.ajax({
                    url : "add-to-wishlist",
                    type: "GET",
                    data: {'id':product_id},
                    dataType: "JSON",
                    success: function (data) {
                        parseitem =parseInt(item);
                        if (item == "") {
                            addwish = 1;
                        }
                        else{
                           addwish = parseitem + 1; 
                        }
                        $("#checkout_items").html(addwish);
                    },
                    error: function (textStatus, errorThrown) {
                        alert("Already Added")
                    }
                });                 
            }); 
            });
        
    </script> -->
</body>
</html>
