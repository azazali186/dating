@extends('website.layouts.app')
@section('style')
    <style>
        section {
            padding-top: 60px;
            padding-bottom: 60px;
            background: #f5f5f5;
        }

        ::-webkit-scrollbar {
            width: 2px;
        }

        ::-webkit-scrollbar-thumb {
            background: #000;
            border-radius: 5px;
        }

        .chat-list-box {
            display: inline-block;
            width: 100%;
            background: #fff;
            box-shadow: 0px 10px 30px 0px rgba(50, 50, 50, 0.16);
        }

        .flat-icon li {
            display: inline-block;
            padding: 0px 8px;
            vertical-align: middle;
            position: relative;
            top: 7px;
        }

        .flat-icon a img {
            width: 22px;
            border-radius: unset !important;
        }

        ul.list-inline.text-left.d-inline-block.float-left {
            margin-bottom: 0;
        }

        .chat-list-box ul li img {
            border-radius: 50px;
        }

        .message-box {
            display: inline-block;
            width: 100%;
            background: #fff;
            box-shadow: 0px 10px 30px 0px rgba(50, 50, 50, 0.16);
        }

        .msg-box li {
            display: inline-block;
            padding-left: 10px;
        }

        .msg-box img {
            border-radius: 50px;
        }

        .msg-box li span {
            padding-left: 8px;
            color: #545454;
            font-weight: 550;
        }

        .head-box {
            display: flow-root;
            padding: 10px;
            background: #f6f6f6;
        }

        .chat-person-list {
            padding: 10px;
        }

        .chat-person-list ul li img {
            width: 30px;
            border-radius: 50px;
        }

        .chat-person-list ul li span {
            padding-left: 20px;
        }

        .chat-person-list ul li {
            line-height: 55px;
        }

        span.chat-time {
            float: right;
            font-size: 12px;
        }

        .head-box-1 {
            display: flow-root;
            padding: 10px;
            background: #f6f6f6;
        }

        .msg_history {
            padding: 10px;
            /* height: 280px; */
            height: 557px;
            overflow: overlay;
        }

        .incoming_msg_img {
            display: inline-block;
            width: 9%;
        }

        .received_msg {
            display: inline-block;
            padding: 0 0 0 10px;
            vertical-align: top;
            width: auto;
        }

        .received_withd_msg {
            width: auto;
        }

        .received_withd_msg p {
            background: rgba(0, 123, 255, 0.5) none repeat scroll 0 0;
            border-radius: 3px;
            color: #ffffff;
            font-size: 14px;
            margin: 0;
            padding: 5px 10px 5px 22px;
            width: 100%;
            border-bottom-right-radius: 50px;
            border-top-left-radius: 50px;
        }

        .time_date {
            color: #747474;
            display: block;
            font-size: 12px;
            margin: 8px 0 0;
        }

        .incoming_msg_img img {
            width: 100%;
            border-radius: 50px;
            float: left;
        }

        .outgoing_msg {
            overflow: hidden;
            margin: 10px 0 10px;
        }

        .sent_msg {
            float: right;
            width: auto;
        }

        .sent_msg p {
            background: #ddd;
            border-radius: 3px;
            font-size: 14px;
            margin: 0;
            color: #333;
            padding: 5px 10px 5px 22px;
            width: 100%;
            border-bottom-right-radius: 50px;
            border-top-left-radius: 50px;
        }

        .chat-person-list ul li a {
            color: #545454;
            text-decoration: none;
        }

        .attachement {
            background: #777;
            position: absolute;
            width: 220px;
            right: 30%;
            top: 42px;
            display: none;
        }

        .attachement ul li {
            display: -webkit-inline-box;
            margin: 0px 19px 15px 20px;
        }

        .attachement ul li a {
            color: #fff;
        }

        .setting-drop {
            display: none;
            position: absolute;
            width: 130px;
            height: 148px;
            right: 0;
            top: 42px;
            background: #ffffff;
            color: #545454;
            box-shadow: 1px 1px 15px 1px #0000001f;
        }

        .send-message {
            padding: 2px;
            background: #f5f5f5;
            height: 42px;
        }

        .send-message textarea:focus {
            box-shadow: none;
            outline: none;
            border-color: #ddd;
        }

        .send-message ul li {
            display: -webkit-inline-box;
            padding-left: 15px;
        }

        .send-message ul li i {
            color: #0056b3;
        }

        .send-message ul li a {
            color: #0056b3;
        }

        .send-message ul {
            position: absolute;
            right: 45px;
            top: 88%;
            border-left: 1px solid #9c9a9a;
        }

        .mobilebar-tab-message {
            height: 50px;
            width: 96vw;
            background-color: #f5f5f5;
            overflow: hidden;
            display: flex;
            position: relative;
            flex-shrink: 0;
            bottom: 0px;
            border-radius: 6px;
        }

        @media only screen and (max-width: 800px) {
            .message-box {
                display: none;
                position: relative;
                /* top: -56%; */
            }
        }
    </style>
