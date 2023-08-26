@extends('website.layouts.app')
@section('title', 'pricing-table')
@section('style')
    <style>
        :root {
            --pinkish-red: #c35a74;
            --medium-blue: #307baa;
            --greenish-blue: #53bab5;
            --bright-orange: #ff7445;
            --white-smoke: #f5f5f4;
            --white: #fff;
            --dark-gray: #7d7c7c;
            --black: #000;
        }

        section {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;

            background: var(--white-smoke);
        }

        .contentSub {
            display: flex;
            justify-content: space-between;
            width: 1200px;
            margin: 100px;
        }

        .boxSub {
            display: flex;
            flex-direction: column;
            height: 370px;
            width: 350px;
            border-radius: 20px;
            margin-left: 10px;
            margin-right: 10px;

            background: var(--white);
            box-shadow: 0 1rem 2rem rgba(0, 0, 0, 20%);
        }

        .titleSub {
            width: 95%;
            margin: auto;
            padding: 10px 0;
            font-size: 1.2em;
            font-weight: lighter;
            text-align: center;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;

            color: var(--white-smoke);
        }

        .basicSub .titleSub {
            background: var(--pinkish-red);
        }

        .standard .titleSub {
            background: var(--medium-blue);
        }

        .business .titleSub {
            /* margin-top: 10px; */
            background: var(--greenish-blue);
        }

        .titleSub {
            margin-top: 10px;
        }

        .viewSub {
            display: block;
            width: 100%;
            padding: 30px 0 20px;

            background: var(--white-smoke);
        }

        .iconSub {
            display: flex;
            justify-content: center;
        }

        .iconSub img {
            width: 100px;
        }

        .costSub {
            display: flex;
            justify-content: center;
            flex-direction: row;
            margin-top: 10px;
        }

        .amountSub {
            font-size: 2.8em;
            font-weight: bolder;
        }

        .detailSub {
            margin: auto 0 auto 5px;
            width: 70px;
            font-size: 0.7em;
            font-weight: bold;
            line-height: 15px;
            color: #7d7c7c;
        }

        .descriptionSub {
            margin: 30px auto;
            font-size: 0.8em;
            color: #7d7c7c;
        }

        .ulClass {
            list-style: none;
        }

        .liClass {
            margin-top: 10px;
        }

        .liClassCheck::before {
            content: "";
            background-image: url("{{ URL::to('public/website/photos/check.png') }}");
            background-position: center;
            background-size: cover;
            opacity: 0.5;
            display: inline-block;
            width: 10px;
            height: 10px;
            margin-right: 10px;
        }

        .liClassUncheck::before {
            content: "";
            background-image: url("{{ URL::to('public/website/photos/uncheck.png') }}");
            background-position: center;
            background-size: cover;
            opacity: 0.5;
            display: inline-block;
            width: 10px;
            height: 10px;
            margin-right: 10px;
        }

        .button {
            margin: auto;
        }

        .buttonBT {
            height: 40px;
            width: 250px;
            font-size: 0.7em;
            font-weight: bold;
            letter-spacing: 0.5px;
            color: #7d7c7c;
            border: 2px solid var(--dark-gray);
            border-radius: 50px;

            background: transparent;
        }

        .buttonBT:hover {
            color: var(--white-smoke);
            transition: 0.5s;
            border: none;

            background: var(--bright-orange);
        }

        /* Responsiveness:Start */
        @media screen and (max-width: 970px) {
            .contentSub {
                display: flex;
                align-items: center;
                flex-direction: column;
                margin: 50px auto;
            }

            .standard,
            .business {
                margin-top: 25px;
            }
        }
    </style>
    <style>
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 94%;
        }

        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            text-align: end;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
@endsection

