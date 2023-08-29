@extends('website.layouts.app')
@section('style')
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
    <style>
        .avatar-upload {
            position: relative;
            max-width: 120px;
            /* margin: 50px auto; */
        }

        .avatar-upload .avatar-edit {
            position: absolute;
            right: -8px;
            z-index: 1;
            top: 3px;
        }

        .avatar-upload .avatar-edit input {
            display: none;
        }

        .avatar-upload .avatar-edit input+label {
            display: inline-block;
            width: 30px;
            height: 30px;
            margin-bottom: 0;
            border-radius: 100%;
            background: #ffffff;
            border: 1px solid transparent;
            box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
            cursor: pointer;
            font-weight: normal;
            transition: all 0.2s ease-in-out;
        }

        .avatar-upload .avatar-edit input+label:hover {
            background: #f1f1f1;
            border-color: #d6d6d6;
        }

        .avatar-upload .avatar-edit input+label:after {
            content: "\f040";
            font-family: "FontAwesome";
            color: #757575;
            position: absolute;
            top: 4px;
            left: 0;
            right: 0;
            text-align: center;
            margin: auto;
        }

        .avatar-upload .avatar-preview {
            width: 80px;
            height: 80px;
            position: relative;
            border-radius: 100%;
            border: 6px solid #f8f8f8;
            box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
        }

        .avatar-upload .avatar-preview>div {
            width: 100%;
            height: 100%;
            border-radius: 100%;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
    <style>
        .containerMain {
            position: relative;
            text-align: center;
            color: white;
        }

        .top-right {
            position: absolute;
            top: 1px;
            right: 14px;
        }

        .bottom-left {
            position: absolute;
            bottom: 0px;
            /* left: 3px; */
        }
    </style>
@endsection
@section('content')
    <!-- ================> Page Header section start here <================== -->
    <div class="containerMain pageheader bg_img"
        style="background-image: url({{ $seller->cover_photo ?? URL::to('public/website/assets/images/bg-img/pageheader.jpg') }});"
        id="imagePreview2">
        <div class="top-right">
            <div class="bottom-left avatar-upload">
                <form action="{{ url('profile-update') }}" id="aweberform2" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="avatar-edit">
                        <input type="file" id="imageUpload2" name="cover_photo" accept=".png, .jpg, .jpeg" />
                        <label for="imageUpload2"></label>
                    </div>
                </form>
            </div>
        </div>
        <div class="container">
            <div class="pageheader__content text-center">
                <h2>{{ $seller->name }}</h2>
            </div>
        </div>

        <div class="container ">
            <div class="row">
                <div class="col-xl-3 d-none d-xl-block">
                </div>
                <div class="col-xl-9">
                    <div class="bottom-left avatar-upload">
                        <form action="{{ url('profile-update') }}" id="aweberform1" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="avatar-edit">
                                <input type="file" id="imageUpload1" name="profile_photo" accept=".png, .jpg, .jpeg" />
                                <label for="imageUpload1"></label>
                            </div>
                            <div class="avatar-preview">
                                <div id="imagePreview1"
                                    style="background-image: url('{{ $seller->profile_photo ?? 'http://i.pravatar.cc/500?img=7' }}')">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
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
                                        class="fa-solid fa-photo-film"></i> Media
                                    <span>{{ count($sellerPhotos) }}</span></button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="group__bottom">
            <div class="container">
                <div class="row g-4">
                    <div class="col-xl-6 order-xl-1 m-auto">
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
                                                                <span><b>Views:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></span>
                                                                <span>{{ $seller->view_counts ?? 0 }}</span>
                                                            </li>
                                                            <li>
                                                                <span><b>Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></span>
                                                                <span>{{ $seller->name }}</span>
                                                            </li>
                                                            <li>
                                                                <span><b>Number:&nbsp;&nbsp;&nbsp;</b></span>
                                                                <span>
                                                                    {{ $seller->mobile }}
                                                                </span>
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
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="profileShowEdit" role="tabpanel"
                                                    aria-labelledby="profileShowEdit-tab">
                                                    <div class="info-card-content">
                                                        <div class="main-content">
                                                            <form action="{{ url('seller-profile') }}" method="POST"
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                <input required type="hidden" name="sellerId"
                                                                    value="{{ $sellerId }}">
                                                                <div class="form-group">
                                                                    <label>Name*</label>
                                                                    <input required value="{{ $seller->name }}"
                                                                        type="text" class="my-form-control"
                                                                        name="name" placeholder="Enter Your Full Name">
                                                                    @if ($errors->has('name'))
                                                                        <p class="text-danger">
                                                                            {{ $errors->first('name') }}
                                                                        </p>
                                                                    @endif
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Gender*</label>
                                                                    <div class="banner__inputlist">
                                                                        <div class="s-input me-3">
                                                                            <input required
                                                                                {{ $seller->gender == 'men' ? 'checked' : '' }}
                                                                                type="radio" name="gender"
                                                                                value="men" id="males1">
                                                                            <label for="males1">Man</label>
                                                                        </div>
                                                                        <div class="s-input">
                                                                            <input required
                                                                                {{ $seller->gender == 'women' ? 'checked' : '' }}
                                                                                type="radio" name="gender"
                                                                                value="women" id="females1">

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
                                                                    <input required value="{{ $seller->birthday }}"
                                                                        type="date" name="birthday"
                                                                        class="my-form-control">
                                                                    @if ($errors->has('birthday'))
                                                                        <p class="text-danger">
                                                                            {{ $errors->first('birthday') }}</p>
                                                                    @endif
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Mobile*</label>
                                                                    <input readonly value="{{ $seller->mobile }}"
                                                                        type="text" class="my-form-control"
                                                                        placeholder="Enter Your Telegram Num">
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
                                                                    <input required value="{{ $seller->price }}"
                                                                        type="text" name="price"
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
                                                                    <select class="my-form-control" name="address">
                                                                        <option {{ $seller->address == 'Battambang' ? 'selected' : '' }}>Battambang</option>
                                                                        <option {{ $seller->address == 'Banteay Meanchey' ? 'selected' : '' }}>Banteay Meanchey</option>
                                                                        <option {{ $seller->address == 'Bavet' ? 'selected' : '' }}>Bavet</option>
                                                                        <option {{ $seller->address == 'Banlung' ? 'selected' : '' }}>Banlung</option>
                                                                        <option {{ $seller->address == 'Chbar Mon' ? 'selected' : '' }}>Chbar Mon</option>
                                                                        <option {{ $seller->address == 'Doun Kaev' ? 'selected' : '' }}>Doun Kaev</option>
                                                                        <option {{ $seller->address == 'Kandal' ? 'selected' : '' }}>Kandal</option>
                                                                        <option {{ $seller->address == 'Kampong Thom' ? 'selected' : '' }}>Kampong Thom</option>
                                                                        <option {{ $seller->address == 'Kampong Speu' ? 'selected' : '' }}>Kampong Speu</option>
                                                                        <option {{ $seller->address == 'Kampong Chhnang' ? 'selected' : '' }}>Kampong Chhnang</option>
                                                                        <option {{ $seller->address == 'Kampong Cham' ? 'selected' : '' }}>Kampong Cham</option>
                                                                        <option {{ $seller->address == 'Kampot' ? 'selected' : '' }}>Kampot</option>
                                                                        <option {{ $seller->address == 'Koh Kong' ? 'selected' : '' }}>Koh Kong</option>
                                                                        <option {{ $seller->address == 'Kratié' ? 'selected' : '' }}>Kratié</option>
                                                                        <option {{ $seller->address == 'Kep' ? 'selected' : '' }}>Kep</option>
                                                                        <option {{ $seller->address == 'Koh Rong' ? 'selected' : '' }}>Koh Rong</option>
                                                                        <option {{ $seller->address == 'Oddar Meanchey' ? 'selected' : '' }}>Oddar Meanchey</option>
                                                                        <option {{ $seller->address == 'Phnom Penh' ? 'selected' : '' }}>Phnom Penh</option>
                                                                        <option {{ $seller->address == 'Poipet' ? 'selected' : '' }}>Poipet</option>
                                                                        <option {{ $seller->address == 'Pursat' ? 'selected' : '' }}>Pursat</option>
                                                                        <option {{ $seller->address == 'Pailin' ? 'selected' : '' }}>Pailin</option>
                                                                        <option {{ $seller->address == 'Prey Veng' ? 'selected' : '' }}>Prey Veng</option>
                                                                        <option {{ $seller->address == 'Preah Vihear' ? 'selected' : '' }}>Preah Vihear</option>
                                                                        <option {{ $seller->address == 'Ratanakiri' ? 'selected' : '' }}>Ratanakiri</option>
                                                                        <option {{ $seller->address == 'Siem Reap' ? 'selected' : '' }}>Siem Reap</option>
                                                                        <option {{ $seller->address == 'Serei Saophoan' ? 'selected' : '' }}>Serei Saophoan</option>
                                                                        <option {{ $seller->address == 'Sihanoukville' ? 'selected' : '' }}>Sihanoukville</option>
                                                                        <option {{ $seller->address == 'Samraong' ? 'selected' : '' }}>Samraong</option>
                                                                        <option {{ $seller->address == 'Stueng Saen' ? 'selected' : '' }}>Stueng Saen</option>
                                                                        <option {{ $seller->address == 'Svay Rieng' ? 'selected' : '' }}>Svay Rieng</option>
                                                                        <option {{ $seller->address == 'Suong' ? 'selected' : '' }}>Suong</option>
                                                                        <option {{ $seller->address == 'Ta Khmau' ? 'selected' : '' }}>Ta Khmau</option>
                                                                        <option {{ $seller->address == 'Takéo' ? 'selected' : '' }}>Takéo</option>
                                                                        <option {{ $seller->address == 'Tboung Khmum' ? 'selected' : '' }}>Tboung Khmum</option>
                                                                    </select>
                                                                    {{-- <input required value="{{ $seller->city }}"
                                                                        type="text" name="address"
                                                                        class="my-form-control" id="location" /> --}}
                                                                    @if ($errors->has('address'))
                                                                        <p class="text-danger">
                                                                            {{ $errors->first('address') }}
                                                                        </p>
                                                                    @endif
                                                                </div>
                                                                {{-- <div class="form-group">
                                                                    <label>Upload Your Photo</label>
                                                                    <input type="file" name="image"
                                                                        class="my-form-control" placeholder="">
                                                                </div> --}}
                                                                <button class="default-btn reverse mt-4"
                                                                    data-toggle="modal" type="submit"
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
                                                                <span>{{ count($sellerPhotos) }}</span></button>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content" id="myTabContent3">
                                                        <div class="tab-pane fade show active" id="all-media"
                                                            role="tabpanel" aria-labelledby="all-media-tab">
                                                            <div class="media-content">
                                                                <ul class="media-upload">
                                                                    <li class="upload-now">
                                                                        <form action="{{ url('seller-photo-update') }}"
                                                                            method="POST" enctype="multipart/form-data">
                                                                            @csrf
                                                                            <input type="hidden" name="sellerId"
                                                                                value="{{ $sellerId }}">
                                                                            <div class="custom-upload">
                                                                                <div class="file-btn"><i
                                                                                        class="fa-solid fa-upload"></i>
                                                                                    Upload
                                                                                </div>
                                                                                <input required type="file"
                                                                                    name="photos[]" multiple
                                                                                    accept="image/*">
                                                                            </div>
                                                                            <div>
                                                                                <input value="Save"
                                                                                    class="custom-upload" type="submit">
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    <div class="order-xl-0">
                                        <div class="group__bottom--center">
                                            <div class="story__item style2">
                                                <div class="story__inner">
                                                    {{-- <div class="story__thumb position-relative">
                                                        <img src="{{ $seller->profile_photo }}" alt="dating thumb">
                                                    </div> --}}
                                                    <div class="story__content px-0 pb-0">
                                                        {{-- <h4>{{ $seller->name }}</h4>
                                                        <div class="story__content--content mb-2 pb-3">
                                                            <p>{{ $seller->mobile }}</p>
                                                        </div> --}}
                                                        <div class="story__content--author mt-3 pb-2">
                                                            <h6 class="d-block w-100 mb-3">{{ $seller->name }} Photos</h6>
                                                            <div class="row g-2">
                                                                @foreach ($sellerPhotos as $item)
                                                                    <div class="col-4">
                                                                        <a href="#groupmodal"
                                                                            data-rel="lightcase:callection"><img
                                                                                src="{{ $item->photo_path }}"
                                                                                alt="dating thumb"></a>
                                                                        <button
                                                                            onclick="return myConfirm({{ $item->id }});"
                                                                            class="badge badge-danger w-100"
                                                                            style="background: #f24570;">Delete</button>
                                                                    </div>
                                                                @endforeach
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
                                    <img src="{{ $seller->profile_photo }}" alt="datting thumb">
                                </div>
                                <div class="author-details">
                                    <h6><a href="#">{{ $seller->name }}</a></h6>
                                </div>
                            </div>
                        </div>
                        @foreach ($sellerPhotos as $item)
                            <div class="post-description">
                                <div class="post-desc-img">
                                    <img src="{{ $item->photo_path }}" alt="dating thumb">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================> Group section end here <================== -->
@endsection
@section('script')
    <script>
        function readURL(input, id) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $("#imagePreview" + id).css(
                        "background-image",
                        "url(" + e.target.result + ")"
                    );
                    $("#imagePreview" + id).hide();
                    $("#imagePreview" + id).fadeIn(650);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imageUpload1").change(function() {
            readURL(this, 1);
            $('#aweberform1').submit();
        });
        $("#imageUpload2").change(function() {
            readURL(this, 2);
            $('#aweberform2').submit();
        });

        function myConfirm(id) {
            var result = confirm("Want to delete?");
            if (result == true) {
                window.location.replace("{{ url('delete-image') }}/" + id);
            }
        }
    </script>
@endsection
