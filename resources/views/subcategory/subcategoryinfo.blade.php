@extends('layouts.adminlayout')


@section('title')
    Laravel Shopping Cart
@endsection


  <style type="text/css">
  	.subcat{
  		color: #343A40;
  		background-color: #DDDDDD;
  		width: 50%;
  		color: #343A40;
  	}
  </style>


@section('content')

@if(Session::has('success'))
        
            <div class="">
                <div id="charge-message" class="alert alert-success">
                    <p style="font-style: italic; font-weight: bold; margin-top: 7px;">{{ Session::get('success') }}</p>
                </div>
            </div>
        
    @endif



	
	 <h4 style="text-align: center; font-style: italic;">sub categories</h4>
<br>
	 <table class="table">
<thecategory>
	
	<th>id</th>
	<th>Name</th>
	<th>Update</th>
	<th>Delete</th>
</thecategory>

	<tbody>					
		@foreach ($subcategories as $subcategory)
						
				<tr>
						
				<td>{{ $subcategory->id }}</td>
				<td>{{ $subcategory->subcategory }}</td>
				<td>{!! Html::linkRoute('subcategory.edit', 'Update', array($subcategory->id), array('class' => 'btn btn-default subcat')) !!}</td>					
				{!! Form::open(['route' => ['subcategory.destroy', $subcategory->id], 'method' => 'DELETE']) !!}
				<td>{!! Form::submit('Delete', ['class' => 'btn btn-default subcat']) !!}</td>
				{!! Form::close() !!}		
							
							
					
		@endforeach

					

		</tbody>
	</table>
</div>
				
@endsection

	
	

