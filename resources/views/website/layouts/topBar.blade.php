<!-- ================> header section start here <================== -->
<header class="header" id="navbar">
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
                            <li class="{{ request()->is('/') ? 'active' : '' }}">
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            @if (!Session::has('sessdata') || Session::get('sessdata')['role'] == 'user')
                                <li class="{{ request()->is('pricing-table') ? 'active' : '' }}">
                                    <a href="{{ url('pricing-table') }}">Pricing</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                    <div class="header__more">
                        <button class="default-btn dropdown-toggle" type="button" id="moreoption"
                            data-bs-toggle="dropdown" aria-expanded="false">My Account</button>
                        <ul class="dropdown-menu" aria-labelledby="moreoption">
                            @if (Session::has('sessdata') && Session::get('sessdata')['role'] == 'seller')
                                <li><a class="dropdown-item" href="{{ url('seller-profile') }}">My Profile</a></li>
                                <li><a class="dropdown-item" href="{{ url('logout') }}">Log Out</a></li>
                            @elseif (Session::has('sessdata') && Session::get('sessdata')['role'] == 'user')
                                <li><a class="dropdown-item" href="{{ url('user-profile') }}">My Profile</a></li>
                                <li><a class="dropdown-item" href="{{ url('logout') }}">Log Out</a></li>
                            @else
                                <li><a class="dropdown-item" href="{{ url('login') }}">Log In</a></li>
                                <li><a class="dropdown-item" href="{{ url('register') }}">User Sign Up</a></li>
                                <li><a class="dropdown-item" href="{{ url('seller') }}">Seller Sign Up</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
@php
    $abc = false;
@endphp
@if ($abc)
    <header class="header header--style2" id="navbar">
        <div class="header__bottom">
            <div class="container">
                <nav class="navbar navbar-expand-lg" style="padding-top: 0px; padding-bottom: 0px;">
                    <a class="navbar-brand" href="{{ url('/') }}"><img
                            src="{{ URL::to('public/website/assets/images/logo/logo.png') }}" alt="logo"></a>
                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler--icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
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
@endif
<!-- ================> header section end here <================== -->
