@extends('website.layouts.app')
@section('content')
    <!-- ================> Page Header section start here <================== -->
    <div class="pageheader bg_img"
        style="background-image: url({{ URL::to('public/website/assets/images/bg-img/pageheader.jpg') }});">
        <div class="container">
            <div class="pageheader__content text-center">
                <h2>{{ $seller->name }}</h2>
            </div>
        </div>
    </div>
    <!-- ================> Group section end here <================== -->
    <div class="group group--single padding-bottom">
        <div class="group__top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 d-none d-xl-block"></div>
                    <div class="col-xl-9">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="gt2-tab" data-bs-toggle="tab" data-bs-target="#gt2"
                                    type="button" role="tab" aria-controls="gt2" aria-selected="false"><i
                                        class="fa-solid fa-users"></i> Profile
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="gt3-tab" data-bs-toggle="tab" data-bs-target="#gt3"
                                    type="button" role="tab" aria-controls="gt3" aria-selected="false"><i
                                        class="fa-solid fas fa-bell"></i> Messages</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="gt6-tab" data-bs-toggle="tab" data-bs-target="#gt6"
                                    type="button" role="tab" aria-controls="gt6" aria-selected="false"><i
                                        class="fa-solid fa-photo-film"></i> Media <span>06</span></button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="group__bottom">
            <div class="container">
                <div class="row g-4">
                    <div class="col-xl-6 order-xl-1">
                        <div class="group__bottom--left">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade active show" id="gt2" role="tabpanel"
                                    aria-labelledby="gt2-tab">
                                    <div class="info">
                                        <div class="info-card mb-4">
                                            <div class="info-card-title">
                                                <h6>Base Info</h6>
                                            </div>
                                            <div class="info-card-content">
                                                <ul class="info-list">
                                                    <li>
                                                        <span><b>Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></span>
                                                        <span>{{ $seller->name }}</span>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            <b>I'm a:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
                                                        </span>
                                                        <span>{{ $seller->gender }}</span>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            <b>Price:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
                                                        </span>
                                                        <span>{{ $seller->price }}</span>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            <b>Age:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
                                                        </span>
                                                        <span>{{ ageCalc($seller->birthday) }}</span>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            <b>Date of Birth:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
                                                        </span>
                                                        <span>{{ $seller->birthday }}</span>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            <b>Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
                                                        </span>
                                                        <span>{{ $seller->city }}</span>
                                                    </li>
                                                    {{-- <li>
                                                        <p class="info-name">Loking for a</p>
                                                        <p class="info-details">{{ $seller->gender }}</p>
                                                    </li> --}}
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="gt6" role="tabpanel" aria-labelledby="gt6-tab">
                                    <div class="col-xl-3 order-xl-0">
                                        <div class="group__bottom--center">
                                            <div class="story__item style2">
                                                <div class="story__inner">
                                                    <div class="story__thumb position-relative">
                                                        <img src="{{ $seller->image }}" alt="dating thumb">
                                                    </div>
                                                    <div class="story__content px-0 pb-0">
                                                        <h4>{{ $seller->name }}</h4>
                                                        <div class="story__content--content mb-2 pb-3">
                                                            <p>{{ $seller->mobile }}</p>
                                                        </div>
                                                        <div class="story__content--author mt-3 pb-2">
                                                            <h6 class="d-block w-100 mb-3">{{ $seller->name }} Photos</h6>
                                                            <div class="row g-2">
                                                                <div class="col-4">
                                                                    <a href="#groupmodal"
                                                                        data-rel="lightcase:callection"><img
                                                                            src="{{ URL::to('public/website/assets/images/member/profile/01.jpg') }}"
                                                                            alt="dating thumb"></a>
                                                                </div>
                                                                <div class="col-4">
                                                                    <a href="#groupmodal"
                                                                        data-rel="lightcase:callection"><img
                                                                            src="{{ URL::to('public/website/assets/images/member/profile/02.jpg') }}"
                                                                            alt="dating thumb"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="gt3" role="tabpanel" aria-labelledby="gt3-tab">
                                    <div class="">
                                        <div class="group__bottom--allmedia">
                                            <div class="media-wrapper">
                                                <div class="tab-content" id="myTabContent2">
                                                    <div class="tab-pane fade show active" id="Personal" role="tabpanel"
                                                        aria-labelledby="Personal-tab">
                                                        <div class="create-post mb-4">
                                                            <div class="lab-inner">
                                                                <div class="lab-thumb">
                                                                    <div class="thumb-inner">
                                                                        <div class="thumb-img">
                                                                            <img src="{{ $seller->image }}"
                                                                                alt="datting thumb">
                                                                        </div>
                                                                        <div class="thumb-content">
                                                                            <h6><a href="#">
                                                                                    {{ $seller->name }}</a></h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="lab-content">
                                                                    <form action="#" class="post-form">
                                                                        <input type="text"
                                                                            placeholder="Send me message">
                                                                        <div class="content-type">
                                                                            <ul class="content-list">
                                                                                <li class="post-submit">
                                                                                    <input type="submit" value="Send"
                                                                                        class="default-btn">
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="groupmodal" id="groupmodal">
        <div class="container">
            <div class="groupmodal__area">
                <div class="post-item">
                    <div class="post-content">
                        <div class="post-author">
                            <div class="post-author-inner">
                                <div class="author-thumb">
                                    <img src="{{ $seller->image }}" alt="datting thumb">
                                </div>
                                <div class="author-details">
                                    <h6><a href="#">{{ $seller->name }}</a></h6>
                                </div>
                            </div>
                        </div>

                        <div class="post-description">
                            <div class="post-desc-img">
                                <img src="{{ URL::to('public/website/assets/images/member/profile/01.jpg') }}"
                                    alt="dating thumb">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================> Group section end here <================== -->
@endsection
@section('script')
@endsection
