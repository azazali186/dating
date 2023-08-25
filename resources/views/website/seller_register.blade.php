@extends('website.layouts.app')
@section('title', 'Seller Register')
@section('content')

    <section class="log-reg">
        <div class="container">
            <div class="row">
                <div class="image">
                </div>
                <div class="col-lg-7">
                    {{-- log-reg-inner --}}
                    <div class="log-reg-inner">
                        <div class="main-content">
                            {{-- <div class="padding-bottom">
                                <div class="section__header style-2 text-center">
                                    <p>Want to get started as a female member? Please use the form below and we will get in
                                        touch.</p>
                                    <small><b>Note : </b>The members is for Female only.</small>
                                </div>
                            </div> --}}
                            @php
                                $x = true;
                            @endphp
                            @if ($x)
                                <form action="{{ route('save.seller_register') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <h3 class="content-title">Member account details</h3>
                                    <div class="form-group">
                                        <label>Name*</label>
                                        <input type="text" class="my-form-control" name="name"
                                            placeholder="Enter Your Full Name" value="{{ old('name') }}">
                                        @if ($errors->has('name'))
                                            <p class="text-danger">{{ $errors->first('name') }}</p>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Gender*</label>
                                        <div class="banner__inputlist">
                                            <div class="s-input me-3">
                                                <input type="radio" name="gender" value="men" id="males1"
                                                    {{ old('gender') == 'men' ? 'checked' : '' }}>
                                                <label for="males1">Man</label>
                                            </div>
                                            <div class="s-input">
                                                <input type="radio" name="gender" value="women"id="females1"
                                                    {{ old('gender') == 'women' ? 'checked' : '' }}>

                                                <label for="females1">Woman</label>
                                            </div>

                                        </div>
                                        @if ($errors->has('gender'))
                                            <p class="text-danger">{{ $errors->first('gender') }}</p>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Date of Birth*</label>
                                        <input type="date" name="birthday" class="my-form-control"
                                            value="{{ old('birthday') }}">
                                            <p class="text-danger">The brirthday field must be a date before 2005-08-24</p>
                                        @if ($errors->has('birthday'))
                                            <p class="text-danger">{{ $errors->first('birthday') }}</p>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Mobile*</label>
                                        <input type="number" class="my-form-control" name="mobile"
                                            placeholder="Enter Your Telegram Num" value="{{ old('mobile') }}">
                                        @if ($errors->has('mobile'))
                                            <p class="text-danger">{{ $errors->first('mobile') }}</p>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Email*</label>
                                        <input type="text" class="my-form-control" name="email"
                                            placeholder="Enter Your Email" value="{{ old('email') }}">
                                        @if ($errors->has('email'))
                                            <p class="text-danger">{{ $errors->first('email') }}</p>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Password*</label>
                                        <input type="password" class="my-form-control"name="password"
                                            placeholder="Enter Your Password">
                                        @if ($errors->has('password'))
                                            <p class="text-danger">{{ $errors->first('password') }}</p>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm Password*</label>
                                        <input type="password" class="my-form-control"name="confirmpassword"
                                            placeholder="Enter Your Confirm Password">
                                        @if ($errors->has('confirmpassword'))
                                            <p class="text-danger">{{ $errors->first('confirmpassword') }}</p>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Enter Your Price*</label>
                                        <input type="number" name="price" class="my-form-control"
                                            placeholder="Enter Your Price" value="{{ old('price') }}">
                                        @if ($errors->has('price'))
                                            <p class="text-danger">{{ $errors->first('price') }}</p>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>City*</label>
                                        <input type="text" name="address" class="my-form-control" id="location"
                                            value="{{ old('address') }}" />
                                        @if ($errors->has('address'))
                                            <p class="text-danger">{{ $errors->first('address') }}</p>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Upload Your Photo</label>
                                        <input type="file" name="image" class="my-form-control" placeholder="">
                                    </div>
                                    <button class="default-btn reverse" data-toggle="modal" type="submit"
                                        data-target="#email-confirm"><span>Submit</span></button>
                                </form>
                            @endif
                        </div>

                        <div class="section-wrapper padding-top padding-bottom">
                            <div class="row justify-content-center g-4">
                                <div class="col-4">
                                    <div class="contact-item text-center" style=" padding: 10px 10px !important; "
                                        onclick="getText('Office Address', '1201 park street, Fifth Avenue');">
                                        <div class="contact-thumb mb-4">
                                            <img src="{{ URL::to('public/website/assets/images/contact/icon/01.png') }}"
                                                alt="contact-thumb">
                                        </div>
                                        <div class="contact-content">
                                            <h6 class="title" style="font-size: 12px;">Office Address</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="contact-item text-center" style=" padding: 10px 10px !important; "
                                        onclick="getText('Phone number', 'NUM');">
                                        <div class="contact-thumb mb-4">
                                            <img src="{{ URL::to('public/website/assets/images/contact/icon/02.png') }}"
                                                alt="contact-thumb">
                                        </div>
                                        <div class="contact-content">
                                            <h6 class="title" style="font-size: 12px;">Phone number</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="contact-item text-center" style=" padding: 10px 10px !important; "
                                        onclick="getText('Send Email', 'mornsova@gmail.com');">
                                        <div class="contact-thumb mb-4">
                                            <img src="{{ URL::to('public/website/assets/images/contact/icon/03.png') }}"
                                                alt="contact-thumb">
                                        </div>
                                        <div class="contact-content">
                                            <h6 class="title" style="font-size: 12px;">Send Email</h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="contact-item text-center" style=" padding: 10px 10px !important; ">
                                        <div class="contact-content" id="appendText">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('script')
    <script>
        function getText(heading, text) {
            if (text == 'NUM') {
                document.getElementById("appendText").innerHTML = `
                                                <h6 class="title">${heading}</h6>
                                                <p>+855 97 708 6101</p>
                                                <a href="https://t.me/+855977086101"><button class="btn">Telegram!</button></a>
                                            `;
            } else {
                document.getElementById("appendText").innerHTML = `
                                                <h6 class="title">${heading}</h6>
                                                <p>${text}</p>
                                            `;
            }
        }
    </script>
@endsection
