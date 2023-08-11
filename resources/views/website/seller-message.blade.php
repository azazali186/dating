@extends('website.layouts.app')
@section('content')
    <div class="member member--style2 padding-bottom">
        <div class="container">
            <div class="tab-content mx-12-none" id="myTabContent">
                <div class="tab-pane fade show active" id="newest" role="tabpanel" aria-labelledby="newest-tab">
                    <div class="row g-0 justify-content-center" id="formobile">
                        <div class="member__inner" style="height: 90px;border-bottom: 2px solid;margin-bottom: 8px;">
                            <div class="member__content">
                                <div style="width: 100%">
                                    <div style="width: 20%; float: left;">
                                        <img src="http://localhost/datingapp/public/website/assets/images/member/home2/01.jpg"
                                            style="width: 70px;">
                                    </div>
                                    <div style="width: 80%; float: left;">
                                        <a href="http://localhost/datingapp/member-single/1">
                                            <h5>Sushil Kumar Gupta</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection
