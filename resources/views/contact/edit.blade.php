@extends('layouts.template')

<div class="col-md-6">
@section('content')

<br><br><br><br>
	
{!! Form::model($contact, ['route' => ['contact.update', $contact->id], 'method' => 'PUT', 'files'=> true]) !!}

   
{!! Form::open(['route' => 'contact.store','files' => true]) !!}

   
{!! Form::label('name', 'Your Name'); !!}
{{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}<br>
 
{!! Form::label('email', 'Your Email'); !!}
{{ Form::text('email', null, array('class' => 'form-control', 'required' => '', 'minlength' => '1') ) }}<br>

{!! Form::label('message', 'Your Message'); !!}
{{ Form::text('message', null, array('class' => 'form-control', 'required' => '', 'minlength' => '1') ) }}<br>
					
{{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) }}
					 
			
{!! Form::close() !!}
	
</div>
  

@endsection