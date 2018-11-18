@extends('layouts.template')

@section('title')
    Laravel Shopping Cart
@endsection

@section('content')


@if(Session::has('success'))
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                <div id="charge-message" class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            </div>
        </div>
    @endif

    @if(Session::has('search'))
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                <div id="charge-message" class="alert alert-success">
                    {{ Session::get('search') }}
                </div>
            </div>
        </div>
    @endif


 <style type="text/css">
    .search{
        margin-top: 150px;
      margin-left: 18%;
    }
</style>

<br>

<div class="search">
    
{!! Form::open(['route' => 'productsearch','files' => true]) !!}
    
{{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}<br>
{!! Form::select('category_id' , array('' => 'Select Category') + $data,null, ['class' => 'form-control'] ) !!}<br>

{{ Form::submit('search', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
{!! Form::close() !!}


</div>

<div class="sub">
    <form action="{{route('sortby')}}" method="POST">
        
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <select name="myselect" id="myselect2" onchange="this.form.submit()">

        <option value="">sort by</option>
        <option value="1">Higher to lower</option>
        <option value="2">Lower to Higher</option>
        <option value="3">Name</option>
        
    </select>
</form>
</div>
            <div class="row">
                <div class="col">
                    <div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>
 @foreach($products->chunk(3) as $productChunk)
     
            @foreach($productChunk as $product)

                        <div class="product-item men">
                            <div class="product discount product_filter">
                                <div class="product_image">
                                     <img src="{{asset('/items/' . $product->imagePath)}}" alt="...">
                                </div>
                               
                                   @if(Auth::check())
                              

                                  <div class="favorite favorite_left"><a href="{{ route('product.addToWishlist',['id' => $product->id]) }}" class="addToWish" data-id="{{ $product->id }}">Wishlisht</a></div>

                                @else

                                   <div class="favorite favorite_left"><a href="{{ route('user.signin') }}">Wishlisht</a></div>

                                 @endif

                                <div class="product_info">
                                    <h6 class="product_name">{{ $product->title }}</h6>
                                    <div class="product_price">${{ $product->price }}<span>{{ $product->price*1.5 }}</span></div>
                                </div>
                                <center><a href="{{url('shop-details/'.$product->id.'/'.$product->subcategory_id)}}">details</a>   <h6 class="product_name">Available {{ $product->quantity }}</h6></center>
                            </div>
                            
                             <div class="red_button add_to_cart_button"><a  href="{{ route('product.addToCart', ['id' => $product->id]) }}" class="addToCart" data-id="{{ $product->id }}">add to cart</a>
                             </div>

                             <div class=""><a href="{{url('shop-details/'.$product->id.'/'.$product->subcategory_id)}}">compare</a>
                             </div>
                        </div>

            @endforeach
      
    @endforeach

                   
                        <!-- Product 10 -->

                       
                    </div>
                </div>
            </div>
        </div>
    </div>
 {{-- Ajax --}}
    <!-- index::Add cart -->    
    {!! Html::script('js/jquery-3.2.1.min.js'); !!}
    {!! Html::script('styles/bootstrap4/bootstrap.min.js'); !!}
    <script>
        $(document).ready(function() { 
            $('.addToCart').on('click', function(e) {     
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