@endsection

@section('content')
    <div class="member member--style2 padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-12 message-box-profile">
                    <div class="tab-pane fade show active" id="newest" role="tabpanel" aria-labelledby="newest-tab">
                        <div class="row g-0 justify-content-center" id="formobile">
                            @foreach ($messages as $item)
                                @if ($role == 'user')
                                    <div class="member__inner flip"
                                        style="height: 90px;border-bottom: 2px solid;margin-bottom: 8px;">
                                        <div class="member__content">
                                            <div style="width: 100%;">
                                                <div style="width: 20%; float: left;">
                                                    <img src="{{ $item?->seller?->image }}" style="width: 70px;">
                                                </div>
                                                <a style="width: 80%; float: left; text-align: left; padding-left: 11px;">
                                                    <h5>{{ $item?->seller?->name }}</h5>
                                                    <p>{{ strlen($item->text) > 70 ? substr($item->text, 0, 70) . '...' : $item->text }}
                                                    </p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @if ($role == 'seller')
                                    <div class="member__inner flip"
                                        style="height: 90px;border-bottom: 2px solid;margin-bottom: 8px;">
                                        <div class="member__content">
                                            <div style="width: 100%;">
                                                <div style="width: 20%; float: left;">
                                                    <img src="{{ $item->user->image }}" style="width: 70px;">
                                                </div>
                                                <a style="width: 80%; float: left; text-align: left; padding-left: 11px;">
                                                    <h5>{{ $item->user->name }}</h5>
                                                    <p>{{ strlen($item->text) > 70 ? substr($item->text, 0, 70) . '...' : $item->text }}
                                                    </p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- col-md-4 closed -->
                {{-- <div class=""> --}}
                <div class="col-md-8 col-12 message-box g-0">
                    <div class="head-box-1">
                        <ul class="msg-box list-inline text-left d-inline-block float-left">
                            <li><i class="fas fa-arrow-left" id="back"></i></li>
                            <li>
                                <img src="https://i.ibb.co/fCzfFJw/person.jpg" alt="" width="40px" />
                                <span> Naveen mandwariya </span>
                            </li>
                        </ul>
                        {{-- <ul class="flat-icon list-inline text-right d-inline-block float-right">
                                <li> <a href="#"> <i class="fas fa-video"></i> </a> </li>
                                <li> <a href="#"> <i class="fas fa-camera"></i> </a> </li>
                                <li>
                                    <a href="#" id="dset"> <i class="fas fa-ellipsis-v"></i> </a>
                                    <div class="setting-drop">
                                        <ul class="list-inline">
                                            <li> <a href="#"> My Profile</a> </li>
                                            <li> <a href="#"> Setting </a> </li>
                                            <li> <a href="#"> Privacy Policy </a> </li>
                                            <li> <a href="#"> Hidden chat </a> </li>
                                            <li> <a href="#"> Logout </a> </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul> --}}
                    </div>
                    <div class="msg_history">
                        <div class="incoming_msg">
                            <div class="incoming_msg_img">
                                <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" />
                            </div>
                            <div class="received_msg">
                                <div class="received_withd_msg">
                                    <p>Hi, How are you ?</p>
                                    <span class="time_date"> 11:01 AM | June 9</span>
                                </div>
                            </div>
                        </div>
                        <div class="outgoing_msg">
                            <div class="sent_msg">
                                <p>Hello, i am fine thankyou, what about you ?</p>
                                <span class="time_date"> 11:01 AM | June 9</span>
                            </div>
                        </div>
                        <div class="incoming_msg">
                            <div class="incoming_msg_img">
                                <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" />
                            </div>
                            <div class="received_msg">
                                <div class="received_withd_msg">
                                    <p>I am also good thankyou!</p>
                                    <span class="time_date"> 11:01 AM | Yesterday</span>
                                </div>
                            </div>
                        </div>
                        <div class="outgoing_msg">
                            <div class="sent_msg">
                                <p>ok</p>
                                <span class="time_date"> 11:01 AM | Today</span>
                            </div>
                        </div>
                        <div class="incoming_msg">
                            <div class="incoming_msg_img">
                                <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" />
                            </div>
                            <div class="received_msg">
                                <div class="received_withd_msg">
                                    <p>What's going on ?</p>
                                    <span class="time_date"> 11:01 AM | Today</span>
                                </div>
                            </div>
                        </div>
                        <div class="incoming_msg">
                            <div class="incoming_msg_img">
                                <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" />
                            </div>
                            <div class="received_msg">
                                <div class="received_withd_msg">
                                    <p>Hi, How are you ?</p>
                                    <span class="time_date"> 11:01 AM | June 9</span>
                                </div>
                            </div>
                        </div>
                        <div class="outgoing_msg">
                            <div class="sent_msg">
                                <p>Hello, i am fine thankyou, what about you ?</p>
                                <span class="time_date"> 11:01 AM | June 9</span>
                            </div>
                        </div>
                        <div class="incoming_msg">
                            <div class="incoming_msg_img">
                                <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" />
                            </div>
                            <div class="received_msg">
                                <div class="received_withd_msg">
                                    <p>I am also good thankyou!</p>
                                    <span class="time_date"> 11:01 AM | Yesterday</span>
                                </div>
                            </div>
                        </div>
                        <div class="outgoing_msg">
                            <div class="sent_msg">
                                <p>ok</p>
                                <span class="time_date"> 11:01 AM | Today</span>
                            </div>
                        </div>
                        <div class="incoming_msg">
                            <div class="incoming_msg_img">
                                <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" />
                            </div>
                            <div class="received_msg">
                                <div class="received_withd_msg">
                                    <p>What's going on ?</p>
                                    <span class="time_date"> 11:01 AM | Today</span>
                                </div>
                            </div>
                        </div>
                        <div class="incoming_msg">
                            <div class="incoming_msg_img">
                                <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" />
                            </div>
                            <div class="received_msg">
                                <div class="received_withd_msg">
                                    <p>Hi, How are you ?</p>
                                    <span class="time_date"> 11:01 AM | June 9</span>
                                </div>
                            </div>
                        </div>
                        <div class="outgoing_msg">
                            <div class="sent_msg">
                                <p>Hello, i am fine thankyou, what about you ?</p>
                                <span class="time_date"> 11:01 AM | June 9</span>
                            </div>
                        </div>
                        <div class="incoming_msg">
                            <div class="incoming_msg_img">
                                <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" />
                            </div>
                            <div class="received_msg">
                                <div class="received_withd_msg">
                                    <p>I am also good thankyou!</p>
                                    <span class="time_date"> 11:01 AM | Yesterday</span>
                                </div>
                            </div>
                        </div>
                        <div class="outgoing_msg">
                            <div class="sent_msg">
                                <p>ok</p>
                                <span class="time_date"> 11:01 AM | Today</span>
                            </div>
                        </div>
                        <div class="incoming_msg">
                            <div class="incoming_msg_img">
                                <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" />
                            </div>
                            <div class="received_msg">
                                <div class="received_withd_msg">
                                    <p>What's going on ?</p>
                                    <span class="time_date"> 11:01 AM | Today</span>
                                </div>
                            </div>
                        </div>
                        <div class="incoming_msg">
                            <div class="incoming_msg_img">
                                <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" />
                            </div>
                            <div class="received_msg">
                                <div class="received_withd_msg">
                                    <p>Hi, How are you ?</p>
                                    <span class="time_date"> 11:01 AM | June 9</span>
                                </div>
                            </div>
                        </div>
                        <div class="outgoing_msg">
                            <div class="sent_msg">
                                <p>Hello, i am fine thankyou, what about you ?</p>
                                <span class="time_date"> 11:01 AM | June 9</span>
                            </div>
                        </div>
                        <div class="incoming_msg">
                            <div class="incoming_msg_img">
                                <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" />
                            </div>
                            <div class="received_msg">
                                <div class="received_withd_msg">
                                    <p>I am also good thankyou!</p>
                                    <span class="time_date"> 11:01 AM | Yesterday</span>
                                </div>
                            </div>
                        </div>
                        <div class="outgoing_msg">
                            <div class="sent_msg">
                                <p>ok</p>
                                <span class="time_date"> 11:01 AM | Today</span>
                            </div>
                        </div>
                        <div class="incoming_msg">
                            <div class="incoming_msg_img">
                                <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" />
                            </div>
                            <div class="received_msg">
                                <div class="received_withd_msg">
                                    <p>What's going on ?</p>
                                    <span class="time_date"> 11:01 AM | Today</span>
                                </div>
                            </div>
                        </div>
                        <div class="incoming_msg">
                            <div class="incoming_msg_img">
                                <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" />
                            </div>
                            <div class="received_msg">
                                <div class="received_withd_msg">
                                    <p>Hi, How are you ?</p>
                                    <span class="time_date"> 11:01 AM | June 9</span>
                                </div>
                            </div>
                        </div>
                        <div class="outgoing_msg">
                            <div class="sent_msg">
                                <p>Hello, i am fine thankyou, what about you ?</p>
                                <span class="time_date"> 11:01 AM | June 9</span>
                            </div>
                        </div>
                        <div class="incoming_msg">
                            <div class="incoming_msg_img">
                                <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" />
                            </div>
                            <div class="received_msg">
                                <div class="received_withd_msg">
                                    <p>I am also good thankyou!</p>
                                    <span class="time_date"> 11:01 AM | Yesterday</span>
                                </div>
                            </div>
                        </div>
                        <div class="outgoing_msg">
                            <div class="sent_msg">
                                <p>ok</p>
                                <span class="time_date"> 11:01 AM | Today</span>
                            </div>
                        </div>
                        <div class="incoming_msg">
                            <div class="incoming_msg_img">
                                <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" />
                            </div>
                            <div class="received_msg">
                                <div class="received_withd_msg">
                                    <p>What's going on ?</p>
                                    <span class="time_date"> 11:01 AM | Today</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="send-message mobilebar-tab-message">
                        <div class="lab-content">
                            <form action="" method="">
                                <div class="row" style=" margin: 0px !important; ">
                                    <div class="col-10">
                                        <input style="height: 100% !important" type="text" cols="10"
                                            rows="2" class="form-control"
                                            placeholder="Type your message here ..." />
                                    </div>
                                    <div class="col-2 m-auto">
                                        <button class="btn btn-primary">
                                            <i class="fas fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                            {{-- <form action="{{ url('send-message') }}" class="post-form" method="POST">
                                @csrf
                                <input type="hidden" value="1" name="seller_id">
                                <input type="text" name="text" placeholder="Send me message" required="">
                                <div class="content-type">
                                    <ul class="content-list">
                                        <li class="post-submit">
                                            <input type="submit" value="Send" class="default-btn">
                                        </li>
                                    </ul>
                                </div>
                            </form> --}}
                        </div>
                    </div>
                </div>
                {{-- </div> --}}
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
        $("#attach").click(function() {
            $(".attachement").toggle();
        });
        $("#dset").click(function() {
            $(".setting-drop").toggle("1000");
        });
        $(document).ready(function() {
            $(".flip").click(function() {
                $(".message-box").show("slide", {
                    direction: "right"
                }, 10000);
                $(".message-box-profile").hide("slide", {
                    direction: "left"
                }, 10000);
            });
        });
        $(document).ready(function() {
            $("#back").click(function() {
                $(".message-box").hide("slide", {
                    direction: "left"
                }, 10000);
                $(".message-box-profile").show("slide", {
                    direction: "right"
                }, 10000);
            });
        });
    </script>
@endsection
