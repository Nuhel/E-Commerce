@extends('layouts.design')

@section('title')
    page not found
@endsection

@section('content')

  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="index.html"></a><span>&raquo;</span></li>
            <li><strong>Page Not Found </strong></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End --> 
  
  <!--Container -->
  <div class="error-page">
    <div class="container">
      <div class="error_pagenotfound"> <strong>4<span id="animate-arrow">0</span>4 </strong> <br />
        <b>Oops... Page Not Found!</b> <em>Sorry the Page Could not be Found here.</em>
        
        <br />
        </div>
      <!-- end error page notfound --> 
      
    </div>
  </div>
  @endsection