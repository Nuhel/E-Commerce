@extends('layouts.design')

@section('content')

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1&appId=2130753713825369&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


  <!-- Main Container --><br>
  <section class="blog_post">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-9">
          <div class="entry-detail">
            <div class="page-title">
              <h1>{{$blog->title}}</h1>
            </div>
            <div class="entry-photo">
              <figure><img src="{{asset('front/images/' . $blog->image)}}" alt="Blog"></figure>
            </div>
            <div class="entry-meta-data"> <span class="author"> <i class="fa fa-user"></i>&nbsp; by: <a href="#">Admin</a></span> <span class="date"><i class="fa fa-calendar">&nbsp;</i>&nbsp; {{$blog->created_at->diffForHumans()}}</span>
              
            </div>
            <div class="content-text clearfix">
              <p>{{$blog->description}}</p>
            </div>
            <div class="entry-tags"></div>
          </div>
          <!-- Related Posts -->
          <div class="single-box">
            <h2>Other Posts</h2>
            <div class="slider-items-products">
              <div id="related-posts" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4 fadeInUp">
                 @foreach($olderblogs as $olderblog)  
                  <div class="product-item">
                    <article class="entry">
                      <div class="entry-thumb image-hover2"> <a href="{{ route('showsingle', $olderblog->id) }}"> <img src="{{asset('front/images/' . $olderblog->image)}}" alt="Blog"> </a> </div>
                      <div class="entry-info">
                        <h3 class="entry-title"><a href="{{ route('showsingle', $olderblog->id) }}">{{ $olderblog->title}}</a></h3>
                        <div class="entry-meta-data"> <span class="date"> <i class="fa fa-calendar">&nbsp;</i> {{ $olderblog->created_at->diffForHumans()}} </span> </div>
                        <div class="entry-more"> <a href="{{ route('showsingle', $olderblog->id) }}">Read more</a> </div>
                      </div>
                    </article>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
          <!-- ./Related Posts --> 
          <!-- Comment -->
          
          <div class="fb-comments" data-href="{{ Request::url()}}" data-numposts="10"></div>
        </div>
        <!-- right colunm -->
        <aside class="right sidebar col-xs-12 col-sm-3"> 
          <!-- Blog category -->
          <div class="block blog-module wow fadeInUp">
            <p class="title_block">Latest Posts</p>
            <div class="block_content"> 
              <!-- layered -->
              <div class="layered">
                <div class="layered-content">
                  <ul class="blog-list-sidebar">
                      @foreach($latestblogs as $latestblog)    
                    <li>
                      <div class="post-thumb"> <a href="{{ route('showsingle', $latestblog->id) }}"><img src="{{asset('front/images/' . $latestblog->image)}}" alt="Blog"></a> </div>
                      <div class="post-info">
                        <h5 class="entry_title"><a href="{{ route('showsingle', $latestblog->id) }}">{{$latestblog->title}}</a></h5>
                        <div class="post-meta"> <span class="date"><i class="fa fa-calendar">&nbsp;</i>{{$latestblog->created_at->diffForHumans()}}</span>  </div>
                      </div>
                    </li>
                    @endforeach
                    
                  </ul>
                </div>
              </div>
              <!-- ./layered --> 
            </div>
          </div>
          <!-- ./Popular Posts --> 
          
          <!-- Recent Comments -->
          <!-- ./tags --> 
          <!-- Banner -->
          <div class="single-img-add sidebar-add-slider wow fadeInUp">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> 
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              </ol>
              
              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active"> <a href="{{route('saveupto')}}"><img src="{{asset('front/images/add-slide1.jpg')}}" alt="slide1"></a>
                  <div class="carousel-caption">
                    <h3><a href="single_product.html" title=" Product">Sale Up to 50% off</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="#" class="info">shopping Now</a> </div>
                </div>
                <div class="item"> <a href="{{url('blog')}}"><img src="{{asset('front/images/add-slide4.jpg')}}" alt="slide2"></a>
                  <div class="carousel-caption">
                    <h3><a href="single_product.html" title="Product">Smartwatch Collection</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="#" class="info">All Collection</a> </div>
                </div>
                <div class="item"> <a href="{{url('requestproduct/create')}}"><img src="{{asset('front/images/add-slide3.jpg')}}" alt="slide3"></a>
                  <div class="carousel-caption">
                    <h3><a href="single_product.html" title=" Product">Summer Sale</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </div>
              </div>
              
              <!-- Controls --> 
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
          </div>
          <!-- ./Banner --> 
        </aside>
        <!-- ./right colunm --> 
      </div>
    </div>
  </section>
  <!-- Main Container End --> 
  <!-- Footer -->
  @endsection