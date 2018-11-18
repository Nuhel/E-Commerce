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

@if(Session::has('item'))
        
            <div class="">
                <div id="charge-message" class="alert alert-success">
                    <p style="font-style: italic; font-weight: bold; margin-top: 7px;">{{ Session::get('item') }}</p>
                </div>
            </div>
        
    @endif

<div class="singleproduct">

<div class="left">
        
<img src="{{asset('/items/' . $item->imagePath)}}" /><br><br>

 {!! Html::linkRoute('productreview', '  Product Review', array($item->id), array('class' => 'btn button edit')) !!}

{!! Html::linkRoute('item.edit', '  Edit Product Info', array($item->id), array('class' => 'btn button edit')) !!}

    {!! Form::open(['route' => ['item.destroy', $item->id], 'method' => 'DELETE']) !!}
    {!! Form::submit('Delete This Product', ['class' => 'btn delete']) !!}
    {!! Form::close() !!}

</div>

<div class="right">
<hr>
<h5>Title <strong>{{$item->title}}</strong> </h5>
<hr>
<p>price <strong>${{$item->price}}</strong></p>
<hr>
<p>{{$item->description}}</p>

<hr>
<p>{{$item->details}}</p>

	
</div>

<div class="actions">
    
</div>
</div>
@endsection