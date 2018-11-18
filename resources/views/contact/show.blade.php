@extends('layouts.template')


@section('content')

<style>
.showcontact {
    margin: auto;
    margin-top: 200px;
    
}
</style>

	<section id="courseArchive">
      <div class="container">
        <div class="row">

<div class="col-md-6 col-md-offset-3 showcontact">
<p>Customer Name: <strong>{{$contact->name}}</strong></p>
<p> Customer Email:<strong>{{$contact->email}}</strong></p>
<p> Mail Subject:<strong>{{$contact->message}}</strong></p>

{!! Html::linkRoute('contact.index', 'contact List', array($contact->id), array('class' => 'btn btn-info btn-block')) !!}
{!! Form::close() !!}
</div>


</div>
</div>
</section>


@endsection