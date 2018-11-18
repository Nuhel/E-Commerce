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
{!! Form::open(['route' => 'newsletter.store','files' => true]) !!}

    
{!! Form::label('email', 'use email'); !!}
{{ Form::text('emails') }}
 
{{ Form::submit('Add your email', array('class' => 'btn btn-default addcat', 'style' => 'margin-top: 20px;')) }}
{!! Form::close() !!}

 	
</div>


@endsection