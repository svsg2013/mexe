<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="vi" lang="vi" data-load="trang-chu">
<head>
    <meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″ />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <meta name=viewport content="user-scalable=no,width=device-width,maximum-scale=1">
    <base href="{{url('/')}}"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('upload/thumbnail/favicon.ico')}}"/>
    <title>{{$system->title}} |{{Request::is('/')?' Trang chủ' : null}} @yield('title')</title>
    <meta name="description" content="@yield('description')">
    <!-- Google / Search Engine Tags -->
    <link  rel="canonical" href="{{url()->current()}}" />
    <meta itemprop="name" content="{{Request::is('/')?'Shop For You' : null}}@yield('title')">
    <meta itemprop="description" content="@yield('description')">
    <meta itemprop="image" content="{{url('/')}}/upload/thumbnail/@yield('image')">
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{URL::current()}}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{Request::is('/')?'Shop For You' : null}}@yield('title')">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:image" content="{{url('/')}}/upload/thumbnail/@yield('image')">
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{Request::is('/')?'Shop For You' : null}}@yield('title')">
    <meta name="twitter:description" content="@yield('description')">
    <meta name="twitter:image" content="{{url('/')}}/upload/thumbnail/@yield('image')">
    <!-- This my site -->
    <script type="text/javascript" src="{{asset('adcms/plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('adcms/plugins/font-awesome/css/font-awesome.min.css')}}"/>
    <script type="text/javascript" src="{{asset('views/template/src/bootstrap.minb09c.js')}}"></script>
    <link href="{{asset('views/template/src/bootstrap.minb09cb09c.css?v=180')}}" rel='stylesheet' type='text/css' media='all'/>
    <script defer="defer" type="text/javascript" src="{{asset('adcms/plugins/nprogress/nprogress.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('adcms/plugins/nprogress/nprogress.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('adcms/plugins/bootstrap-dropdown/css/animate.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('adcms/plugins/bootstrap-dropdown/css/bootstrap-dropdownhover.min.css')}}"/>
    <script defer="defer" type="text/javascript" src="{{asset('adcms/plugins/bootstrap-dropdown/js/bootstrap-dropdownhover.min.js')}}"></script>
    <script defer="defer" type="text/javascript" src="{{asset('adcms/plugins/wow/wow.min.js')}}"></script>
    <script defer="defer" type="text/javascript" src="{{asset('adcms/assets/js/custom.js')}}"></script>
    <link href="{{asset('views/template/src/filecssb09cb09c.css?v=180')}}" rel='stylesheet' type='text/css' media='all'/>
    <link href="{{asset('views/template/src/owl.carouselb09cb09c.css?v=180')}}" rel='stylesheet' type='text/css' media='all'/>
    <link href="{{asset('views/template/src/dq.scssb09cb09c.css?v=180')}}" rel='stylesheet' type='text/css' media='all'/>
    <link href="{{asset('views/template/src/font-awesomeb09cb09c.css?v=180')}}" rel='stylesheet' type='text/css' media='all'/>
    <link href="{{asset('views/template/src/jquery.fancyboxb09cb09c.css?v=180')}}" rel='stylesheet' type='text/css' media='all'/>
    <link href="{{asset('views/template/src/styleb09cb09c.css?v=180')}}" rel='stylesheet' type='text/css' media='all'/>
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,700,500,600' rel='stylesheet' type='text/css'>
    <link href="{{asset('views/template/src/custom.css')}}" rel='stylesheet' type='text/css' media='all'/>
    {!! $system->analytic !!}
</head>
<body id="flexshop" class="">
<div class="page-container">
    @include('flexshop.partial.menuSearch')
    @yield('content')
    @include('flexshop.partial.footer')
</div>
<div class="quickview-product dqdt-popup"></div>
<a href="#0" class="cd-top">Top</a>
<script src={{asset('views/template/src/jquery.fancyboxb09cb09c.js?v=180')}} type='text/javascript'></script>
<script src={{asset('views/template/src/owl.carouselb09cb09c.js?v=180')}} type='text/javascript'></script>
<script src={{asset('views/template/src/jquery.easing.1.3b09cb09c.js?v=180')}} type='text/javascript'></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5cb3ed98c1fe2560f3fed2ab/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->
</body>

</html>

