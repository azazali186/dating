@extends('website.layouts.app')
@section('title', 'Seller Register')
@section('content')

    <section class="log-reg">
        <div class="container">
            <div class="row">
                <div class="image">
                </div>
                <div class="col-lg-7">
                    <div class="log-reg-inner">
                        <div class="main-content">
                            @php
                                $x = false;
                            @endphp
                            @if ($x)
                                <form action="{{ route('save.seller_register') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <h3 class="content-title">Seller Acount Details</h3>
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
                                        @if ($errors->has('birthday'))
                                            <p class="text-danger">{{ $errors->first('birthday') }}</p>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Mobile*</label>
                                        <input type="number" class="my-form-control" name="mobile"
                                            placeholder="Enter Your Mobile Num" value="{{ old('mobile') }}">
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
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('script')
@endsection
