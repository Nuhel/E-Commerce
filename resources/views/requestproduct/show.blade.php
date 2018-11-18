@extends('layouts.adminlayout')

@section('content')

@if(Session::has('success'))
        
            <div class="">
                <div id="charge-message" class="alert alert-success">
                    <p style="font-style: italic; font-weight: bold; margin-top: 7px;">{{ Session::get('success') }}</p>
                </div>
            </div>
        
    @endif




  

@endsection