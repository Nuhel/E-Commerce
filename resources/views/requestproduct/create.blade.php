@extends('layouts.design')

@section('title')
    new design
@endsection


@section('content')
 <div class="main-container col1-layout">
    <div class="container">
      <div class="row"> 

<div class="col-md-6  col-md-offset-3 addcatbox">
	    @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
{!! Form::open(['route' => 'requestproduct.store','files' => true]) !!}



{!! Form::label('optional image', ''); !!}
{{ Form::file('image', array('class' => 'btn btn-default')) }}<br>
    
{!! Form::label('description', ''); !!}
{{ Form::textarea('description', null, array('class' => 'form-control', 'placeholder' => 'write product decription', 'maxlength' => '255')) }}<br>	


{!! Form::label('mobile', ''); !!}
{{ Form::text('mobile', null, array('class' => 'form-control', 'placeholder' => 'your Mobile number', 'maxlength' => '255')) }}
 
{{ Form::submit('send product request', array('class' => 'btn btn-default addcat', 'style' => 'margin-top: 20px;')) }}
{!! Form::close() !!}

 	</div></div></div>
 	<br><br><br>
</div>


@endsection