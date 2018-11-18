@extends('layouts.design')

@section('title')
    Laravel Shopping Cart
@endsection

@section('content')

  
  <!-- Main Container -->
  <div class="main-container col2-left-layout">
    <div class="container">
      <div class="row">
        <div class="col-main col-sm-9 col-xs-12 col-sm-push-3">
          
          <div class="shop-inner">
            <div class="page-title">
              <h2>Special Product</h2>
            </div>
            <div class="toolbar">
              <div class="view-mode">
                <ul>
                  <li class="active"> <a href="shop_grid.html"> <i class="fa fa-th-large"></i> </a> </li>
                  <li> <a href="shop_list.html"> <i class="fa fa-th-list"></i> </a> </li>
                </ul>
              </div>
              <div class="sorter">
                <div class="short-by">
                  <form action="{{route('specialproduct')}}" method="POST">
                  <label>Sort By:</label>
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">  
                 <select name="myselect" id="myselect2" onchange="this.form.submit()">
                   
                     <option value="0" @if(Session::has('productid'))
                      selected="" 
                      @endif >position</option>
                    <option value="1" @if(Session::has('price'))
                      selected="" 
                      @endif>Price</option>
                   <option value="2" @if(Session::has('lowerprice'))
                    selected="" 
                    @endif >Lower price</option>
                   <option value="3"  @if(Session::has('productname'))
                    selected="" 
                    @endif >Product Name</option>
                  </select>
                </form>
                </div>

              </div>
            </div>
            <div class="product-grid-area">
              <ul class="products-grid">
              <!-- projuct loop start --> 
              @foreach($productsdb as $productshop) 
                <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
                   
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="pr-img-area"> <a title="{{$productshop->title}}" href="{{url('shop-details/'.$productshop->id.'/'.$productshop->subcategory_id)}}">
                          <figure> <img class="first-img" src="{{asset('/items/' . $productshop->imagePath)}}" alt=""> <img class="hover-img" src="{{asset('/items/' . $productshop->imagePath)}}" alt=""></figure>
                          </a>
                          <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                        </div>
                        <div class="pr-info-area">
                          <div class="pr-button">
                            <div class="mt-button add_to_wishlist"> @if(Auth::check()) <a  href="{{ route('product.addToWishlist',['id' => $productshop->id]) }}" class="addToWish" data-id="{{ $productshop->id }}"> <i class="fa fa-heart"></i> </a>@else
                                    <a  href="{{ route('user.signin') }}" title="Please Sign in First!"> <i class="fa fa-heart"></i> </a>@endif
                                   </div>
                            <div class="mt-button add_to_compare"> <a href="{{url('compare/'.$productshop->id.'/'.$productshop->subcategory_id)}}"> <i class="fa fa-signal"></i> </a> </div>
                            <div class="mt-button quick-view"> <a href="{{url('quickview/'.$productshop->id.'/'.$productshop->subcategory_id)}}"> <i class="fa fa-search"></i> </a> </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="{{$productshop->title}}" href="{{url('shop-details/'.$productshop->id.'/'.$productshop->subcategory_id)}}">{{ $productshop->title }}</a> </div>
                          <div class="item-content">
                            <div class="rating">
                            <?php $pr=$productshop->review;
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
                              <div class="price-box">
                                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> ${{ $productshop->price }} </span> </p>
                                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> ${{ $productshop->price*1.5 }} </span> </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                </li>
                @endforeach
                <!-- product loop end -->
              </ul>
            </div>
            <div class="pagination-area ">
              <ul>
                {{ $productsdb->links() }}
              </ul>
            </div>
          </div>
        </div>
        <aside class="sidebar col-sm-3 col-xs-12 col-sm-pull-9">
          <div class="block category-sidebar">
            <div class="sidebar-title">
              <h3>Categories</h3>
            </div>
            <ul class="product-categories">
              <li class="cat-item current-cat cat-parent"><a href= "shop_grid.html">Women</a>
                <ul class="children">
                  <li class="cat-item cat-parent"><a href="shop_grid.html"><i class="fa fa-angle-right"></i>&nbsp; Accessories</a>
                    <ul class="children">
                      <li class="cat-item"><a href="shop_grid.html"><i class="fa fa-angle-right"></i>&nbsp; Dresses</a></li>
                      <li class="cat-item cat-parent"><a href="shop_grid.html"><i class="fa fa-angle-right"></i>&nbsp; Handbags</a>
                        <ul style="display: none;" class="children">
                          <li class="cat-item"><a href="shop_grid.html"><i class="fa fa-angle-right"></i>&nbsp; Beaded Handbags</a></li>
                          <li class="cat-item"><a href="shop_grid.html"><i class="fa fa-angle-right"></i>&nbsp; Sling bag</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="cat-item cat-parent"><a href="shop_grid.html"><i class="fa fa-angle-right"></i>&nbsp; Handbags</a>
                    <ul class="children">
                      <li class="cat-item"><a href="shop_grid.html"><i class="fa fa-angle-right"></i>&nbsp; backpack</a></li>
                      <li class="cat-item"><a href="shop_grid.html"><i class="fa fa-angle-right"></i>&nbsp; Beaded Handbags</a></li>
                      <li class="cat-item"><a href="shop_grid.html"><i class="fa fa-angle-right"></i>&nbsp; Fabric Handbags</a></li>
                      <li class="cat-item"><a href="shop_grid.html"><i class="fa fa-angle-right"></i>&nbsp; Sling bag</a></li>
                    </ul>
                  </li>
                  <li class="cat-item"><a href="shop_grid.html"><i class="fa fa-angle-right"></i>&nbsp; Jewellery</a> </li>
                  <li class="cat-item"><a href="shop_grid.html"><i class="fa fa-angle-right"></i>&nbsp; Swimwear</a> </li>
                </ul>
              </li>
              <li class="cat-item cat-parent"><a href="shop_grid.html">Men</a>
                <ul class="children">
                  <li class="cat-item cat-parent"><a href="shop_grid.html"><i class="fa fa-angle-right"></i>&nbsp; Dresses</a>
                    <ul class="children">
                      <li class="cat-item"><a href="shop_grid.html"><i class="fa fa-angle-right"></i>&nbsp; Casual</a></li>
                      <li class="cat-item"><a href="shop_grid.html"><i class="fa fa-angle-right"></i>&nbsp; Designer</a></li>
                      <li class="cat-item"><a href="shop_grid.html"><i class="fa fa-angle-right"></i>&nbsp; Evening</a></li>
                      <li class="cat-item"><a href="shop_grid.html"><i class="fa fa-angle-right"></i>&nbsp; Hoodies</a></li>
                    </ul>
                  </li>
                  <li class="cat-item"><a href="shop_grid.html"><i class="fa fa-angle-right"></i>&nbsp; Jackets</a> </li>
                  <li class="cat-item"><a href="shop_grid.html"><i class="fa fa-angle-right"></i>&nbsp; Shoes</a> </li>
                </ul>
              </li>
              <li class="cat-item"><a href="shop_grid.html">Electronics</a></li>
              <li class="cat-item"><a href="shop_grid.html">Furniture</a></li>
              <li class="cat-item"><a href="shop_grid.html">KItchen</a></li>
            </ul>
          </div>
          <div class="block shop-by-side">
            <div class="sidebar-bar-title">
              <h3>Shop By</h3>
            </div>
            <div class="block-content">
              <p class="block-subtitle">Shopping Options</p>
              <div class="layered-Category">
                <h2 class="saider-bar-title">Categories</h2>
                <div class="layered-content">
                  <ul class="check-box-list">
                    @foreach ($subcategory as $sub)
                  
                    <li>
                       <a href="{{route('subproduct', $sub->id)}}">
          <span class="glyphicon glyphicon-th-list"></span>
        
                      <label for="jtv1"> <span class="button"></span> {{$sub->subcategory}}<span class="count">
                        </span> </label></a>
                    </li>
                    @endforeach
                  
                  </ul>
                </div>
              </div>
            
            </div>
          </div>
        
          <div class="block sidebar-cart">
            <div class="sidebar-bar-title">
              <h3>Your Cart</h3>
            </div>
            <div class="block-content">
              <p class="amount">There are <a href="shopping_cart.html">{{ Session::has('cart') ? Session::get('cart')->totalQty : '0' }} item</a> in your cart.</p>
              <ul>
                 @if(Session::has('cart'))
                 @foreach($cartprolist as $cartprolist)  
                <li class="item"> <a href="shopping_cart.html" title="Product" class="product-image"><img src="{{ asset('/items/' . $cartprolist['item']['imagePath']) }}" alt="Product "></a>
                  <div class="product-details">
                    <!-- <div class="access"> <a href="#" title="Remove This Item" class="remove-cart"><i class="icon-close"></i></a></div> -->
                    <p class="product-name"> <a href="shopping_cart.html">{{ $cartprolist['item']['title'] }}</a> </p>
                    <strong>{{ $cartprolist['qty'] }}</strong> x <span class="price">${{ $cartprolist['item']['price']  }} = ${{ $cartprolist['qty']*$cartprolist['item']['price'] }}</span> </div>
                </li>
              
                @endforeach                      
              @endif
              </ul>
              <div class="summary">
                <p class="subtotal"> <span class="label">Cart Subtotal:</span> <span class="price"><?php if(!empty($totalPrice)){ echo "$".$totalPrice;} ?></span> </p>
              </div>
              <div class="cart-checkout">
                <button class="button button-checkout" title="Submit" type="submit" onclick="location.href = '{{ url('payment') }}';"><i class="fa fa-check"></i> <span>Checkout</span></button>
              </div>
            </div>
          </div>
          
          <div class="single-img-add sidebar-add-slider ">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> 
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              </ol>
              
              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active"> <a href="{{route('saveupto')}}"><img src="{{asset('front/images/add-slide1.jpg')}}" alt="slide1"></a>
                  <div class="carousel-caption">
                    <h3><a href="single_product.html" title=" Top Product">Sale Up to 50% off</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="#" class="info">shopping Now</a> </div>
                </div>
                <div class="item"> <a href="{{route('popular')}}"><img src="{{asset('front/images/add-slide2.jpg')}}" alt="slide2"></a>
                  <div class="carousel-caption">
                    <h3><a href="single_product.html" title=" Top Product">Smartwatch Collection</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="#" class="info">All Collection</a> </div>
                </div>
                <div class="item"> <a href="{{url('requestproduct/create')}}"><img src="{{asset('front/images/add-slide3.jpg')}}" alt="slide3"></a>
                  <div class="carousel-caption">
                    <h3><a href="single_product.html" title=" Top Product">Summer Sale</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </div>
              </div>
              
              <!-- Controls --> 
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
          </div>
          <div class="block special-product">
            <div class="sidebar-bar-title">
              <h3>Top Products</h3>
            </div>
            <div class="block-content">
              <ul>
               
              @foreach($topproduct as $top)
              
                <li class="item">
                  <div class="products-block-left"> <a href="{{url('shop-details/'.$top->id.'/'.$top->subcategory_id)}}" title="{{$top->title}}" class="product-image"><img src="{{asset('front/images/products/img02.jpg')}}" alt=" Product "></a></div>
                  <div class="products-block-right">
                    <p class="product-name"> <a href="{{url('shop-details/'.$top->id.'/'.$top->subcategory_id)}}">{{$top->title}}</a> </p>
                    <span class="price">${{$top->price}}</span>
                    <div class="rating">
                            <?php $pr=$top->review;
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
                  </div>
                </li>
                 
                @endforeach
              </ul>
              <a class="link-all" href="{{route('topproduct')}}">See More</a> </div>
          </div>
          
        </aside>
      </div>
    </div>
  </div>
  <!-- Main Container End --> 
  <!-- Footer -->
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