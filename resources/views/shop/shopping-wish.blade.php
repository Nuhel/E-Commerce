@extends('layouts.template')

@section('title')
    Laravel Shopping Cart
@endsection

@section('content')
    @if(Session::has('wish'))

    <style>
.center {
    margin: auto;   
}
</style>
        <div class="row">
           <div class="col-md-8 col-md-offset-2">
                <ul class="list-group"><br><br><br><br><br><br><br>
                    <h3>Your Wishlist</h3>

                    @foreach($products as $product)
                            <li class="list-group-item">
                                
                                <strong>{{ $product['item']['title'] }}</strong>
                                <span class="label label-success">${{ $product['price'] }}</span>
                                
                                    <ul>
                                        
                                        <li><a href="{{ route('product.addToCart', ['id' => $product['item']['id']]) }}">Add To Cart</a></li>
                                    </ul>
                                </div>
                            </li>
                    @endforeach
                </ul>
            </div>
        </div>
      
        <hr>
     


    @else
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <h2>No Items in Cart!</h2>
            </div>
        </div>
    @endif


@endsection