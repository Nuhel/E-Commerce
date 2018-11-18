@extends('layouts.design')

@section('title')
    Laravel Shopping Cart
@endsection

@section('content')



{!! Html::script('js/jquery-3.2.1.min.js'); !!}
{!! Html::script('styles/bootstrap4/popper.js'); !!}
{!! Html::script('styles/bootstrap4/bootstrap.min.js'); !!}
{!! Html::script('plugins/Isotope/isotope.pkgd.min.js'); !!}
{!! Html::script('plugins/OwlCarousel2-2.2.1/owl.carousel.js'); !!}
{!! Html::script('plugins/easing/easing.js'); !!}
{!! Html::script('js/custom.js'); !!}
 
     <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <hr>
            <center> <h3>Checkout</h3></center><hr>
            <hr>
            <h4>Cart Total: ${{ $total }}</h4><hr>
            <div id="charge-error" class="alert alert-danger {{ !Session::has('error') ? 'hidden' : ''  }}">
                {{ Session::get('error') }}
            </div>
            <form action="{{ route('checkout') }}" method="post" id="checkout-form">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" class="form-control" required name="name">
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" id="address" class="form-control" required name="address">
                        </div>
                    </div>
                    <hr>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="card-name">Card Holder Name</label>
                            <input type="text" id="card-name" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="card-number">Credit Card Number</label>
                            <input type="text" id="card-number" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="card-expiry-month">Expiration Month</label>
                                    <input type="text" id="card-expiry-month" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="card-expiry-year">Expiration Year</label>
                                    <input type="text" id="card-expiry-year" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="card-cvc">CVC</label>
                            <input type="text" id="card-cvc" class="form-control" required>
                        </div>
                    </div>
                </div>
                {{ csrf_field() }}
                <button type="submit" class="btn btn-success">Buy now</button>
            </form><br><br> 
        </div>
    </div>
     <script type="text/javascript" src="{{asset('https://js.stripe.com/v2/')}}"></script>
    <script type="text/javascript" src="{{ URL::to('src/js/checkout.js') }}"></script>
@endsection

@section('scripts')
    <script type="text/javascript" src="{{asset('https://js.stripe.com/v2/')}}"></script>
    <script type="text/javascript" src="{{ URL::to('src/js/checkout.js') }}"></script>

@endsection