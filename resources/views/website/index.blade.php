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

<style>
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        padding-top: 100px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.4);
    }

    .modal-content {
        background-color: #fefefe;
        margin: auto;
        padding: 6px;
        border: 1px solid #888;
        width: 94%;
    }

    .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
        text-align: end;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }
</style>

@include('website.components.slider')

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

<!-- ================> Banner section end here <================== -->

@if (!Session::has('sessdata') || (Session::has('sessdata') && Session::get('sessdata')['role'] == 'user'))
    <!-- ================> Member section start here <================== -->
    <div class="member member--style2 padding-bottom">
        <div class="container">
            <div class="section__header style-2 text-center wow fadeInUp mt-2" data-wow-duration="1.5s">
                <h2 style=" font-size: 22px; ">Most Popular Members</h2>
            </div>
            <div class="section__wrapper wow fadeInUp" data-wow-duration="1.5s">
                <div class="tab-content mx-10-none" id="myTabContent">
                    {{-- <div class="tab-pane fade show active" id="newest" role="tabpanel" aria-labelledby="newest-tab"> --}}
                    <div class="row g-0 justify-content-center">
                        <div class="col-12 col-md-8">
                            <div class="row">
                                <div class="col-9">
                                    <form action="{{ url()->full() }}">
                                        <ul class="nav nav-tabs member__tab" id="myTab" role="tablist"
                                            style="margin: 0px !important">
                                            <li class="nav-item">
                                                <button class="nav-link @if (isset($_GET['type']) && $_GET['type'] == 'newest') active @endif"
                                                    type="submit" name="type" value="newest">Newest</button>
                                            </li>
                                            <li class="nav-item">
                                                <button class="nav-link @if (isset($_GET['type']) && $_GET['type'] == 'popular') active @endif"
                                                    type="submit" name="type" value="popular">Popular</button>
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                                <div class="col-3" style="text-align: end">
                                    <button id="myBtn1" class="btn" style=" background: #f24570; color: white; ">
                                        <i class="fa-solid fa-filter"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        @foreach ($seller as $item)
                            <div class="member__inner col-md-4 m-2"
                                style="height: 90px;border-bottom: 2px solid;margin-bottom: 8px;">
                                <div class="member__content">
                                    <div style="width: 100%">
                                        <div
                                            style="width: 20%; float: left; width: 65px; height: 65px; position: relative; border-radius: 100%;">
                                            <img src="{{ $item->profile_photo ?? 'http://i.pravatar.cc/500?img=7' }}"
                                                style="width: 100%; height: 100%; border-radius: 100%; background-size: cover; background-repeat: no-repeat; background-position: center;">
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
                                                    <a href="{{ url('member-single') }}/{{ $item->id }}">
                                                        <h5>{{ $item->name }}</h5>
                                                    </a>
                                                    <p>Age - {{ ageCalc($item->birthday) }} / Price -
                                                        {{ $item->price }}$</p>
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
                                                <a href="{{ url('member-single') }}/{{ $item->id }}">
                                                    <h5>{{ $item->name }}</h5>
                                                </a>
                                                <p>Age - {{ ageCalc($item->birthday) }} / Price -
                                                    {{ $item->price }}$</p>
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
                    {{-- </div> --}}
                </div>
            </div>
            <div>
                {{ $seller->links('vendor.pagination.custom') }}
            </div>
        </div>
    </div>
@endif

<div id="myModal1" class="modal">
    <div class="row">
        <div class="col-md-4 m-auto">
            <div class="modal-content">
                <span class="close">&times;</span>
                <div class="group group--single mb-2">
                    <div class="about about--style3 pt-xl-0">
                        {{-- <div class="container"> --}}
                        @include('website.components.search-c')
                        {{-- </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ================> Member section end here <================== -->
@endsection
@section('script')
<script>
    var modal1 = document.getElementById("myModal1");

    var btn1 = document.getElementById("myBtn1");

    var span1 = document.getElementsByClassName("close")[0];

    btn1.onclick = function() {
        modal1.style.display = "block";
    }

    span1.onclick = function() {
        modal1.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal1) {
            modal1.style.display = "none";
        }
    }
</script>
@endsection
