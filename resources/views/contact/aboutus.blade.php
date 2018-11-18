@extends('layouts.design')


@section('content')
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="index.html"></a><span>&raquo;</span></li>
            <li><strong>About Us</strong></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End --> 
  
  <!-- Main Container -->
  
  <div class="main container">
 
     <div class="about-page">
        <div class="col-xs-12 col-sm-6"> 
          
          <h1>Welcome to <span class="text_color">Warehouse</span></h1>
          <p>We aim to offer our customers a variety of the latest Products. We’ve come a long way, so we know exactly which direction to take when supplying you with high quality yet budget friendly products. We offer all of this while providing excellent customer service and friendly support.<br>
            <br>
           We always keep an eye on the latest trends and put our customers’ wishes first. That is why we have satisfied customers all over the world, and are thrilled to be a part of the industry.</p>
          <ul>
            <li><i class="fa fa-arrow-right"></i>&nbsp; <a href="#">Lower Cost Of shipping.</a></li>
            <li><i class="fa fa-arrow-right"></i>&nbsp; <a href="#">Delivery Within a Short time.</a></li>
            <li><i class="fa fa-arrow-right"></i>&nbsp; <a href="#">Money Return guarranty.</a></li>
            <li><i class="fa fa-arrow-right"></i>&nbsp; <a href="#">Change product opportunity.</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-6">
          <div class="single-img-add sidebar-add-slider">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> 
              
              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active"> <img src="{{asset('front/images/about_us_slide1.jpg')}}" alt="slide1"> </div>
                <div class="item"> <img src="{{asset('front/images/about_us_slide2.jpg')}}" alt="slide2"> </div>
                <div class="item"> <img src="{{asset('front/images/about_us_slide3.jpg')}}" alt="slide3"> </div>
              </div>
            </div>
          </div>
        </div>
      </div>

  </div>
  
  <div class="our-team"> 

    
   
      
    <div class="container"> <div class="page-header">
        <h2>Our Team</h2>
      </div>
      <div class="row">
        <div class="col-xs-6 col-sm-3 col-md-3">
          <div class="wow bounceInUp" data-wow-delay="0.2s">
            <div class="team">
              <div class="inner">
                <div class="avatar"><img src="{{asset('front/images/team-img01.jpg')}}" alt="" class="img-responsive img-circle" /></div>
                <h5>Isaac Newton</h5>
                <p class="subtitle">Director</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-6 col-sm-3 col-md-3">
          <div class="wow bounceInUp" data-wow-delay="0.5s">
            <div class="team">
              <div class="inner">
                <div class="avatar"><img src="{{asset('front/images/team-img02.jpg')}}" alt="" class="img-responsive img-circle" /></div>
                <h5>john dalton</h5>
                <p class="subtitle">Team Leader</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-6 col-sm-3 col-md-3">
          <div class="wow bounceInUp" data-wow-delay="0.8s">
            <div class="team">
              <div class="inner">
                <div class="avatar"><img src="{{asset('front/images/team-img03.jpg')}}" alt="" class="img-responsive img-circle" /></div>
                <h5>einstein</h5>
                <p class="subtitle">Manager</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-6 col-sm-3 col-md-3">
          <div class="wow bounceInUp" data-wow-delay="1s">
            <div class="team">
              <div class="inner">
                <div class="avatar"><img src="{{asset('front/images/team-img04.jpg')}}" alt="" class="img-responsive img-circle" /></div>
                <h5>charles babbage</h5>
                <p class="subtitle">Sales Executive</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 <div class="container">
    <div class="row">
      <div class="col-md-6"> 
        <!-- Testimonials Box -->
        <div class="testimonials">
          <div class="slider-items-products">
            <div id="testimonials-slider1" class="product-flexslider hidden-buttons home-testimonials">
              <div class="slider-items slider-width-col4 ">
                <div class="holder">
                  <p>We aim to offer our customers a variety of the latest Products. We’ve come a long way, so we know exactly which direction to take when supplying you with high quality yet budget friendly products. </p>
                  <div class="thumb"> <img src="{{asset('front/images/testimonials-img1.jpg')}}" alt="testimonials img"> </div>
                  <strong class="name">John Doe</strong> <strong class="designation">CEO, Company</strong> </div>
                <div class="holder">
                  <p>We aim to offer our customers a variety of the latest Products. We’ve come a long way, so we know exactly which direction to take when supplying you with high quality yet budget friendly products.</p>
                  <div class="thumb"> <img src="{{asset('front/images/testimonials-img1.jpg')}}" alt="testimonials img"> </div>
                  <strong class="name">Vince Roy</strong> <strong class="designation">Chairman, Newspaper</strong> </div>
                <div class="holder">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad 
                    minim veniam, quis nostrud. </p>
                  <div class="thumb"> <img src="{{asset('front/images/testimonials-img2.jpg')}}" alt="testimonials img"> </div>
                  <strong class="name">John Doe</strong> <strong class="designation">CEO, ABC Softwear</strong> </div>
                <div class="holder">
                  <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad 
                    minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
                    ex ea commodo consequat.</p>
                  <div class="thumb"> <img src="{{asset('front/images/testimonials-img4.jpg')}}" alt="testimonials img"> </div>
                  <strong class="name">Vince Roy</strong> <strong class="designation">CEO, XYZ Softwear</strong> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Testimonials Box --> 
      <!-- our clients Slider -->
      <div class="col-md-6">
        <div class="our-clients">
          <div class="slider-items-products">
            <div id="our-clients-slider" class="product-flexslider hidden-buttons">
              <div class="slider-items slider-width-col6"> 
                
                <!-- Item -->
                <div class="item"> <a href="#"><img src="{{asset('front/images/brand1.png')}}" alt="Image"></a> <a href="#"><img src="{{asset('front/images/brand2.png')}}" alt="Image"></a>
                <a href="#"><img src="{{asset('front/images/brand3.png')}}" alt="Image"></a> </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item"> <a href="#"><img src="{{asset('front/images/brand3.png')}}" alt="Image"></a> <a href="#"><img src="{{asset('front/images/brand4.png')}}" alt="Image"></a><a href="#"><img src="{{asset('front/images/brand10.png')}}" alt="Image"></a> </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item"> <a href="#"><img src="{{asset('front/images/brand5.png')}}" alt="Image"></a> <a href="#"><img src="{{asset('front/images/brand6.png')}}" alt="Image"></a><a href="#"><img src="{{asset('front/images/brand9.png')}}" alt="Image"></a> </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item"> <a href="#"><img src="{{asset('front/images/brand7.png')}}" alt="Image"></a> <a href="#"><img src="{{asset('front/images/brand3.png')}}" alt="Image"></a> <a href="#"><img src="{{asset('front/images/brand8.png')}}" alt="Image"></a></div>
                <!-- End Item --> 
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 
  <!-- Section: services -->

  @endsection