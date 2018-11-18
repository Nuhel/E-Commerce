@extends('layouts.adminlayout')


@section('content')
<style>
th{
	color:#386d82;
	font-style: italic;
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
				
				<th>Price</th>
				<th>Category</th>
				<th>Subcategory</th>
				<th>Stock</th>
				<th>Review</th>
				<th>Details</th>


			</thead>

			<tbody>
				<div class="card">
					
					@foreach ($items as $item)

					<tr class="remove-tr">

						<td>{{ $item->title }}</td>
						<td>{{ str_limit(strip_tags($item->description), 50) }}</td>
						<td>${{ $item->price }}</td>


						<td>@foreach ($category as $categorys)
							<?php if ($item->category_id==$categorys->id) {
								echo $categorys->category;
							} ?>
						@endforeach</td>				

						<td>@foreach ($subcategory as $subcategorys)
							<?php if ($item->subcategory_id==$subcategorys->id) {
								echo $subcategorys->subcategory;
							} ?>
						@endforeach</td>

						<td>{{ $item->stock }}</td>				
						<td style="color: orange; font-size: 10px;"> <?php $pr=$item->review;
						if ($pr==0) {
							echo "not rated yet";
						}else{
							for($i=0; $i<5; $i++){ 
								if ($i<$pr) {?> 
									<i class="fa fa-star"></i>
								<?php  }
								else{ ?>
									<i class="fa fa-star-o"></i>
								<?php  }
							}
						} ?> 
					</td>

					<td><a href="{{ route('item.show', $item->id) }}" class="btn btn-default btn-sm">
						<i class="fa fa-eye eye" style="color: #386d82;"></i></a></td>
					</tr>

					@endforeach

					
				</div>

			</tbody>
		</table>

		<div style="margin-left: 40%;" class="paginate-container">
			<ul class="pagination">
				{{ $items->links() }}
			</ul>
		</div>
	</div>
</div>


@endsection