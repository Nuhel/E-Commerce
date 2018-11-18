@extends('layouts.adminlayout')
<style type="text/css">

.addcatbox{
	width: 30%;
	margin:auto;
	margin-top: 20px;
	
}
	.addcat{
		background-color: #343A40;
		color:white;
	}
</style>




@section('content')
<div class="col-md-4 addcatbox">
{!! Form::open(['route' => 'category.store','files' => true]) !!}

    
{!! Form::label('category', 'category Name'); !!}
{{ Form::text('category', null, array('class' => 'form-control', 'required' => '', 'minlength' => '3')) }}
 
{{ Form::submit('Add category', array('class' => 'btn btn-default addcat', 'style' => 'margin-top: 20px;')) }}
{!! Form::close() !!}

 	
</div>


@endsection