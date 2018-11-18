<style type="text/css">
    .navbar-default {
    background-color: #343A40;
}
</style>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#" style="color:white">Shop</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false"><i class="fa fa-admin" aria-hidden="true"></i> Admin Management <span
                                class="caret"></span></a>
                    <ul class="dropdown-menu">
                        @if(Auth::guard('admins')->check())
                            <li><a href="{{ route('admin.profile') }}">admin Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{ route('admin.logout') }}">Logout</a></li>
                        @else
                            <li><a href="{{ route('admin.signup') }}">Signup</a></li>
                            <li><a href="{{ route('admin.signin') }}">Signin</a></li>
                        @endif
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse --> 
    </div><!-- /.container-fluid -->
</nav>