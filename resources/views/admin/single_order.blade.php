@extends('layouts.adminlayout')

@section('content')

<style type="text/css">
.table{
  margin-top: 20px;
}  
</style>

          
           <center> <h3>Order Details</h3></center>
  			 <div class="col-md-12">

               
    
            <table class="table">
            
                <thead style="color:#9DC549;">
            
            <th>product Name</th>
            <th>Product Id</th>
            <th>Quantity</th>
            <th>Unit Price</th>
                    
                </thead>

                <tbody>


            @foreach($orders as $order)


            	@if($order->id == $id)

               			<tr>
               						
                            @foreach($order->cart->items as $item)
                               		
                               		<td>{{ $item['item']['title'] }}</td>
                               		<td>{{  $item['item']['id'] }}</td>
                               		<td>{{ $item['qty'] }} </td>
                                    <td>${{ $item['price'] }}</td>
                                    
                                     
                                     
                            </tr>
                            @endforeach
                        
                    
                    <div class="">
                      <hr>
                        <strong><h4 style="color:#9DC549;">Total Price: ${{ $order->cart->totalPrice }}</h4></strong>
                        <hr>
                    </div>

            @if($order->status=='Pending')
              <div>
              <a style="background-color:#9DC549; color:white;border-radius: 10px; padding: 5px;" href="{{route('orderconfirm', $order->id)}} ">Delivered</a>
              <a style="background-color:#E64234; color:white;border-radius: 10px; padding: 5px;" href="{{route('ordercancel', $order->id)}}">Cancel</a>

            </div>
            @else
            <p style="background-color: #9DC549; font-style: italic; color:white; text-align: center;">{{ $order->status }} on {{date('M j, Y H:i', strtotime($order->created_at))}}</p>
            <a style="background-color:#9DC549; color:white;border-radius: 10px; padding: 5px;" href="{{route('reconsider', $order->id)}}">Reconsider</a>
            @endif
                
                @endif

          
      

            @endforeach

                </tbody>
            </table>
 
            
        </div>
    
@endsection