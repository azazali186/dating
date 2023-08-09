@extends('website.layouts.app')
@section('content')
@section('title', 'pricing-table')
<style>
    /* @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap"); */
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
        height: 586px;
        width: 300px;
        border-radius: 20px;
        margin-left: 10px;
        margin-right: 10px;

        background: var(--white);
        box-shadow: 0 1rem 2rem rgba(0, 0, 0, 20%);
    }

    .titleSub {
        width: 100%;
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
        background: var(--greenish-blue);
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

    .liClass::before {
        content: "";
        background-image: url("https://i.postimg.cc/ht7g996V/check.png");
        background-position: center;
        background-size: cover;
        opacity: 0.5;

        display: inline-block;
        width: 10px;
        height: 10px;
        margin-right: 10px;
    }

    .button {
        margin: 0 auto 30px;
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

    /* Responsiveness:End */
</style>
<section class="padding-bottom">
    <div class="contentSub">
        <div class="basicSub boxSub">
            <h2 class="titleSub">Free</h2>
            <div class="viewSub">
                <div class="iconSub">
                    <img src="https://i.postimg.cc/2jcfMcf4/hot-air-balloon.png" alt="hot-air-balloon" />
                </div>
                <div class="costSub">
                    <p class="amountSub">$00</p>
                    <p class="detailSub">per student per month</p>
                </div>
            </div>
            <div class="descriptionSub">
                <ul class="ulClass">
                    <li class="liClass">Lorem, ipsum dolor.</li>
                    <li class="liClass">Harum, beatae laudantium.</li>
                    <li class="liClass">Odit, fugit saepe.</li>
                    <li class="liClass">Harum, veniam suscipit!</li>
                    <li class="liClass">A, aut veritatis!</li>
                    <li class="liClass">Aliquid, quasi repellat!</li>
                </ul>
            </div>
            <div class="button">
                <button class="buttonBT" type="submit">CONTINUE</button>
            </div>
        </div>

        <div class="standard boxSub">
            <h2 class="titleSub">Monthly</h2>
            <div class="viewSub">
                <div class="iconSub">
                    <img src="https://i.postimg.cc/DzrTN72Z/airplane.png" alt="airplane" />
                </div>
                <div class="costSub">
                    <p class="amountSub">$99</p>
                    <p class="detailSub">per student per year</p>
                </div>
            </div>
            <div class="descriptionSub">
                <ul class="ulClass">
                    <li class="liClass">Lorem, ipsum dolor.</li>
                    <li class="liClass">Harum, beatae laudantium.</li>
                    <li class="liClass">Odit, fugit saepe.</li>
                    <li class="liClass">Harum, veniam suscipit!</li>
                    <li class="liClass">A, aut veritatis!</li>
                    <li class="liClass">Aliquid, quasi repellat!</li>
                </ul>
            </div>
            <div class="button">
                <button class="buttonBT" type="submit">CONTINUE</button>
            </div>
        </div>

        <div class="business boxSub">
            <h2 class="titleSub">Yearly</h2>
            <div class="viewSub">
                <div class="iconSub">
                    <img src="https://i.postimg.cc/wvFd6FRY/startup.png" alt="startup" />
                </div>
                <div class="costSub">
                    <p class="amountSub">$199</p>
                    <p class="detailSub">per team per year</p>
                </div>
            </div>
            <div class="descriptionSub">
                <ul class="ulClass">
                    <li class="liClass">Lorem, ipsum dolor.</li>
                    <li class="liClass">Harum, beatae laudantium.</li>
                    <li class="liClass">Odit, fugit saepe.</li>
                    <li class="liClass">Harum, veniam suscipit!</li>
                    <li class="liClass">A, aut veritatis!</li>
                    <li class="liClass">Aliquid, quasi repellat!</li>
                </ul>
            </div>
            <div class="button">
                <button class="buttonBT" type="submit">CONTINUE</button>
            </div>
        </div>
    </div>
</section>
@endsection
@section('script')
@endsection
