@extends('website.layouts.app')
@section('content')
@section('title', 'Register')
    <!-- ================> login section start here <================== -->
    <section class="log-reg">
        {{-- toastr --}}
        <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        {{-- <div class="top-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-7">
                        <div class="logo">
                            <a href="index.html"><img src="{{ URL::to('website/assets/images/logo/logo.png') }}" alt="logo"></a>
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
                <div class="image">
                </div>
                <div class="col-lg-7">
                    <div class="log-reg-inner">
                        {{-- <div class="section-header">
                            <h2 class="title">Welcome to Ollya </h2>
                            <p>Let's create your profile! Just fill in the fields below, and we’ll get a new account.
                            </p>
                        </div> --}}
                        <div class="main-content">
                          <!--   @if ($message = Session::get('success'))
                              <div class="alert alert-success">
                               <p>{{ $message }}</p>
                                   </div>
                               @endif -->
                            <form action="{{route('save.register')}}" method="POST">
                                @csrf
                                <h4 class="content-title">Acount Details</h4>
                                <div class="form-group">
                                    <label>Mobile*</label>
                                    <input type="text" class="my-form-control" name="mobile"placeholder="Enter Your Mobile Num"maxlength="10">
                                     @if($errors->has('mobile'))
                                                    <p class="text-danger">{{$errors->first('mobile')}}</p>
                                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Email Address*</label>
                                    <input type="email" class="my-form-control"name="email" placeholder="Enter Your Email">
                                     @if($errors->has('email'))
                                                    <p class="text-danger">{{$errors->first('email')}}</p>
                                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Password*</label>
                                    <input type="text" class="my-form-control"name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Enter Your Password">
                                     @if($errors->has('password'))
                                                    <p class="text-danger">{{$errors->first('password')}}</p>
                                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password*</label>
                                    <input type="text" class="my-form-control"name="confirmpassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Enter Your Password">
                                      @if($errors->has('confirmpassword'))
                                                    <p class="text-danger">{{$errors->first('confirmpassword')}}</p>
                                                    @endif
                                </div>
                                <h4 class="content-title mt-5">Profile Details</h4>
                                <div class="form-group">
                                    <label>Name*</label>
                                    <input type="text" class="my-form-control"name="name" placeholder="Enter Your Full Name">
                                     @if($errors->has('name'))
                                                    <p class="text-danger">{{$errors->first('name')}}</p>
                                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Birthday*</label>
                                    <input type="date" name="birthday" class="my-form-control">
                                     @if($errors->has('birthday'))
                                                    <p class="text-danger">{{$errors->first('birthday')}}</p>
                                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>I am a*</label>
                                    <div class="banner__inputlist">
                                        <div class="s-input me-3">
                                            <input type="radio" name="gender" value="men" id="males1">
                                             <label
                                                for="males1">Man</label>
                                        </div>
                                        <div class="s-input">
                                            <input type="radio" name="gender"  value="women"id="females1">
                                            
                                            <label
                                                for="females1">Woman</label>
                                        </div>
                                       
                                    </div>
                                      @if($errors->has('gender'))
                                                    <p class="text-danger">{{$errors->first('gender')}}</p>
                                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Looking for a*</label>
                                    <div class="banner__inputlist">
                                        <div class="s-input me-3">
                                            <input type="radio" name="lookingfor" id="males" value="men">
                                               
                                             <label
                                                for="males" >Man</label>
                                        </div>
                                        <div class="s-input">
                                            <input type="radio" name="lookingfor" value="women" id="females"><label
                                                for="females" >Woman</label>

                                        </div>
                                          
                                    </div>
                                        @if($errors->has('lookingfor'))
                                                    <p class="text-danger">{{$errors->first('lookingfor')}}</p>
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
                                 @if($errors->has('matrital_status'))
                                                    <p class="text-danger">{{$errors->first('matrital_status')}}</p>
                                                    @endif
                                <div class="form-group">
                                    <label>City*</label>
                                    <input type="text" name="city" class="my-form-control" placeholder="Enter Your City">
                                     @if($errors->has('city'))
                                                    <p class="text-danger">{{$errors->first('city')}}</p>
                                                    @endif
                                </div>
                                <button class="default-btn reverse" data-toggle="modal" type="submit" 
                                    data-target="#email-confirm"><span>Create Your Profile</span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         {{-- toastr js --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
        <script>
            $(document).ready(function() {
                toastr.options.timeOut = 10000;
                @if (Session::has('error'))
                    toastr.error('{{ Session::get('error') }}');
                @elseif(Session::has('success'))
                    toastr.success('{{ Session::get('success') }}');
                @elseif(Session::has('warning'))
                    toastr.warning('{{ Session::get('warning') }}');
                @endif
            });

        </script>
    </section>
    <!-- ================> login section end here <================== -->
@endsection
@section('script')
@endsection
