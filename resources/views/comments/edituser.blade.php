@extends('layouts.design')

@section('content')


<body class="product-page">
	<div class="main-container col1-layout">
		<div class="col-md-6  col-md-offset-3">
 @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
			<h4 style="font-style: italic; text-align: center;">Edit Review</h4>
			
			{{ Form::model($comment, ['route' => ['comments.updateuser', $comment->id, $proid, $catid], 'method' => 'PUT']) }}
			
				{{ Form::label('name', 'Name:') }}
				{{ Form::text('name', null, ['class' => 'form-control']) }}
			
				{{ Form::label('email', 'Email:') }}
				{{ Form::text('email', null, ['class' => 'form-control']) }}
			
				{{ Form::label('comment', 'Review:') }}
				{{ Form::textarea('comment', null, ['class' => 'form-control reviewbox']) }}
			
				{{ Form::submit('Update Review', ['class' => 'btn btn-block updatebutton', 'style' => 'margin-top: 15px; background-color:#333E48; color:white']) }}
			
			{{ Form::close() }}
			<br><br>
		</div>	
		</div>
	</div>

@endsection