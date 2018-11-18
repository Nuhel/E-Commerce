@extends('layouts.adminlayout')

@section('content')

<style type="text/css">
	
	.deletebox{
		margin:auto;
		margin-top: 20px;
	}

</style>
	
	<div class="row">
		<div class="col-md-6 deletebox">
			<h3>Are you sure?</h3>
			<p>
				<strong>Review:</strong> {{ $comment->comment }}
			</p>

			{{ Form::open(['route' => ['comments.destroy', $comment->id], 'method' => 'DELETE']) }}
				{{ Form::submit('Yes', ['class' => 'btn btn-lg btn-block btn-danger']) }}
			{{ Form::close() }}
		</div>
	</div>

@endsection