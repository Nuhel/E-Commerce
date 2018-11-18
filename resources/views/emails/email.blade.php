@extends('layouts.design')

@section('content')


<section class="main-container col1-layout">
    <div class="main container">
        <div class="col-md-8 col-md-offset-2 Reset" style="margin-top: 5%;">
      <div class="panel panel-default">
        <div class="panel-heading">Please confirm your email!</div>
        <div class="panel-body">
          <h3> Please insert your verification code</h3>
           @if(Session::has('mismatch'))     
        <div  class="alert alert-success"><h3><i> {{ Session::get('mismatch') }}</i></h3></div>
  @endif
          <form method="POST" action="{{ route('codesubmit') }}">
            {!! csrf_field() !!}
            <input type="text" name="code" >
            <input type="submit" name="submit">
          </form>
      </div>
    </div>
  </div>
</div>
</section>

@endsection