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
                        <h3 class="title">Recover Password</h3>
                    </div>
                    <div class="main-content inloginp">
                        {{-- <form action="" method="POST">
                            @csrf --}}
                        <div class="form-group">
                            <label>Email*</label>
                            <div class="row">
                                <div class="col-10">
                                    <input id="emailId" required type="email" class="my-form-control"
                                        name="email"placeholder="Enter Your Email">
                                    <p class="text-danger" id="wrongEmail"></p>
                                    @if ($errors->has('email'))
                                        <p class="text-danger">{{ $errors->first('email') }}</p>
                                    @endif
                                </div>
                                <div class="col-2">
                                    <button id="sendOtpIdForm" class="btn btn-success">
                                        Send
                                    </button>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="form-group">
                                <label>Password*</label>
                                <input type="text" class="my-form-control"name="password"
                                    placeholder="Enter Your Password">
                                @if ($errors->has('password'))
                                    <p class="text-danger">{{ $errors->first('password') }}</p>
                                @endif
                            </div> --}}
                        <p class="f-pass">Go To Login page <a href="{{ url('login') }}">login</a></p>
                        <div class="text-center">
                            <button type="submit" class="default-btn"><span>Submit</span></button>
                        </div>
                        {{-- </form> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================> login section end here <================== -->
@endsection
@section('script')
<script>
    document.getElementById("sendOtpIdForm").addEventListener("click", function(event) {
        var emailData = $("#emailId").val();
        if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(emailData)) {
            $("#wrongEmail").text(" ");
            sendOtp(emailData);
            return (true)
        }
        $("#wrongEmail").text("You have entered an invalid email address!");
        return (false)
    });

    function sendOtp(email) {
        $.ajax({
            url: "{{ url('send-mail') }}",
            type: "POST",
            data: {
                _token: "{{ csrf_token() }}",
                email: email
            },
            cache: false,
            success: function(html) {
                alert(html);
                // $("#results").append(html);
            }
        });
    }
</script>
@endsection
