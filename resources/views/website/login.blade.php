@extends('website.layouts.app')
@section('content')
@section('title', 'Login')
<!-- ================> login section start here <================== -->
<section class="log-reg">
    <div class="container">
        <div class="row">
            <div class="image image-log"></div>
            <div class="col-lg-7">
                <div class="log-reg-inner">
                    <div class="">
                        <h3 class="title">Welcome to xmakelove</h3>
                        <h6 class="text-center m-4">You need to Sign in or Sign up To call her</h6>
                    </div>
                    <div class="main-content inloginp">
                        <form action="{{ route('check.login') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Mobile*</label>
                                <input type="text" class="my-form-control"
                                    name="mobile"placeholder="Enter Your Telegram Number">
                                @if ($errors->has('mobile'))
                                    <p class="text-danger">{{ $errors->first('mobile') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Password*</label>
                                <input type="text" class="my-form-control"name="password"
                                    placeholder="Enter Your Password">
                                @if ($errors->has('password'))
                                    <p class="text-danger">{{ $errors->first('password') }}</p>
                                @endif
                            </div>
                            <p class="f-pass">Forgot your password? <a href="{{ url('recover-password') }}">recover
                                    password</a></p>
                            <div class="text-center">
                                <button type="submit" class="default-btn"><span>Sign IN</span></button>
                            </div>
                            <h5 class="text-center">Or</h5>
                            <div class="text-center">
                                <a href="{{ url('register') }}" class="default-btn text-light" style="background-color:darkgoldenrod; margin: 0px !important;"><span>Sign UP</span></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================> login section end here <================== -->
@endsection
@section('script')
@endsection
