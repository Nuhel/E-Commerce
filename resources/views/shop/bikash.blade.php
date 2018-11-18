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
            <h4>Your Total: ${{ $total }}</h4>
            <hr>
            <h3>Payment With bikash</h3><hr>
            <div class="bikashrole">
                <p><span class="glyphicon glyphicon-ok"></span> 01717111112 send your money to this number.</p>    
                <p><span class="glyphicon glyphicon-ok"></span>Count $1=80 Taka.</p>    
                <p><span class="glyphicon glyphicon-ok"></span> Add 20 taka extra for every 1000 taka order.</p>    
                <p><span class="glyphicon glyphicon-ok"></span> After sending money call us immediately with your personal number.</p>  
                <hr>
            </div>

            
            <div class="alert alert-danger {{ !Session::has('error') ? 'hidden' : ''  }}">
                {{ Session::get('error') }}
            </div>
           <div id="test"> 
            <form action="{{ route('bikash') }}" method="post">
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
                <button type="submit" class="btn btn-success">Confirm Order!</button>
            </form>
            <br><br>
        </div>
        </div>
    </div>


  

@endsection
