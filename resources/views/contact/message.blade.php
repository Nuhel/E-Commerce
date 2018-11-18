@extends('layouts.adminlayout')
<style type="text/css">
	.back{
		border: 1px solid #C7CBD1;
		border-radius: 10px;
		box-shadow: 6px 0 8px -2px rgba(31, 73, 125, 0.8), -6px 0 4px -2px rgba(31, 73, 125, 0.8);
	}


</style>

@section('content')

<hr>
 <div class="col-md-6 col-md-offset-3 back">


@foreach ($message as $message)

	<div>
		<i class="fa fa-files-o" style="font-size:20px; color:#C7CBD1; margin-right: 10px; margin-top: 5px;"></i><a href="{{route('messageseen', $message->id)}}"><strong>{{ $message->name }} sent a message</strong></a>
		<p style="color: green">{{ $message->created_at->diffForHumans() }}</p>
	</div>
	<hr>
	@endforeach
@endsection