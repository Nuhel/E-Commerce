@extends('layouts.adminlayout')

<style type="text/css">

.singleproduct{
    width: 100%;
    float: left;
}

.actions{
    float: left;
    margin-top: 10%;
}

.left{
    width: 50%;
    float: left;
    }

.right{
    width: 50%;
    float: left;
    //  height: 1600px;
    }

    .button{
        width: 29%;
        background-color: #DDDDDD;
        color: black;
    }

    .edit{
        width: 29%;
        float: left;
       // margin-right: 3%;
        margin-left:  3%;
    }

    .delete{
        float: left;
        margin-left:3%;
    }

img{
    margin-top: 10%;
    max-width: 70%;
    max-height: 70%;
    padding: 10px;
    display: block;
    margin-left: auto;
    margin-right: auto;
}
</style>


@section('content')

@if(Session::has('blogdetails'))
        
            <div class="">
                <div id="charge-message" class="alert alert-success">
                    <p style="font-style: italic; font-weight: bold; margin-top: 7px;">{{ Session::get('blogdetails') }}</p>
                </div>
            </div>
        
    @endif

<div class="singleproduct">

<div class="left">
        
<img src="{{asset('front/images/' . $blogdetails->image)}}" /><br><br>


{!! Html::linkRoute('blog.edit', '  Edit Blog Info', array($blogdetails->id), array('class' => 'btn button edit')) !!}

{!! Form::open(['route' => ['blog.destroy', $blogdetails->id], 'method' => 'DELETE']) !!}
    {!! Form::submit('Delete This Blog Post', ['class' => 'btn delete']) !!}
    {!! Form::close() !!}
    

</div>

<div class="right">
<hr>
<h5>{{$blogdetails->title}} </h5>
<hr>
<p>{{$blogdetails->description}}</p>
<hr>

	
</div>

<div class="actions">
    
</div>
</div>
@endsection