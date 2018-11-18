@extends('layouts.adminlayout')


@section('title')
    Laravel Shopping Cart
@endsection

  <style type="text/css">
  	.subcat{
  		
  		background-color: #456280;
  		width: 50%;
  		color: white;
  	}

  	th{
  		color:#456280;

  		
  	}
  	tr{
  		text-align: center;
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



	
	 <h4 style="text-align: center; font-style: italic; color:#456280;"><strong>Categories</strong></h4>
<br>
	 <table class="table">
				<thecategory>
					
					<th><center>No</center></th>
					<th><center>category Name</center></th>
					<th><center>Sub category</center></th>
					<th><center>Update</center></th>
					<th><center>Delete</center></th>
					
					
					
					
				</thecategory>

				<tbody>
					
					@foreach ($category as $category)
						
						<tr>
						
							<td>{{ $category->id }}</td>
							<td>{{ $category->category }}</td>
														
<td>{!! Html::linkRoute('subcategoryinfo', '', array($category->id), array('class' => 'glyphicon glyphicon-eye-open')) !!}</td>	

<td>{!! Html::linkRoute('category.edit', '', array($category->id), array('class' => 'glyphicon glyphicon-edit')) !!}</td>					


{!! Form::open(['route' => ['category.destroy', $category->id], 'method' => 'DELETE']) !!}


<td>{!! Form::submit('Delete', ['class' => 'subcat']) !!}</td>


{!! Form::close() !!}		
							
							
					
					@endforeach

					
					

				</tbody>
			</table>
		</div>
				
@endsection

	
	

