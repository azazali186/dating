@extends('website.layouts.app')
@section('content')
@section('title', 'xmakelove')
<!-- ================> Banner section start here <================== -->
<style>
    #formobile {
        display: none;
    }

    #fordesktop {
        display: block;
    }

    @media only screen and (max-width: 600px) {
        #formobile {
            display: block;
        }

        #fordesktop {
            display: none;
        }
    }
</style>

<style>
    .page-item.active .page-link {
        z-index: 3;
        color: #fff !important;
        background-color: #f24570 !important;
        border-color: #f24570 !important;
        border-radius: 50%;
        padding: 6px 12px;
    }

    .page-link {
        z-index: 3;
        color: #f24570 !important;
        background-color: #fff;
        border-color: #f24570;
        border-radius: 50%;
        padding: 6px 12px !important;
    }

    .page-item:first-child .page-link {
        border-radius: 30% !important;
    }

    .page-item:last-child .page-link {
        border-radius: 30% !important;
    }

    .pagination li {
        padding: 3px;
    }

    .disabled .page-link {
        color: #212529 !important;
        opacity: 0.5 !important;
    }
</style>

@if (!Session::has('sessdata'))
    <div class="banner banner--style3"
        style="background-image: url({{ URL::to('public/website/assets/images/banner/bg-3.jpg') }});">
        <div class="container">
            <div class="row g-0 justify-content-center justify-content-xl-between">
                <div class="col-lg-6 col-12 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="banner__thumb text-xl-end">
                        <img src="{{ URL::to('public/website/assets/images/banner/03.png') }}" alt="banner">
                        <div class="banner__thumb--shape">
                            <div class="shapeimg">
                                <img src="{{ URL::to('public/website/assets/images/banner/shape/home3/01.png') }}"
                                    alt="dating thumb">
                            </div>
                        </div>
                        <div class="banner__thumb--title">
                            <h4>Are You Waiting For Dating?</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-12 wow fadeInLeft" data-wow-duration="1.5s">
                    <div class="banner__content">
                        <div class="banner__title">
                            <h2>We Have More Than <span>2.000.000</span> Join Members</h2>
                            <div class="row" style=" text-align: center; ">
                                <div class="col-12 mb-2">
                                    <a href="{{ url('register') }}" class="default-btn style-2"
                                        style="width: 100%; background: #cb682b;">
                                        <span>Create Acount</span>
                                    </a>
                                </div>
                                <div class="col-12 mb-2">
                                    <a href="{{ url('login') }}" class="default-btn style-2"
                                        style="width: 100%; background: #2ba6cb;">
                                        <span>Login</span>
                                    </a>
                                </div>
                                <div class="col-12 mb-2">
                                    <a href="{{ url('seller') }}" class="default-btn style-2"
                                        style="width: 100%; background: #cb2ba8;">
                                        <span>Seller Acount</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

@if (Session::has('sessdata') && Session::get('sessdata')['role'] == 'seller')
    <div class="banner banner--style3 padding-bottom"
        style="background-image: url({{ URL::to('public/website/assets/images/banner/bg-3.jpg') }});">
        <div class="container">
            <div class="row g-0 justify-content-center justify-content-xl-between">
                <div class="col-lg-6 col-12 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="banner__thumb text-xl-end">
                        <img src="{{ URL::to('public/website/assets/images/banner/03.png') }}" alt="banner">
                        <div class="banner__thumb--shape">
                            <div class="shapeimg">
                                <img src="{{ URL::to('public/website/assets/images/banner/shape/home3/01.png') }}"
                                    alt="dating thumb">
                            </div>
                        </div>
                        <div class="banner__thumb--title">
                            <h4>Are You Waiting For Dating?</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-12 wow fadeInLeft" data-wow-duration="1.5s">
                    <div class="banner__content">
                        <div class="banner__title">
                            <h2>We Have More Than <span>2.000.000</span> Join Members</h2>
                            <div class="row" style=" text-align: center; ">
                                <div class="col-12 mb-2">
                                    <a href="{{ url('logout') }}" class="default-btn style-2"
                                        style="width: 100%; background: #cb2b2b;">
                                        <span>Logout</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
<div class="group group--single mb-2" id="fordesktop">
    <div class="about about--style3 pt-xl-0">
        <div class="container">
            @include('website.components.search-c')
        </div>
    </div>
</div>
<!-- ================> Banner section end here <================== -->

