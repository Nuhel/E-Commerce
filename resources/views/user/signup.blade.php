@extends('layouts.design')

@section('content')
  <section class="main-container col1-layout">
    <div class="main container">
      
        <div class="col-md-4 col-md-offset-4 signup">
            <h3 style="text-align: center;">Sign Up</h3>
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            <form action="{{ route('user.signup') }}" method="post">

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" class="form-control" required="">
                </div>

                <div class="form-group">
                    <label for="email">E-Mail</label>
                    <input type="text" id="email" name="email" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label for="mobile">Mobile Number</label>
                    <input type="text" id="mobile" name="mobile" class="form-control">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control" required="">
                </div>
                <button type="submit" class="btn btn-primary" style="background-color: #333E48;" >Sign Up</button>
                {{ csrf_field() }}
            </form>
        </div>
    </div>
</section>
<br><br><br>
@endsection