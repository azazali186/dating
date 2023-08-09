<!-- ================> header section start here <================== -->
<style>
    .mainmenu {
        display: none;
    }

    @media only screen and (max-width: 600px) {
        .mainmenu {
            display: block;
        }
    }
</style>
<header class="header header--style2" id="navbar">
    {{-- <div class="header__top d-none d-lg-block">
        <div class="container">
            <div class="header__top--area">
                <div class="header__top--left">
                    <ul>
                        <li>
                            <i class="fa-solid fa-phone"></i> <span>+800-123-4567 6587</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-location-dot"></i> Beverley, New York 224 USA
                        </li>
                    </ul>
                </div>
                <div class="header__top--right">
                    <ul>
                        <li><a href="#"><i class="fa-brands fa-facebook-messenger"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-vimeo-v"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-skype"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-rss"></i></a></li>
                        @if (Session::has('sessdata'))
                            <li><a href="{{ url('logout') }}" class="default-btn login"
                                    style=" padding: 8px 5px; font-size: 10px; background: #f1e4e4; color: black; font-weight: 900; "><i
                                        class="fa-solid fa-user"></i> <span>LOG OUT</span> </a></li>
                        @else
                            <li><a href="{{ url('login') }}" class="default-btn login"
                                    style=" padding: 8px 5px; font-size: 10px; background: #f1e4e4; color: black; font-weight: 900; "><i
                                        class="fa-solid fa-user"></i> <span>LOG IN</span> </a></li>
                            <li><a href="{{ url('register') }}" class="default-btn signup"
                                    style=" padding: 8px 5px; font-size: 10px; background: #f1e4e4; color: black; font-weight: 900; "><i
                                        class="fa-solid fa-users"></i> <span>SIGN UP</span> </a></li>
                            <li><a href="{{ url('seller') }}" class="default-btn login"
                                    style=" padding: 8px 5px; font-size: 10px; background: #f1e4e4; color: black; font-weight: 900; "><i
                                        class="fa-solid fa-users"></i> <span>Create Profile</span> </a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="header__bottom">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="{{ url('/') }}"><img
                        src="{{ URL::to('public/website/assets/images/logo/logo.png') }}" alt="logo"></a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler--icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                    <div class="navbar-nav mainmenu">
                        <ul>
                            @if (Session::has('sessdata'))
                                <li><a href="{{ url('logout') }}" class="default-btn login"
                                        style=" padding: 8px 5px; font-size: 10px; background: #f1e4e4; color: black; font-weight: 900; "><i
                                            class="fa-solid fa-user"></i> <span>LOG OUT</span> </a></li>
                            @else
                                <li><a href="{{ url('login') }}" class="default-btn login"
                                        style=" padding: 8px 5px; font-size: 10px; background: #f1e4e4; color: black; font-weight: 900; "><i
                                            class="fa-solid fa-user"></i> <span>LOG IN</span> </a></li>
                                <li><a href="{{ url('register') }}" class="default-btn signup"
                                        style=" padding: 8px 5px; font-size: 10px; background: #f1e4e4; color: black; font-weight: 900; "><i
                                            class="fa-solid fa-users"></i> <span>SIGN UP</span> </a></li>
                                <li><a href="{{ url('seller') }}" class="default-btn login"
                                        style=" padding: 8px 5px; font-size: 10px; background: #f1e4e4; color: black; font-weight: 900; "><i
                                            class="fa-solid fa-users"></i> <span>Create Profile</span> </a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
<!-- ================> header section end here <================== -->
