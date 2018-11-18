@extends('layouts.design')


@section('content')
  
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="index.html"></a><span>&raquo;</span></li>
            <li><strong>Wishlist</strong></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End --> 
  <!-- Main Container -->
  <section class="main-container col2-right-layout">
    <div class="main container">
      <div class="row">
        <div class="col-main col-sm-9 col-xs-12">
          <div class="my-account">
            <div class="page-title">
              <h2>My Wishlist</h2>
            </div>
            <div class="wishlist-item table-responsive">
              <table class="col-md-12">
                <thead>
                  <tr>
                    <th class="th-delate">Remove</th>
                    <th class="th-product">Images</th>
                    <th class="th-details">Product Name</th>
                    <th class="th-price">Unit Price</th>
                    <th class="th-total th-add-to-cart">Add to Cart </th>
                  </tr>
                </thead>
                <tbody>
                @foreach($wishlists as $wishlist) 
                  <tr>
                    <td class="th-delate"><a href="{{ url('wishlist',$wishlist->wishlist_id)}}">X</a></td>
                    <td class="th-product"><a href="#"><img src="{{asset('/items/' . $wishlist->imagePath)}}" alt="cart"></a></td>
                    <td class="th-details"><h2><a href="#">{{$wishlist->title}}</a></h2></td>
                    <td class="th-price">${{$wishlist->price}}</td>
                    <th class="td-add-to-cart"><a href="{{ route('product.addToCart', ['id' => $wishlist->id]) }}" class="addto" data-id="{{ $wishlist->id }}"> Add to Cart</a></th>
                  </tr>
              @endforeach
                </tbody>
              </table>
              <!-- <a href="checkout.html" class="all-cart">Add all to cart</a> --> </div>
          </div>
        </div>
        <aside class="right sidebar col-sm-3 col-xs-12">
          <div class="sidebar-account block">
            <div class="sidebar-bar-title">
              <h3>My Account</h3>
            </div>
            <div class="block-content">
              <ul>
                
                <li><a href="{{ url('user/profile') }}">My Order</a></li>
                <li class="current"><a  href="#">My Wishlist</a></li>
                <li><a href="{{ route('product.shoppingCart') }}">My Cart</a></li>
                
              </ul>
            </div>
          </div>
          
        </aside>
      </div>
    </div>
  </section>
  <!-- Footer -->
  
  <footer>
    <div class="footer-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-7">
            <form id="newsletter-validate-detail" method="post" action="#">
              <h3 class="hidden-sm">Sign up for newsletter</h3>
              <div class="newsletter-inner">
                <input class="newsletter-email" name='Email' placeholder='Enter Your Email'/>
                <button class="button subscribe" type="submit" title="Subscribe">Subscribe</button>
              </div>
            </form>
          </div>
          <div class="social col-md-4 col-sm-5">
            <ul class="inline-mode">
              <li class="social-network fb"><a title="Connect us on Facebook" target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
              <li class="social-network googleplus"><a title="Connect us on Google+" target="_blank" href="#"><i class="fa fa-google-plus"></i></a></li>
              <li class="social-network tw"><a title="Connect us on Twitter" target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
              <li class="social-network linkedin"><a title="Connect us on Linkedin" target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
              <li class="social-network rss"><a title="Connect us on RSS" target="_blank" href="#"><i class="fa fa-rss"></i></a></li>
              <li class="social-network instagram"><a title="Connect us on Instagram" target="_blank" href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-4 col-xs-12 col-lg-3">
          <div class="footer-logo"><a href="index.html"><img src="images/footer-logo.png" alt="fotter logo"></a> </div>
          <p>Lorem Ipsum is simply dummy text of the print and typesetting industry.</p>
          <div class="footer-content">
            <div class="email"> <i class="fa fa-envelope"></i>
              <p><a href="mailto:support@template.com">support@template.com</a></p>
            </div>
            <div class="phone"> <i class="fa fa-phone"></i>
              <p>(800) 0123 456 789</p>
            </div>
            <div class="address"> <i class="fa fa-map-marker"></i>
              <p> My Company, 12/34 - West 21st Street, New York, USA</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-xs-12 col-lg-3 collapsed-block">
          <div class="footer-links">
            <h3 class="links-title">Information<a class="expander visible-xs" href="#TabBlock-1">+</a></h3>
            <div class="tabBlock" id="TabBlock-1">
              <ul class="list-links list-unstyled">
                <li><a href="#s">Delivery Information</a></li>
                <li><a href="#">Discount</a></li>
                <li><a href="sitemap.html">Sitemap</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="faq.html">FAQs</a></li>
                <li><a href="#">Terms &amp; Condition</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-xs-12 col-lg-3 collapsed-block">
          <div class="footer-links">
            <h3 class="links-title">Insider<a class="expander visible-xs" href="#TabBlock-3">+</a></h3>
            <div class="tabBlock" id="TabBlock-3">
              <ul class="list-links list-unstyled">
                <li> <a href="sitemap.html"> Sites Map </a> </li>
                <li> <a href="#">News</a> </li>
                <li> <a href="#">Trends</a> </li>
                <li> <a href="about_us.html">About Us</a> </li>
                <li> <a href="contact_us.html">Contact Us</a> </li>
                <li> <a href="#">My Orders</a> </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-2 col-xs-12 col-lg-3 collapsed-block">
          <div class="footer-links">
            <h3 class="links-title">Service<a class="expander visible-xs" href="#TabBlock-4">+</a></h3>
            <div class="tabBlock" id="TabBlock-4">
              <ul class="list-links list-unstyled">
                <li> <a href="account_page.html">Account</a> </li>
                <li> <a href="wishlist.html">Wishlist</a> </li>
                <li> <a href="shopping_cart.html">Shopping Cart</a> </li>
                <li> <a href="#">Return Policy</a> </li>
                <li> <a href="#">Special</a> </li>
                <li> <a href="#">Lookbook</a> </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    

     {{-- Ajax --}}
    <!-- index::Add cart -->    
    {!! Html::script('js/jquery-3.2.1.min.js'); !!}
    {!! Html::script('styles/bootstrap4/bootstrap.min.js'); !!}
    <script>
        $(document).ready(function() { 
            $('.addto').on('click', function(e) {     
                e.preventDefault();

                var product_id=$(this).attr("data-id");
               
                var item = $('#checkout_items_cart').html();

                $.ajax({
                    url : "add-to-cart",
                    type: "GET",
                    data: {'id':product_id},
                    dataType: "JSON",
                    success: function (data) {
                        parseitem=parseInt(item);
                        if (item == "") {
                            addcart = 1;
                        }
                        else{
                           addcart = parseitem + 1; 
                        }
                        $("#checkout_items_cart").html(addcart);
                    },
                    error: function (textStatus, errorThrown) {
                        alert("Somethimg Error")
                    }
                });                 
            }); 
         
   
            $('.addToWish').on('click', function(ea) {     
                ea.preventDefault();

                var product_id=$(this).attr("data-id");
                var item = $('#checkout_items').html();

                $.ajax({
                    url : "add-to-wishlist",
                    type: "GET",
                    data: {'id':product_id},
                    dataType: "JSON",
                    success: function (data) {
                        parseitem =parseInt(item);
                        if (item == "") {
                            addwish = 1;
                        }
                        else{
                           addwish = parseitem + 1; 
                        }
                        $("#checkout_items").html(addwish);
                    },
                    error: function (textStatus, errorThrown) {
                        alert("Already Added")
                    }
                });                 
            }); 
            });
        
    </script>
  @endsection