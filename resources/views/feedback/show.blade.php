@extends('layouts.template')


@section('content')

<style>
.showfeedback {
    margin: auto;
    margin-top: 200px;
    
}
</style>

	<section id="courseArchive">
      <div class="container">
        <div class="row">

<div class="col-md-6 col-md-offset-3 showfeedback">
<p>Customer Name: <strong>{{$feedback->name}}</strong></p>
<p> Customer Email:<strong>{{$feedback->email}}</strong></p>
<p> Mail Subject:<strong>{{$feedback->subject}}</strong></p>
<p> Mail Department:<strong>{{$feedback->department}}</strong></p>
<p> Mail Body:<strong>{{$feedback->mail}}</strong></p>
<p> Verify<strong>{{$feedback->check}}</strong></p>

{!! Html::linkRoute('feedback.index', 'feedback List', array($feedback->id), array('class' => 'btn btn-info btn-block')) !!}
{!! Form::close() !!}
</div>


</div>
</div>
</section>


@endsection