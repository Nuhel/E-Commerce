@extends('layouts.design')

@section('title')
    new design
@endsection

@section('content')


  
  <!-- Home Slider Start -->
  <div class="slider">
    <div class="tp-banner-container clearfix">
      <div class="tp-banner" >
        <ul>
          <!-- SLIDE 1 -->
          <li data-transition="slidehorizontal" data-slotamount="5" data-masterspeed="700" > 
            <!-- MAIN IMAGE --> 
            <img src="{{asset('front/images/slider/slider-img1.jpg')}}" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat"> 
            <!-- LAYERS --> 
            <!-- LAYER NR. 1 -->
            <div class="tp-caption very_big_white skewfromrightshort fadeout"
                          data-x="center"
                          data-y="100"
                          data-speed="500"
                          data-start="1200"
                          data-easing="Circ.easeInOut"
                          style=" font-size:70px; font-weight:800; color:#fe0100;">Huge <span style=" color:#000;">sale</span> </div>
            
            <!-- LAYER NR. 2 -->
            <div class="tp-caption tp-caption medium_text skewfromrightshort fadeout"
                          data-x="center"
                          data-y="165"
                          data-hoffset="0"
                          data-voffset="-73"
                          data-speed="500"
                          data-start="1200"
                          data-easing="Power4.easeOut"
                          style=" font-size:20px; font-weight:500; color:#337ab7;"> Sale off 50% all products </div>
            
            <!-- LAYER NR. 3 -->
            <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0"
                          data-x="center"
                          data-y="210"
                          data-hoffset="0"
                          data-voffset="98" 
                          data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                          data-speed="500"
                          data-start="1500"
                          data-easing="Power3.easeInOut"
                          data-splitin="none"
                          data-splitout="none"
                          data-elementdelay="0.1"
                          data-endelementdelay="0.1"
                          data-linktoslide="next"
                          style="border: 2px solid #fed700;border-radius: 50px; font-size:14px; background-color:#fed700; color:#333; z-index: 12; max-width: auto; max-height: auto; white-space: nowrap; letter-spacing:1px;"><a href="{{route('saveupto')}}" class='largebtn slide1'>All Products</a> </div>
          </li>
          
          <!-- SLIDE 2 -->
          <li data-transition="slidehorizontal" data-slotamount="5" data-masterspeed="700" > 
            <!-- MAIN IMAGE --> 


            <img src="{{asset('front/images/slider/slider-img2.jpg')}}" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat"> 
            <!-- LAYERS --> 
            <!-- LAYER NR. 1 -->
            <div class="tp-caption white_heavy_60 customin ltl tp-resizeme"
                          data-x="310"
                          data-y="140" 
                          data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                          data-speed="1200"
                          data-start="700"
                          data-easing="Power4.easeOut"
                          data-splitin="chars"
                          data-splitout="none"
                          data-elementdelay="0.1"
                          data-endelementdelay="0.1"
                          data-endspeed="1000"
                          data-endeasing="Power4.easeIn"
                          style=" font-size:70px; font-weight:800; color:#333;">GREAT LOOKS </div>
            
            <!-- LAYER NR. 2 -->
            <div class="tp-caption black_thin_blackbg_30 customin ltl tp-resizeme"
                          data-x="310"
                          data-y="220" 
                          data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                          data-speed="1500"
                          data-start="1000"
                          data-easing="Power4.easeInOut"
                          data-splitin="none"
                          data-splitout="none"
                          data-elementdelay="0.01"
                          data-endelementdelay="0.1"
                          data-endspeed="1000"
                          data-endeasing="Power4.easeIn"
                          style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap; color:#34bcec; font-size:20px; font-weight:500;">The perfect synthesis of innovative thinking </div>
            
            <!-- LAYER NR. 4 -->
            <div class="tp-caption lfb ltb start tp-resizeme"
                          data-x="310"
                          data-y="270"
                          data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                          data-speed="1500"
                          data-start="1600"
                          data-easing="Power3.easeInOut"
                          data-splitin="none"
                          data-splitout="none"
                          data-elementdelay="0.01"
                          data-endelementdelay="0.1"
                          data-linktoslide="next"
                          style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;"><a href="{{url('shop')}}" class='largebtn solid'>Shop Now!</a> </div>
          </li>
          
          <!-- SLIDE 3 -->
          <li data-transition="slidehorizontal" data-slotamount="5" data-masterspeed="700" > 
            <!-- MAIN IMAGE --> 
            <img src="{{asset('front/images/slider/slider-img3.jpg')}}" alt="slidebg3" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat"> 
            <!-- LAYERS --> 
            <!-- LAYER NR. 1 -->
            <div class="tp-caption big_100_white lft start fadeout"
                          data-x="310"
                          data-y="120"
                          data-speed="500"
                          data-start="1200"
                          data-easing="Circ.easeInOut"
                          style=" font-size:70px; font-weight:800; color:#fff;">High</div>
            <div class="tp-caption big_100_white lft fadeout"
                          data-x="310"
                          data-y="180"
                          data-speed="500"
                          data-start="1200"
                          data-easing="Circ.easeInOut"
                          style=" font-size:50px; font-weight:800; color:#fed700;">Quality</div>
            
            <!-- LAYER NR. 2 -->
            <div class="tp-caption tp-caption medium_text lfb fadeout"
                          data-x="310"
                          data-y="260"
                          data-speed="500"
                          data-start="1200"
                          data-easing="Power4.easeOut"
                          style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap; color:#34bcec; font-size:20px; font-weight:500;">Best Product For You</div>
            
            <!-- LAYER NR. 3 -->
            <div class="tp-caption fade fadeout tp-resizeme"
                          data-x="310"
                          data-y="320"
                          data-hoffset="-100"
                          data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                          data-speed="1500"
                          data-start="800"
                          data-easing="Power3.easeInOut"
                          data-splitin="none"
                          data-splitout="none"
                          data-elementdelay="0.01"
                          data-endelementdelay="0.1"
                          data-linktoslide="next"
                          style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;"><a href="{{url('topproduct')}}" class='largebtn solid'>Get Now!</a> </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  
  <!-- main container -->
  <div class="main-container col1-layout">
    <div class="container">
      <div class="row"> 
      
        <!-- Home Tabs  -->
        <div class="col-sm-8 col-md-9 col-xs-12">
          <div class="home-tab">
            <ul class="nav home-nav-tabs home-product-tabs">
              <li class="active"><a href="#featured" data-toggle="tab" aria-expanded="false">Featured products</a></li>
              <li class="divider"></li>
              <!-- <li> <a href="#top-sellers" data-toggle="tab" aria-expanded="false">Top Sellers</a> </li> -->
            </ul>
            <div id="productTabContent" class="tab-content">
              <div class="tab-pane active in" id="featured">
                <div class="featured-pro">
                  <div class="slider-items-products">
                    <div id="featured-slider" class="product-flexslider hidden-buttons">
                      <div class="slider-items slider-width-col4">
     
            @foreach($productsdb as $productsdb)
                        <div class="product-item">
                          <div class="item-inner">
                            <div class="product-thumbnail">
                              <div class="icon-sale-label sale-left">Sale</div>
                              <div class="icon-new-label new-right">New</div>
                              <div class="pr-img-area"> <a title="{{ $productsdb->title }}" href="{{url('shop-details/'.$productsdb->id.'/'.$productsdb->subcategory_id)}}">
                                <figure> <img class="first-img" src="{{asset('/items/' . $productsdb->imagePath)}}" alt="html template"> <img class="hover-img" src="{{asset('/items/' . $productsdb->imagePath)}}"  alt="html template"></figure>
                                </a> <?php $idnum = $productsdb->id; ?>
                                 <a type="button" id="{{$idnum}}" href="{{ route('product.addToCart', ['id' => $productsdb->id]) }}" class="add-to-cart-mt" data-id="{{ $productsdb->id }}">add to cart</a>

                              </div>
                             
                             
                              <div class="pr-info-area">
                                <div class="pr-button">
                                  <div class="mt-button add_to_wishlist"> @if(Auth::check()) <a  href="{{ route('product.addToWishlist',['id' => $productsdb->id]) }}" class="addToWish" data-id="{{ $productsdb->id }}"> <i class="fa fa-heart"></i> </a>@else
                                    <a  href="{{ route('user.signin') }}" title="Please Sign in First!"> <i class="fa fa-heart"></i> </a>@endif
                                   </div>
                                  <div class="mt-button add_to_compare"> <a href="{{url('compare/'.$productsdb->id.'/'.$productsdb->subcategory_id)}}"> <i class="fa fa-signal"></i> </a> </div>
                                  <div class="mt-button quick-view"> <a href="{{url('quickview/'.$productsdb->id.'/'.$productsdb->subcategory_id)}}"> <i class="fa fa-search"></i> </a> </div>
                                </div>
                              </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="{{ $productsdb->title }}" href="{{url('shop-details/'.$productsdb->id.'/'.$productsdb->subcategory_id)}}">{{ $productsdb->title }}</a> </div>
                                <div class="item-content">
                                  <div class="rating">
                                   <?php $pr=$productsdb->review;
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
                                    <div class="price-box"> <span class="regular-price"> <span class="price">${{ $productsdb->price }}</span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
            @endforeach
      
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="top-sellers">
                <div class="top-sellers-pro">
                  <div class="slider-items-products">
                    <div id="top-sellers-slider" class="product-flexslider hidden-buttons">
                      <div class="slider-items slider-width-col4 ">
                        <div class="product-item">
                          <div class="item-inner">
                            <div class="product-thumbnail">
                              <div class="icon-sale-label sale-left">Sale</div>
                              <div class="icon-new-label new-right">New</div>
                              <div class="pr-img-area"> <a title="{{ $productsdb->title }}" href="{{url('shop-details/'.$productsdb->id.'/'.$productsdb->subcategory_id)}}">
                                <figure> <img class="first-img" src="{{asset('front/images/products/img03.jpg')}}" alt="html template"> <img class="hover-img" src="{{asset('front/images/products/img03.jpg')}}" alt="html template"></figure>
                                </a>
                                <a type="button" href="{{ route('product.addToCart', ['id' => $productsdb->id]) }}" class="add-to-cart-mt" data-id="{{ $productsdb->id }}">add to cart</a>
                              </div>
                              <div class="pr-info-area">
                                <div class="pr-button">
                                  <div class="mt-button add_to_wishlist"> <a href="{{ route('product.addToWishlist',['id' => $productsdb->id]) }}" class="addToWish" data-id="{{ $productsdb->id }}"> <i class="fa fa-heart"></i> </a> </div>
                                  <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
                                  <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                </div>
                              </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="{{ $productsdb->title }}" href="{{url('shop-details/'.$productsdb->id.'/'.$productsdb->subcategory_id)}}">{{ $productsdb->title }} </a> </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-item">
                          <div class="item-inner">
                            <div class="product-thumbnail">
                              <div class="icon-sale-label sale-left">Sale</div>
                              <div class="pr-img-area"> <a title="{{ $productsdb->title }}" href="single_product.html">
                                <figure> <img class="first-img" src="{{asset('front/images/products/img08.jpg')}}" alt="html template"> <img class="hover-img" src="{{asset('front/images/products/img08.jpg')}}" alt="html template"></figure>
                                </a>
                                <a type="button" href="{{ route('product.addToCart', ['id' => $productsdb->id]) }}" class="add-to-cart-mt" data-id="{{ $productsdb->id }}">add to cart</a>
                              </div>
                              <div class="pr-info-area">
                                <div class="pr-button">
                                  <div class="mt-button add_to_wishlist"> <a href="{{ route('product.addToWishlist',['id' => $productsdb->id]) }}" class="addToWish" data-id="{{ $productsdb->id }}"> <i class="fa fa-heart"></i> </a> </div>
                                  <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
                                  <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                </div>
                              </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box">
                                      <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                                      <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-item">
                          <div class="item-inner">
                            <div class="product-thumbnail">
                              <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
                                <figure> <img class="first-img" src="{{asset('front/images/products/img01.jpg')}}" alt="html template"> <img class="hover-img" src="{{asset('front/images/products/img01.jpg')}}" alt="html template"></figure>
                                </a>
                                <a type="button" href="{{ route('product.addToCart', ['id' => $productsdb->id]) }}" class="add-to-cart-mt" data-id="{{ $productsdb->id }}">add to cart</a>
                              </div>
                              <div class="pr-info-area">
                                <div class="pr-button">
                                  <div class="mt-button add_to_wishlist"> <a href="{{ route('product.addToWishlist',['id' => $productsdb->id]) }}" class="addToWish" data-id="{{ $productsdb->id }}"> <i class="fa fa-heart"></i> </a> </div>
                                  <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
                                  <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                </div>
                              </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box">
                                      <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                                      <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-item">
                          <div class="item-inner">
                            <div class="product-thumbnail">
                              <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
                                <figure> <img class="first-img" src="{{asset('front/images/products/img04.jpg')}}" alt="html template"> <img class="hover-img" src="{{asset('front/images/products/img04.jpg')}}" alt="html template"></figure>
                                </a>
                                <a type="button" href="{{ route('product.addToCart', ['id' => $productsdb->id]) }}" class="add-to-cart-mt" data-id="{{ $productsdb->id }}">add to cart</a>
                              </div>
                              <div class="pr-info-area">
                                <div class="pr-button">
                                  <div class="mt-button add_to_wishlist"> <a href="{{ route('product.addToWishlist',['id' => $productsdb->id]) }}" class="addToWish" data-id="{{ $productsdb->id }}"> <i class="fa fa-heart"></i> </a> </div>
                                  <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
                                  <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                </div>
                              </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-item">
                          <div class="item-inner">
                            <div class="product-thumbnail">
                              <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
                                <figure> <img class="first-img" src="{{asset('front/images/products/img05.jpg')}}" alt="html template"> <img class="hover-img" src="{{asset('front/images/products/img05.jpg')}}" alt="html template"></figure>
                                </a>
                                <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                              </div>
                              <div class="pr-info-area">
                                <div class="pr-button">
                                  <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
                                  <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
                                  <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                </div>
                              </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box">
                                      <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                                      <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-item">
                          <div class="item-inner">
                            <div class="product-thumbnail">
                              <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
                                <figure> <img class="first-img" src="{{asset('front/images/products/img06.jpg')}}" alt="html template"> <img class="hover-img" src="{{asset('front/images/products/img06.jpg')}}" alt="html template"></figure>
                                </a>
                                <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                              </div>
                              <div class="pr-info-area">
                                <div class="pr-button">
                                  <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
                                  <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
                                  <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                </div>
                              </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Hot deal -->
        <div class="col-md-3 col-sm-4 col-xs-12 hot-products">
        @foreach($hotdeals as $hotdeals)
          <div class="hot-deal"> <span class="title-text">Hot deal</span>
            <ul class="products-grid">
              <li class="item">
                <div class="product-item">
                  <div class="item-inner">
                    <div class="product-thumbnail">
                      <div class="icon-hot-label hot-right">Hot</div>
                      <div class="pr-img-area"> <a title="hot deal" href="{{url('shop-details/'.$hotdeals->id.'/'.$hotdeals->subcategory_id)}}">
                        <figure> <img class="first-img" src="{{asset('/items/' . $hotdeals->imagePath)}}" alt="html template"> <img class="hover-img" src="{{asset('/items/' . $hotdeals->imagePath)}}" alt="html template"></figure>
                        </a>
                        <a type="button"  href="{{ route('product.addToCart', ['id' => $productsdb->id]) }}" class="add-to-cart-mt" data-id="{{ $productsdb->id }}">add to cart</a>
                      <!-- <div class="jtv-box-timer">
                        <div class="countbox_1 jtv-timer-grid"></div>
                      </div> -->
                      <div class="pr-info-area">
                        <div class="pr-button">
                          <div class="mt-button add_to_wishlist"> @if(Auth::check()) <a  href="{{ route('product.addToWishlist',['id' => $productsdb->id]) }}" class="addToWish" data-id="{{ $productsdb->id }}"> <i class="fa fa-heart"></i> </a>@else
                                    <a  href="{{ route('user.signin') }}" title="Please Sign in First!"> <i class="fa fa-heart"></i> </a>@endif
                                   </div>
                          <div class="mt-button add_to_compare"> <a href="{{url('compare/'.$productsdb->id.'/'.$productsdb->subcategory_id)}}"> <i class="fa fa-signal"></i> </a> </div>
                          <div class="mt-button quick-view"> <a href="{{url('quickview/'.$productsdb->id.'/'.$productsdb->subcategory_id)}}"> <i class="fa fa-search"></i> </a> </div>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="{{ $productsdb->title }}" href="{{url('shop-details/'.$hotdeals->id.'/'.$hotdeals->subcategory_id)}}">{{ $hotdeals->title }}</a> </div>
                        <div class="item-content">
                          <div class="rating">
                                   <?php $pr=$hotdeals->review;
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
                            <div class="price-box"> <span class="regular-price"> <span class="price">${{ $hotdeals->price }}</span> </span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
  <!-- end main container --> 
  
  <!-- top banner -->
  <div class="container">
    <div class="row">
      <div class="col-sm-4 col-xs-12">
        <div class="jtv-banner-box banner-inner">
          <div class="image"> <a class="jtv-banner-opacity" href="{{route('saveupto')}}"><img  src="{{asset('front/images/top-banner1.jpg')}}"  alt="html template"></a> </div>
          <div class="jtv-content-text">
            <h3 class="title">Save up 50%</h3>
            <span class="sub-title"></span> </div>
        </div>
      </div>
      <div class="col-sm-5 col-xs-12">
        <div class="jtv-banner-box">
          <div class="image"> <a class="jtv-banner-opacity" href="{{route('subproduct', 34)}}"><img src="{{asset('front/images/top-banner2.jpg')}}" alt="html template"></a> </div>
          <div class="jtv-content-text">
            <h3 class="title">Powerful Stereo <span>Sound</span></h3>
            <span class="sub-title">You're future in the sound !</span> <a href="#" class="button">Buy Now</a> </div>
        </div>
      </div>
      <div class="col-sm-3 col-xs-12">
        <div class="jtv-banner-box banner-inner">
          <div class="image"> <a class="jtv-banner-opacity" href="{{url('specialsave', 'newarrival')}}"><img   src="{{asset('front/images/top-banner3.jpg')}}" alt="html template"></a> </div>
          <div class="jtv-content-text">
            <h3 class="title">New Arrival</h3>
          </div>
        </div>
        <div class="jtv-banner-box banner-inner">
          <div class="image "> <a class="jtv-banner-opacity" href="{{route('categoryproduct', 11)}}"><img src="{{asset('front/images/top-banner4.jpg')}}" alt="html template"></a> </div>
          <div class="jtv-content-text">
            <h3 class="title"><a href="{{route('categoryproduct', 11)}}" style="color:white">Accessories</a></h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!--popular-products-->

  <div class="container">
    <div class="special-products">
      <div class="page-header">
        <h2>popular products</h2>
      </div>
      <div class="special-products-pro">
        <div class="slider-items-products">
          <div id="special-products-slider" class="product-flexslider hidden-buttons">
            <div class="slider-items slider-width-col4">
         @foreach($populars as $popular)   
              <div class="product-item">
                <div class="item-inner">
                  <div class="product-thumbnail">
                    <div class="pr-img-area"> <a title="{{ $popular->title }}" href="{{url('shop-details/'.$popular->id.'/'.$popular->subcategory_id)}}">
                      <figure> <img class="first-img" src="{{asset('/items/' . $popular->imagePath)}}" alt="html template"> <img class="hover-img" src="{{asset('/items/' . $popular->imagePath)}}" alt="html template"></figure>
                      </a>
                       <a type="button"  href="{{ route('product.addToCart', ['id' => $popular->id]) }}" class="add-to-cart-mt" data-id="{{ $popular->id }}">add to cart</a>
                    </div>
                    <div class="pr-info-area">
                      <div class="pr-button">
                        <div class="mt-button add_to_wishlist"> @if(Auth::check()) <a  href="{{ route('product.addToWishlist',['id' => $popular->id]) }}" class="addToWish" data-id="{{ $popular->id }}"> <i class="fa fa-heart"></i> </a>@else
                                    <a  href="{{ route('user.signin') }}" title="Please Sign in First!"> <i class="fa fa-heart"></i> </a>@endif
                                   </div>
                        <div class="mt-button add_to_compare"> <a href="{{url('compare/'.$popular->id.'/'.$popular->subcategory_id)}}"> <i class="fa fa-signal"></i> </a> </div>
                        <div class="mt-button quick-view"> <a href="{{url('quickview/'.$popular->id.'/'.$popular->subcategory_id)}}"> <i class="fa fa-search"></i> </a> </div>
                      </div>
                    </div>
                  </div>
                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title"> <a title="{{ $popular->title }}" href="{{url('shop-details/'.$popular->id.'/'.$popular->subcategory_id)}}">{{ $popular->title }} </a> </div>
                      <div class="item-content">
                        <div class="rating">
                                   <?php $pr=$popular->review;
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
                          <div class="price-box"> <span class="regular-price"> <span class="price">${{ $popular->price }}</span> </span> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--special-products-->

  
  <div class="container">
    <div class="special-products">
      <div class="page-header">
        <h2>special products</h2>
      </div>
      <div class="special-products-pro">
        <div class="slider-items-products">
          <div id="special-products-slider" class="product-flexslider hidden-buttons">
            <div class="slider-items slider-width-col4">
         @foreach($special as $special)   
              <div class="product-item">
                <div class="item-inner">
                  <div class="product-thumbnail">
                    <div class="pr-img-area"> <a title="{{ $special->title }}" href="{{url('shop-details/'.$special->id.'/'.$special->subcategory_id)}}">
                      <figure> <img class="first-img" src="{{asset('/items/' . $special->imagePath)}}" alt="html template"> <img class="hover-img" src="{{asset('/items/' . $special->imagePath)}}" alt="html template"></figure>
                      </a>
                       <a type="button"  href="{{ route('product.addToCart', ['id' => $productsdb->id]) }}" class="add-to-cart-mt" data-id="{{ $productsdb->id }}">add to cart</a>
                    </div>
                    <div class="pr-info-area">
                      <div class="pr-button">
                         <div class="mt-button add_to_wishlist"> @if(Auth::check()) <a  href="{{ route('product.addToWishlist',['id' => $special->id]) }}" class="addToWish" data-id="{{ $special->id }}"> <i class="fa fa-heart"></i> </a>@else
                                    <a  href="{{ route('user.signin') }}" title="Please Sign in First!"> <i class="fa fa-heart"></i> </a>@endif
                                   </div>
                        <div class="mt-button add_to_compare"> <a href="{{url('compare/'.$productsdb->id.'/'.$productsdb->subcategory_id)}}"> <i class="fa fa-signal"></i> </a> </div>
                        <div class="mt-button quick-view"> <a href="{{url('quickview/'.$productsdb->id.'/'.$productsdb->subcategory_id)}}"> <i class="fa fa-search"></i> </a> </div>
                      </div>
                    </div>
                  </div>
                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title"> <a title="{{ $special->title }}" href="{{url('shop-details/'.$special->id.'/'.$special->subcategory_id)}}">{{ $special->title }} </a> </div>
                      <div class="item-content">
                        <div class="rating">
                                   <?php $pr=$special->review;
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
                          <div class="price-box"> <span class="regular-price"> <span class="price">${{ $special->price }}</span> </span> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
   
    </div>
  
  
  <!-- Latest news start -->
  
  <div class="container">
    <div id="latest-news" class="news">
      <div class="page-header">
        <h2>Latest news</h2>
      </div>
      <div class="slider-items-products">
        <div id="latest-news-slider" class="product-flexslider hidden-buttons">
          <div class="slider-items slider-width-col6"> 
           @foreach($blog as $blogs)
            <div class="item">
              <div class="jtv-blog">
                <div class="blog-img"> <a href="{{ route('showsingle', $blogs->id) }}"> <img class="primary-img" src="{{asset('front/images/' . $blogs->image)}}" alt="html template"></a> <span class="moretag"></span> </div>
                <div class="blog-content-jtv">
                  <h2><a href="{{ route('showsingle', $blogs->id) }}">{{ $blogs->title}}</a></h2>
                  <p>{{ $blogs->description }}</p>
                  <div class="blog-action"> <span>{{ $blogs->created_at->diffForHumans()}}</span> <a class="read-more" href="{{ route('showsingle', $blogs->id) }}">read more</a> </div>
                </div>
              </div>
            </div>
            <!-- End Item --> 
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Bottom Banner Start -->
  
  <div class="bottom-banner-section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4"> <a href="{{route('categoryproduct', 6)}}" class="bottom-banner-img"><img  src="{{asset('front/images/ads-04.jpg')}}" alt="bottom banner"> <span class="banner-overly"></span>
          <div class="bottom-img-info">
            <h3>Camera</h3>
            <h6>collect the best one for photography</h6>
            <span class="shop-now-btn">Shop Now</span> </div>
          </a> </div>
        <div class="col-md-8 col-sm-8"> <a href="{{url('specialsave', 'newarrival')}}" class="bottom-banner-img last"><img src="{{asset('front/images/ads-05.jpg')}}" alt="bottom banner"> <span class="banner-overly last"></span>
          <div class="bottom-img-info last">
            <h3>New Collection</h3>
            <h6>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</h6>
            <span class="shop-now-btn">Shop Now</span> </div>
          </a> </div>
      </div>
    </div>
  </div>
  
  <!-- category area start -->
  <div class="jtv-category-area">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6">
          <div class="jtv-single-cat">
            <h2 class="cat-title">Top Rated</h2>
             @foreach($bests as $best)
            <div class="jtv-product">
              <div class="product-img"> <a href="{{url('shop-details/'.$best->id.'/'.$best->subcategory_id)}}"> <img  src="{{asset('/items/' . $best->imagePath)}}" alt="html template"> <img class="secondary-img" src="{{asset('/items/' . $best->imagePath)}}" alt="html template"> </a> </div>
              <div class="jtv-product-content">
                <h3><a href="{{url('shop-details/'.$best->id.'/'.$best->subcategory_id)}}">{{$best->title}}</a></h3>
                <div class="price-box"> <span class="regular-price"> <span class="price">${{$best->price}}</span> </span> </div>
                <div class="jtv-product-action">
                  <div class="jtv-extra-link">
                    <div class="button-cart">
                      <!-- <a href="{{ route('product.addToCart', ['id' => $best->id]) }}" class="add-to-cart-mt" data-id="{{ $best->id }}" style="background-color: #333E48; color: white;"><i class="fa fa-shopping-cart"></i></a> -->
                    </div>
                    <a href="{{url('quickview/'.$best->id.'/'.$best->subcategory_id)}}"><i class="fa fa-search"></i></a> <!--  @if(Auth::check()) <a href="{{ route('product.addToWishlist',['id' => $best->id]) }}" class="addToWish" data-id="{{ $productsdb->id }}"><i class="fa fa-heart"></i></a>@else <a href="{{ route('user.signin') }}" title="please sig in first!"><i class="fa fa-heart"></i></a> @endif  --></div>
                </div>
              </div>
            </div>

            @endforeach
            
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="jtv-single-cat">
            <h2 class="cat-title">Upcoming Products</h2>
            <div class="jtv-product">
              <div class="product-img"> <a href="#"> <img src="{{asset('front/images/products/img12.jpg')}}" alt="html template"> <img class="secondary-img" src="{{asset('front/images/products/img12.jpg')}}" alt="html template"> </a> </div>
              <div class="jtv-product-content">
                <h3><a href="single_product.html">Laptop</a></h3>
                <div class="price-box">
                  <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $600.00 </span> </p>
                  <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $500.00 </span> </p>
                </div>
                <!-- <div class="jtv-product-action">
                  <div class="jtv-extra-link">
                    <div class="button-cart">
                      <button><i class="fa fa-shopping-cart"></i></button>
                    </div>
                    <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a> <a href="#"><i class="fa fa-heart"></i></a> </div>
                </div> -->
              </div>
            </div>
            <div class="jtv-product jtv-cat-margin">
              <div class="product-img"> <a href="#"> <img src="{{asset('front/images/products/img10.jpg')}}" alt="html template"> <img class="secondary-img" src="{{asset('front/images/products/img10.jpg')}}" alt="html template"> </a> </div>
              <div class="jtv-product-content">
                <h3><a href="single_product.html">Fan</a></h3>
                <div class="price-box"> <span class="regular-price"> <span class="price">$100.00</span> </span> </div>
                <!-- <div class="jtv-product-action">
                  <div class="jtv-extra-link">
                    <div class="button-cart">
                      <button><i class="fa fa-shopping-cart"></i></button>
                    </div>
                    <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a> <a href="#"><i class="fa fa-heart"></i></a> </div>
                </div> -->
              </div>
            </div>
            <div class="jtv-product jtv-cat-margin">
              <div class="product-img"> <a href="#"> <img src="{{asset('front/images/products/img03.jpg')}}" alt="html template"> <img class="secondary-img" src="{{asset('front/images/products/img03.jpg')}}" alt="html template"> </a> </div>
              <div class="jtv-product-content">
                <h3><a href="single_product.html">Watch</a></h3>
                <div class="price-box"> <span class="regular-price"> <span class="price">$88.99</span> </span> </div>
                <!-- <div class="jtv-product-action">
                  <div class="jtv-extra-link">
                    <div class="button-cart">
                      <button><i class="fa fa-shopping-cart"></i></button>
                    </div>
                    <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a> <a href="#"><i class="fa fa-heart"></i></a> </div>
                </div> -->
              </div>
            </div>
          </div>
        </div>
        
        <!-- service area start -->
        <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="jtv-service-area"> 
            
            <!-- jtv-single-service start -->
            
            <div class="jtv-single-service">
              <div class="service-icon"> <img alt="html template" src="{{asset('front/images/customer-service-icon.png')}}"> </div>
              <div class="service-text">
                <h2>24/7 customer service</h2>
                <p><span>Call us 24/7 at 000 - 123 - 456</span></p>
              </div>
            </div>
            <div class="jtv-single-service">
              <div class="service-icon"> <img alt="html template" src="{{asset('front/images/shipping-icon.png')}}"> </div>
              <div class="service-text">
                <h2>free shipping worldwide</h2>
                <p><span>On order over $199 - 7 days a week</span></p>
              </div>
            </div>
            <div class="jtv-single-service">
              <div class="service-icon"> <img alt="html template"  src="{{asset('front/images/guaratee-icon.png')}}"> </div>
              <div class="service-text">
                <h2>money back guaratee!</h2>
                <p><span>Send within 30 days</span></p>
              </div>
            </div>
            
            <!-- jtv-single-service end --> 
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- category-area end --> 
  
  <!-- Footer -->
   {{-- Ajax --}}
    <!-- index::Add cart -->    
    {!! Html::script('js/jquery-3.2.1.min.js'); !!}
    {!! Html::script('styles/bootstrap4/bootstrap.min.js'); !!}
    <script>
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
         
   
            $('.addToWish').on('click', function(ea) {     
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
        
    </script>
       
@endsection