<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blog</title>

        <!-- ========== COMMON STYLES ========== -->
        <link rel="stylesheet" href="{{ url('panel/css/bootstrap.min.css') }}" media="screen" >
        <link rel="stylesheet" href="{{ url('panel/css/font-awesome.min.css') }}" media="screen" >
        <link rel="stylesheet" href="{{ url('panel/css/animate-css/animate.min.css') }}" media="screen" >

        <!-- ========== THEME CSS ========== -->
        <link rel="stylesheet" href="{{ url('panel/css/main.css') }}" media="screen" >

        <!-- ========== MODERNIZR ========== -->
        <script src="{{ url('panel/js/modernizr/modernizr.min.js') }}"></script>
    </head>
    <body class="">
        <div class="main-wrapper">

            <div class="">
                <div class="row">
                    <div class="col-lg-6 visible-lg-block">
                        <img src="{{ url('panel/images/photo-1.jpg') }}" alt="KSW Template" class="img-responsive">
                    </div>
                    <!-- /.col-lg-6 -->

                    <div class="col-lg-6">

                        @yield('content')

                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /. -->

        </div>
        <!-- /.main-wrapper -->

        <!-- ========== COMMON JS FILES ========== -->
        <script src="{{ url('panel/js/jquery/jquery-2.2.4.min.js') }}"></script>
        <script src="{{ url('panel/js/jquery-ui/jquery-ui.min.js') }}"></script>
        <script src="{{ url('panel/js/bootstrap/bootstrap.min.js') }}"></script>
        <script src="{{ url('panel/js/pace/pace.min.js') }}"></script>
        <script src="{{ url('panel/js/lobipanel/lobipanel.min.js') }}"></script>
        <script src="{{ url('panel/js/iscroll/iscroll.js') }}"></script>

        <!-- ========== PAGE JS FILES ========== -->

        <!-- ========== THEME JS ========== -->
        <script src="{{ url('js/main.js') }}"></script>
        <script>
            $(function () {

            });
        </script>

        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
    </body>
</html>
