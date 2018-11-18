@extends('layouts.adminlayout')


@section('content')


<style type="text/css">
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

	.description{
		height: 100px;
	}

	select.form-control:not([size]):not([multiple]) {
    height: calc(3.25rem); 
}

</style>

	<div class="row">
		<div class="col-md-6 col-sm-6 commentedit">

			<h4 style="font-style: italic; text-align: center;">Add Product</h4>
			<hr>

			 @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

{!! Form::open(['route' => 'item.store','files' => true]) !!}


{{ Form::file('imagePath', array('class' => 'btn btn-default insertbutton', 'required' => '' )) }}<br>
    
{!! Form::label('title', 'Product Title'); !!}
{{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'minlength' => '3')) }}<br>
 
{!! Form::label('description', 'Short description'); !!}
{{ Form::textarea('description', null, array('class' => 'form-control description', 'required' => '', 'minlength' => '5') ) }}<br>

{!! Form::label('details', 'Details'); !!}
{{ Form::textarea('details', null, array('class' => 'form-control description', 'required' => '', 'minlength' => '5') ) }}<br>

{!! Form::label('price', 'price'); !!}
{{ Form::text('price', null, array('class' => 'form-control', 'placeholder' =>'$', 'required' => '', 'minlength' => '1') ) }}<br>


{!! Form::label('category_id', ' Product Category'); !!}
{!! Form::select('category_id' , array('' => 'Select Category') + $data,null, ['class' => 'form-control'] ) !!}<br>


{!! Form::label('subcategory_id', 'Product Subcategory'); !!}
{!! Form::select('subcategory_id' , array('' => 'Select Subcategory') + $data2,null, ['class' => 'form-control'] ) !!}<br>

{!! Form::label('type', 'Type'); !!}
{!! Form::select('type', array('F' => 'Featured', 'H' => 'Hot Deals', 'S' => 'Special', '25%' => 'Save 50%'), null, ['class' => 'form-control'] ) !!} <br>

{!! Form::label('stock', 'Stock'); !!}
{!! Form::select('stock', array('In Stock' => 'In Stock', 'Out of Stock' => 'Out of Stock'), null, ['class' => 'form-control'] ) !!}

{{ Form::submit('Add New Product', array('class' => 'btn btn-block insertbutton', 'style' => 'margin-top: 20px;')) }}
{!! Form::close() !!}

</div>
</div>

@endsection