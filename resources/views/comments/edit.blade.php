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

	.updatebutton{
		background-color: #343A40;
		color: white;
	}

	.reviewbox{
		height: 100px;
	}

</style>

	<div class="row">
		<div class="col-md-6 col-sm-6 commentedit">

			<h4 style="font-style: italic; text-align: center;">Edit Review</h4>
			 @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
			
			{{ Form::model($comment, ['route' => ['comments.update', $comment->id], 'method' => 'PUT']) }}
			
				{{ Form::label('name', 'Name:') }}
				{{ Form::text('name', null, ['class' => 'form-control', 'disabled' => '']) }}
			
				{{ Form::label('email', 'Email:') }}
				{{ Form::text('email', null, ['class' => 'form-control', 'disabled' => '']) }}
			
				{{ Form::label('comment', 'Review:') }}
				{{ Form::textarea('comment', null, ['class' => 'form-control reviewbox']) }}
			
				{{ Form::submit('Update Review', ['class' => 'btn btn-block updatebutton', 'style' => 'margin-top: 15px;']) }}
			
			{{ Form::close() }}
		</div>
	</div>

@endsection