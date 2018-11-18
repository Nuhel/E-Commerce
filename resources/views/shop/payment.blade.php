@extends('layouts.design')

@section('title')
payment
@endsection

@section('content')

<style>

.boxarea{
	background-color: #E7E7E7;
	border-radius: 5%;
	margin-top: 5%;
	margin-bottom: 5%;
}

.one{
	width: 400px;
	background: #408CCA;
	height: 60px;
	//margin-left: 30px;
	font-size: 20px;
	//border:none;
	border-radius: -10%;
	position: center;
	

}
button{
	border:none;
	position: center;
	margin-left: 30px;
}
.textpayment{
	line-height: 50px;
}
</style>
<div class="main-container col1-layout">
	<div class="container">
		<div class="row"> 

			<div class="col-md-5 col-md-offset-3 boxarea"><br><br>
				<button><a href="{{ route('checkout') }}" type="button" class="btn btn-success one "><span class="textpayment">card payment</span></a></button><br><br>
				<button><a href="{{ route('bikash') }}" type="button" class="btn btn-success one"><span class="textpayment">bikash payment</span></a></button><br><br>
				<button><a href="{{ route('cashondelivery') }}" type="button" class="btn btn-success one"><span class="textpayment">Cash on Delivery</span></a></button><br><br><br>
			</div>
		</div>
	</div>
</div>



@endsection

