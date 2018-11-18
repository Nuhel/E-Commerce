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
	
{!! Form::model($subcategories, ['route' => ['subcategory.update', $subcategories->id], 'method' => 'PUT', 'files'=> true]) !!}

   
{!! Form::open(['route' => 'subcategory.store','files' => true]) !!}

    
{!! Form::label('subcategory', 'subcategory Name'); !!}
{{ Form::text('subcategory', null, array('class' => 'form-control', 'required' => '', 'minlength' => '3')) }}<br>
 				
					
{{ Form::submit('Save Changes', ['class' => 'btn btn-block subbutton']) }}
					 
			
{!! Form::close() !!}
	
</div>
  

@endsection