@extends('layouts.design')

@section('title')
Laravel Shopping Cart
@endsection

@section('content')


 @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
  <!-- Breadcrumbs End --> 
  <!-- Main Container -->
  <div class="main-container col1-layout">
    <div class="container">
      <div class="row">
        <div class="col-main">
          <div class="product-view-area">
            <div class="product-big-image col-xs-12 col-sm-5 col-lg-5 col-md-5">
              <div class="icon-sale-label sale-left">Sale</div>
              <div class="large-image"> <a href="{{asset('/items/' . $product->imagePath)}}" class="cloud-zoom" id="zoom1" rel="useWrapper: false, adjustY:0, adjustX:20"> <img class="zoom-img" src="{{asset('/items/' . $product->imagePath)}}" alt="products"> </a> </div>
            <!-- <div class="flexslider flexslider-thumb">
              <ul class="previews-list slides">
                <li><a href="{{asset('front/images/products/img03.jpg')}}" class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: '{{asset('front/images/products/img05.jpg')}}' "><img src="{{asset('front/images/products/img03.jpg')}}" alt = "Thumbnail 2"/></a></li>
                <li><a href="{{asset('front/images/products/img03.jpg')}}" class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: '{{asset('front/images/products/img03.jpg')}}' "><img src="{{asset('front/images/products/img03.jpg')}}" alt = "Thumbnail 1"/></a></li>
                <li><a href="{{asset('front/images/products/img03.jpg')}}" class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: '{{asset('front/images/products/img03.jpg')}}' "><img src="{{asset('front/images/products/img06.jpg')}}" alt = "Thumbnail 1"/></a></li>
                <li><a href="{{asset('front/images/products/img03.jpg')}}" class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: '{{asset('front/images/products/img03.jpg')}}' "><img src="{{asset('front/images/products/img03.jpg')}}" alt = "Thumbnail 2"/></a></li>
                <li><a href="{{asset('front/images/products/img03.jpg')}}" class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: '{{asset('front/images/products/img07.jpg')}}' "><img src="{{asset('front/images/products/img03.jpg')}}" alt = "Thumbnail 2"/></a></li>
              </ul>
            </div> -->
            
            <!-- end: more-images --> 
            
          </div>
          <div class="col-xs-12 col-sm-7 col-lg-7 col-md-7 product-details-area">

            <div class="product-name">
              <h1>{{ $product->title }}</h1>
            </div>
            <div class="price-box">
              <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> ${{ $product->price }} </span> </p>
              <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> </span> </p>
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
            <p class="rating-links"> <a href="#"></a> <span class="separator"></span> <a href="#"></a> </p>
            <p class="availability in-stock pull-right">Availability: <span>{{ $product->stock }}</span></p>
          </div>
          <div class="short-description">
            <h2>Quick Overview</h2>
            <p>{{ $product->description }}</p>

          </div>

          <div class="product-variation">
            <!-- <form action="#" method="post"> -->
              <div class="cart-plus-minus">
                <!-- <label for="qty">Quantity:</label> -->
                 <a type="button" style=" width:300px; text-align: center; position: static; padding: 20px; border-radius: 5px;"  href="{{ route('product.addToCart', ['id' => $product->id]) }}" class="add-to-cart-mt" data-id="{{ $product->id }}">add to cart</a>
                <!-- <div class="numbers-row">
                  <div onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;" class="dec qtybutton"><i class="fa fa-minus">&nbsp;</i></div>
                  <input type="text" class="qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                  <div onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="inc qtybutton"><i class="fa fa-plus">&nbsp;</i></div>
                </div> -->
              </div>
              <!-- <button class="button pro-add-to-cart" title="Add to Cart" type="button"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button> -->

              <div class="red_button add_to_cart_button">
              </div>
              <!--  </form> -->
            </div>
            <div class="product-cart-option">
              <ul>
                <li><div class="mt-button add_to_wishlist"> @if(Auth::check()) <a  href="{{ route('product.addToWishlist',['id' => $product->id]) }}" class="addToWish" data-id="{{ $product->id }}"> <i class="fa fa-heart"></i><span>Add to Wishlist</span> </a>@else
                                    <a  href="{{ route('user.signin') }}" title="Please Sign in First!"> <i class="fa fa-heart"></i>Add to Wishlist</a>@endif
                                   </div></li>
                <li><a href="{{url('compare/'.$product->id.'/'.$product->subcategory_id)}}"><i class="fa fa-retweet"></i><span>Compare</span></a></li>
                <!-- <li><a href="#"><i class="fa fa-envelope"></i><span>Email to a Friend</span></a></li> -->
              </ul>

            </div>
          </div>
        </div>
      </div>
      <div class="product-overview-tab">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="product-tab-inner"> 
              <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                <li class="active"> <a href="#description" data-toggle="tab"> Description </a> </li>  <li> <a href="#reviews" data-toggle="tab">Review</a> </li>      
              </ul>
              <div id="productTabContent" class="tab-content">
                <div class="tab-pane fade in active" id="description">
                  <div class="std">
                    <p>{{ $product->details }} </p>
                  </div>
                </div>
                
                
                <div id="reviews" class="tab-pane fade">
                  <div class="col-sm-5 col-lg-5 col-md-5">
                    <div class="reviews-content-left">
                      <h2>Customer Reviews</h2>
                      {{ $product->comments()->count() }} Review On This Product</h4>
                      @foreach($product->comments as $comment)
                      <div class="review-ratting">
                        <p><a href="#">{{ $comment->comment }}<br>

                        </a> <i>Review by</i> {{ $comment->name }}</p>
                        <table>
                          <tbody><tr>
                            <th>Quality</th>
                            <td>
                              <div class="rating">
                                <?php $pr=$comment->quality;
                                for($i=0; $i<5; $i++){ 
                                  if ($i<$pr) {?> 
                                  <i class="fa fa-star"></i>
                                  <?php  }
                                  else{ ?>
                                  <i class="fa fa-star-o"></i>
                                  <?php  }
                                } ?>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th>Price</th>
                            <td>
                              <div class="rating">
                                <?php $pr=$comment->price;
                                for($i=0; $i<5; $i++){ 
                                  if ($i<$pr) {?> 
                                  <i class="fa fa-star"></i>
                                  <?php  }
                                  else{ ?>
                                  <i class="fa fa-star-o"></i>
                                  <?php  }
                                } ?>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th>Value</th>
                            <td>
                              <div class="rating">
                                <?php $pr=$comment->value;
                                for($i=0; $i<5; $i++){ 
                                  if ($i<$pr) {?> 
                                  <i class="fa fa-star"></i>
                                  <?php  }
                                  else{ ?>
                                  <i class="fa fa-star-o"></i>
                                  <?php  }
                                } ?>
                              </div>
                            </td>
                          </tr>
                        </tbody></table>
                        <p class="author">
                          <small> {{ $comment->created_at->diffForHumans() }}</small>
                        </p>
                        @if(Auth::check())
                        @if((Auth::user()->id)==$comment->user_id)
                        <a href="{{url('edituser/'.$comment->id.'/'.$product->id.'/'.$product->subcategory_id)}}" class="author-time">Edit</a>
                        <a href="{{ url('destroyuser', $comment->id) }}" class="author-time">Delete</a>


                        @endif
                        @endif
                      </div>
                      @endforeach


                    </div>
                  </div>
                  @if(Auth::check())
                  <div class="col-sm-7 col-lg-7 col-md-7">
                    <div class="reviews-content-right">
                      <h2>Write Your Own Review</h2>

                      <h3>You're reviewing: <span>{{$product->title}}</span></h3>
                      <h4>How do you rate this product?<em>*</em></h4>
                      {{ Form::open(['route' => ['comments.store', $product->id, $product->category_id], 'method' => 'POST']) }}

                      <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                      <div class="table-responsive reviews-table">
                        <table>
                          <tbody><tr>
                            <th></th>
                            <th>1 star</th>
                            <th>2 stars</th>
                            <th>3 stars</th>
                            <th>4 stars</th>
                            <th>5 stars</th>
                          </tr>
                          <tr>
                            <td>Quality</td>
                            <td><input type="radio" name="quality" value="1"></td>
                            <td><input type="radio" name="quality" value="2"></td>
                            <td><input type="radio" name="quality" value="3"></td>
                            <td><input type="radio" name="quality" value="4"></td>
                            <td><input type="radio" name="quality" value="5"></td>
                          </tr>
                          <tr>
                            <td>Price</td>
                            <td><input type="radio" name="price" value="1"></td>
                            <td><input type="radio" name="price" value="2"></td>
                            <td><input type="radio" name="price" value="3"></td>
                            <td><input type="radio" name="price" value="4"></td>
                            <td><input type="radio" name="price" value="5"></td>
                          </tr>
                          <tr>
                            <td>Value</td>
                            <td><input type="radio" name="value" value="1"></td>
                            <td><input type="radio" name="value" value="2"></td>
                            <td><input type="radio" name="value" value="3"></td>
                            <td><input type="radio" name="value" value="4"></td>
                            <td><input type="radio" name="value" value="5"></td>
                          </tr>
                        </tbody></table></div>

                        
                        <label>{{ Form::label('name', "Name") }}<em>*</em></label>
                        {{ Form::text('name', null, ['class' => 'form-control']) }} 
                      </div>

                      
                      {{ Form::label('email', "Email") }}<em>*</em></label>
                      <input type="text" name="email" class="form-control">

                      <label>{{ Form::label('comment', "Review") }} <em>*</em></label>

                      {{ Form::textarea('comment', null, ['class' => 'form-control', 'rows' => '5']) }}


                      {{ Form::submit('Add Review', ['class' => 'btn btn-success btn-block', 'style' => 'margin-top:15px;']) }}

                      {{ Form::close() }}

                    </div>
                        @else
                        
                        <div class="col-md-10 col-md-offset-1">
                          <a href="{{url('user/signin')}}" style="width: 100%; float: left; text-align: center; background-color: #333E48; border-radius: 10px; color:white; padding: 30px; font-size: 40px;margin-top: 200px;">Please Login to Add your review</a>
                        </div>
                        @endif
                       
                  </div>
                </div>


              </div>
            </div>
          </div></div>
        </div>
      </div>
