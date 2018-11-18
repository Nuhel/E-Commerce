@extends('layouts.adminlayout')

@section('content')

<style>
body.sticky-footer .content-wrapper {
    background: #423f3f;
}
	.box{
		width: 32%; background-color: #a0a7a6; border-radius: 5px; height: 120px; float: left; margin-left:1%; margin-top: 3%;
	}
	.box:hover{
		opacity: .7;
	}

	p{
		color: white; font-size: 22px; text-align: center; margin-top: 22px;
	}
	.perbox{
		background-color: #544c4b;
    padding: 20px;
    border-radius: 32px;
    /* margin-top: 53px; */
    line-height: 56px;
	}


</style>

<div class="col-md-10 col-md-offset-1 boxm">
	<div class="box"><p> <span class="perbox">{{ $usernumber }}</span><br>USER</p></div>
	<div class="box"><p> <span class="perbox">{{ $productnumber }}</span><br>PRODUCTS</p></div>
	<div class="box"><p> <span class="perbox">{{ $ordernumber }}</span><br>ORDERS</p></div>
	<div class="box"><p> <span class="perbox">{{ $requestnumber }}</span><br>REQUEST</p></div>
	<div class="box"><p> <span class="perbox">{{ $commentnumber }}</span><br>REVIEW</p></div>
	<div class="box"><p> <span class="perbox">{{ $messageall }}</span><br>MESSAGE</p></div>
	<div class="box"><p>  <span class="perbox">{{ $categorynumber }}</span><br>CATEGORY</p></div>
	<div class="box"><p>  <span class="perbox">{{ $subcategorynumber }}</span><br>SUB CATEGORY</p></div>
	<div class="box"><p>  <span class="perbox">{{ $blognumber }}</span><br>BLOG</p></div>
</div>
@endsection
