<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')
</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- site favicon -->
    <link rel="icon" type="image/png" href="{{ URL::to('public/website/assets/images/favicon.png') }}">
    <!-- Place favicon.ico in the root directory -->

    <!-- All stylesheet and icons css  -->
    <link rel="stylesheet" href="{{ URL::to('public/website/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('public/website/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ URL::to('public/website/assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('public/website/assets/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('public/website/assets/css/lightcase.css') }}">
    <link rel="stylesheet" href="{{ URL::to('public/website/assets/css/style.css') }}">
    {{-- toastr --}}
        <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

</head>

<body>
    {{-- wrapper --}}

    <!-- preloader start here -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- preloader ending here -->


    <!-- scrollToTop start here -->
    <a href="#" class="scrollToTop"><i class="fa-solid fa-angle-up"></i></a>
    <!-- scrollToTop ending here -->


    <div class="">
        <!-- Top Bar Start -->
        @include('website.layouts.topBar')
        <!-- Nav Bar End -->

        <!-- Main Wrapper -->
        @yield('content')
        <!-- /Main Wrapper -->

        <!-- Footer Start -->
        @include('website.layouts.footer')
        <!-- Footer End -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    </div>
    <!-- All Needed JS -->
    <script src="{{ URL::to('public/website/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ URL::to('public/website/assets/js/vendor/modernizr-3.11.2.min.js') }}"></script>
    <script src="{{ URL::to('public/website/assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ URL::to('public/website/assets/js/swiper.min.js') }}"></script>
    <!-- <script src="{{ URL::to('public/website/assets/js/all.min.js') }}"></script> -->
    <script src="{{ URL::to('public/website/assets/js/wow.js') }}"></script>
    <script src="{{ URL::to('public/website/assets/js/counterup.js') }}"></script>
    <script src="{{ URL::to('public/website/assets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ URL::to('public/website/assets/js/lightcase.js') }}"></script>
    <script src="{{ URL::to('public/website/assets/js/waypoints.min.js') }}"></script>
    <script src="{{ URL::to('public/website/assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::to('public/website/assets/js/plugins.js') }}"></script>
    <script src="{{ URL::to('public/website/assets/js/main.js') }}"></script>


    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>
        window.ga = function() {
            ga.q.push(arguments)
        };
        ga.q = [];
        ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('set', 'anonymizeIp', true);
        ga('set', 'transport', 'beacon');
        ga('send', 'pageview')
    </script>
    <script src="../../../../www.google-analytics.com/analytics.js" async></script>
</body>

<!-- Mirrored from demos.codexcoder.com/themeforest/html/ollya/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 07:10:53 GMT -->

</html>