@if (!Session::has('sessdata') || (Session::has('sessdata') && Session::get('sessdata')['role'] == 'user'))
    <!-- ================> Member section start here <================== -->
    <div class="member member--style2 padding-bottom">
        <div class="container">
            <div class="section__header style-2 text-center wow fadeInUp" data-wow-duration="1.5s">
                <h2 style=" font-size: 25px; ">Most Popular Members</h2>
            </div>

            <div class="section__wrapper wow fadeInUp" data-wow-duration="1.5s">
                <form action="{{ url()->full() }}">
                    <ul class="nav nav-tabs member__tab" id="myTab" role="tablist">
                        <li class="nav-item">
                            <button class="nav-link @if (isset($_GET['type']) && $_GET['type'] == 'newest') active @endif" type="submit"
                                name="type" value="newest">Newest</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link @if (isset($_GET['type']) && $_GET['type'] == 'popular') active @endif" type="submit"
                                name="type" value="popular">Popular</button>
                        </li>
                    </ul>
                </form>
                <div class="tab-content mx-10-none" id="myTabContent">
                    <div class="tab-pane fade show active" id="newest" role="tabpanel"
                        aria-labelledby="newest-tab">
                        <div class="row g-0 justify-content-center">
                            @foreach ($seller as $item)
                                <div class="member__inner col-md-4 m-2"
                                    style="height: 90px;border-bottom: 2px solid;margin-bottom: 8px;">
                                    <div class="member__content">
                                        <div style="width: 100%">
                                            <div style="width: 20%; float: left;">
                                                <img src="{{ $item->image }}" style="width: 70px;">
                                            </div>
                                            @if (Session::has('sessdata') && Session::get('sessdata')['role'] == 'user')
                                                @if (getSubscription() != 'Free')
                                                    <div style="width: 60%; float: left;">
                                                        <a href="{{ url('member-single') }}/{{ $item->id }}">
                                                            <h5>{{ $item->name }}</h5>
                                                        </a>
                                                        <p>Age - {{ ageCalc($item->birthday) }} / Price -
                                                            {{ $item->price }}$</p>
                                                    </div>
                                                    <div style="width: 20%; float: left;">
                                                        <a href="tel:{{ $item->mobile }}">
                                                            <img style=" width: 100%; margin-top: 20px;"
                                                                src="{{ URL::to('public/website/assets/images/logo/callnow.png') }}"
                                                                alt="call-now">
                                                        </a>
                                                    </div>
                                                @else
                                                    <div style="width: 60%; float: left;">
                                                        <a href="{{ url('pricing-table') }}">
                                                            <h5>{{ $item->name }}</h5>
                                                        </a>
                                                        <p>9125XXXXXXX</p>
                                                    </div>
                                                    <div style="width: 20%; float: left;">
                                                        <a href="{{ url('pricing-table') }}">
                                                            <img style=" width: 100%; margin-top: 20px;"
                                                                src="{{ URL::to('public/website/assets/images/logo/callnow.png') }}"
                                                                alt="call-now">
                                                        </a>
                                                    </div>
                                                @endif
                                            @else
                                                <div style="width: 60%; float: left;">
                                                    <a href="{{ url('login') }}">
                                                        <h5>{{ $item->name }}</h5>
                                                    </a>
                                                    <p>9125XXXXXXX</p>
                                                </div>
                                                <div style="width: 20%; float: left;">
                                                    <a href="{{ url('login') }}">
                                                        <img style=" width: 100%; margin-top: 20px;"
                                                            src="{{ URL::to('public/website/assets/images/logo/callnow.png') }}"
                                                            alt="call-now">
                                                    </a>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        {{-- <div class="row g-0 justify-content-center" id="fordesktop">
                            @foreach ($seller as $item)
                                <div class="member__item">
                                    <div class="member__inner" style="padding: 5px;">
                                        <div class="member__thumb">
                                            <img src="{{ $item->image }}">
                                            <span class="member__activity"></span>
                                        </div>
                                        <div class="member__content">
                                            @if (Session::has('sessdata') && Session::get('sessdata')['role'] == 'user')
                                                @if (getSubscription() != 'Free')
                                                    <a href="{{ url('member-single') }}/{{ $item->id }}">
                                                        <h5>{{ $item->name }}</h5>
                                                    </a>
                                                    <p>{{ $item->mobile }}</p>
                                                @else
                                                    <a href="{{ url('pricing-table') }}">
                                                        <h5>{{ $item->name }}</h5>
                                                    </a>
                                                    <p>9125XXXXXXX</p>
                                                @endif
                                            @else
                                                <a href="{{ url('login') }}">
                                                    <h5>{{ $item->name }}</h5>
                                                </a>
                                                <p>9125XXXXXXX</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div> --}}
                    </div>
                </div>
            </div>

            <div>
                {{ $seller->links('vendor.pagination.custom') }}
            </div>
        </div>
    </div>
@endif
<!-- ================> Member section end here <================== -->
@endsection
@section('script')
@endsection
