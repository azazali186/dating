@extends('website.layouts.app')
@section('content')
    <!-- ================> login section start here <================== -->
    <section class="log-reg forezero">
        <div class="container">
            <div class="row justify-content-end">
                <div class="image image-404"></div>
                <div class="col-lg-7 ">
                    <div class="log-reg-inner">
                        <div class="main-thumb mb-5">
                            <img src="{{ URL::to('website/assets/images/404.png') }}" alt="datting thumb">
                        </div>
                        <div class="main-content inloginp">
                            <div class="text-content text-center">
                                <h2>Ops! This Page Not Pound</h2>
                                <p>We are Really Sorry But the Page you Requested is Missing :( </p>
                                <a href="/" class="default-btn reverse"><span>Back to Home</span></a>
                            </div>
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
