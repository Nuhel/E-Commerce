@extends('layouts.template')

@section('title')
    Laravel Shopping Cart
@endsection
<style>
    
    .men{
        margin: auto;
        margin-top: 200px;
    }
</style>
@section('content')


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
                              

                                  <div class="favorite favorite_left"><a href="{{ url('add-to-wishlist',$product->id) }}">Wishlisht</a></div>

                                @else

                                   <div class="favorite favorite_left"><a href="{{ route('user.signin') }}">Wishlisht</a></div>
                                 @endif

                                <div class="product_info">
                                    <h6 class="product_name">{{ $product->title }}</h6>
                                    <div class="product_price">${{ $product->price }}<span>{{ $product->price*1.5 }}</span></div>
                                </div>
                                <center><a href="{{url('shop-details/'.$product->id.'/'.$product->category_id)}}">details</a></center>
                            </div>
                            

               <!-- <a href="{{ route('product.details', ['id' => $product->id], ['category_id' => $product->category_id]) }}">Details</a> -->


                             <div class="red_button add_to_cart_button"><a href="{{ route('product.addToCart', ['id' => $product->id]) }}">add to cart</a>
                             </div>
                        </div>

            @endforeach
      
    @endforeach

                   
                        <!-- Product 10 -->

                       
                    </div>
                </div>
            </div>
</section>


@endsection