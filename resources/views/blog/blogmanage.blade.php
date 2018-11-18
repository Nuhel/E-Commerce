@extends('layouts.adminlayout')


@section('content')


<style>
th{
	color:orange;
	font-style: italic;
}

.eye:hover {
	background-color: gray;

}
</style>
<div class="col-md-12 content">

	<div class="aaa" id="faqtab" role="tabpanel" aria-labelledby="faqtab-tab" >

				<div class="col-md-6 col-md-offset-3 faqtabhiworkspage">
					<br>
						<input style="width: 100%; margin:auto;" type="search" name="search" placeholder="product name" autocomplete="off" id="target">
						<!--<input type="submit" name="submit" value="Search">-->
		</div>
	<table class="table">

		<thead>

			<th>Title</th>
			<th>Description</th>
			<th>image</th>
			<th>Date</th>
			<th>details</th>

		</thead>

		<tbody>

			@foreach ($posts as $post)

			<tr class="remove-tr">

				<td>{{ $post->title }}</td>
				<td>{{ str_limit(strip_tags($post->description), 100) }}</td>
				<td><img style="width: 110px; height: auto;" src="{{asset('front/images/' . $post->image)}}"></td>		
				<td>{{date('M j, Y H:i', strtotime($post->created_at))}}</td>
				<td><a href="{{ route('blogdetails', $post->id) }}" class="btn btn-default btn-sm">
					<i class="fa fa-eye eye" style="color: orange;"></i></a></td>
				</tr>

				@endforeach

			</tbody>
		</table>
		<div style="margin-left: 40%;" class="paginate-container">
			<ul class="pagination">
				{{ $posts->links() }}
			</ul>
		
	</div>
</tbody>


	
	@endsection