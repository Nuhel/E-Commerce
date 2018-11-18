@extends('layouts.design')

@section('title')
    Laravel Shopping Cart
@endsection

@section('content')
  
  <!-- Main Container -->

  <section class="main-container col1-layout">
    <div class="main container">
      <div class="col-main">
        <div class="cart">
          
          <div class="page-content page-order"><div class="page-title">
            <h2>Shopping Cart</h2>
          </div>
            
         @if(Session::has('cart'))   
            <div class="order-detail-content">
              <div class="table-responsive">
                <table class="table table-bordered cart_summary">
                  <thead>
                    <tr>
                      <th class="cart_product">Product</th>
                      <th>Description</th>
                      <th>Avail.</th>
                      <th>Unit price</th>
                      <th>Qty</th>
                      <th>Total</th>
                      <th  class="action"><i class="fa fa-trash-o"></i></th>
                    </tr>
                  </thead>
                  <tbody>
                     @foreach($products as $product)
                    <tr>
                      <td class="cart_product"><a href="#"><img src="{{asset('/items/' . $product['item']['imagePath'])}}" alt="Product"></a></td>
                      <td class="cart_description"><p class="product-name"><a href="#">{{ $product['item']['title'] }} </a></p>
                        </td>
                      <td class="availability in-stock"><span class="label">{{ $product['item']['stock']  }}</span></td>
                      <td class="price"><span class="price{{$product['item']['id'] }}">${{ $product['item']['price']  }}</span></td>
                      <td class="qty"><span><a href="{{ route('product.reduceByOne', ['id' => $product['item']['id']]) }}"  data-id="{{$product['item']['id'] }}"  class="sub">- </a></span><span class="quantity{{$product['item']['id'] }}">{{ $product['qty'] }}</span><span><a href="{{ route('product.increaseByOne', ['id' => $product['item']['id']]) }}" data-id="{{$product['item']['id'] }}"  class="add"> +</a></span></td>
                      <td class="price"><span class="totalprice{{$product['item']['id'] }}">${{ $product['price'] }}</span></td>
                      <td class="action"><a href="{{ route('product.remove', ['id' => $product['item']['id']]) }}" data-id="{{$product['item']['id'] }}" class="del"><i class="icon-close"></i></a></td>
                    </tr>
                     @endforeach
                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan="2" rowspan="2"></td>
                      <td colspan="3">Total products (tax incl.)</td>
                      <td colspan="3"><p><strong> $<span class="total">{{ $totalPrice }} </span></strong></p></td>
                      
                    </tr>
                    <tr>
                      <td colspan="3"><strong>Total</strong></td>
                      <td colspan="2"><h3><strong>$<span class="total">{{ $totalPrice }} </span></strong></h3></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <div class="cart_navigation"> <a class="continue-btn" href="{{url('shop')}}"><i class="fa fa-arrow-left"> </i>&nbsp; Continue shopping</a> <a class="checkout-btn" href="{{url('payment')}}"><i class="fa fa-check"></i> Proceed to checkout</a> </div>
            </div>
                @else
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
               <br><br> <center><h2>No item in Cart!</h2></center> <br><br>
            </div>
        </div>
    @endif
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- Ajax --}}
    <!-- index::Add cart -->    
    {!! Html::script('js/jquery-3.2.1.min.js'); !!}
    {!! Html::script('styles/bootstrap4/bootstrap.min.js'); !!}

    <script>
        $(document).ready(function() { 
            $('.add').on('click', function(e) {     
                e.preventDefault();

                var product_id=$(this).attr("data-id");
                
                // product Quantity               
                var item = $('.quantity'+product_id).html();

                // Total item in top nav bar cart icon
                var totalitem = $('#checkout_items_cart').html()

                // Product Price
                var getprice = $('.price'+product_id).html()

                var productprice = getprice.replace("$", ""); // Delete $

                // Total Price of a product
                var gettotalproductprice = $('.totalprice'+product_id).html()

                var totalproductprice = gettotalproductprice.replace("$", ""); // Delete $

                // Total Price of Cart
                var totalprice = $('.total').html()

                $.ajax({
                    url : "/increase",
                    type: "GET",
                    data: {'id':product_id},
                    
                    dataType: "JSON",
                    
                    success: function (data) {
                        parseitem=parseInt(item);

                        parsetotalitem=parseInt(totalitem);

                        if (item == "") {
                            addcart = 1;
                        }
                        else{
                           addcart = parseitem + 1; 
                           carttotal = parsetotalitem+1;
                        }
                        var addprice = parseInt(productprice) + parseInt(totalproductprice); // increase Product price by increasing quantity
                        var add = '$' + addprice

                        var addtotalprice = parseInt(productprice) + parseInt(totalprice);  // increase Total Cart Price


                        $(".quantity"+product_id).html(addcart);
                        $('#checkout_items_cart').html(carttotal)
                        $('.totalprice'+product_id).html(add)

                        $('.total').html(addtotalprice)
                    },
                    error: function (textStatus, errorThrown) {
                        alert("Somethimg Error")
                    }
                });                 
            }); 
         });
        
    </script>


    <script>
        $(document).ready(function() { 
            $('.sub').on('click', function(e) {     
                e.preventDefault();

                var product_id=$(this).attr("data-id");
                
                // product Quantity               
                var item = $('.quantity'+product_id).html();


                // Total item in top nav bar cart icon
                var totalitem = $('#checkout_items_cart').html()

                // Product Price
                var getprice = $('.price'+product_id).html()
  
                var productprice = getprice.replace("$", ""); // Delete $

                // Total Price of a product
                var gettotalproductprice = $('.totalprice'+product_id).html()

                var totalproductprice = gettotalproductprice.replace("$", ""); // Delete $

                // Total Price of Cart
                var totalprice = $('.total').html()

                $.ajax({
                    url : "/reduce",
                    type: "GET",
                    data: {'id':product_id},
                    
                    dataType: "JSON",
                    
                    success: function (data) {
                        parseitem=parseInt(item);

                        parsetotalitem=parseInt(totalitem);

                        if (item == "") {
                            addcart = 1;
                        }
                        else{
                           addcart = parseitem - 1; 
                           carttotal = parsetotalitem-1;
                        }
                        var addprice = parseInt(totalproductprice) - parseInt(productprice); // increase Product price by increasing quantity
                        var add = '$' + addprice

                        var addtotalprice = parseInt(totalprice) - parseInt(productprice);  // increase Total Cart Price
                       

                        $(".quantity"+product_id).html(addcart);
                        $('#checkout_items_cart').html(carttotal)
                        $('.totalprice'+product_id).html(add)

                        $('.total').html(addtotalprice)
                    },
                    error: function (textStatus, errorThrown) {
                        alert("Somethimg Error")
                    }
                });                 
            }); 
         });
        
    </script>


    <script>
        $(document).ready(function() { 
            $('.del').on('click', function(e) {     
                e.preventDefault();
                $(this).closest('tr').hide();

                var product_id=$(this).attr("data-id");
                
                // product Quantity               
                var item = $('.quantity'+product_id).html();


                // Total item in top nav bar cart icon
                var totalitem = $('#checkout_items_cart').html()


                // Product Price
                var getprice = $('.price'+product_id).html()
  
                var productprice = getprice.replace("$", ""); // Delete $

                // Total Price of a product
                var gettotalproductprice = $('.totalprice'+product_id).html()

                var totalproductprice = gettotalproductprice.replace("$", ""); // Delete $

                // Total Price of Cart
                var totalprice = $('.total').html()


                $.ajax({
                    url : "/remove",
                    type: "GET",
                    data: {'id':product_id},
                    
                    dataType: "JSON",
                    
                    success: function (data) {
                        parseitem=parseInt(item);

                        parsetotalitem=parseInt(totalitem);

                        var cart= parsetotalitem-parseitem;

                        var addprice = parseInt(totalprice) - parseInt(totalproductprice); // increase Product price by increasing quantity
                        var add = '$' + addprice

                        var addtotalprice = parseInt(totalprice) - parseInt(productprice);  // increase Total Cart Price
                       

                       // $(".quantity"+product_id).html(addcart);
                        $('#checkout_items_cart').html(cart)
                        $('.totalprice'+product_id).html(add)

                        $('.total').html(addprice)
                    },
                    error: function (textStatus, errorThrown) {
                        alert("Somethimg Error")
                    }
                });                 
            }); 
         });
        
    </script>
  @endsection