@extends('layouts.design')


@section('content')
  
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="index.html"></a><span>&raquo;</span></li>
            <li><strong>Sitemap </strong></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End --> 
  
  <!-- Sitemap  -->
  <section class="container">
    
    <div class="sitemap-page"><div class="page-title">
      <center><h2>Sitemap</h2></center><hr>
    </div>
      <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
        <ul class="simple-list arrow-list bold-list">
          @foreach($category as $cat)
          @if($cat->id<=3)
          <li> <a href="{{route('categoryproduct', $cat->id)}}">{{$cat->category}}</a>
            <ul>
              @foreach($subcategory as $subcat)
              @if($cat->id == $subcat->category_id)
              <li><a href="{{route('subproduct', $subcat->id)}}">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-right">&nbsp;</i>{{$subcat->subcategory}}</a></li>
              @endif
              @endforeach
            </ul>
          </li>
          @endif
          @endforeach
        </ul>
      </div>

      <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
        <ul class="simple-list arrow-list bold-list">
          @foreach($category as $cat)
          @if($cat->id>=4)
          <li> <a href="{{route('categoryproduct', $cat->id)}}">{{$cat->category}}</a>
            <ul>
              @foreach($subcategory as $subcat)
              @if($cat->id == $subcat->category_id)
              <li><a href="{{route('subproduct', $subcat->id)}}">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-right">&nbsp;</i>{{$subcat->subcategory}}</a></li>
              @endif
              @endforeach
            </ul>
          </li>
          @endif
          @endforeach
        </ul>
      </div>
      <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
        <ul class="simple-list arrow-list bold-list">
          
          <li> <a href="#">My Account</a>
            <ul>
              <li><a href="{{ route('user.profile') }}">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-right">&nbsp;</i>My Account</a></li>
              <li><a href="{{ route('user.profile') }}">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-right">&nbsp;</i>Order history</a></li>
              <li><a href="{{ route('product.shoppingCart') }}">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-right">&nbsp;</i>Shopping Cart</a></li>
            </ul>
          </li>
          
        </ul>
      </div>

         <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
        <ul class="simple-list arrow-list bold-list">
          
          
          <li> <a href="#">Pages</a>
            <ul>
              <li><a href="{{url('blog')}}">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-right">&nbsp;</i>Blog</a></li>
              <li><a href="{{url('shop')}}">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-right">&nbsp;</i>Shop</a></li>
              <li><a href="{{route('popular')}}">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-right">&nbsp;</i>Popular</a></li>
              <li><a href="{{url('topproduct')}}">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-right">&nbsp;</i>Best Seller</a></li>
              <li><a href="{{ url('contact/create') }}">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-right">&nbsp;</i>Contact Us</a></li>
              <li><a href="{{url('aboutus')}}">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-right">&nbsp;</i>About Us</a></li>
              
            </ul>
          </li>
        </ul>
      </div>
      
      <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
        <ul class="simple-list arrow-list bold-list">
          
          
          <li> <a href="#">Information</a>
            <ul>
              <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-right">&nbsp;</i>Terms & Condition</a></li>
              <li><a href="{{ url('faq') }}">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-right">&nbsp;</i>FAQs</a></li>
              <li><a href="{{ url('aboutus') }}">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-right">&nbsp;</i>Privacy Policy</a></li>
              <li><a href="{{ url('contact/create') }}">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-right">&nbsp;</i>Contact Us</a></li>
              
            </ul>
          </li>
        </ul>
      </div>

   
     <!--  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"> <img class="img-responsive animate scale" src="{{asset('front/images/large-icon-sitemap.png')}}" alt=""> </div> -->
    </div>
  </section>
  <!-- //end Sitemap  -->
  @endsection