</div>
</div>


<!-- Main Container End --> 



<!-- Related Product Slider -->

<div class="container">
  <div class="row">
    <div class="col-xs-12">
     <div class="related-product-area">       
       <div class="page-header">
        <h2>Related Products</h2>
      </div>
      <div class="related-products-pro">
        <div class="slider-items-products">
          <div id="related-product-slider" class="product-flexslider hidden-buttons">
            <div class="slider-items slider-width-col4 fadeInUp">

             @foreach($related as $suggestion)
             <div class="product-item">
              <div class="item-inner fadeInUp">
                <div class="product-thumbnail">

                  <div class="icon-new-label new-right" style="font-size: 5px;">Suggetion</div>
                  <div class="pr-img-area"> <a href="{{url('shop-details/'.$suggestion->id.'/'.$suggestion->subcategory_id)}}"> <img class="first-img" src="{{asset('/items/' . $suggestion->imagePath)}}" alt=""> <img class="hover-img" src="{{asset('/items/' . $suggestion->imagePath)}}" alt=""> </a>
                    <a type="button" href="{{ route('product.addToCart', ['id' => $suggestion->id]) }}" class="add-to-cart-mt" data-id="{{ $suggestion->id }}">add to cart</a>
                  </div>
                  <div class="pr-info-area">
                    <div class="pr-button">
                       <div class="mt-button add_to_wishlist"> @if(Auth::check()) <a  href="{{ route('product.addToWishlist',['id' => $suggestion->id]) }}" class="addToWish" data-id="{{ $suggestion->id }}"> <i class="fa fa-heart"></i> </a>@else
                                    <a  href="{{ route('user.signin') }}" title="Please Sign in First!"> <i class="fa fa-heart"></i> </a>@endif
                                   </div>
                      <div class="mt-button add_to_compare"> <a href="{{url('compare/'.$suggestion->id.'/'.$suggestion->subcategory_id)}}"> <i class="fa fa-signal"></i> </a> </div>
                      <div class="mt-button quick-view"> <a href="{{url('quickview/'.$suggestion->id.'/'.$suggestion->subcategory_id)}}"> <i class="fa fa-search"></i> </a> </div>
                    </div>
                  </div>
                </div>
                <div class="item-info">
                  <div class="info-inner">
                    <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">{{ $suggestion->title }}</a> </div>
                    <div class="item-content">
                      <div class="rating">
                       <?php $pr=$suggestion->review;
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
                      <div class="price-box"> <span class="regular-price"> <span class="price">${{ $suggestion->price }}</span> </span> </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div></div>

  </div>
