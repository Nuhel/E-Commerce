@extends('layouts.design')

@section('content')
 <section class="main-container col1-layout">
    <div class="main container">
      <?php $i=0; ?>
            @foreach($orders as $order)
                <?php $i++; 
                if ($i>0) {
                    if ($i==1) { ?>
                         <center> <h3>Your Order History</h3></center>
                  <?php   } ?>
                    
                 <?php  }
                 else{ ?>
                    <p class="alert alert-success"> You don't Have any order yet!</p>
                <?php } ?>

            @endforeach
    
           
             @if(Session::has('login'))
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                <div id="charge-message" class="alert alert-success">
                    {{ Session::get('login') }}
                </div>
            </div>
        </div>

    @endif  <div>
        
    </div>
            @foreach($orders as $order)
               
                <div class="panel panel-default">
                    <div class="panel-body">
                        <ul class="list-group">
                            @foreach($order->cart->items as $item)
                                <li class="list-group-item">
                                    <span class="badge">${{ $item['price'] }}</span>
                                    {{ $item['item']['title'] }} | {{ $item['qty'] }} product Id:{{  $item['item']['id'] }} Units
                            </li>

                                <li class="list-group-item">
                                    <span class="badge"></span>
                            
                                </li>

                            @endforeach
                        </ul>
                    </div>
                    <div class="panel-footer">
                        <strong>Total Price: ${{ $order->cart->totalPrice }}</strong>
                    </div>
                </div>
            @endforeach

        </div>

    </div>

</section>
@endsection