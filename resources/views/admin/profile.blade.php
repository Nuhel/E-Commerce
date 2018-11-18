@extends('layouts.adminlayout')



@section('content')
  <div class="col-md-12">

               
    
            <table class="table">
            
                <thead>
            <th>Order Id</th>
            <th>Customer Name</th>
            <th>Customer Address</th>
            <th>Order Date </th>
            <th>Total Price</th>
            <th>Status</th>
            <th>details</th>
                    
                </thead>

                <tbody>

                      
                   @foreach($orders as $order)
                   
                                            
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->name }}</td>
                            <td>{{ $order->address }}</td>
                            <td>{{ $order->created_at->diffForHumans()}}</td>
                             <td>${{ $order->cart->totalPrice }}</td>
                            <td style="background-color:#456280; border-radius: 10px; padding: -10px; color:white; text-align: center;">{{ $order->status }}</td>

                            <td><center><a href="{{ route('single_order', $order->id) }}"><i class="glyphicon glyphicon-eye-open"></i></a></center></td>
                           
                         
                        </tr>
                   
                   
                 @endforeach


                    
                    

                </tbody>
            </table>
            
                    <div style="margin-left: 40%;">
      <ul class="pagination">
        {{ $orders->links() }}
      </ul>
    </div>
        </div>
    



@endsection