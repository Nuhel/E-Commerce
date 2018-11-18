@extends('layouts.template')

@section('title')
    Laravel Shopping Cart
@endsection

@section('content')


<div class="row">
  <div class="col-md-8 col-md-offset-2">

			<table class="table">
				<br><br>
				<h4>Available subcategory</h4>
			
				<hr>
				<thesubcategory>
					
					<th>subcategory No</th>
					<th>subcategory Name</th>
					
					
					
					
				</thesubcategory>

				<tbody>
					
					@foreach ($subcategory as $subcategory)
						
						<tr>
						
							<td>{{ $subcategory->id }}</td>
							<td><a href="{{ route('subcategoryshow', $subcategory->id) }}">{{ $subcategory->subcategory }}</a></td>
						<tr></tr>
					@endforeach

					
					

				</tbody>
			</table>
		</div>
	</div>

</div>
				
@endsection

	
	

