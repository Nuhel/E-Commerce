@extends('layouts.adminlayout')


@section('content')
<style>
	th{
		color:#386d82;
		font-style: italic;
	}
</style>
	<div class="col-md-12 content">

	
	
			<table class="table">
			
				<thead>
					
					<th>User Mobile</th>
					<th>Description</th>
					<th>Image</th>
					
					
				</thead>

				<tbody>

					
					@foreach ($requestproduct as $requestproduct)
						
						<tr>
							
							
							<td>{{ $requestproduct->mobile }}</td>
							<td>{{ str_limit(strip_tags($requestproduct->description), 55) }}</td>
							<td><a href=""></a></td>
							
						</tr>

					@endforeach

					
					

				</tbody>
			</table>

			<div style="margin-left: 40%;">
			<ul class="pagination">
				
			</ul>
		</div>
		</div>
	

@endsection