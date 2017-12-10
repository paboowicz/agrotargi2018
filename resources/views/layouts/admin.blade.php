<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>InteractiveVision - Blog</title>
        <link rel="icon" type="image/png" href="http://interactivevision.pl/dist/img/favicon.ico" sizes="32x32">


        <!-- ========== COMMON STYLES ========== -->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="{{ url('panel/css/bootstrap.min.css') }}" media="screen" >
        <link rel="stylesheet" href="{{ url('panel/css/font-awesome.min.css') }}" media="screen" >
        <link rel="stylesheet" href="{{ url('panel/css/animate-css/animate.min.css') }}" media="screen" >
        <link rel="stylesheet" href="{{ url('panel/css/lobipanel/lobipanel.min.css') }}" media="screen" >
        <link rel="stylesheet" href="{{ url('panel/css/switchery/switchery.min.css') }}" media="screen" >

        <!-- ========== PAGE STYLES ========== -->
        <link rel="stylesheet" href="{{ url('panel/css/icheck/skins/line/blue.css') }}" >
        <link rel="stylesheet" href="{{ url('panel/css/icheck/skins/line/red.css') }}" >
        <link rel="stylesheet" href="{{ url('panel/css/icheck/skins/line/green.css') }}" >
        <link rel="stylesheet" href="{{ url('panel/js/amcharts/plugins/export/export.css') }}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{ url('panel/css/dropzone/dropzone.min.css') }}" >
        <link rel="stylesheet" href="{{ url('panel/css/tags/jquery.tagsinput.min.css') }}" >

        <!-- ========== THEME CSS ========== -->
        <link rel="stylesheet" href="{{ url('panel/css/main.css') }}" media="screen" >

        <!-- ========== MODERNIZR ========== -->
        <script src="{{ url('panel/js/modernizr/modernizr.min.js') }}"></script>
    </head>
    <body class="top-navbar-fixed">
        <div class="main-wrapper">

            <!-- ========== TOP NAVBAR ========== -->
            <nav class="navbar top-navbar bg-white box-shadow">
                <div class="container-fluid">
                    <div class="row">
                        <div class="navbar-header no-padding">
                            <a class="navbar-brand" style="background-color: black;" href="{{ url('/') }}" target="_blank">
                                <img alt="InteractiveVision" src="http://interactivevision.pl/dist/img/logo.svg">
                            </a>
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <i class="fa fa-ellipsis-v"></i>
                            </button>
                            <button type="button" class="navbar-toggle mobile-nav-toggle" >
                                <i class="fa fa-bars"></i>
                            </button>
                        </div>
                        <!-- /.navbar-header -->

                        <div class="collapse navbar-collapse" id="navbar-collapse-1">
                            <ul class="nav navbar-nav" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                <li><a href="/system/" class="@yield('kokpit')"><i class="fa fa-dashboard"></i> Kokpit</a></li>
                                
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle @yield('blog')" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wordpress"></i> Blog <span class="caret"></span></a>
                                    <ul class="dropdown-menu" >
                                        <li><a href="/system/blog/posty" class="@yield('posty')"><i class="fa fa-pencil-square"></i> Posty</a></li>
                                        <li><a href="/system/blog/galerie" class="@yield('galerie')"><i class="fa fa-picture-o"></i> Galerie</a></li>
                                    </ul>
                                </li>

                            <!-- <li class=""><a href="#" class="color-primary"><i class="fa fa-diamond"></i> Upgrade</a></li> -->
                            </ul>
                            <!-- /.nav navbar-nav -->

                            <ul class="nav navbar-nav navbar-right" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                <!--
                                <li><a href="#" class=""><i class="fa fa-bell"></i></a></li>
                                <li><a href="#" class=""><i class="fa fa-comments"></i></a></li>
                                -->
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle bg-purple" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> {{ Auth::user()->name }} <span class="caret"></span></a>
                                    <ul class="dropdown-menu profile-dropdown">
                                        <li class="profile-menu bg-gray">
                                            <div class="">
                                                <img src="http://placehold.it/60/c2c2c2?text=User" alt="{{ Auth::user()->name }}" class="img-circle profile-img">
                                                <div class="profile-name">
                                                    <h6>{{ Auth::user()->name }}</h6>
                                                    <a href="#">{{ Auth::user()->status() }}</a>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </li>
                                        @if(Auth::user()->profile == 2)
                                        <li><a class="@yield('uzytkownicy')" href="{{ url('/system/account/users') }}"><i class="fa fa-users"></i> Użytkownicy</a></li>
                                        @endif
                                        <li><a href="{{ url('/system/account/details') }}"><i class="fa fa-cogs"></i> Ustawienia</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="{{ url('/logout') }}" class="color-danger text-center"><i class="fa fa-sign-out"></i> Logout</a></li>
                                    </ul>
                                </li>
                                <!-- /.dropdown -->
                            </ul>
                            <!-- /.nav navbar-nav navbar-right -->
                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </nav>

            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->

            <div class="content-wrapper">
                @yield('header')

            @if (count($errors) > 0)
            <!-- Form Error List -->
            <div class="alert alert-danger">
                <strong>Whoops! Something went wrong!</strong>

                <br><br>

                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            @yield('content')

            </div>
            <!-- /.content-wrapper -->

        </div>
        <!-- /.main-wrapper -->

        <!-- ========== COMMON JS FILES ========== -->
        <script src="{{ url('panel/js/jquery/jquery-2.2.4.min.js') }}"></script>
        <script src="{{ url('panel/js/jquery-ui/jquery-ui.min.js') }}"></script>
        <script src="{{ url('panel/js/bootstrap/bootstrap.min.js') }}"></script>
        <script src="{{ url('panel/js/pace/pace.min.js') }}"></script>
        <script src="{{ url('panel/js/lobipanel/lobipanel.min.js') }}"></script>
        <script src="{{ url('panel/js/iscroll/iscroll.js') }}"></script>
        <script src="{{ url('panel/js/switchery/switchery.min.js') }}"></script>
        <script src="{{ url('panel/js/bootstrap-confirmation/bootstrap-confirmation.min.js') }}"></script>

        <!-- ========== PAGE JS FILES ========== -->
        <script src="{{ url('panel/js/waypoint/waypoints.min.js') }}"></script>
        <script src="{{ url('panel/js/counterUp/jquery.counterup.min.js') }}"></script>
        <script src="{{ url('panel/js/amcharts/amcharts.js') }}"></script>
        <script src="{{ url('panel/js/amcharts/serial.js') }}"></script>
        <script src="{{ url('panel/js/amcharts/pie.js') }}"></script>
        <script src="{{ url('panel/js/amcharts/plugins/export/export.min.js') }}"></script>
        <script src="{{ url('panel/js/amcharts/themes/light.js') }}"></script>
        <script src="{{ url('panel/js/icheck/icheck.min.js') }}"></script>
        <script src="{{ url('panel/js/ckeditor/ckeditor.js') }}"></script>

        <!-- ========== THEME JS ========== -->
        <script src="{{ url('panel/js/main.js') }}"></script>
        <script src="{{ url('panel/js/bar-chart.js') }}"></script>
        <script src="{{ url('panel/js/pie-chart.js') }}"></script>
        <script src="{{ url('panel/js/task-list.js') }}"></script>

        @yield('scripts')

        <script>
$(function () {

    // Counter for dashboard stats
    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });

});
$(function ($) {
    $('[data-toggle=confirmation]').confirmation();
});
        </script>

        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
    </body>
</html>
