@extends('layouts.template')

<div class="col-md-6">
@section('content')

<br><br><br><br>
	
{!! Form::model($feedback, ['route' => ['feedback.update', $feedback->id], 'method' => 'PUT', 'files'=> true]) !!}

   
{!! Form::open(['route' => 'feedback.store','files' => true]) !!}

   
{!! Form::label('name', 'Your Name'); !!}
{{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}<br>
 
{!! Form::label('email', 'Your Email'); !!}
{{ Form::text('email', null, array('class' => 'form-control', 'required' => '', 'minlength' => '1') ) }}<br>

{!! Form::label('subject', 'Mail Subject'); !!}
{{ Form::text('subject', null, array('class' => 'form-control', 'required' => '', 'minlength' => '1') ) }}<br>

{!! Form::label('department', 'Department'); !!}
{{ Form::text('department', null, array('class' => 'form-control', 'required' => '', 'minlength' => '1') ) }}<br>

{!! Form::label('mail', 'Your Mail'); !!}
{{ Form::text('mail', null, array('class' => 'form-control', 'required' => '', 'minlength' => '1') ) }}<br>

{!! Form::label('check', 'Check'); !!}
{{ Form::text('check', null, array('class' => 'form-control', 'required' => '', 'minlength' => '1') ) }}<br>
					
					
{{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) }}
					 
			
{!! Form::close() !!}
	
</div>
  

@endsection