@extends('layouts.adminlayout')

@section('title')
    Laravel Shopping Cart
@endsection
<style type="text/css">
	.subbutton{
		background-color: #343A40;
		color:white;
	}
</style>
@section('content')
<div class="col-md-8">
	
{!! Form::model($categories, ['route' => ['category.update', $categories->id], 'method' => 'PUT', 'files'=> true]) !!}

   
{!! Form::open(['route' => 'category.store','files' => true]) !!}

    
{!! Form::label('category', 'category Name'); !!}
{{ Form::text('category', null, array('class' => 'form-control', 'required' => '', 'minlength' => '3')) }}<br>
 				
					
{{ Form::submit('Save Changes', ['class' => 'btn btn-block subbutton']) }}
					 
			
{!! Form::close() !!}
	
</div>
  

@endsection