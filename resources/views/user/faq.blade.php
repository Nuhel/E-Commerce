@extends('layouts.design')


@section('content')
  
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="index.html">Home</a><span>&raquo;</span></li>
           
            <li><strong>FAQ</strong></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End -->
    <div class="container">
<div class="row"><div class="faq-page">
<div class="col-xs-12">

          <div class="page-title">
            <h2>Frequently Asked Questions</h2>
            
            <p></p>
          </div></div>
          <div class="col-xs-12 col-sm-9">
          <div class="panel-group accordion-faq" id="faq-accordion">
            <div class="panel">
              <div class="panel-heading"> <a data-toggle="collapse" data-parent="#faq-accordion" href="#question1"> <span class="arrow-down"><i class="fa fa-angle-down"></i></span></span> <span class="arrow-up"><i class="fa fa-angle-up"></i></span></span>HOW DO I ACTIVATE MY ACCOUNT? </a> </div>
              <div id="question1" class="panel-collapse collapse in">
                <div class="panel-body"> The instructions to activate your account will be sent to your email once you have submitted the registration form. If you did not receive this email, your email service provider’s mailing software may be blocking it. You can try checking your junk / spam folder or contact us at help@samplestore.com. <br><br>
                Aliquam posuere erat et orci eleifend cursus. Nullam tempus odio sem, lacinia pellentesque neque mollis a. In ut tempor ligula. Vestibulum ultricies bibendum lorem, a sollicitudin tellus euismod vel. Nam suscipit, diam ut volutpat lobortis, nibh ipsum tempor nibh, a vehicula tellus justo id nibh. Nulla pretium mollis convallis. Phasellus a nibh aliquet, ullamcorper quam aliquam, faucibus nulla. Phasellus mollis tristique vehicula. Vivamus sagittis, sem sed posuere aliquet, massa odio lobortis. ullamcorper nec, eleifend at, fermentum ut, turpis. Mauris et ligula quis erat dignissim imperdiet. ullamcorper nec, eleifend at, fermentum ut, turpis. Mauris et ligula quis erat dignissim imperdiet.</div>
              </div>
            </div>
            <div class="panel">
              <div class="panel-heading"> <a data-toggle="collapse" data-parent="#faq-accordion" href="#question3" class="collapsed"> <span class="arrow-down"><i class="fa fa-angle-down"></i></span> <span class="arrow-up"><i class="fa fa-angle-up"></i></span></span> WHY MUST I MAKE PAYMENT IMMEDIATELY AT CHECKOUT?</a> </div>
              <div id="question3" class="panel-collapse collapse">
                <div class="panel-body">Sample ordering is on ‘first-come-first-served’ basis. To ensure that you get your desired samples, it is recommended that you make your payment within 60 minutes of checking out. </div>
              </div>
            </div>
            <div class="panel">
              <div class="panel-heading"> <a data-toggle="collapse" data-parent="#faq-accordion" href="#question2" class="collapsed"> <span class="arrow-down"><i class="fa fa-angle-down"></i></span></span> <span class="arrow-up"><i class="fa fa-angle-up"></i></span></span> HOW CAN I CHANGE MY PASSWORD?</a> </div>
              <div id="question2" class="panel-collapse collapse">
                <div class="panel-body"> By default, the last used shipping address will be saved into to your Sample Store account. When you are checking out your order, the default shipping address will be displayed and you have the option to amend it if you need to.</div>
              </div>
            </div>
            <div class="panel">
              <div class="panel-heading"> <a data-toggle="collapse" data-parent="#faq-accordion" href="#question5" class="collapsed"> <span class="arrow-down"><i class="fa fa-angle-down"></i></span></span> <span class="arrow-up"><i class="fa fa-angle-up"></i></span></span>HOW CAN I TRACK MY ORDERS & PAYMENT?</a> </div>
              <div id="question5" class="panel-collapse collapse">
                <div class="panel-body">After logging into your account, the status of your checkout history can be found under your profile. For orders via registered postage, a tracking number (article tracking number) will be given to you after the receipt given from Singapore Post Limited (SingPost).</div>
              </div>
            </div>
            <div class="panel">
              <div class="panel-heading"> <a data-toggle="collapse" data-parent="#faq-accordion" href="#question4" class="collapsed"> <span class="arrow-down"><i class="fa fa-angle-down"></i></span></span> <span class="arrow-up"><i class="fa fa-angle-up"></i></span></span>WHAT ARE THE PAYMENT METHODS AVAILABLE? </a> </div>
              <div id="question4" class="panel-collapse collapse">
                <div class="panel-body"> At the moment, we  accept Credit/Debit cards, bikash and cash on delivery payments.</div>
              </div>
            </div>
            <div class="panel">
              <div class="panel-heading"> <a data-toggle="collapse" data-parent="#faq-accordion" href="#question6" class="collapsed"> <span class="arrow-down"><i class="fa fa-angle-down"></i></span></span> <span class="arrow-up"><i class="fa fa-angle-up"></i></span></span> HOW CAN I USE MY REMAINING ACCOUNT CREDITS? </a> </div>
              <div id="question6" class="panel-collapse collapse">
                <div class="panel-body"> We are in the process of removing the option to pay for your orders by ‘Account Credits’. If you have remaining credits in your account, it will be used to pay for your next checkout. If there are insufficient credits, the system will direct you automatically to pay the balance via Paypal. </div>
              </div>
            </div>
          </div></div>
          <div class="col-sm-3 col-xs-12">
          
          <div class="content-box color-effect-1">
			<a href="{{url('contact/create')}}"><h3>One More Question?</h3>

				<div class="box-icon-wrap box-icon-effect-1 box-icon-effect-1a">
					<div class="box-icon"><i class="fa fa-question"></i></div>
				</div>

			<p>If you have more questions, send us a message and we will answer you as soon as possible.</p></a>
		</div>
        <div><img src="{{asset('front/images/faq-banner.png')}}"></div>
      </div>
        </div>
</div></div>
  <!-- Footer -->
  @endsection