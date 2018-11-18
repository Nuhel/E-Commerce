@extends('layouts.adminlayout')


@section('content')



<style type="text/css">
	.commentedit{
		width: 100%;
		margin:auto;
		padding: 10px;
		//border: 1px solid gray;
		border-radius: 2%;
	}

	.insertbutton{
		background-color: #343A40;
		color: white;
		margin-bottom: 30px;
	}

	.description{
		height: 100px;
	}

</style>

	<div class="row">
		<div class="col-md-6 col-sm-6 commentedit">

			<h4 style="font-style: italic; text-align: center;">Update Product Info</h4>
			<hr>

	
{!! Form::model($blogdetails, ['route' => ['blog.update', $blogdetails->id], 'method' => 'PUT', 'files'=> true]) !!}
		

{{ Form::file('image', array('class' => 'btn btn-default insertbutton', 'required' => '' )) }}<br>
    
{!! Form::label('title', 'Blog'); !!}
{{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'minlength' => '3')) }}<br>
 
{!! Form::label('description', 'Description'); !!}
{{ Form::textarea('description', null, array('class' => 'form-control description', 'required' => '', 'minlength' => '5') ) }}<br>

				
{!! Html::linkRoute('blog.show', 'Cancel', array($blogdetails->id), array('class' => 'btn btn-danger btn-block')) !!}
					
					
{{ Form::submit('Save Changes', ['class' => 'btn btn-block insertbutton']) }}
					 
			
{!! Form::close() !!}
	
@endsection