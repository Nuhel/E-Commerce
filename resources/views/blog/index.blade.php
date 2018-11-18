@extends('layouts.design')
@section('content')

  <section class="blog_post">
    <div class="container"> 
      
    
       
        <!-- Center colunm-->
        <br>
        <div class="blog-wrapper">
      
          <div class="page-title">
            <h2>Blog post</h2>
          </div>
          
          <ul class="blog-posts"> 
          @foreach($posts as $blogs) 
            <li class="post-item col-lg-4">
              <article class="entry"> 
                <div class="row">
                  <div class="col-sm-12">
                    <div class="entry-thumb image-hover2"> <a href="{{ route('showsingle', $blogs->id) }}"> <figure><img src="{{asset('front/images/' . $blogs->image)}}" alt="Blog"></figure> </a> </div>
                  </div>
                  <div class="col-sm-12">
                
                      <h3 class="entry-title"><a href="{{ route('showsingle', $blogs->id) }}">{{ $blogs->title}}</a></h3>
                      <div class="entry-meta-data"> <span class="author"> <i class="fa fa-user"></i>&nbsp; by: <a href="#">Admin</a></span> <span class="date"><i class="fa fa-calendar"></i>&nbsp; {{ $blogs->created_at->diffForHumans()}}</span> </div>
                      <div class="rating"> </div>
                      
                      <div class="entry-excerpt">{{ str_limit(strip_tags($blogs->description), 100) }}</div>
                      <div class="entry-more"> <a href="{{ route('showsingle', $blogs->id) }}" class="button">Read more&nbsp; <i class="fa fa-angle-double-right"></i></a> </div>
                
                  </div>
                </div>
              </article>
            </li>
        @endforeach
          </ul>
          <div class="sortPagiBar"><div class="pagination-area" style="visibility: visible;">
            <ul>
                {{ $posts->links() }}
              </ul>
          </div>
            
          </div>
        </div>
        <!-- ./ Center colunm --> 
   
    </div>
  </section>
  @endsection