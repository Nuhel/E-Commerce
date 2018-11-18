@extends('layouts.design')
@section('content')
     <section class="main-container col1-layout">
    <div class="main container">
      
        
        <div class="row">
        <div class="col-md-4 col-md-offset-4 signin">
            <center><h3>Sign In</h3></center>
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            <form action="{{ route('user.signin') }}" method="post">
                <div class="form-group">
                    <label for="email">E-Mail</label>
                    <input type="text" id="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-info" style="background-color: #333E48;">Sign In</button>
                {{ csrf_field() }}
            </form>
            <p>Don't have an account? <a href="{{ route('user.signup') }}">Sign up instead!</a></p>
             <a href="{{url('login/facebook
             ')}}"><button class="btn btn-info" style="background-color: #333E48;">Sign In With Facebook</button></a>
           
            <a href="{{url('login/google
             ')}}"><button class="btn btn-info" style="background-color: #333E48;">Sign In With Google</button></a>
            <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
        </div>
    </div>
      </div>

    </div>
  </section>
@endsection