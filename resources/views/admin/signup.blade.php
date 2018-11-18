@extends('layouts.adminlayout')

@section('content')

<style type="text/css">
.box{
    background-color: #1F3859;
    height: 40%;
    border-radius: 10px;
     border: 20px solid #343A40;
     margin:auto;
     margin-top: 20px;
}    

.signin{
    margin-top: 20%;
    color:white;
    text-align: center;
}

.buttonsingnin{
    margin-left: 40%;
    padding: 10px 20px;
    margin-bottom: 20px;
}
</style>
    <div class="row">
        <div class="col-md-4 col-md-offset-4 box">
            <h3 class="signin">Add Admin</h3>
            <br>

            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            <form action="{{ route('admin.signup') }}" method="post">
                <div class="form-group">
                    <label for="email" style="color:white;">Email</label>
                    <input type="text" id="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password" style="color:white;">Password</label>
                    <input type="password" id="password" name="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary buttonsingnin">Confirm</button>
                {{ csrf_field() }}
            </form>
        </div>
    </div>
@endsection