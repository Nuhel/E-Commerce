@extends('layouts.design')

@section('title')
    Laravel Shopping Cart
@endsection

@section('content')
<script type="text/javascript" src="front/js/countdown.js"></script> 
{!! Html::script('front/js/bootstrap.min.js'); !!}
{!! Html::script('front/js/owl.carousel.min.js'); !!}
{!! Html::script('front/js/jquery.bxslider.js'); !!}
{!! Html::script('front/js/revolution-slider.js'); !!}
{!! Html::script('front/js/jquery.flexslider.js'); !!}
{!! Html::script('front/js/megamenu.js'); !!}
{!! Html::script('front/js/mobile-menu.js'); !!}
{!! Html::script('front/js/jquery-ui.js'); !!}
<!-- main js --> 
{!! Html::script('front/js/main.js'); !!}
<!-- countdown js --> 
{!! Html::script('front/js/countdown.js'); !!}
{!! Html::script('front/js/cloud-zoom.js'); !!}
  <!-- Home Slider Start -->
  <div class="slider">
    <div class="tp-banner-container clearfix">
      <div class="tp-banner" >
        <ul>
          <!-- SLIDE 1 -->
          <li data-transition="slidehorizontal" data-slotamount="5" data-masterspeed="700" > 
            <!-- MAIN IMAGE --> 
            <img src="front/images/slider/slider-img1.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat"> 
            <!-- LAYERS --> 
            <!-- LAYER NR. 1 -->
            <div class="tp-caption very_big_white skewfromrightshort fadeout"
                          data-x="center"
                          data-y="100"
                          data-speed="500"
                          data-start="1200"
                          data-easing="Circ.easeInOut"
                          style=" font-size:70px; font-weight:800; color:#666;">Huge <span style=" color:#000;">sale</span> </div>
            
            <!-- LAYER NR. 2 -->
            <div class="tp-caption tp-caption medium_text skewfromrightshort fadeout"
                          data-x="center"
                          data-y="165"
                          data-hoffset="0"
                          data-voffset="-73"
                          data-speed="500"
                          data-start="1200"
                          data-easing="Power4.easeOut"
                          style=" font-size:20px; font-weight:500; color:#df3737;"> Sale off 75% all products </div>
            
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
                          style="border: 2px solid #fed700;border-radius: 50px; font-size:14px; background-color:#fed700; color:#333; z-index: 12; max-width: auto; max-height: auto; white-space: nowrap; letter-spacing:1px;"><a href='#' class='largebtn slide1'>Learn More</a> </div>
          </li>
          
          <!-- SLIDE 2 -->
          <li data-transition="slidehorizontal" data-slotamount="5" data-masterspeed="700" > 
            <!-- MAIN IMAGE --> 
            <img src="front/images/slider/slider-img2.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat"> 
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
                          style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;"><a href='#' class='largebtn solid'>Get It Now!</a> </div>
          </li>
          
          <!-- SLIDE 3 -->
          <li data-transition="slidehorizontal" data-slotamount="5" data-masterspeed="700" > 
            <!-- MAIN IMAGE --> 
            <img src="front/images/slider/slider-img3.jpg" alt="slidebg3" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat"> 
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
                          style=" font-size:50px; font-weight:800; color:#fed700;">Definition</div>
            
            <!-- LAYER NR. 2 -->
            <div class="tp-caption tp-caption medium_text lfb fadeout"
                          data-x="310"
                          data-y="260"
                          data-speed="500"
                          data-start="1200"
                          data-easing="Power4.easeOut"
                          style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap; color:#34bcec; font-size:20px; font-weight:500;">Best Camera For You?</div>
            
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
                          style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;"><a href='#' class='largebtn solid'>Get It Now!</a> </div>
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
              <li class="active"><a href="#new-arrivals" data-toggle="tab" aria-expanded="false">Featured products</a></li>
              <li class="divider"></li>
              <li> <a href="#top-sellers" data-toggle="tab" aria-expanded="false">Latest products</a> </li>
            </ul>
            <div id="productTabContent" class="tab-content">
              <div class="tab-pane active in" id="new-arrivals">
                <div class="new-arrivals-pro">
                  <div class="slider-items-products">
                    <div id="new-arrivals-slider3" class="product-flexslider hidden-buttons">
                      <div class="slider-items slider-width-col4">
                        <div class="product-item">
                          <div class="item-inner">
                            <div class="product-thumbnail">
                              
                              <div class="icon-new-label new-right">New</div>
                              <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
                                <figure> <img class="first-img" src="front/images/products/img01.jpg" alt=""> <img class="hover-img" src="front/images/products/img01.jpg" alt=""></figure>
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
                                  <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
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
                                <figure> <img class="first-img" src="front/images/products/img02.jpg" alt=""> <img class="hover-img" src="front/images/products/img02.jpg" alt=""></figure>
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
                        
                        
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
             
            </div>
          </div>
        </div>
        <!--Hot deal -->
      
      </div>
    </div>
  </div>
  <!-- end main container --> 
  
  
  <div class="container"></div>
  
  <!-- Bottom Banner Start -->
  
  <div class="bottom-banner-section"></div>
  
  <!-- category area start -->
  <div class="jtv-category-area"></div>
  <!-- category-area end --> 
  
  <!-- Footer -->
  
  <footer></footer>
  <a href="#" class="totop"> </a> </div>