</div>
</div>
</div>
<!-- Related Product Slider End --> 

<!-- Upsell Product Slider -->
<section class="upsell-product-area">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">

       <div class="page-header">
        <h2>Best Products</h2>
      </div>  
      <div class="slider-items-products">
        <div id="upsell-product-slider" class="product-flexslider hidden-buttons">
          <div class="slider-items slider-width-col4">

            @foreach($best as $bestpro)
            <div class="product-item">
              <div class="item-inner fadeInUp">
                <div class="product-thumbnail">

                  <div class="icon-new-label new-right">Best</div>
                  <div class="pr-img-area"> <a href="{{url('shop-details/'.$bestpro->id.'/'.$bestpro->subcategory_id)}}"> <img class="first-img" src="{{asset('/items/' . $bestpro->imagePath)}}" alt=""> <img class="hover-img" src="{{asset('/items/' . $bestpro->imagePath)}}" alt=""> </a>
                   <a type="button" href="{{ route('product.addToCart', ['id' => $bestpro->id]) }}" class="add-to-cart-mt" data-id="{{ $bestpro->id }}">add to cart</a>
                 </div>
                 <div class="pr-info-area">
                  <div class="pr-button">
                     <div class="mt-button add_to_wishlist"> @if(Auth::check()) <a  href="{{ route('product.addToWishlist',['id' => $bestpro->id]) }}" class="addToWish" data-id="{{ $bestpro->id }}"> <i class="fa fa-heart"></i> </a>@else
                                    <a  href="{{ route('user.signin') }}" title="Please Sign in First!"> <i class="fa fa-heart"></i> </a>@endif
                                   </div>
                    <div class="mt-button add_to_compare"> <a href="{{url('compare/'.$bestpro->id.'/'.$bestpro->subcategory_id)}}"> <i class="fa fa-signal"></i> </a> </div>
                    <div class="mt-button quick-view"> <a href="{{url('quickview/'.$bestpro->id.'/'.$bestpro->subcategory_id)}}"> <i class="fa fa-search"></i> </a> </div>
                  </div>
                </div>
              </div>
              <div class="item-info">
                <div class="info-inner">
                  <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">{{ $bestpro->title }}</a> </div>
                  <div class="item-content">
                    <div class="rating">
                     <?php $pr=$bestpro->review;
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
                    <div class="price-box"> <span class="regular-price"> <span class="price">${{ $bestpro->price }}</span> </span> </div>
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
</section>

<!-- Upsell Product Slider End --> 
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
