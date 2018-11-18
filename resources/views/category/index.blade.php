@extends('layouts.design')

@section('title')
    Laravel Shopping Cart
@endsection

@section('content')
<style>
    
    .category{
        margin: auto;
        margin-top: 140px;
    }

    a{
    	font-size: 18px;
    	position:center;
    	color:gray;
    }
</style>

<section id="courseArchive">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="courseArchive_sidebar">
         
              <div class="single_sidebar">	
              	<br>
              	<div class="single_sidebar category">	
              	
                <h4>Product Categories<span class="fa fa-angle-double-right"></span></h4>  	

					@foreach ($category as $category2)
						<div class="alert alert-secondary" role="alert">
						<center><a href="{{ route('subcategoryinfoblade', $category2->id) }}">{{ $category2->category }}</a></center>
						</div>
					@endforeach


			</div>
		</div>

	</div>
</div>
</div>
</div>

</section>
  <div class="text-center">
   {{-- {{ $category->links() }}--}}  
  </div>
@endsection

	
	