<!-- End Footer --> 


<div id="quick_view_popup-overlay"></div>
<div style="display: block;" id="quick_view_popup-wrap">
  <div id="quick_view_popup-outer">
    <div id="quick_view_popup-content">
      <div style="width:auto;height:auto;overflow: auto;position:relative;">
        <div class="product-view-area">
          <div class="product-big-image col-xs-12 col-sm-5 col-lg-5 col-md-5">
            <!-- <div class="icon-sale-label sale-left">Sale</div> -->
            <div class="large-image"> <a href="{{asset('/items/' . $product->imagePath)}}" class="cloud-zoom" id="zoom1" rel="useWrapper: false, adjustY:0, adjustX:20"> <img class="zoom-img" src="{{asset('/items/' . $product->imagePath)}}"> </a> </div>
            
            
            <!-- end: more-images --> 
            
          </div>
          <div class="col-xs-12 col-sm-7 col-lg-7 col-md-7">
            <div class="product-details-area">
              <div class="product-name">
                <h1>{{ $product->title }}</h1>
              </div>
              <div class="price-box">
                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> ${{ $product->price }} </span> </p>
                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"></span> </p>
              </div>
              <div class="ratings">
                 <div class="rating">
                            <?php $pr=$product->review;
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
                <p class="availability in-stock pull-right">Availability: <span>{{ $product->stock }}</span></p>
              </div>
              <div class="short-description">
                <h2>Quick Overview</h2>
                <p>{{ $product->description }}</p>
              </div>
            
              <div class="product-variation">
                <form action="#" method="post">
                  <!-- <div class="cart-plus-minus">
                    <label for="qty">Quantity:</label>
                    <div class="numbers-row">
                      <div onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;" class="dec qtybutton"><i class="fa fa-minus">&nbsp;</i></div>
                      <input type="text" class="qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                      <div onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="inc qtybutton"><i class="fa fa-plus">&nbsp;</i></div>
                    </div>
                  </div> -->
                  <!-- <button class="button pro-add-to-cart" title="Add to Cart" type="button"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button> -->
                  <!-- <div class="red_button add_to_cart_button"><a  href="{{ route('product.addToCart', ['id' => $product->id]) }}" class="addToCart" data-id="{{ $product->id }}">add to cart</a> -->

                    <a type="button" style=" width:300px; text-align: center; position: static; padding: 20px; border-radius: 5px;"  href="{{ route('product.addToCart', ['id' => $product->id]) }}" class="add-to-cart-mt" data-id="{{ $product->id }}">add to cart</a>
                    
                             </div>

                </form>
                
              </div>

              <div class="product-cart-option">
                <ul>
                  <li> @if(Auth::check())
                    <a href="{{ route('product.addToWishlist',['id' => $product->id]) }}" class="addToWish" data-id="{{ $product->id }}"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                    @else
                     <a href="{{ route('user.signin') }}" title="Please Log in First!"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                  @endif</li>
                  
                 <!--  <li><a href="#"><i class="fa fa-retweet"></i><span>Add to Compare</span></a></li> -->
                <!--  <li><a type="button" href="{{ route('product.addToCart', ['id' => $product->id]) }}" class="add-to-cart-mt" data-id="{{ $product->id }}">add to cart</a></li> -->
              
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!--product-view--> 
        
      </div>
      <a onclick="goBack()" style="display: inline;" id="quick_view_popup-close" href="{{url('/')}}"><i class="fa fa-times-circle"></i></a>
    </div>
    <script>
function goBack() {
    window.history.back();
}
</script>
     </div>
</div>
<!-- JS --> 

<!-- jquery js --> 
<script type="text/javascript" src="front/js/jquery.min.js"></script> 

<!-- bootstrap js --> 
<script type="text/javascript" src="front/js/bootstrap.min.js"></script> 

<!-- owl.carousel.min js --> 
<script type="text/javascript" src="front/js/owl.carousel.min.js"></script> 

<!-- bxslider js --> 
<script type="text/javascript" src="front/js/jquery.bxslider.js"></script> 

<!-- flexslider js --> 
<script type="text/javascript" src="front/js/jquery.flexslider.js"></script> 


<!-- Slider Js --> 
<script type="text/javascript" src="front/js/revolution-slider.js"></script> 

<!-- megamenu js --> 
<script type="text/javascript" src="front/js/megamenu.js"></script> 
<script type="text/javascript">
  /* <![CDATA[ */   
  var mega_menu = '0';
  
  /* ]]> */
  </script> 

<!-- jquery.mobile-menu js --> 
<script type="text/javascript" src="front/js/mobile-menu.js"></script> 

<!--jquery-ui.min js --> 
<script type="text/javascript" src="front/js/jquery-ui.js"></script> 

<!-- main js --> 
<script type="text/javascript" src="front/js/main.js"></script> 

<!-- countdown js --> 


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
<!--cloud-zoom js --> 
<script type="text/javascript" src="front/js/cloud-zoom.js"></script> 
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
                    url : "../../add-to-cart",
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
                    url : "../../add-to-wishlist",
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