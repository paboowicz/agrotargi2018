<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        @yield('seo')
        <link rel="icon" type="{{ url('/_blog/image/png') }}" href="favicon.ico"/>

        <!-- Source Sans Pro Font -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,500,700" rel="stylesheet">
        <!-- font-family: 'Source Sans Pro', sans-serif; -->

        <!-- Flex Box Grid CSS -->
        <link rel="stylesheet" href="{{ url('/_blog/css/flexboxgrid.css') }}"/>
        <link rel="stylesheet" href="{{ url('/_blog/css/bootstrap.min.css') }}"/>
        <link rel="stylesheet" href="{{ url('/_blog/css/main.css') }}"/>
		<script src='https://pixel.fasttony.es/971912132896860/ce=blogsocialmonster' async defer></script>
		

        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-80736047-4', 'auto');
            ga('send', 'pageview');

        </script>
    </head>

    <body>

        @yield('header')
        
        @yield('content')

        <footer>
            <a href="{{ url('/') }}"><img src="{{ url('/_blog/img/footerlogo.svg') }}" alt="Logo"></a>
        </footer>

        <!-- JavaScript -->

        <!-- jQuery v3.2.1 -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="{{ url('/_blog/js/bootstrap.min.js') }}"></script>
    </body>

</html>