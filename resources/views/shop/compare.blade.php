@extends('layouts.design')

@section('title')
    Laravel Shopping Cart
@endsection

@section('content')
  
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="index.html"></a><span>&raquo;</span></li>
           
            <li><strong>Compare</strong></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End --> 
 <!-- Main Container --> 
  <section class="main-container col1-layout">
    <div class="main container">
      <div class="col-main">
        <div class="compare-list">
          <div class="page-title">
            <h2>Compare Products</h2>
          </div>
          <div class="table-responsive">
   
              <table class="table table-bordered table-compare">
                <tr>
                  <td class="compare-label">Product Image</td>
                  
                  <td><a href="{{url('shop-details/'.$id.'/'.$subcategory_id)}}"><img src="{{asset('/items/' . $imagePath)}}" alt="Product" width="230"></a></td>

                  <td><a href="{{url('shop-details/'.$id1.'/'.$subcategory_id1)}}"><img src="{{asset('/items/' . $imagePath1)}}" alt="Product" width="230"></a></td>

                  <td><a href="{{url('shop-details/'.$id2.'/'.$subcategory_id2)}}"><img src="{{asset('/items/' . $imagePath2)}}" alt="Product" width="230"></a></td>

                  <td><a href="{{url('shop-details/'.$id3.'/'.$subcategory_id3)}}"><img src="{{asset('/items/' . $imagePath3)}}" alt="Product" width="230"></a></td>
                </tr>
                <tr>
                  <td class="compare-label">Product Name</td>
                  <td><a href="#">{{$productname}}</a></td>
                  <td><a href="#">{{$productname1}} </a></td>
                  <td><a href="#">{{$productname2}}</a></td>
                  <td><a href="#">{{$productname3}} </a></td>
                </tr>
                <tr>
                  <td class="compare-label">Rating</td>
                  <td><div class="rating">
                    <div class="rating">
                                   <?php $pr = $review;
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
                  </div></td>
                  <td><div class="rating">
                    <?php $pr = $review1;
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
                  </div></td>
                  <td><div class="rating">
                                      <?php $pr = $review2;
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
                                       } ?> </div></td>
                  <td><div class="rating"><?php $pr = $review3;
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
                                       } ?> </div></td>
                  
                  
                </tr>
                <tr>
                  <td class="compare-label">Price</td>
                  <td class="price">${{$price}}</td>
                  <td class="price">${{$price1}}</td>
                  <td class="price">${{$price2}}</td>
                  <td class="price">${{$price3}}</td>
                </tr>
                <tr>
                  <td class="compare-label">Description</td>
                  <td>{{$description}}</td>
                  <td>{{$description1}}</td>
                  <td>{{$description2}}</td>
                  <td>{{$description3}}</td>
                </tr>
                
                <tr>
                  <td class="compare-label">Availability</td>
                  <td class="instock">{{$stock}}</td>
                  <td class="outofstock">{{$stock1}}</td>
                  <td class="instock">{{$stock2}}</td>
                  <td class="instock">{{$stock3}}</td>
                </tr>
               
                <tr>
                  <td class="compare-label">Action</td>
                  <td class="action"><a href="{{ route('product.addToCart', ['id' => $id]) }}" class="addtoc" data-id="{{ $id }}" ><i class="fa fa-shopping-cart" style="border-radius: 100%;padding: 0px 12px 0 10px;width: 35px;height: 35px;text-align: center;    line-height: 31px; background-color: #333E48; color: white;" ></i></a>
                    @if(Auth::check())
                    <a href="{{ route('product.addToWishlist',['id' => $id]) }}" class="addToWish" data-id="{{ $id }}" ><i class="fa fa-heart" style="border-radius: 100%;padding: 0px 12px 0 10px;width: 35px;height: 35px;text-align: center;line-height: 31px; background-color: #FED700;"></i></a>
                    @else
                     <a href="{{ url('user/signin') }}" ><i class="fa fa-heart" style="border-radius: 100%;padding: 0px 12px 0 10px;width: 35px;height: 35px;text-align: center;line-height: 31px; background-color: #FED700;"></i></a>
                     @endif

                    </td>
                  <td class="action"><a href="{{ route('product.addToCart', ['id' => $id1]) }}" class="addtoc" data-id="{{ $id1 }}" ><i class="fa fa-shopping-cart" style="border-radius: 100%;padding: 0px 12px 0 10px;width: 35px;height: 35px;text-align: center;    line-height: 31px; background-color: #333E48; color: white;" ></i></a>

                     @if(Auth::check())
                    <a href="{{ route('product.addToWishlist',['id' => $id1]) }}" class="addToWish" data-id="{{ $id1 }}" ><i class="fa fa-heart" style="border-radius: 100%;padding: 0px 12px 0 10px;width: 35px;height: 35px;text-align: center;line-height: 31px; background-color: #FED700;"></i></a>
                    @else
                     <a href="{{ url('user/signin') }}" ><i class="fa fa-heart" style="border-radius: 100%;padding: 0px 12px 0 10px;width: 35px;height: 35px;text-align: center;line-height: 31px; background-color: #FED700;"></i></a>
                     @endif

                    </td>
                    <td class="action"><a href="{{ route('product.addToCart', ['id' => $id2]) }}" class="addtoc" data-id="{{ $id2 }}" ><i class="fa fa-shopping-cart" style="border-radius: 100%;padding: 0px 12px 0 10px;width: 35px;height: 35px;text-align: center;    line-height: 31px; background-color: #333E48; color: white;" ></i></a>

                     @if(Auth::check())
                    <a href="{{ route('product.addToWishlist',['id' => $id2]) }}" class="addToWish" data-id="{{ $id2 }}" ><i class="fa fa-heart" style="border-radius: 100%;padding: 0px 12px 0 10px;width: 35px;height: 35px;text-align: center;line-height: 31px; background-color: #FED700;"></i></a>
                    @else
                     <a href="{{ url('user/signin') }}" ><i class="fa fa-heart" style="border-radius: 100%;padding: 0px 12px 0 10px;width: 35px;height: 35px;text-align: center;line-height: 31px; background-color: #FED700;"></i></a>
                     @endif

                    </td><td class="action"><a href="{{ route('product.addToCart', ['id' => $id3]) }}" class="addtoc" data-id="{{ $id3 }}" ><i class="fa fa-shopping-cart" style="border-radius: 100%;padding: 0px 12px 0 10px;width: 35px;height: 35px;text-align: center;    line-height: 31px; background-color: #333E48; color: white;" ></i></a>

                     @if(Auth::check())
                    <a href="{{ route('product.addToWishlist',['id' => $id3]) }}" class="addToWish" data-id="{{ $id3 }}" ><i class="fa fa-heart" style="border-radius: 100%;padding: 0px 12px 0 10px;width: 35px;height: 35px;text-align: center;line-height: 31px; background-color: #FED700;"></i></a>
                    @else
                     <a href="{{ url('user/signin') }}" ><i class="fa fa-heart" style="border-radius: 100%;padding: 0px 12px 0 10px;width: 35px;height: 35px;text-align: center;line-height: 31px; background-color: #FED700;"></i></a>
                     @endif
                    </td>
                </tr>
              </table>
   </div>
     <center><a href="" onclick="myFunction()" style="padding: 6px;
    background: #333E48;
    position: auto;
    border-radius: 5px; color: white; padding: 10px;">Compare with more products</a>
          </center>
        </div>

      </div>
    </div>


<script>
function myFunction() {
    location.reload();
}
</script>
  </section>
     {{-- Ajax --}}
    <!-- index::Add cart -->    
    {!! Html::script('js/jquery-3.2.1.min.js'); !!}
    {!! Html::script('styles/bootstrap4/bootstrap.min.js'); !!}
    <script>
        $(document).ready(function() { 
            $('.addtoc').on('click', function(e) {     
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