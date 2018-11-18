<!DOCTYPE html>
<html lang="en">
<head>
<title>Tech Shop</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Tech Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">


{!! Html::style('styles/bootstrap4/bootstrap.min.css')!!}
{!! Html::style('plugins/font-awesome-4.7.0/css/font-awesome.min.css')!!}
{!! Html::style('plugins/OwlCarousel2-2.2.1/owl.carousel.css')!!}
{!! Html::style('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')!!}
{!! Html::style('plugins/OwlCarousel2-2.2.1/animate.css')!!}
{!! Html::style('styles/main_styles.css')!!}
{!! Html::style('styles/responsive.css')!!}
{!! Html::style('css/app.css')!!}


{!! Html::script('js/jquery-3.2.1.min.js'); !!}
{!! Html::script('styles/bootstrap4/popper.js'); !!}
{!! Html::script('styles/bootstrap4/bootstrap.min.js'); !!}
{!! Html::script('plugins/Isotope/isotope.pkgd.min.js'); !!}
{!! Html::script('plugins/OwlCarousel2-2.2.1/owl.carousel.js'); !!}
{!! Html::script('plugins/easing/easing.js'); !!}
{!! Html::script('js/custom.js'); !!}
</head>

<style>
	.feedback {
    margin: auto;
    margin-top: 10px;
    
}
</style>

<body>

<div class="super_container">

	<!-- Header -->

	<header class="header trans_300">

		<!-- Top Navigation -->

		<div class="top_nav">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="top_nav_left">free shipping on all u.s orders over $50</div>
					</div>
					<div class="col-md-6 text-right">
						<div class="top_nav_right">
							<ul class="top_nav_menu">

								<!-- Currency / Language / My Account -->

								<li class="currency">
									<a href="#">
										usd
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="currency_selection">
										<li><a href="#">cad</a></li>
										<li><a href="#">aud</a></li>
										<li><a href="#">eur</a></li>
										<li><a href="#">gbp</a></li>
									</ul>
								</li>
								<li class="language">
									<a href="#">
										English
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="language_selection">
										<li><a href="#">French</a></li>
										<li><a href="#">Italian</a></li>
										<li><a href="#">German</a></li>
										<li><a href="#">Spanish</a></li>
									</ul>
								</li>
								<li class="account">
									<a href="#">
										My Account
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="account_selection">
										@if(Auth::check())
                            <li><a href="{{ route('user.profile') }}">User Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{ route('user.logout') }}">Logout</a></li>
                        @else
                            <li><a href="{{ route('user.signup') }}">Signup</a></li>
                            <li><a href="{{ route('user.signin') }}">Signin</a></li>
                        @endif
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Main Navigation -->

		<div class="main_nav_container">
@if (Session::has('success'))
<div class="alert alert-success" role='alert'>
	<strong>{{ Session::get('success')}}</strong>
</div>
@endif


@if (Session::has('feedback'))
<div class="alert alert-success" role='alert'>
	<strong>{{ Session::get('feedback')}}</strong>
</div>
@endif

<div id="comments">

			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-right">

						
						<div class="logo_container">
							<a href="{{route('product.index')}}">Tech<span>shop</span></a>
						</div>
						<nav class="navbar">
							<ul class="navbar_menu">
								<li><a href="{{route('product.index')}}">home</a></li>
								<li><a href="#">shop</a></li>
								<li><a href="#">promotion</a></li>
								<li><a href="#">pages</a></li>
								<li><a href="{{ route('category.index') }}">Category</a></li>
								<li><a href="{{ route('contact.create') }}">contact</a></li>
							</ul>
							<ul class="navbar_user">
								<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
								<li><a href="{{url('/user/profile')}}"><i class="fa fa-user" aria-hidden="true"></i></a></li>
								<li class="checkout">
									<a href="{{ route('product.shoppingCart') }}">
										<i class="fa fa-shopping-cart" aria-hidden="true"></i>
										<span id="checkout_items_cart" class="checkout_items">{{ Session::has('cart') ? Session::get('cart')->totalQty : '0' }}</span>
									</a>
								</li>

								<li class="checkout">
									<a href="{{ url('wishlist') }}" class="productcheckout">

										<i class="fa fa-heart" aria-hidden="true"></i>
										<span id="checkout_items" class="checkout_items">
											@if (Auth::check()) 
											    {{ Session::has('count') ? Session::get('count') : '0' }}
											 @else
											 0
											@endif</span>
									</a>


								</li>
							</ul>

	



							<div class="hamburger_container">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>

	</header>

	<div class="fs_menu_overlay"></div>
	<div class="hamburger_menu">
		<div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="hamburger_menu_content text-right">
			<ul class="menu_top_nav">
				<li class="menu_item has-children">
					<a href="#">
						usd
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="#">cad</a></li>
						<li><a href="#">aud</a></li>
						<li><a href="#">eur</a></li>
						<li><a href="#">gbp</a></li>
					</ul>
				</li>
				<li class="menu_item has-children">
					<a href="#">
						English
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="#">French</a></li>
						<li><a href="#">Italian</a></li>
						<li><a href="#">German</a></li>
						<li><a href="#">Spanish</a></li>
					</ul>
				</li>
				<li class="menu_item has-children">
					<a href="#">
						My Account
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
						<li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
					</ul>
				</li>
				<li class="menu_item"><a href="#">home</a></li>
				<li class="menu_item"><a href="#">shop</a></li>
				<li class="menu_item"><a href="#">promotion</a></li>
				<li class="menu_item"><a href="#">pages</a></li>
				<li class="menu_item"><a href="#">blog</a></li>
				<li class="menu_item"><a href="#">contact</a></li>
			</ul>
		</div>
	</div>


	@yield('content')




	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center">
						<h4>Newsletter</h4>
						<p>Subscribe to our newsletter and get 20% off your first purchase</p>
					</div>
				</div>
				<div class="col-lg-6">
					<form action="post">
						<div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
							<input id="newsletter_email" type="email" placeholder="Your email" required="required" data-error="Valid email is required.">
							<button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">subscribe</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer -->
<hr><hr>
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
						<ul class="footer_nav">
							<li><a href="#">Blog</a></li>
							<li><a href="#">FAQs</a></li>
							<li><a href="contact.html">Contact us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="footer_nav_container">
						<div class="cr">©2018 All Rights Reserverd. This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#">Techrlib</a></div>
					</div>
				</div>
			</div>
		</div>
	</footer>

</div>

@yield('scripts')

</body>

</html>
