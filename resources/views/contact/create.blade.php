@extends('layouts.design')


@section('content')
  
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="index.html"></a><span>&raquo;</span></li>
           
            <li><strong>Contact Us</strong></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End --> 

  <!-- Main Container -->
  <section class="main-container col1-layout">
    <div class="main container">
      <div class="row">
        <section class="col-main col-sm-12">
          
          <div id="contact" class="page-content page-contact">
          <div class="page-title">
            <h2>Contact Us</h2>
          </div>
            <div id="message-box-conact">We're available for new projects</div>
            <div class="row">
              <div class="col-xs-12 col-sm-6" id="contact_form_map">
                <h3 class="page-subheading">Let's get in touch</h3>
                <p>Lorem ipsum dolor sit amet onsectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor dapibus eget. Mauris tincidunt aliquam lectus sed vestibulum. Vestibulum bibendum suscipit mattis.</p>
                <br/>
                <ul>
                  <li>Praesent nec tincidunt turpis.</li>
                  <li>Aliquam et nisi risus.&nbsp;Cras ut varius ante.</li>
                  <li>Ut congue gravida dolor, vitae viverra dolor.</li>
                </ul>
                <br/>
                <ul class="store_info">
                  <li><i class="fa fa-home"></i>7064 Lorem Ipsum Vestibulum 666/13</li>
                  <li><i class="fa fa-phone"></i><span>+ 012 315 678 1234</span></li>
                  <li><i class="fa fa-fax"></i><span>+39 0035 356 765</span></li>
                  <li><i class="fa fa-envelope"></i>Email: <span><a href="mailto:support@template.com">support@template.com</a></span></li>
                </ul>
              </div>
          {!! Form::open(['route' => 'contact.store','files' => true]) !!}
              <div class="col-sm-6">
                <h3 class="page-subheading">Make an enquiry</h3>
                <div class="contact-form-box">
                  <div class="form-selector">
                    <label>Name</label>
                   {{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '50', 'minlength' => '3' )) }}
                  </div>
                  <div class="form-selector">
                    <label>Email</label>
                    {{ Form::email('email', null, array('class' => 'form-control', 'required' => '', 'email' => 'email') ) }}
                  </div>
                  <div class="form-selector">
                    <label>Message</label>
                    {{ Form::textarea('message', null, array('class' => 'form-control', 'rows' => '5', 'required' => '', 'minlength' => '5') ) }}
                  </div>
                  <div class="form-selector">
                    <button class="button"><i class="fa fa-send"></i>&nbsp; <span>Send Message</span></button>
                    &nbsp; <a href="{{url('contactclear')}}" class="button">Clear</a> </div>
                </div>
              </div>
          {!! Form::close() !!}
            </div>
          </div>
        </section>
      </div>
    </div>
  </section>
  @endsection