@section('content')
    <section class="padding-bottom">
        <style>
            pre {
                background: #f96972;
                border-radius: 10px;
                border: 7px solid #fff;
                color: #fff;
                height: 338px;
                overflow: hidden;
                padding: 25px;
                /* text-shadow: 0 0 1px #003a65; */
                transform: rotateY(20deg) rotateZ(-2deg);
                white-space: pre;
                width: 400px;
                font-size: 17px;
                font-weight: 500;
            }

            .cursor {
                display: inline-block;
                background: #fff;
                height: 10px;
                width: 8px;
            }
        </style>
        <!-- partial:index.partial.html -->
        <pre></pre>
        <!-- partial -->
        <script>
            const view = document.getElementsByTagName("pre");

            // ES6 arrow function expression and also making use of ES6 template strings
            var log = (msg) => view[0].insertAdjacentHTML("beforeend", `${msg}`);

            var letterCount = 0;
            var sentenceCount = 0;

            var type = function(message) {
                sentenceCount++;
                setTimeout(function() {
                    message.forEach(function(character) {
                        letterCount++;
                        setTimeout(function() {
                            log(character);
                        }, 65 * letterCount);
                    });
                }, 1000 * sentenceCount);
            };

            type("\n".split(""));
            type("Lunching offers....\n\n".split(""));
            type("Enjoy a 30-days free trial that\n".split(""));
            type("includes a free Sign up account\n".split(""));
            type("and get all access,\n\n".split(""));

            type("Unlimited chat with anyone,\n".split(""));
            type("Unlimited call with anyone!!\n\n".split(""));
            type("Enjoy Your Day.. 😊.\n".split(""));
            // type("HOW ABOUT A NICE GAME OF CHESS?".split(""));
        </script>
        @php
            $x = false;
        @endphp
        @if ($x)
            <div class="contentSub row g-0 justify-content-center">
                <div class="basicSub boxSub col-md-4 mb-5">
                    <h2 class="titleSub">Free</h2>
                    <div class="viewSub">
                        <div class="iconSub">
                            <img src="https://i.postimg.cc/2jcfMcf4/hot-air-balloon.png" alt="hot-air-balloon" />
                        </div>
                        <div class="costSub">
                            <p class="amountSub">$00</p>
                            <p class="detailSub">7 Days</p>
                        </div>
                    </div>
                    {{-- <div class="descriptionSub">
                    <ul class="ulClass">
                        <li class="liClass liClassUncheck">Lorem, ipsum dolor.</li>
                        <li class="liClass liClassUncheck">Harum, beatae laudantium.</li>
                        <li class="liClass liClassUncheck">Odit, fugit saepe.</li>
                        <li class="liClass liClassUncheck">Harum, veniam suscipit!</li>
                        <li class="liClass liClassUncheck">A, aut veritatis!</li>
                        <li class="liClass liClassUncheck">Aliquid, quasi repellat!</li>
                    </ul>
                </div> --}}
                    <div class="button">
                        @if (Session::has('sessdata'))
                            <button id="myBtn3" class="buttonBT">CONTINUE</button>
                        @else
                            <button onclick="window.location='{{ url('login') }}';" class="buttonBT">CONTINUE</button>
                        @endif
                    </div>
                </div>

                <div class="standard boxSub col-md-4 mb-5">
                    <h2 class="titleSub">Monthly</h2>
                    <div class="viewSub">
                        <div class="iconSub">
                            <img src="https://i.postimg.cc/DzrTN72Z/airplane.png" alt="airplane" />
                        </div>
                        <div class="costSub">
                            <p class="amountSub">${{ $months?->pricing }}</p>
                            <p class="detailSub">per monthly</p>
                        </div>
                    </div>
                    {{-- <div class="descriptionSub">
                    <ul class="ulClass">
                        <li class="liClass liClassCheck">Lorem, ipsum dolor.</li>
                        <li class="liClass liClassCheck">Harum, beatae laudantium.</li>
                        <li class="liClass liClassCheck">Odit, fugit saepe.</li>
                        <li class="liClass liClassCheck">Harum, veniam suscipit!</li>
                        <li class="liClass liClassCheck">A, aut veritatis!</li>
                        <li class="liClass liClassCheck">Aliquid, quasi repellat!</li>
                    </ul>
                </div> --}}
                    <div class="button">
                        @if (Session::has('sessdata'))
                            <button id="myBtn1" class="buttonBT">CONTINUE</button>
                        @else
                            <button onclick="window.location='{{ url('login') }}';" class="buttonBT">CONTINUE</button>
                        @endif
                    </div>
                </div>

                <div class="business boxSub col-md-4 mb-5">
                    <h2 class="titleSub">3 Months</h2>
                    <div class="viewSub">
                        <div class="iconSub">
                            <img src="https://i.postimg.cc/wvFd6FRY/startup.png" alt="startup" />
                        </div>
                        <div class="costSub">
                            <p class="amountSub">${{ $years?->pricing }}</p>
                            <p class="detailSub">per 3 Months</p>
                        </div>
                    </div>
                    {{-- <div class="descriptionSub">
                    <ul class="ulClass">
                        <li class="liClass liClassCheck">Lorem, ipsum dolor.</li>
                        <li class="liClass liClassCheck">Harum, beatae laudantium.</li>
                        <li class="liClass liClassCheck">Odit, fugit saepe.</li>
                        <li class="liClass liClassCheck">Harum, veniam suscipit!</li>
                        <li class="liClass liClassCheck">A, aut veritatis!</li>
                        <li class="liClass liClassCheck">Aliquid, quasi repellat!</li>
                    </ul>
                </div> --}}
                    <div class="button">
                        @if (Session::has('sessdata'))
                            <button id="myBtn2" class="buttonBT">CONTINUE</button>
                        @else
                            <button onclick="window.location='{{ url('login') }}';" class="buttonBT">CONTINUE</button>
                        @endif
                    </div>
                </div>


                <div class="basicSub boxSub col-md-4" style="height: 252px">
                    <div class="descriptionSub">
                        <ul class="ulClass">
                            <li class="liClass liClassCheck">Unlimited chat with anyone.</li>
                            <li class="liClass liClassCheck">Unlimited to call with anyone.</li>
                            <li class="liClass liClassCheck">Unlimited access to all photos in any profile .</li>
                            <li class="liClass liClassCheck">Ability to filter info.</li>
                            <li class="liClass liClassCheck">Ability to filter info. only 5 for free</li>
                            {{-- <li class="liClass liClassCheck">Aliquid, quasi repellat!</li> --}}
                        </ul>
                    </div>
                </div>

                <div id="myModal1" class="modal">
                    <div class="row">
                        <div class="col-md-4 m-auto">
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <img src="{{ $months?->qr_image }}" />
                                <form action="{{ url('pricing-subscription-upload') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="pricing_table_id" value="{{ $months?->id }}" />
                                    <div class="form-group">
                                        <label>Please Upload Your Receipt</label>
                                        <input required type="file" name="image" class="form-control" />
                                    </div>
                                    <div class="form-group mt-3 text-center">
                                        <button class="default-btn reverse" type="submit"><span>Submit</span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="myModal2" class="modal">
                    <div class="row">
                        <div class="col-md-4 m-auto">
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <img src="{{ $years?->qr_image }}" />
                                <form action="{{ url('pricing-subscription-upload') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="pricing_table_id" value="{{ $years?->id }}" />
                                    <div class="form-group">
                                        <label>Please Upload Your Receipt</label>
                                        <input required type="file" name="image" class="form-control" />
                                    </div>
                                    <div class="form-group mt-3 text-center">
                                        <button class="default-btn reverse" type="submit"><span>Submit</span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </section>
@endsection

@section('script')
    <script>
        var modal1 = document.getElementById("myModal1");
        var modal2 = document.getElementById("myModal2");

        var btn1 = document.getElementById("myBtn1");
        var btn2 = document.getElementById("myBtn2");

        var span1 = document.getElementsByClassName("close")[0];
        var span2 = document.getElementsByClassName("close")[1];

        btn1.onclick = function() {
            modal1.style.display = "block";
        }

        span1.onclick = function() {
            modal1.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == modal1) {
                modal1.style.display = "none";
            }
        }


        btn2.onclick = function() {
            modal2.style.display = "block";
        }

        span2.onclick = function() {
            modal2.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == modal2) {
                modal2.style.display = "none";
            }
        }
    </script>
@endsection
