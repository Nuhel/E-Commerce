@extends('layouts.template')


@section('content')

 <style>
.feedback {
    margin: auto;
    margin-top: 200px;
    
}
</style>

<div class="row">
  <div class="col-md-5 feedback">

  	<center><h3>Feedback</h3></center>
  	


{!! Form::open(['route' => 'feedback.store','files' => true]) !!}

    
{!! Form::label('name', 'Your Name'); !!}
{{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}<br>
 
{!! Form::label('email', 'Your Email'); !!}
{{ Form::text('email', null, array('class' => 'form-control', 'required' => '', 'minlength' => '1') ) }}<br>

{!! Form::label('subject', 'Mail Subject'); !!}
{{ Form::text('subject', null, array('class' => 'form-control', 'required' => '', 'minlength' => '1') ) }}<br>

{!! Form::label('department', 'Department'); !!}
{{ Form::text('department', null, array('class' => 'form-control', 'required' => '', 'minlength' => '1') ) }}<br>

{!! Form::label('mail', 'Mail body'); !!}
{{ Form::text('mail', null, array('class' => 'form-control', 'required' => '', 'minlength' => '1', 'size' => '30x5') ) }}<br>

{!! Form::label('check', 'what is 4-2?'); !!}
{{ Form::text('check', null, array('class' => 'form-control', 'required' => '', 'minlength' => '1') ) }}<br>

{{ Form::submit('Submit', array('class' => 'btn btn-info btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
{!! Form::close() !!}

 	
</div>
</div>

@endsection