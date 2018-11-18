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
	<div class="single">
		<div class="message">
		 <p style="font-style: italic; font-size: 24px;">" {{ $contact->message }} "</p>
		</div>
		
		
	</div>

	
</div>


@endsection