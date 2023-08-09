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
                                <button class="nav-link active" id="gt1-tab" data-bs-toggle="tab" data-bs-target="#gt1"
                                    type="button" role="tab" aria-controls="gt1" aria-selected="true"><i
                                        class="fa-solid fa-house"></i> Activity</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="gt2-tab" data-bs-toggle="tab" data-bs-target="#gt2"
                                    type="button" role="tab" aria-controls="gt2" aria-selected="false"><i
                                        class="fa-solid fa-users"></i> Profile
                                    {{-- <span>30</span> --}}
                                </button>
                            </li>
                            {{-- <li class="nav-item" role="presentation">
                                <button class="nav-link" id="gt3-tab" data-bs-toggle="tab" data-bs-target="#gt3" type="button" role="tab" aria-controls="gt3" aria-selected="false"><i class="fa-solid fa-video"></i> Sites <span>06</span></button>
                            </li> --}}
                            {{-- <li class="nav-item" role="presentation">
                                <button class="nav-link" id="gt4-tab" data-bs-toggle="tab" data-bs-target="#gt4" type="button" role="tab" aria-controls="gt4" aria-selected="false"><i class="fa-solid fa-users"></i> Friends <span>16</span></button>
                            </li> --}}
                            {{-- <li class="nav-item" role="presentation">
                                <button class="nav-link" id="gt5-tab" data-bs-toggle="tab" data-bs-target="#gt5" type="button" role="tab" aria-controls="gt5" aria-selected="false"><i class="fa-solid fa-layer-group"></i> Groups <span>08</span></button>
                            </li> --}}
                            @if (Session::has('sessdata') &&
                                    Session::get('sessdata')['role'] == 'seller' &&
                                    Session::get('sessdata')['id'] == $sellerId)
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="gt6-tab" data-bs-toggle="tab" data-bs-target="#gt6"
                                        type="button" role="tab" aria-controls="gt6" aria-selected="false"><i
                                            class="fa-solid fa-photo-film"></i> Media <span>06</span></button>
                                </li>
                            @endif
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
                                <div class="tab-pane fade show active" id="gt1" role="tabpanel"
                                    aria-labelledby="gt1-tab">
                                    <div class="group__bottom--head group__bottom--activity bg-white mb-4 border-0">
                                        <ul class="nav nav-tabs" id="myTab2" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="Personal-tab" data-bs-toggle="tab"
                                                    data-bs-target="#Personal" type="button" role="tab"
                                                    aria-controls="Personal" aria-selected="true">Personal</button>
                                            </li>
                                            {{-- <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="Mentions-tab" data-bs-toggle="tab" data-bs-target="#Mentions" type="button" role="tab" aria-controls="Mentions" aria-selected="false">Mentions</button>
                                            </li> --}}
                                            {{-- <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="Favorites-tab" data-bs-toggle="tab" data-bs-target="#Favorites" type="button" role="tab" aria-controls="Favorites" aria-selected="false">Favorites</button>
                                            </li> --}}
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="Friends-tab" data-bs-toggle="tab"
                                                    data-bs-target="#Friends" type="button" role="tab"
                                                    aria-controls="Friends" aria-selected="false">Messages</button>
                                            </li>
                                            {{-- <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="Groups-tab" data-bs-toggle="tab" data-bs-target="#Groups" type="button" role="tab" aria-controls="Groups" aria-selected="false">Groups</button>
                                            </li> --}}
                                        </ul>
                                    </div>

                                    <div class="group__bottom--area group__bottom--memberactivity">
                                        <div class="group__bottom--body">
                                            <div class="group__bottom--allmedia">
                                                <div class="media-wrapper">
                                                    <div class="tab-content" id="myTabContent2">
                                                        <div class="tab-pane fade show active" id="Personal"
                                                            role="tabpanel" aria-labelledby="Personal-tab">
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
                                                                                placeholder="Whats on your mind.">
                                                                            <div class="content-type">
                                                                                <ul class="content-list">
                                                                                    <li class="post-submit">
                                                                                        <input type="submit"
                                                                                            value="Send"
                                                                                            class="default-btn">
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="tab-pane fade" id="Friends" role="tabpanel"
                                                            aria-labelledby="Friends-tab">
                                                            <div class="activity__item mb-3">
                                                                <div class="activity__inner bg-white">
                                                                    <div class="activity__thumb">
                                                                        <a href="member-single.html"><img
                                                                                src="{{ URL::to('public/website/assets/images/member/home2/01.jpg') }}"
                                                                                alt="dating thumb"></a>
                                                                    </div>
                                                                    <div class="activity__content">
                                                                        <h5><a href="member-single.html">Daniel Becker
                                                                            </a><span>became Friend with <a
                                                                                    href="#">Angelika
                                                                                    Schaefer</a></span></h5>
                                                                        <p>2 days ago</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="activity__item mb-3">
                                                                <div class="activity__inner bg-white">
                                                                    <div class="activity__thumb">
                                                                        <a href="member-single.html"><img
                                                                                src="{{ URL::to('public/website/assets/images/member/home2/03.jpg') }}"
                                                                                alt="dating thumb"></a>
                                                                    </div>
                                                                    <div class="activity__content">
                                                                        <h5><a href="member-single.html">Thorsten Schwab
                                                                            </a><span>became Friend with <a
                                                                                    href="#">David Kirsch</a></span>
                                                                        </h5>
                                                                        <p>2 days ago</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="activity__item mb-3">
                                                                <div class="activity__inner bg-white">
                                                                    <div class="activity__thumb">
                                                                        <a href="member-single.html"><img
                                                                                src="{{ URL::to('public/website/assets/images/member/home2/04.jpg') }}"
                                                                                alt="dating thumb"></a>
                                                                    </div>
                                                                    <div class="activity__content">
                                                                        <h5><a href="member-single.html">Leah Friedman
                                                                            </a><span>became Friend with <a
                                                                                    href="#">Manuela
                                                                                    Lehrer</a></span></h5>
                                                                        <p>2 days ago</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="activity__item mb-3">
                                                                <div class="activity__inner bg-white">
                                                                    <div class="activity__thumb">
                                                                        <a href="member-single.html"><img
                                                                                src="{{ URL::to('public/website/assets/images/member/home2/05.jpg') }}"
                                                                                alt="dating thumb"></a>
                                                                    </div>
                                                                    <div class="activity__content">
                                                                        <h5><a href="member-single.html">Maximilian
                                                                            </a><span>became Friend with <a
                                                                                    href="#">Franziska
                                                                                    Pfeiffer</a></span></h5>
                                                                        <p>2 days ago</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="activity__item">
                                                                <div class="activity__inner bg-white">
                                                                    <div class="activity__thumb">
                                                                        <a href="member-single.html"><img
                                                                                src="{{ URL::to('public/website/assets/images/member/home2/06.jpg') }}"
                                                                                alt="dating thumb"></a>
                                                                    </div>
                                                                    <div class="activity__content">
                                                                        <h5><a href="member-single.html">Michelle Foerster
                                                                            </a><span>became Friend with <a
                                                                                    href="#">Ines Dresdner</a></span>
                                                                        </h5>
                                                                        <p>2 days ago</p>
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

                                <div class="tab-pane fade" id="gt2" role="tabpanel" aria-labelledby="gt2-tab">
                                    <div class="info">
                                        <div class="info-card mb-4">
                                            <div class="info-card-title">
                                                <h6>Base Info</h6>
                                            </div>
                                            <div class="info-card-content">
                                                <ul class="info-list">
                                                    <li>
                                                        <p class="info-name">Name</p>
                                                        <p class="info-details">{{ $seller->name }}</p>
                                                    </li>
                                                    <li>
                                                        <p class="info-name">I'm a</p>
                                                        <p class="info-details">{{ $seller->gender }}</p>
                                                    </li>
                                                    {{-- <li>
                                                        <p class="info-name">Loking for a</p>
                                                        <p class="info-details">{{ $seller->gender }}</p>
                                                    </li> --}}
                                                    <li>
                                                        <p class="info-name">Price</p>
                                                        <p class="info-details">{{ $seller->price }}</p>
                                                    </li>
                                                    <li>
                                                        <p class="info-name">Age</p>
                                                        <p class="info-details">
                                                            @php
                                                                $from = $seller->birthday;
                                                                $to = new DateTime('today');
                                                                // echo $from->diff($to)->y;
                                                                # procedural
                                                                echo date_diff(date_create($from), date_create('today'))->y;
                                                            @endphp
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p class="info-name">Date of Birth</p>
                                                        <p class="info-details">{{ $seller->birthday }}</p>
                                                    </li>
                                                    <li>
                                                        <p class="info-name">Address</p>
                                                        <p class="info-details">{{ $seller->city }}</p>
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="gt6" role="tabpanel" aria-labelledby="gt6-tab">
                                    <div class="group__bottom--body bg-white">
                                        <div class="group__bottom--allmedia">
                                            <div class="media-wrapper">
                                                <ul class="nav nav-tabs" id="myTab3" role="tablist">
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link active" id="all-media-tab"
                                                            data-bs-toggle="tab" data-bs-target="#all-media"
                                                            type="button" role="tab" aria-controls="all-media"
                                                            aria-selected="true"><i
                                                                class="fa-solid fa-table-cells-large"></i> All
                                                            <span>12</span></button>
                                                    </li>
                                                    {{-- <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="album-tab" data-bs-toggle="tab" data-bs-target="#album" type="button" role="tab" aria-controls="album" aria-selected="false"><i class="fa-solid fa-camera"></i> Albums <span>4</span></button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="photos-media-tab" data-bs-toggle="tab" data-bs-target="#photos-media" type="button" role="tab" aria-controls="photos-media" aria-selected="false"><i class="fa-solid fa-image"></i> Photos <span>4</span></button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="video-tab" data-bs-toggle="tab" data-bs-target="#video" type="button" role="tab" aria-controls="video" aria-selected="false"><i class="fa-solid fa-video"></i> Videos <span>4</span></button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="music-tab" data-bs-toggle="tab" data-bs-target="#music" type="button" role="tab" aria-controls="music" aria-selected="false"><i class="fa-solid fa-music"></i> Music <span>0</span></button>
                                                    </li> --}}
                                                </ul>
                                                <div class="tab-content" id="myTabContent3">
                                                    <div class="tab-pane fade show active" id="all-media" role="tabpanel"
                                                        aria-labelledby="all-media-tab">
                                                        <div class="media-content">
                                                            <ul class="media-upload">
                                                                <li class="upload-now">
                                                                    <div class="custom-upload">
                                                                        <div class="file-btn"><i
                                                                                class="fa-solid fa-upload"></i> Upload
                                                                        </div>
                                                                        <input type="file" required>
                                                                    </div>

                                                                    <div>
                                                                        {{-- <div class="file-btn"><i class="fa-solid fa-upload"></i> Save</div> --}}
                                                                        <input value="Save" class="custom-upload"
                                                                            type="submit">
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <div
                                                                class="row row-cols-2 row-cols-sm-3 row-cols-lg-4 row-cols-xl-3 g-3">
                                                                <div class="col">
                                                                    <div class="media-thumb video-thumb">
                                                                        <img src="{{ URL::to('public/website/assets/images/allmedia/01.jpg') }}"
                                                                            alt="dating thumb">
                                                                        <a href="#groupmodalvideo" data-rel="lightcase"
                                                                            class="icon">
                                                                            <i class="fa-solid fa-circle-play"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- <div class="text-center mt-5">
                                                                <a href="#" class="default-btn"><i class="fa-solid fa-spinner"></i> Load More</a>
                                                            </div> --}}
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
                                            {{-- <p><i class="fa-solid fa-clock"></i> 3 Days Ago</p> --}}
                                            <p>{{ $seller->mobile }}</p>
                                        </div>
                                        {{-- <p class="mb-2">Challenges are whats make lifes interesting and overcoming them is what makes life meaningful.</p> --}}
                                        <div class="story__content--author mt-3 pb-2">
                                            <h6 class="d-block w-100 mb-3">{{ $seller->name }} Photos</h6>
                                            <div class="row g-2">
                                                <div class="col-4">
                                                    <a href="#groupmodal" data-rel="lightcase:callection"><img
                                                            src="{{ URL::to('public/website/assets/images/member/profile/01.jpg') }}"
                                                            alt="dating thumb"></a>
                                                </div>
                                                <div class="col-4">
                                                    <a href="#groupmodal" data-rel="lightcase:callection"><img
                                                            src="{{ URL::to('public/website/assets/images/member/profile/02.jpg') }}"
                                                            alt="dating thumb"></a>
                                                </div>
                                                {{-- <div class="col-4">
                                                    <a href="#groupmodal" data-rel="lightcase:callection"><img
                                                            src="{{ URL::to('public/website/assets/images/member/profile/03.jpg') }}"
                                                            alt="dating thumb"></a>
                                                </div>
                                                <div class="col-4">
                                                    <a href="#groupmodal" data-rel="lightcase:callection"><img
                                                            src="{{ URL::to('public/website/assets/images/member/profile/04.jpg') }}"
                                                            alt="dating thumb"></a>
                                                </div>
                                                <div class="col-4">
                                                    <a href="#groupmodal" data-rel="lightcase:callection"><img
                                                            src="{{ URL::to('public/website/assets/images/member/profile/05.jpg') }}"
                                                            alt="dating thumb"></a>
                                                </div>
                                                <div class="col-4">
                                                    <a href="#groupmodal" data-rel="lightcase:callection"><img
                                                            src="{{ URL::to('public/website/assets/images/member/profile/06.jpg') }}"
                                                            alt="dating thumb"></a>
                                                </div> --}}
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
                                    {{-- <ul class="post-status">
                                        <li class="post-privacy"><i class="icofont-world"></i> Public</li>
                                        <li class="post-time">6 Mintues Ago </li>
                                    </ul> --}}
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

                    {{-- <div class="post-meta">
                        <div class="post-meta-top">
                            <p><a href="#"><i class="fa-solid fa-thumbs-up"></i> <i class="fa-solid fa-heart"></i>
                                    <i class="fa-solid fa-face-laugh"></i><span>Julia, Petrova & 306 like this</span></a>
                            </p>
                            <p><a href="#">136 Comments</a></p>
                        </div>
                        <div class="post-meta-bottom">
                            <ul class="react-list">
                                <li class="react"><a href="#"><i class="fa-solid fa-thumbs-up"></i>Like</a> </li>
                                <li class="react"><a href="#"><i class="fa-solid fa-comment"></i>Comment</a></li>
                                <li class="react"><a href="#"><i class="fa-solid fa-share-nodes"></i> Share </a>
                                </li>
                            </ul>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="groupmodal" id="groupmodalvideo">
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
                                    <ul class="post-status">
                                        <li class="post-privacy"><i class="icofont-world"></i> Public</li>
                                        <li class="post-time">6 Mintues Ago </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="post-description">
                            <div class="post-desc-img">
                                <iframe src="https://www.youtube.com/embed/U9O8G5AreXE" title="YouTube video player"
                                    height="300" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>

                    <div class="post-meta">
                        <div class="post-meta-top">
                            <p><a href="#"><i class="fa-solid fa-thumbs-up"></i> <i class="fa-solid fa-heart"></i>
                                    <i class="fa-solid fa-face-laugh"></i><span>Julia,Akhi & 306 like this</span></a></p>
                            <p><a href="#">136 Comments</a></p>
                        </div>
                        <div class="post-meta-bottom">
                            <ul class="react-list">
                                <li class="react"><a href="#"><i class="fa-solid fa-thumbs-up"></i>Like</a> </li>
                                <li class="react"><a href="#"><i class="fa-solid fa-comment"></i>Comment</a></li>
                                <li class="react"><a href="#"><i class="fa-solid fa-share-nodes"></i> Share </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- ================> Group section end here <================== -->
@endsection
@section('script')
@endsection
