@extends('website.layouts.app')
@section('content')
    <style>
        .my-form-control {
            border: 1px solid rgba(59, 54, 140, 0.1);
            background-color: #eaf2fc;
            padding: 0px 30px;
            height: 50px;
        }

        .main-content .form-group label {
            line-height: 28px;
            font-weight: 600;
            font-size: 1.125rem;
        }
    </style>
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
                                                <div class="row nav" id="myTab" role="tablist">
                                                    <div class="col-6" id="profileShow-tab" data-bs-toggle="tab"
                                                        data-bs-target="#profileShow" type="button" role="tab"
                                                        aria-controls="profileShow" aria-selected="true">
                                                        <h6>Base Info</h6>
                                                    </div>
                                                    <div class="col-6" id="profileShowEdit-tab" data-bs-toggle="tab"
                                                        data-bs-target="#profileShowEdit" type="button" role="tab"
                                                        aria-controls="profileShowEdit" aria-selected="false"
                                                        style="text-align:end">
                                                        <h6>Edit</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade active show" id="profileShow" role="tabpanel"
                                                    aria-labelledby="profileShow-tab">
                                                    <div class="info-card-content">
                                                        <ul class="info-list">
                                                            <li>
                                                                <span><b>Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></span>
                                                                <span>{{ $seller->name }}</span>
                                                            </li>
                                                            <li>
                                                                <span>
                                                                    <b>I'm
                                                                        a:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
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
                                                                    <b>Date of
                                                                        Birth:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
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

                                                <div class="tab-pane fade" id="profileShowEdit" role="tabpanel"
                                                    aria-labelledby="profileShowEdit-tab">
                                                    <div class="info-card-content">
                                                        <div class="main-content">
                                                            <form action=""
                                                                method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="form-group">
                                                                    <label>Name*</label>
                                                                    <input type="text" class="fmy-form-control"
                                                                        name="name" placeholder="Enter Your Full Name">
                                                                    @if ($errors->has('name'))
                                                                        <p class="text-danger">{{ $errors->first('name') }}
                                                                        </p>
                                                                    @endif
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Gender*</label>
                                                                    <div class="banner__inputlist">
                                                                        <div class="s-input me-3">
                                                                            <input type="radio" name="gender"
                                                                                value="men" id="males1">
                                                                            <label for="males1">Man</label>
                                                                        </div>
                                                                        <div class="s-input">
                                                                            <input type="radio" name="gender"
                                                                                value="women"id="females1">

                                                                            <label for="females1">Woman</label>
                                                                        </div>

                                                                    </div>
                                                                    @if ($errors->has('gender'))
                                                                        <p class="text-danger">
                                                                            {{ $errors->first('gender') }}
                                                                        </p>
                                                                    @endif
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Date of Birth*</label>
                                                                    <input type="date" name="birthday"
                                                                        class="my-form-control">
                                                                    @if ($errors->has('birthday'))
                                                                        <p class="text-danger">
                                                                            {{ $errors->first('birthday') }}</p>
                                                                    @endif
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Mobile*</label>
                                                                    <input type="text" class="my-form-control"
                                                                        name="mobile"
                                                                        placeholder="Enter Your Mobile Num">
                                                                    @if ($errors->has('mobile'))
                                                                        <p class="text-danger">
                                                                            {{ $errors->first('mobile') }}
                                                                        </p>
                                                                    @endif
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Password*</label>
                                                                    <input type="text"
                                                                        class="my-form-control"name="password"
                                                                        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                                                        title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                                                                        placeholder="Enter Your Password">
                                                                    @if ($errors->has('password'))
                                                                        <p class="text-danger">
                                                                            {{ $errors->first('password') }}</p>
                                                                    @endif
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Confirm Password*</label>
                                                                    <input type="text"
                                                                        class="my-form-control"name="confirmpassword"
                                                                        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                                                        title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                                                                        placeholder="Enter Your Password">
                                                                    @if ($errors->has('confirmpassword'))
                                                                        <p class="text-danger">
                                                                            {{ $errors->first('confirmpassword') }}</p>
                                                                    @endif
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Enter Your Price*</label>
                                                                    <input type="text" name="price"
                                                                        class="my-form-control"
                                                                        placeholder="Enter Your Price">
                                                                    @if ($errors->has('price'))
                                                                        <p class="text-danger">
                                                                            {{ $errors->first('price') }}
                                                                        </p>
                                                                    @endif
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Enter Your Address*</label>
                                                                    <input type="text" name="address"
                                                                        class="my-form-control"
                                                                        placeholder="Enter Your Address">
                                                                    @if ($errors->has('address'))
                                                                        <p class="text-danger">
                                                                            {{ $errors->first('address') }}
                                                                        </p>
                                                                    @endif
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Upload Your Photo</label>
                                                                    <input type="file" name="image"
                                                                        class="my-form-control" placeholder="">
                                                                </div>
                                                                <button class="default-btn reverse mt-4" data-toggle="modal"
                                                                    type="submit"
                                                                    data-target="#email-confirm"><span>Update
                                                                        Your Profile</span></button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="gt6" role="tabpanel" aria-labelledby="gt6-tab">
                                    @if (Session::has('sessdata') &&
                                            Session::get('sessdata')['role'] == 'seller' &&
                                            Session::get('sessdata')['id'] == $sellerId)
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
                                                        <div class="tab-pane fade show active" id="all-media"
                                                            role="tabpanel" aria-labelledby="all-media-tab">
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
                                                                            <a href="#groupmodalvideo"
                                                                                data-rel="lightcase" class="icon">
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
                                    @endif

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
