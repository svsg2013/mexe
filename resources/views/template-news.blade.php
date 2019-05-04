<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    @yield('styleMeta')
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/dark.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/font-icons.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/animate.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/custom.css')}}" type="text/css"/>
</head>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Top Bar -->
    @include('newnews.partial.top-bar')
    <!-- #top-bar end -->

    <!-- Header -->
    @include('newnews.partial.header')
    <!-- #header end -->

    <!-- Content -->
    @yield('content')
    <!-- #content end -->
    <!-- Footer -->
    @include('newnews.partial.footer')
    <!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- External JavaScripts
============================================= -->
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/plugins.js')}}"></script>

<!-- Footer Scripts
============================================= -->
<script src="{{asset('js/functions.js')}}"></script>
@yield('script')
</body>
</html>