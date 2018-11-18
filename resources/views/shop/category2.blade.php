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
@if(Session::has('success'))
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                <div id="charge-message" class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            </div>
        </div>
    @endif

   <br><br><br><br><br> 
{!! Form::open(['route' => 'product.category','files' => true]) !!} 
{!! Form::label('category_id', 'category_id'); !!}
{{ Form::text('category_id', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}<br>
{{ Form::submit('Submit', array('class' => 'btn btn-info btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
{!! Form::close() !!}

 @foreach($products->chunk(3) as $productChunk)
     
            @foreach($productChunk as $product)

                        <div class="product-item men">
                            <div class="product discount product_filter">
                                <div class="product_image">
                                     <img src="{{ $product->imagePath }}" alt="...">
                                </div>
                                <div class="favorite favorite_left"></div>
                                   @if(Auth::check())
                                
                                <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><a href="{{ route('product.addToWish', ['id' => $product->id]) }}">Wishlisht</a></div>

                                @else

                                   <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><a href="{{ route('user.signin') }}">Wishlisht</a></div>
                                 @endif

                                <div class="product_info">
                                    <h6 class="product_name">{{ $product->title }}</h6>
                                    <div class="product_price">${{ $product->price }}<span>$590.00</span></div>
                                </div>
                            </div>

               <a href="{{ route('product.details', ['id' => $product->id]) }}">Details</a>


                             <div class="red_button add_to_cart_button"><a href="{{ route('product.addToCart', ['id' => $product->id]) }}">add to cart</a></div>

                        </div>
                        <br> <br>


            @endforeach
      
    @endforeach


@endsection