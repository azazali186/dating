<!-- ================> Footer section start here <================== -->
<style>
    .mobilebar-container {
        position: fixed;
        bottom: -1px;
        z-index: 12;
        left: 50%;
        transform: translateX(-50%);
    }

    .mobilebar-tab {
        height: 50px;
        width: 96vw;
        background-color: #fff;
        overflow: hidden;
        display: flex;
        position: relative;
        flex-shrink: 0;
        bottom: 0px;
        border-radius: 6px;
    }

    .mobilebar-tab-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: calc(100% / 4);
        flex-shrink: 0;
        cursor: pointer;
        transition: 0.3s;
        position: relative;
        z-index: 2;
        background-color: #fff;
    }

    .mobilebar-tab-overlay {
        border-radius: 6px;
        background-color: #f0f0f0;
        height: 100%;
        width: calc(100% / 5);
        position: absolute;
        left: 0;
        top: 0;
        transition: 0.3s;
    }

    .mobilebar-tab__icon {
        display: block;
        color: #f96972;
        transition-duration: 0.3s;
        line-height: 1;
        font-size: 30px;
    }

    #formobileFoo {
        display: none;
    }

    #fordesktopFoo {
        display: block;
    }

    @media only screen and (max-width: 600px) {
        #formobileFoo {
            display: block;
        }

        #fordesktopFoo {
            display: none;
        }
    }
</style>

@if (Session::has('sessdata') && Session::get('sessdata')['role'] == 'seller')
    <style>
        .mobilebar-tab-item {
            width: calc(100% / 3);
        }
    </style>
@endif
<footer class="footer footer--style3" id="fordesktopFoo">
    <div class="footer__bottom wow fadeInUp" data-wow-duration="1.5s">
        <div class="container">
            <div class="row g-4 g-lg-0 justify-content-lg-between align-items-center">
                <div class="col-12">
                    <div class="footer__content text-center">
                        <p class="mb-0">
                            All Rights Reserved &copy; <a href="{{ url('/') }}">Xmakelove</a> || Design By: Sushil
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ================> Footer section end here <================== -->
<footer class="footer footer--style3" id="formobileFoo">
    <div class="mobilebar-container mobile-layout">
        <div
            style="
        box-shadow: 0 10px 6px 0 rgba(141, 134, 134, 0.175);
        border-radius: 6px;
        border: 10px solid #fff;
        background-color: #fff;
        ">
            <nav class="mobilebar-tab" style="background-color: #fff;">
                <div class="mobilebar-tab-item" style="{{ request()->is('/') ? 'background: black;' : '' }}">
                    <a href="{{ url('/') }}">
                        <span class="mobilebar-tab__icon">
                            <i class="fas fa-home"></i>
                        </span>
                    </a>
                </div>
                @if (Session::has('sessdata') && Session::get('sessdata')['role'] == 'user')
                    <div class="mobilebar-tab-item" style="{{ request()->is('search') ? 'background: black;' : '' }}">
                        <a href="{{ url('search') }}">
                            <span class="mobilebar-tab__icon">
                                <i class="fas fa-search"></i>
                            </span>
                        </a>
                    </div>
                    <div class="mobilebar-tab-item"
                        style="{{ request()->is('pricing-table') ? 'background: black;' : '' }}">
                        <a href="{{ url('pricing-table') }}">
                            <span class="mobilebar-tab__icon">
                                <i class="fab fa-themeco"></i>
                            </span>
                        </a>
                    </div>
                @elseif (!Session::has('sessdata'))
                    <div class="mobilebar-tab-item" style="{{ request()->is('search') ? 'background: black;' : '' }}">
                        <a href="{{ url('search') }}">
                            <span class="mobilebar-tab__icon">
                                <i class="fas fa-search"></i>
                            </span>
                        </a>
                    </div>
                    <div class="mobilebar-tab-item"
                        style="{{ request()->is('pricing-table') ? 'background: black;' : '' }}">
                        <a href="{{ url('pricing-table') }}">
                            <span class="mobilebar-tab__icon">
                                <i class="fab fa-themeco"></i>
                            </span>
                        </a>
                    </div>
                @else
                    <div class="mobilebar-tab-item"
                        style="{{ request()->is('analytics') ? 'background: black;' : '' }}">
                        <a href="{{ url('analytics') }}">
                            <span class="mobilebar-tab__icon">
                                <i class="fa fa-line-chart"></i>
                            </span>
                        </a>
                    </div>
                @endif
                {{-- <div class="mobilebar-tab-item" style="{{ request()->is('messages') ? 'background: black;' : '' }}">
                    <a href="{{ url('messages') }}">
                        <span class="mobilebar-tab__icon">
                            <i class="fas fa-bell"></i>
                        </span>
                    </a>
                </div> --}}
                @if (Session::has('sessdata') && Session::get('sessdata')['role'] == 'seller')
                    <div class="mobilebar-tab-item"
                        style="{{ request()->is('seller-profile') ? 'background: black;' : '' }}">
                        <a href="{{ url('seller-profile') }}">
                            <span class="mobilebar-tab__icon">
                                <i class="fas fa-user"></i>
                            </span>
                        </a>
                    </div>
                @elseif (Session::has('sessdata') && Session::get('sessdata')['role'] == 'user')
                    <div class="mobilebar-tab-item"
                        style="{{ request()->is('user-profile') ? 'background: black;' : '' }}">
                        <a href="{{ url('user-profile') }}">
                            <span class="mobilebar-tab__icon">
                                <i class="fas fa-user"></i>
                            </span>
                        </a>
                    </div>
                @else
                    <div class="mobilebar-tab-item">
                        <a href="{{ url('login') }}">
                            <span class="mobilebar-tab__icon">
                                <i class="fas fa-user"></i>
                            </span>
                        </a>
                    </div>
                @endif
                <div class="mobilebar-tab-overlay"></div>
            </nav>
        </div>
    </div>
</footer>
