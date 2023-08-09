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
                <h2>{{ $user->name }}</h2>
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
                                                                <span>{{ $user->name }}</span>
                                                            </li>
                                                            <li>
                                                                <span>
                                                                    <b>I'm
                                                                        a:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
                                                                </span>
                                                                <span>{{ $user->gender }}</span>
                                                            </li>
                                                            <li>
                                                                <span>
                                                                    <b>Loking for
                                                                        a:&nbsp;&nbsp;&nbsp;&nbsp;</b>
                                                                </span>
                                                                <span>{{ $user->lookingfor }}</span>
                                                            </li>
                                                            <li>
                                                                <span>
                                                                    <b>Age:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
                                                                </span>
                                                                <span>{{ ageCalc($user->birthday) }}</span>
                                                            </li>
                                                            <li>
                                                                <span>
                                                                    <b>Date of
                                                                        Birth:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
                                                                </span>
                                                                <span>{{ $user->birthday }}</span>
                                                            </li>
                                                            <li>
                                                                <span>
                                                                    <b>Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
                                                                </span>
                                                                <span>{{ $user->city }}</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="profileShowEdit" role="tabpanel"
                                                    aria-labelledby="profileShowEdit-tab">
                                                    <div class="info-card-content">
                                                        <div class="main-content">
                                                            <form action="" method="POST">
                                                                @csrf
                                                                <h4 class="content-title">Acount Details</h4>
                                                                <div class="form-group">
                                                                    <label>Mobile*</label>
                                                                    <input type="text" class="my-form-control"
                                                                        name="mobile"placeholder="Enter Your Mobile Num">
                                                                    @if ($errors->has('mobile'))
                                                                        <p class="text-danger">
                                                                            {{ $errors->first('mobile') }}</p>
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
                                                                <h4 class="content-title mt-5">Profile Details</h4>
                                                                <div class="form-group">
                                                                    <label>Name*</label>
                                                                    <input type="text"
                                                                        class="my-form-control"name="name"
                                                                        placeholder="Enter Your Full Name">
                                                                    @if ($errors->has('name'))
                                                                        <p class="text-danger">
                                                                            {{ $errors->first('name') }}</p>
                                                                    @endif
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Birthday*</label>
                                                                    <input type="date" name="birthday"
                                                                        class="my-form-control">
                                                                    @if ($errors->has('birthday'))
                                                                        <p class="text-danger">
                                                                            {{ $errors->first('birthday') }}</p>
                                                                    @endif
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>I am a*</label>
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
                                                                            {{ $errors->first('gender') }}</p>
                                                                    @endif
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Looking for a*</label>
                                                                    <div class="banner__inputlist">
                                                                        <div class="s-input me-3">
                                                                            <input type="radio" name="lookingfor"
                                                                                id="males" value="men">

                                                                            <label for="males">Man</label>
                                                                        </div>
                                                                        <div class="s-input">
                                                                            <input type="radio" name="lookingfor"
                                                                                value="women" id="females"><label
                                                                                for="females">Woman</label>

                                                                        </div>

                                                                    </div>
                                                                    @if ($errors->has('lookingfor'))
                                                                        <p class="text-danger">
                                                                            {{ $errors->first('lookingfor') }}</p>
                                                                    @endif
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Marial status*</label>
                                                                    <div class="banner__inputlist">
                                                                        <select name="matrital_status">
                                                                            <option value="Single" selected>Single</option>
                                                                            <option value="Marid">Marid</option>
                                                                        </select>

                                                                    </div>

                                                                </div>
                                                                @if ($errors->has('matrital_status'))
                                                                    <p class="text-danger">
                                                                        {{ $errors->first('matrital_status') }}</p>
                                                                @endif
                                                                <div class="form-group">
                                                                    <label>City*</label>
                                                                    <input type="text" name="city"
                                                                        class="my-form-control"
                                                                        placeholder="Enter Your City">
                                                                    @if ($errors->has('city'))
                                                                        <p class="text-danger">
                                                                            {{ $errors->first('city') }}</p>
                                                                    @endif
                                                                </div>
                                                                <button class="default-btn reverse mt-4" data-toggle="modal"
                                                                    type="submit"
                                                                    data-target="#email-confirm"><span>Update Your
                                                                        Profile</span></button>
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
    <div class="groupmodal" id="groupmodal">
        <div class="container">
            <div class="groupmodal__area">
                <div class="post-item">
                    <div class="post-content">
                        <div class="post-author">
                            <div class="post-author-inner">
                                <div class="author-thumb">
                                    <img src="{{ $user->image }}" alt="datting thumb">
                                </div>
                                <div class="author-details">
                                    <h6><a href="#">{{ $user->name }}</a></h6>
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
