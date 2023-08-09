@extends('website.layouts.app')
@section('content')
@section('title', 'Login')
    <!-- ================> login section start here <================== -->
    <section class="log-reg">
        {{-- <div class="top-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-7">
                        <div class="logo">
                            <a href="index.html"><img src="assets/images/logo/logo.png" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-5">
                        <a href="index.html" class="backto-home"><i class="fas fa-chevron-left"></i> Back to Home</a>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="container">
            <div class="row">
                <div class="image image-log"></div>
                <div class="col-lg-7">
                    <div class="log-reg-inner">
                        {{-- <div class="section-header inloginp"> --}}
                        <div class="">
                            <h3 class="title">Welcome to xmakelove</h3>
                        </div>
                        <div class="main-content inloginp">
                            <form action="{{route('check.login')}}" method="POST">
                                @csrf
                                 <div class="form-group">
                                    <label>Mobile*</label>
                                    <input type="text" class="my-form-control" name="mobile"placeholder="Enter Your Mobile Number">
                                     @if($errors->has('mobile'))
                                                    <p class="text-danger">{{$errors->first('mobile')}}</p>
                                                    @endif
                                    </div>
                                    <div class="form-group">
                                    <label>Password*</label>
                                    <input type="text" class="my-form-control"name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Enter Your Password">
                                     @if($errors->has('password'))
                                                    <p class="text-danger">{{$errors->first('password')}}</p>
                                                    @endif
                                </div>
                                <p class="f-pass">Forgot your password? <a href="#">recover password</a></p>
                                <div class="text-center">
                                    <button type="submit"  class="default-btn"><span>Sign IN</span></button>
                                </div>
                                {{-- <div class="or">
                                    <p>OR</p>
                                </div>
                                <div class="or-content">
                                    <p>Sign up with your email</p>
                                    <a href="#" class="default-btn reverse"><img src="{{ URL::to('website/assets/images/login/google.png') }}"
                                            alt="google"> <span>Sign Up with
                                            Google</span></a>
                                    <p class="or-signup"> Don't have an account? <a href="register.html">Sign up
                                            here</a></p>
                                </div> --}}
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
