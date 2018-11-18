@extends('layouts.adminlayout')

@section('content')
<style>
		select.form-control:not([size]):not([multiple]) {
    height: calc(3.25rem); 
}

</style>

<div class="col-md-6 col-md-offset-3">
{!! Form::open(['route' => 'subcategory.store','files' => true]) !!}

    
{!! Form::label('subcategory', 'subcategory Name'); !!}
{{ Form::text('subcategory', null, array('class' => 'form-control', 'required' => '', 'minlength' => '3')) }}<br>

{!! Form::label('category_id', 'Category Name'); !!}
{!! Form::select('category_id' , array('' => 'Select Category') + $data,null, ['class' => 'form-control'] ) !!}<br>
 
{{ Form::submit('Add subcategory', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
{!! Form::close() !!}

 	
</div>


@endsection