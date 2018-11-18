@extends('layouts.design')

@section('title')
    Bikash
@endsection

@section('content')
  <style>
.checkout {
    margin: auto;
    
}

.abc{
    margin-left: 30%;
}
</style>
     <div class="row">
        <div class="col-md-4 col-md-offset-4 abc">
            <br><br>
           <center> <h3>Checkout</h3></center><hr>
            <h4>Your Total: ${{ $total }}</h4><hr>
            <h3>Cash on Delivery!</h3><hr>
            <div class="bikashrole">
                <p><span class="glyphicon glyphicon-ok"></span> Give your accurate mobile number and address.</p>    
                <p><span class="glyphicon glyphicon-ok"></span>Count $1=80 Taka.</p>  
                <p><span class="glyphicon glyphicon-ok"></span> For Dhaka delivery charge is free. Extra 100 taka will be added for outside of Dhaka</p>    
                <p><span class="glyphicon glyphicon-ok"></span> You Will receive a comfirmation call from Warehouse.</p>  
                <hr>
            </div>
            <div class="alert alert-danger {{ !Session::has('error') ? 'hidden' : ''  }}">
                {{ Session::get('error') }}
            </div>
            <form action="{{ route('cashondelivery') }}" method="post">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            
                            <input type="text" id="name" name="name" class="form-control" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            
                            <input type="text" id="address" name="address" class="form-control" placeholder="Address">
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="form-group">
                            
                            <input type="text"  name="mobile" class="form-control" placeholder="Mobile number">
                        </div>
                    </div>
                
                    <hr>
                
                </div>
                {{ csrf_field() }}
                <button type="submit" class="btn btn-success">Buy now</button>
            </form><br><br><br><br>
        </div>
    </div>
@endsection
