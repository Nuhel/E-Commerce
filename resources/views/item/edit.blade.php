@extends('layouts.adminlayout')


@section('content')



<style type="text/css">

	select.form-control:not([size]):not([multiple]) {
    height: calc(3.25rem); 
}
	.commentedit{
		width: 100%;
		margin:auto;
		padding: 10px;
		//border: 1px solid gray;
		border-radius: 2%;
	}

	.insertbutton{
		background-color: #343A40;
		color: white;
		margin-bottom: 30px;
	}


</style>

	<div class="row">
		<div class="col-md-6 col-sm-6 commentedit">

			<h4 style="font-style: italic; ">Update Product Info</h4>
			<hr>
			 @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
	
{!! Form::model($item, ['route' => ['item.update', $item->id], 'method' => 'PUT', 'files'=> true]) !!}
		

{{ Form::file('imagePath', array('class' => 'btn btn-default insertbutton', 'required' => '' )) }}<br>
    
{!! Form::label('title', 'Product Title'); !!}
{{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}<br>
 
{!! Form::label('description', 'Description'); !!}
{{ Form::textarea('description', null, array('class' => 'form-control description', 'required' => '', 'minlength' => '5') ) }}<br>

{!! Form::label('details', 'Details'); !!}
{{ Form::textarea('details', null, array('class' => 'form-control description', 'required' => '', 'minlength' => '5') ) }}<br>

{!! Form::label('price', 'price'); !!}
{{ Form::text('price', null, array('class' => 'form-control', 'required' => '', 'minlength' => '1') ) }}<br>

{!! Form::label('category_id', ' Product Category'); !!}
{!! Form::select('category_id' , array('' => 'Select Category') + $data,null, ['class' => 'form-control'] ) !!}<br>


{!! Form::label('subcategory_id', 'Product Subcategory'); !!}
{!! Form::select('subcategory_id' , array('' => 'Select Subcategory') + $data2,null, ['class' => 'form-control'] ) !!}<br>

{!! Form::label('type', 'Type'); !!}
{!! Form::select('type', array('F' => 'Featured', 'H' => 'Hot Deals', 'S' => 'Special', '25%' => 'Save 50%'), null, ['class' => 'form-control'] ) !!} <br>

{!! Form::label('stock', 'Stock'); !!}
{!! Form::select('stock', array('In Stock' => 'In Stock', 'Out of Stock' => 'Out of Stock'), null, ['class' => 'form-control'] ) !!}<br>

					
{!! Html::linkRoute('item.show', 'Cancel', array($item->id), array('class' => 'btn btn-danger btn-block')) !!}
					
					
{{ Form::submit('Save Changes', ['class' => 'btn btn-block insertbutton']) }}
					 
			
{!! Form::close() !!}
	
@endsection