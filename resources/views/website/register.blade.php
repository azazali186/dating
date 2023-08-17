@extends('website.layouts.app')
@section('title', 'Register')

@section('content')
    <section class="log-reg">
        <div class="container">
            <div class="row">
                <div class="image">
                </div>
                <div class="col-lg-7">
                    <div class="log-reg-inner">
                        <div class="main-content">
                            <form enctype="multipart/form-data" action="{{ route('save.register') }}" method="POST">
                                @csrf
                                <h4 class="content-title">Acount Details</h4>
                                <div class="form-group">
                                    <label>Mobile*</label>
                                    <input type="number" class="my-form-control"
                                        name="mobile"placeholder="Enter Your Mobile Num" value="{{ old('mobile') }}">
                                    @if ($errors->has('mobile'))
                                        <p class="text-danger">{{ $errors->first('mobile') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Password*</label>
                                    <input type="password" class="my-form-control"name="password"
                                        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                        title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                                        placeholder="Enter Your Password">
                                    @if ($errors->has('password'))
                                        <p class="text-danger">{{ $errors->first('password') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password*</label>
                                    <input type="password" class="my-form-control"name="confirmpassword"
                                        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                        title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                                        placeholder="Enter Your Password">
                                    @if ($errors->has('confirmpassword'))
                                        <p class="text-danger">{{ $errors->first('confirmpassword') }}</p>
                                    @endif
                                </div>
                                <h4 class="content-title mt-5">Profile Details</h4>
                                <div class="form-group">
                                    <label>Name*</label>
                                    <input type="text" class="my-form-control"name="name"
                                        placeholder="Enter Your Full Name" value="{{ old('name') }}">
                                    @if ($errors->has('name'))
                                        <p class="text-danger">{{ $errors->first('name') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Birthday*</label>
                                    <input type="date" name="birthday" class="my-form-control"
                                        value="{{ old('birthday') }}">
                                    @if ($errors->has('birthday'))
                                        <p class="text-danger">{{ $errors->first('birthday') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>I am a*</label>
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
                                    <label>Looking for a*</label>
                                    <div class="banner__inputlist">
                                        <div class="s-input me-3">
                                            <input type="radio" name="lookingfor" id="males" value="men"
                                                {{ old('lookingfor') == 'men' ? 'checked' : '' }}>

                                            <label for="males">Man</label>
                                        </div>
                                        <div class="s-input">
                                            <input type="radio" name="lookingfor" value="women" id="females"
                                                {{ old('lookingfor') == 'women' ? 'checked' : '' }}>
                                            <label for="females">Woman</label>

                                        </div>

                                    </div>
                                    @if ($errors->has('lookingfor'))
                                        <p class="text-danger">{{ $errors->first('lookingfor') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Marial status*</label>
                                    <div class="banner__inputlist">
                                        <select name="matrital_status">
                                            <option {{ old('matrital_status') == 'Single' ? 'selected' : '' }} value="Single" selected>Single</option>
                                            <option {{ old('matrital_status') == 'Marid' ? 'selected' : '' }} value="Marid">Marid</option>
                                        </select>

                                    </div>

                                </div>
                                @if ($errors->has('matrital_status'))
                                    <p class="text-danger">{{ $errors->first('matrital_status') }}</p>
                                @endif
                                <div class="form-group">
                                    <label>City*</label>
                                    <input type="text" name="city" class="my-form-control" id="location" value="{{ old('city') }}" />
                                    @if ($errors->has('city'))
                                        <p class="text-danger">{{ $errors->first('city') }}</p>
                                    @endif
                                </div>

                                {{-- <div class="form-group">
                                    <label>Upload Your Photo</label>
                                    <input required type="file" name="image" class="my-form-control" placeholder="">
                                </div> --}}

                                <button class="default-btn reverse" data-toggle="modal" type="submit"
                                    data-target="#email-confirm"><span>Create Your Profile</span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
@endsection
