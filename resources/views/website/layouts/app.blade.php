<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>xmakelove</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- site favicon -->
    {{-- <link rel="icon" type="image/png" href="{{ URL::to('public/website/assets/images/favicon.png') }}"> --}}
    <link rel="icon" type="image/png" href="{{ URL::to('public/website/assets/images/logo/logo.png') }}">
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
    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCajbaAg3ejkh48fnl57SvL3_fV8Cl9Wx4&libraries=places"></script>
</head>

<body>
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    {{-- <a href="#" class="scrollToTop"><i class="fa-solid fa-angle-up"></i></a> --}}

    <!-- Top Bar Start -->
    @include('website.layouts.topBar')
    <!-- Nav Bar End -->

    <!-- Main Wrapper -->
    @yield('content')
    <!-- /Main Wrapper -->
    @if (Session::has('sessdata'))
        <!-- Footer Start -->
        @include('website.layouts.footer')
        <!-- Footer End -->
    @endif


    {{-- toastr js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
    <script>
        $(document).ready(function() {
            toastr.options.timeOut = 10000;
            @if (Session::has('error'))
                toastr.error('{{ Session::get('error') }}');
            @elseif (Session::has('success'))
                toastr.success('{{ Session::get('success') }}');
            @elseif (Session::has('warning'))
                toastr.warning('{{ Session::get('warning') }}');
            @endif
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            var autocomplete;
            var id = "location";

            autocomplete = new google.maps.places.Autocomplete(
                document.getElementById(id), {
                    types: ["geocode"],
                }
            );
        });
    </script>
    {{-- <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a> --}}

    <!-- All Needed JS -->
    <script src="{{ URL::to('public/website/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ URL::to('public/website/assets/js/vendor/modernizr-3.11.2.min.js') }}"></script>
    <script src="{{ URL::to('public/website/assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ URL::to('public/website/assets/js/swiper.min.js') }}"></script>
    <!-- <script src="{{-- URL::to('public/website/assets/js/all.min.js') --}}"></script> -->
    <script src="{{ URL::to('public/website/assets/js/wow.js') }}"></script>
    <script src="{{ URL::to('public/website/assets/js/counterup.js') }}"></script>
    <script src="{{ URL::to('public/website/assets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ URL::to('public/website/assets/js/lightcase.js') }}"></script>
    <script src="{{ URL::to('public/website/assets/js/waypoints.min.js') }}"></script>
    <script src="{{ URL::to('public/website/assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::to('public/website/assets/js/plugins.js') }}"></script>
    <script src="{{ URL::to('public/website/assets/js/main.js') }}"></script>


    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    {{-- <script>
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
    <script src="../../../../www.google-analytics.com/analytics.js" async></script> --}}
</body>

</html>
