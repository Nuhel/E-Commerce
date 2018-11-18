@extends('layouts.adminlayout')


@section('content')


	<div class="row">
		<div class="col-md-6 col-md-offset-3">

			<h4 style="font-style: italic; text-align: center;">Add New  Blog Post</h4>
			<hr>

			 @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

{!! Form::open(['route' => 'blog.store','files' => true]) !!}


{{ Form::file('image', array('class' => 'btn btn-default insertbutton', 'required' => '' )) }}<br>
    
{!! Form::label('title', 'Post Title'); !!}
{{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'minlength' => '3')) }}<br>
 
{!! Form::label('description', 'Description'); !!}
{{ Form::textarea('description', null, array('class' => 'form-control description', 'required' => '', 'minlength' => '5') ) }}<br>
{{ Form::submit('Add New post', array('class' => 'btn btn-block insertbutton', 'style' => 'margin-top: 20px;')) }}
{!! Form::close() !!}

</div>
</div>

@endsection