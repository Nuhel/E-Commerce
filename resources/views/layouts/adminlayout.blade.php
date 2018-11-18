<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>AdminPanel</title>
  {!! Html::style('admin/vendor/bootstrap/css/bootstrap.min.css')!!}
  {!! Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css')!!}
    {!! Html::style('admin/vendor/font-awesome/css/font-awesome.min.css')!!}
    {!! Html::style('admin/css/sb-admin.css')!!}
    <!-- {!! Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css')!!} -->
    <link rel="stylesheet" href="">
</head>

<style type="text/css">
.bg-dark {
    background-color: #456280!important;
}
  .circle {
    background-color:green;
    color:white;
   border:2px solid green;    
    height:100px;
    border-radius:40%;
    -moz-border-radius:50%;
    -webkit-border-radius:50%;
    width:100px;
    padding: 2px;
}
</style>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="{{ url('dashboardadmin') }}">Admin Panel</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion" style="margin-top: 78px;">
        <li class="<?php if(session()->get('flag6')==$controller){
          echo 'active';}
          else echo '#';
          ?> nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="{{url('dashboardadmin')}}">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
         <li class="<?php if(session()->get('flag7')==$controller){
          echo 'active';}
          else echo '#';
          ?> nav-item" data-toggle="tooltip" data-placement="right" title="Register User">
          <a class="nav-link" href="{{url('registeruser')}}">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Register User</span>
          </a>
        </li>
        <li class="<?php if(session()->get('flag2')==$controller){
          echo 'active';}
          else echo '#';
          ?>  nav-item" data-toggle="tooltip" data-placement="right" title="Orders Info">
          <a class="nav-link" href="{{url('admin/profile')}}">
            <i class="fa fa-first-order" aria-hidden="true"></i>
            <span class="nav-link-text">Orders Info </span> <span><i>{{ $order }}</i></span>
          </a>
        </li>
        <li class="<?php if(session()->get('flag')==$controller){
          echo 'active';}
          else echo '#';
          ?> nav-item" data-toggle="tooltip" data-placement="right" title="Products">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-product-hunt" aria-hidden="true"></i>
            <span class="nav-link-text">Products</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
             <li>
              <a href="{{url('item')}}">Product List</a>
            </li>
            <li>
              <a href="{{url('item/create')}}">Add New Product</a>
            </li>
            <!-- <li>
              <a href="#"><?php echo $action; ?></a>
            </li>
            <li>
              <a href="#"><?php echo $controller; ?></a>
            </li> -->
            
          </ul>
        </li>


        <li class="<?php if(session()->get('flag10')==$controller){
          echo 'active';}
          else echo '#';
          ?>  nav-item" data-toggle="tooltip" data-placement="right" title="Blog">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-tags"></i>
            <span class="nav-link-text">Blog</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
          
            <li>
              <a href="{{url('blogmanage')}}">Post List</a>
            </li>
              <li>
              <a href="{{url('blog/create')}}">Add New Post</a>
            </li>

          </ul>
        </li>

        <li class="<?php if(session()->get('flag3')==$controller){
          echo 'active';}
          else echo '#';
          ?>  nav-item" data-toggle="tooltip" data-placement="right" title="Category">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages3" data-parent="#exampleAccordion">
            <i class="fa fa-tags"></i>
            <span class="nav-link-text">Prodcut Category</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages3">
          
            <li>
              <a href="{{url('categoryinfo')}}">Category List</a>
            </li>
              <li>
              <a href="{{url('category/create')}}">New Category</a>
            </li>

          </ul>
        </li>
 <!-- {{ Session::get('adminid') }} -->

        <?php if (Session::get('adminid')==1) { ?>

        <li class="<?php if(session()->get('flagwish')==$controller){
          echo 'active';}
          else echo '#';
          ?>  nav-item" data-toggle="tooltip" data-placement="right" title="Administrator">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text">Administrator</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti">
            <li>
              <a href="{{route('listadmin')}}">Admin List</a>
            </li>
            <li>
              <a href="{{route('admin.signup')}}">Add New Admin</a>
            </li>
            
          </ul>
        </li>

     <?php   } ?>
        <li class="<?php if(session()->get('flagcontact')==$controller){
          echo 'active';}
          else echo '#';
          ?>  nav-item" data-toggle="tooltip" data-placement="right" title="Messages">
          <a class="nav-link" href="{{route('message')}}">
            <i class="fa fa-fw fa-link"></i>
            <span class="nav-link-text">Messages 
       
                     <span><i>{{ $message111 }}</i></span></i>
   
      
    </span>
          </a>
        </li>


        <li class="<?php if(session()->get('flagrequest')==$controller){
          echo 'active';}
          else echo '#';
          ?>  nav-item" data-toggle="tooltip" data-placement="right" title="Request">
          <a class="nav-link" href="{{url('requestproduct')}}">
            <i class="fa fa-fw fa-link"></i>
            <span class="nav-link-text">Product Request 
       
                    <span><i>{{ $productrequestnotify }}</i></span></i>
   
      
    </span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto" style="float: right;">
        <li class="nav-item dropdown" style="margin-right: 20px;">
          <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-envelope"></i>
            <strong style="color:#FFC107;" title="user message">{{$message111}}</strong>
               
          </a>
          <div class="dropdown-menu" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">New Messages:</h6>
            <div class="dropdown-divider"></div>
           @foreach($messagenotify as $messagenotify)
            <a class="dropdown-item" href="{{route('messageseen', $messagenotify->id)}}">
              <strong>{{$messagenotify->name}} sent you a message</strong>
              <span class="small float-right text-muted"></span>
              <div class="dropdown-message small">{{ $messagenotify->created_at->diffForHumans() }}</div>
            </a>
            @endforeach
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="{{route('message')}}">View all messages</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell" title="new order"></i><strong style="color:#FFC107;">{{$order}}</strong>

            <span class="indicator text-warning d-none d-lg-block">
              
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">New Orders:</h6>
            <div class="dropdown-divider"></div>
             @foreach($ordernofify as $ordernofify)
            <a class="dropdown-item" href="{{route('single_order', $ordernofify->id)}}">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Order From {{$ordernofify->name}}</strong>
              </span>
              <span class="small float-right text-muted">{{ $ordernofify->created_at->diffForHumans() }}</span></a>
            @endforeach
            
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="{{url('admin/profile')}}">View all Orders</a>
          </div>

        </li>
        
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-hand-stop-o" title="product request"></i><strong style="color:#FFC107;">{{ $productrequestnotify}}</strong>

            <span class="indicator text-warning d-none d-lg-block">
             
            </span>
          </a>
          <div class="dropdown-menu"  aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">product request</h6>
            <div class="dropdown-divider"></div>
         @foreach($productrequest as $productrequest)
            <a class="dropdown-item" href="{{url('requestproduct')}}">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Request From customer</strong>
              </span>
              <span class="small float-right text-muted">{{ $productrequest->created_at->diffForHumans() }}</span></a>
            @endforeach
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="{{url('requestproduct')}}">View all request</a>
          </div>

        </li>

        <li class="nav-item" >
          <a class="nav-link" href="{{url('admin/logout')}}" style="color: white;">
            <i class="fa fa-fw fa-sign-out" style="color: white;"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div>

  </div>  

  <div class="content-wrapper">
    @yield('content')

  </div>

    {!! Html::script('admin/vendor/jquery/jquery.min.js'); !!}
    {!! Html::script('admin/vendor/bootstrap/js/bootstrap.bundle.min.js'); !!}
    {!! Html::script('admin/vendor/jquery-easing/jquery.easing.min.js'); !!}
    {!! Html::script('admin/js/sb-admin.min.js'); !!}
  </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mark.js/8.11.1/jquery.mark.min.js"></script>

<script language="javascript" type="text/javascript">

  var mark = function() {
    keyword = $("#target").val();
    $('#faqtab').find(".remove-tr").unmark({
      done: function() {

        $('#faqtab').find(".remove-tr").mark(keyword,{separateWordSearch:false,});
      }
    });
  };

  $("#target").on("input", mark);


  $.extend($.expr[':'], {
    'containsi': function(elem, i, match, array) {
      return (elem.textContent || elem.innerText || '').toLowerCase()
      .indexOf((match[3] || "").toLowerCase()) >= 0;
    }
  });

  $("#target").bind("keyup change", function(e) {

    keyword = $("#target").val();
   

    if (keyword.length > 0) {

      $('#faqtab').find(".remove-tr")
      .hide()
      .filter(':containsi("' + keyword + '")')
      .show();
      $('.paginate-container').hide();

    } else {
      $('.remove-tr').show();
      $('.paginate-container').show();
    }

  });

</script>
</body>

</html>
