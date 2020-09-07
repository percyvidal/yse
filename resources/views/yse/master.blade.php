<!DOCTYPE html>
<html lang="es">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('metas')
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">
    <!-- Styles CSS -->
    <link rel="stylesheet" href="{{asset('provisional/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('provisional/css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('provisional/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('provisional/css/style-responsive.css')}}">
    <link rel="stylesheet" href="{{asset('provisional/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('provisional/css/alvira.css')}}">
    <link rel="stylesheet" href="{{asset('provisional/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('provisional/css/magnific-popup.css')}}.">



</head>
<body class="appear-animate">
<!-- Start Loader -->
<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object" id="object_four"></div>
            <div class="object" id="object_three"></div>
            <div class="object" id="object_two"></div>
            <div class="object" id="object_one"></div>
        </div>
    </div>
</div>
<!-- End Loader -->
<!-- Start Page Wrapper -->
<div class="page" id="top">
    <!-- Start Hero Section -->
    @yield('content')
    <!-- End Hero Section -->
    <!-- Start Navigation -->
    <nav class="main-nav dark transparent stick-fixed">
        <div class="full-wrapper relative clearfix">
            <!-- Start Top Search Section -->
            <div class="top-search">
                <form class="search-form" action="#" method="get" accept-charset="utf-8">
                    <div class="input-group">
                        <span class="input-group-addon cursor-pointer">
                            <button class="search-form_submit fa fa-search" type="submit"></button>
                        </span>
                        <input type="text" class="search-form_input form-control" name="s" autocomplete="off" placeholder="">
                        <span class="input-group-addon close-search">
                        <i class="fa fa-times font-size18 line-height-28 margin-5px-top"></i>
                    </span>
                    </div>
                </form>
            </div>
            <!-- End Top Search Section -->
            <!-- Start Logo -->
            <div class="nav-logo-wrap local-scroll">
                <a href="{{route('home')}}" class="logo">
                    <img src="{{asset('img/white-logo.png')}}" alt="Alvira"/>
                </a>
            </div>
            <!-- End Logo -->
            <div class="mobile-nav">
                <i class="fa fa-bars"></i>
            </div>
            <!-- Start Main Menu -->
            <div class="inner-nav desktop-nav">
                <ul class="clearlist scroll-nav local-scroll">
                    
                    <li class="attr-nav">
                        <a href="#" class="search"><i class="fa fa-search"></i></a>
                    </li>
                </ul>
            </div>
            <!-- End Main Menu -->
        </div>
    </nav>
    <!-- End Navigation -->

</div>
<!-- End Page Wrapper -->
<!-- Plugins JS -->
<script src="{{asset('provisional/js/jquery.min.js')}}"></script>
<script src="{{asset('provisional/js/jquery.easing.js')}}"></script>
<script src="{{asset('provisional/js/bootstrap.min.js')}}"></script>
<script src="{{asset('provisional/js/SmoothScroll.js')}}"></script>
<script src="{{asset('provisional/js/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('provisional/js/jquery.localScroll.min.js')}}"></script>
<script src="{{asset('provisional/js/jquery.viewport.mini.js')}}"></script>
<script src="{{asset('provisional/js/jquery.countTo.js')}}"></script>
<script src="{{asset('provisional/js/jquery.appear.js')}}"></script>
<script src="{{asset('provisional/js/jquery.sticky.js')}}"></script>
<script src="{{asset('provisional/js/jquery.parallax.js')}}"></script>
<script src="{{asset('provisional/js/jquery.fitvids.js')}}"></script>
<script src="{{asset('provisional/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('provisional/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('provisional/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('provisional/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('provisional/js/wow.min.js')}}"></script>
<script src="{{asset('provisional/js/aos.js')}}"></script>
<script src="{{asset('provisional/js/masonry.pkgd.min.js')}}"></script>
<script src="{{asset('provisional/js/jquery.simple-text-rotator.min.js')}}"></script>
<script src="{{asset('provisional/js/all.js')}}"></script>
<script src="{{asset('provisional/js/contact-form.js')}}"></script>
<script src="{{asset('provisional/js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('provisional/js/placeholder.js')}}"></script>

    @yield('scripts')

</body>
</html>
