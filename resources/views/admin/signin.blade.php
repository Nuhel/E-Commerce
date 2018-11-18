@extends('layouts.adminmaster')

@section('content')

<style type="text/css">
.box{
    background-color: #1F3859;
    height: 40%;
    border-radius: 10px;
    margin-top: 5%;
     border: 20px solid #343A40;
}    

.signin{
    margin-top: 20%;
    color:white;
    text-align: center;
}

.buttonsingnin{
    margin-left: 40%;
    padding: 10px 20px;
}
</style>
    <div class="row">
        <div class="col-md-4 col-md-offset-4 box">
            <h3 class="signin">Admin</h3>
            <br>
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            <form action="{{ route('admin.signin') }}" method="post">
                <div class="form-group">
                    
                    <input type="text" id="email" name="email" class="form-control" placeholder="Admin Email">
                </div>
                <div class="form-group">
                    
                    <input type="password" id="password" name="password" class="form-control" placeholder="password">
                </div>
                <button type="submit" class="btn btn-primary buttonsingnin">Sign In</button>
                {{ csrf_field() }}
            </form>
            <br>
            <!-- <p style="color:white; text-align: center; margin-bottom: 20%;">Don't have an account? <a href="{{ route('admin.signup') }}" style="text-decoration: none; color:white; font-size: 15px;">Sign up instead!</a></p> -->
        </div>
    </div>
@endsection