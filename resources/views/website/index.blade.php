@extends('website.layouts.app')
@section('content')
@section('title', 'xmakelove')
<!-- ================> Banner section start here <================== -->
<style>
    #formobile {
        display: none;
    }

    #fordesktop {
        display: flex;
    }

    @media only screen and (max-width: 600px) {
        #formobile {
            display: block;
        }

        #fordesktop {
            display: none;
        }
    }
</style>
@if (!Session::has('sessdata'))
    <div class="banner banner--style3 padding-top bg_img"
        style="background-image: url({{ URL::to('public/website/assets/images/banner/bg-3.jpg') }});">
        <div class="container">
            <div class="row g-0 justify-content-center justify-content-xl-between">
                {{--  --}}
                <div class="col-lg-6 col-12 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="banner__thumb text-xl-end">
                        <img src="{{ URL::to('public/website/assets/images/banner/03.png') }}" alt="banner">
                        <div class="banner__thumb--shape">
                            <div class="shapeimg">
                                <img src="{{ URL::to('public/website/assets/images/banner/shape/home3/01.png') }}"
                                    alt="dating thumb">
                            </div>
                        </div>
                        <div class="banner__thumb--title">
                            <h4>Are You Waiting For Dating?</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-12 wow fadeInLeft" data-wow-duration="1.5s">
                    <div class="banner__content">
                        <div class="banner__title">
                            <h2>We Have More Than <span>2.000.000</span> Join Members</h2>
                            {{-- <p>Still looking for your significant other? Ollya is the place for you! Join now to meet single
                            men and women worldwide.</p> --}}
                            {{-- @if (!Session::has('sessdata')) --}}
                            <div class="row" style=" text-align: center; ">
                                <div class="col-12 mb-2">
                                    <a href="{{ url('register') }}" class="default-btn style-2"
                                        style="width: 100%; background: #cb682b;">
                                        <span>Create Acount</span>
                                    </a>
                                </div>
                                <div class="col-12 mb-2">
                                    <a href="{{ url('login') }}" class="default-btn style-2"
                                        style="width: 100%; background: #2ba6cb;">
                                        <span>Login</span>
                                    </a>
                                </div>
                                <div class="col-12 mb-2">
                                    <a href="{{ url('seller') }}" class="default-btn style-2"
                                        style="width: 100%; background: #cb2ba8;">
                                        <span>Seller Acount</span>
                                    </a>
                                </div>
                            </div>
                            {{-- @endif --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
<!-- ================> Banner section end here <================== -->
<!-- ================> About section start here <================== -->

{{-- <div class="about about--style3 padding-top pt-xl-0">
        <div class="container">
            <div class="section__wrapper wow fadeInUp" data-wow-duration="1.5s">
                <form action="#">
                    <div class="banner__list">
                        <div class="row align-items-center row-cols-xl-5 row-cols-lg-3 row-cols-sm-2 row-cols-1">
                            <div class="col-6">
                                <label>I am a</label>
                                <div class="banner__inputlist">
                                    <select>
                                        <option>Select Gender</option>
                                        <option value="male" selected>Male</option>
                                        <option value="female">Female</option>
                                        <option value="others">Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <label>Looking for</label>
                                <div class="banner__inputlist">
                                    <select>
                                        <option>Select Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female" selected>Female</option>
                                        <option value="others">Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <label>Age</label>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="banner__inputlist">
                                            <select>
                                                <option value="18" selected>18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                                <option value="32">32</option>
                                                <option value="33">33</option>
                                                <option value="34">34</option>
                                                <option value="35">35</option>
                                                <option value="36">36</option>
                                                <option value="37">37</option>
                                                <option value="38">38</option>
                                                <option value="39">39</option>
                                                <option value="40">40</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="banner__inputlist">
                                            <select>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25" selected>25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                                <option value="32">32</option>
                                                <option value="33">33</option>
                                                <option value="34">34</option>
                                                <option value="35">35</option>
                                                <option value="36">36</option>
                                                <option value="37">37</option>
                                                <option value="38">38</option>
                                                <option value="39">39</option>
                                                <option value="40">40</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <label>Country</label>
                                <div class="banner__inputlist">
                                    <select id="country" name="country">
                                        <option value="Afganistan">Afghanistan</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="American Samoa">American Samoa</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Anguilla">Anguilla</option>
                                        <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Aruba">Aruba</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="Bahamas">Bahamas</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh" selected>Bangladesh</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Belize">Belize</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Bermuda">Bermuda</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Bolivia">Bolivia</option>
                                        <option value="Bonaire">Bonaire</option>
                                        <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                        <option value="Brunei">Brunei</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Burkina Faso">Burkina Faso</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Canary Islands">Canary Islands</option>
                                        <option value="Cape Verde">Cape Verde</option>
                                        <option value="Cayman Islands">Cayman Islands</option>
                                        <option value="Central African Republic">Central African Republic</option>
                                        <option value="Chad">Chad</option>
                                        <option value="Channel Islands">Channel Islands</option>
                                        <option value="Chile">Chile</option>
                                        <option value="China">China</option>
                                        <option value="Christmas Island">Christmas Island</option>
                                        <option value="Cocos Island">Cocos Island</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Comoros">Comoros</option>
                                        <option value="Congo">Congo</option>
                                        <option value="Cook Islands">Cook Islands</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Cote DIvoire">Cote DIvoire</option>
                                        <option value="Croatia">Croatia</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="Curaco">Curacao</option>
                                        <option value="Cyprus">Cyprus</option>
                                        <option value="Czech Republic">Czech Republic</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominica">Dominica</option>
                                        <option value="Dominican Republic">Dominican Republic</option>
                                        <option value="East Timor">East Timor</option>
                                        <option value="Ecuador">Ecuador</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="El Salvador">El Salvador</option>
                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                        <option value="Eritrea">Eritrea</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="Falkland Islands">Falkland Islands</option>
                                        <option value="Faroe Islands">Faroe Islands</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="French Guiana">French Guiana</option>
                                        <option value="French Polynesia">French Polynesia</option>
                                        <option value="French Southern Ter">French Southern Ter</option>
                                        <option value="Gabon">Gabon</option>
                                        <option value="Gambia">Gambia</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Gibraltar">Gibraltar</option>
                                        <option value="Great Britain">Great Britain</option>
                                        <option value="Greece">Greece</option>
                                        <option value="Greenland">Greenland</option>
                                        <option value="Grenada">Grenada</option>
                                        <option value="Guadeloupe">Guadeloupe</option>
                                        <option value="Guam">Guam</option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Guinea">Guinea</option>
                                        <option value="Guyana">Guyana</option>
                                        <option value="Haiti">Haiti</option>
                                        <option value="Hawaii">Hawaii</option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hong Kong">Hong Kong</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="India">India</option>
                                        <option value="Iran">Iran</option>
                                        <option value="Iraq">Iraq</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="Isle of Man">Isle of Man</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Jordan">Jordan</option>
                                        <option value="Kazakhstan">Kazakhstan</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Kiribati">Kiribati</option>
                                        <option value="Korea North">Korea North</option>
                                        <option value="Korea Sout">Korea South</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                        <option value="Laos">Laos</option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Lebanon">Lebanon</option>
                                        <option value="Lesotho">Lesotho</option>
                                        <option value="Liberia">Liberia</option>
                                        <option value="Libya">Libya</option>
                                        <option value="Liechtenstein">Liechtenstein</option>
                                        <option value="Lithuania">Lithuania</option>
                                        <option value="Luxembourg">Luxembourg</option>
                                        <option value="Macau">Macau</option>
                                        <option value="Macedonia">Macedonia</option>
                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="Mali">Mali</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Marshall Islands">Marshall Islands</option>
                                        <option value="Martinique">Martinique</option>
                                        <option value="Mauritania">Mauritania</option>
                                        <option value="Mauritius">Mauritius</option>
                                        <option value="Mayotte">Mayotte</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Midway Islands">Midway Islands</option>
                                        <option value="Moldova">Moldova</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montserrat">Montserrat</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Nambia">Nambia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherland Antilles">Netherland Antilles</option>
                                        <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                        <option value="Nevis">Nevis</option>
                                        <option value="New Caledonia">New Caledonia</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Niue">Niue</option>
                                        <option value="Norfolk Island">Norfolk Island</option>
                                        <option value="Norway">Norway</option>
                                        <option value="Oman">Oman</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Palau Island">Palau Island</option>
                                        <option value="Palestine">Palestine</option>
                                        <option value="Panama">Panama</option>
                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Phillipines">Philippines</option>
                                        <option value="Pitcairn Island">Pitcairn Island</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Puerto Rico">Puerto Rico</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Republic of Montenegro">Republic of Montenegro</option>
                                        <option value="Republic of Serbia">Republic of Serbia</option>
                                        <option value="Reunion">Reunion</option>
                                        <option value="Romania">Romania</option>
                                        <option value="Russia">Russia</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="St Barthelemy">St Barthelemy</option>
                                        <option value="St Eustatius">St Eustatius</option>
                                        <option value="St Helena">St Helena</option>
                                        <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                        <option value="St Lucia">St Lucia</option>
                                        <option value="St Maarten">St Maarten</option>
                                        <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                        <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                        <option value="Saipan">Saipan</option>
                                        <option value="Samoa">Samoa</option>
                                        <option value="Samoa American">Samoa American</option>
                                        <option value="San Marino">San Marino</option>
                                        <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Seychelles">Seychelles</option>
                                        <option value="Sierra Leone">Sierra Leone</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Slovakia">Slovakia</option>
                                        <option value="Slovenia">Slovenia</option>
                                        <option value="Solomon Islands">Solomon Islands</option>
                                        <option value="Somalia">Somalia</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="Spain">Spain</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="Sudan">Sudan</option>
                                        <option value="Suriname">Suriname</option>
                                        <option value="Swaziland">Swaziland</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Syria">Syria</option>
                                        <option value="Tahiti">Tahiti</option>
                                        <option value="Taiwan">Taiwan</option>
                                        <option value="Tajikistan">Tajikistan</option>
                                        <option value="Tanzania">Tanzania</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Tokelau">Tokelau</option>
                                        <option value="Tonga">Tonga</option>
                                        <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Turkmenistan">Turkmenistan</option>
                                        <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                        <option value="Tuvalu">Tuvalu</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Erimates">United Arab Emirates</option>
                                        <option value="United States of America">United States of America</option>
                                        <option value="Uraguay">Uruguay</option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                        <option value="Vanuatu">Vanuatu</option>
                                        <option value="Vatican City State">Vatican City State</option>
                                        <option value="Venezuela">Venezuela</option>
                                        <option value="Vietnam">Vietnam</option>
                                        <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                        <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                        <option value="Wake Island">Wake Island</option>
                                        <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Zaire">Zaire</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabwe">Zimbabwe</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <button type="submit" class="default-btn reverse d-block"><span>Find Your
                                        Partner</span></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}
@if (Session::has('sessdata'))
    <!-- ================> About section end here <================== -->
    <!-- ================> Member section start here <================== -->
    <div class="member member--style2 padding-bottom">
        <div class="container">
            <div class="section__header style-2 text-center wow fadeInUp" data-wow-duration="1.5s">
                <h2>Most Popular Members</h2>
                {{-- <p>Learn from them and try to make it to this board. This will for sure boost you visibility and
                    increase
                    your chances to find you loved one.</p> --}}
            </div>
            <div class="section__wrapper wow fadeInUp" data-wow-duration="1.5s">
                <ul class="nav nav-tabs member__tab" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="newest-tab" data-bs-toggle="tab" data-bs-target="#newest"
                            type="button" role="tab" aria-controls="newest" aria-selected="true">Newest
                            Members</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="activemember-tab" data-bs-toggle="tab"
                            data-bs-target="#activemember" type="button" role="tab" aria-controls="activemember"
                            aria-selected="false">Active
                            Members</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="popularmember-tab" data-bs-toggle="tab"
                            data-bs-target="#popularmember" type="button" role="tab" aria-controls="popularmember"
                            aria-selected="false">Popular
                            Members</button>
                    </li>
                </ul>

                <div class="tab-content mx-12-none" id="myTabContent">
                    <div class="tab-pane fade show active" id="newest" role="tabpanel" aria-labelledby="newest-tab">
                        <div class="row g-0 justify-content-center" id="formobile">
                            @foreach ($seller as $item)
                                <div class="member__inner" style="height: 90px;">
                                    <div class="member__content">
                                        <div style="width: 100%">
                                            <div style="width: 20%; float: left;">
                                                <img src="{{ $item->image }}" alt="member-img" style="width: 70px;">
                                            </div>

                                            @if (Session::has('sessdata') && Session::get('sessdata')['role'] == 'user')
                                                @if (getSubscription() != 'Free')
                                                    <div style="width: 60%; float: left;">
                                                        <a href="{{ url('member-single') }}/{{ $item->id }}">
                                                            <h5>{{ $item->name }}</h5>
                                                        </a>
                                                        {{-- <p>{{ $item->mobile }}</p> --}}

                                                        <p>Age - {{ ageCalc($item->birthday) }} / Price -
                                                            {{ $item->price }}$</p>
                                                    </div>
                                                    <div style="width: 20%; float: left;">
                                                        <a href="tel:{{ $item->mobile }}">
                                                            <img style=" width: 100%; margin-top: 20px;"
                                                                src="{{ URL::to('public/website/assets/images/logo/callnow.png') }}"
                                                                alt="call-now">
                                                        </a>
                                                    </div>
                                                @else
                                                    <div style="width: 70%; float: left;">
                                                        <a href="{{ url('pricing-table') }}">
                                                            <h5>{{ $item->name }}</h5>
                                                        </a>
                                                        <p>9125XXXXXXX</p>
                                                    </div>
                                                    <div style="width: 20%; float: left;">
                                                        <a href="{{ url('pricing-table') }}">
                                                            <img style=" width: 100%; margin-top: 20px;"
                                                                src="{{ URL::to('public/website/assets/images/logo/callnow.png') }}"
                                                                alt="call-now">
                                                        </a>
                                                    </div>
                                                @endif
                                            @else
                                                <div style="width: 80%; float: left;">
                                                    <a href="{{ url('login') }}">
                                                        <h5>{{ $item->name }}</h5>
                                                    </a>
                                                    <p>9125XXXXXXX</p>
                                                </div>
                                                <div style="width: 20%; float: left;">
                                                    <a href="{{ url('login') }}">
                                                        <img style=" width: 100%; margin-top: 20px;"
                                                            src="{{ URL::to('public/website/assets/images/logo/callnow.png') }}"
                                                            alt="call-now">
                                                    </a>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="row g-0 justify-content-center" id="fordesktop">
                            @foreach ($seller as $item)
                                <div class="member__item">
                                    <div class="member__inner" style="padding: 5px;">
                                        <div class="member__thumb">
                                            {{-- <img src="{{ URL::to('public/website/assets/images/member/home2/01.jpg') }}" --}}
                                            <img src="{{ $item->image }}" alt="member-img">
                                            <span class="member__activity"></span>
                                        </div>
                                        <div class="member__content">
                                            @if (Session::has('sessdata') && Session::get('sessdata')['role'] == 'user')
                                                @if (getSubscription() != 'Free')
                                                    <a href="{{ url('member-single') }}/{{ $item->id }}">
                                                        <h5>{{ $item->name }}</h5>
                                                    </a>
                                                    <p>{{ $item->mobile }}</p>
                                                @else
                                                    <a href="{{ url('pricing-table') }}">
                                                        <h5>{{ $item->name }}</h5>
                                                    </a>
                                                    <p>9125XXXXXXX</p>
                                                @endif
                                            @else
                                                <a href="{{ url('login') }}">
                                                    <h5>{{ $item->name }}</h5>
                                                </a>
                                                <p>9125XXXXXXX</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            {{-- <div class="member__item">
                                <div class="member__inner">
                                    <div class="member__thumb">
                                        <img src="{{ URL::to('public/website/assets/images/member/home2/02.jpg') }}" alt="member-img">
                                        <span class="member__activity member__activity--ofline"></span>
                                    </div>
                                    <div class="member__content">
                                        <a href="/member-single">
                                            <h5>Arika Q Smith</h5>
                                        </a>
                                        <p>registered 4 months, 1 week ago</p>
                                    </div>
                                </div>
                            </div>
                            <div class="member__item">
                                <div class="member__inner">
                                    <div class="member__thumb">
                                        <img src="{{ URL::to('public/website/assets/images/member/home2/03.jpg') }}" alt="member-img">
                                        <span class="member__activity"></span>
                                    </div>
                                    <div class="member__content">
                                        <a href="/member-single">
                                            <h5>William R Show</h5>
                                        </a>
                                        <p>registered 4 months, 1 week ago</p>
                                    </div>
                                </div>
                            </div>
                            <div class="member__item">
                                <div class="member__inner">
                                    <div class="member__thumb">
                                        <img src="{{ URL::to('public/website/assets/images/member/home2/04.jpg') }}" alt="member-img">
                                        <span class="member__activity member__activity--ofline"></span>
                                    </div>
                                    <div class="member__content">
                                        <a href="/member-single">
                                            <h5>Karolin Kuhn</h5>
                                        </a>
                                        <p>registered 4 months, 1 week ago</p>
                                    </div>
                                </div>
                            </div>
                            <div class="member__item">
                                <div class="member__inner">
                                    <div class="member__thumb">
                                        <img src="{{ URL::to('public/website/assets/images/member/home2/05.jpg') }}" alt="member-img">
                                        <span class="member__activity"></span>
                                    </div>
                                    <div class="member__content">
                                        <a href="/member-single">
                                            <h5>Tobias Wagner</h5>
                                        </a>
                                        <p>registered 4 months, 1 week ago</p>
                                    </div>
                                </div>
                            </div>
                            <div class="member__item">
                                <div class="member__inner">
                                    <div class="member__thumb">
                                        <img src="{{ URL::to('public/website/assets/images/member/home2/06.jpg') }}" alt="member-img">
                                        <span class="member__activity"></span>
                                    </div>
                                    <div class="member__content">
                                        <a href="/member-single">
                                            <h5>Amanda Rodrigues</h5>
                                        </a>
                                        <p>registered 4 months, 1 week ago</p>
                                    </div>
                                </div>
                            </div>
                            <div class="member__item">
                                <div class="member__inner">
                                    <div class="member__thumb">
                                        <img src="{{ URL::to('public/website/assets/images/member/home2/07.jpg') }}" alt="member-img">
                                        <span class="member__activity member__activity--ofline"></span>
                                    </div>
                                    <div class="member__content">
                                        <a href="/member-single">
                                            <h5>Barros Pereira</h5>
                                        </a>
                                        <p>registered 4 months, 1 week ago</p>
                                    </div>
                                </div>
                            </div>
                            <div class="member__item">
                                <div class="member__inner">
                                    <div class="member__thumb">
                                        <img src="{{ URL::to('public/website/assets/images/member/home2/08.jpg') }}" alt="member-img">
                                        <span class="member__activity"></span>
                                    </div>
                                    <div class="member__content">
                                        <a href="/member-single">
                                            <h5>Emily Fernandes</h5>
                                        </a>
                                        <p>registered 4 months, 1 week ago</p>
                                    </div>
                                </div>
                            </div>
                            <div class="member__item">
                                <div class="member__inner">
                                    <div class="member__thumb">
                                        <img src="{{ URL::to('public/website/assets/images/member/home2/09.jpg') }}" alt="member-img">
                                        <span class="member__activity member__activity--ofline"></span>
                                    </div>
                                    <div class="member__content">
                                        <a href="/member-single">
                                            <h5>Alves Fernandes</h5>
                                        </a>
                                        <p>registered 4 months, 1 week ago</p>
                                    </div>
                                </div>
                            </div>
                            <div class="member__item">
                                <div class="member__inner">
                                    <div class="member__thumb">
                                        <img src="{{ URL::to('public/website/assets/images/member/home2/02.jpg') }}" alt="member-img">
                                        <span class="member__activity"></span>
                                    </div>
                                    <div class="member__content">
                                        <a href="/member-single">
                                            <h5>Sousa Carvalho</h5>
                                        </a>
                                        <p>registered 4 months, 1 week ago</p>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    {{-- <div class="tab-pane fade" id="activemember" role="tabpanel" aria-labelledby="activemember-tab">
                        <div class="row g-0 justify-content-center">
                            <div class="member__item">
                                <div class="member__inner">
                                    <div class="member__thumb">
                                        <img src="{{ URL::to('public/website/assets/images/member/home2/01.jpg') }}" alt="member-img">
                                        <span class="member__activity"></span>
                                    </div>
                                    <div class="member__content">
                                        <a href="/member-single">
                                            <h5>Smith Jhonson</h5>
                                        </a>
                                        <p>registered 4 months, 1 week ago</p>
                                    </div>
                                </div>
                            </div>
                            <div class="member__item">
                                <div class="member__inner">
                                    <div class="member__thumb">
                                        <img src="{{ URL::to('public/website/assets/images/member/home2/06.jpg') }}" alt="member-img">
                                        <span class="member__activity"></span>
                                    </div>
                                    <div class="member__content">
                                        <a href="/member-single">
                                            <h5>Amanda Rodrigues</h5>
                                        </a>
                                        <p>registered 4 months, 1 week ago</p>
                                    </div>
                                </div>
                            </div>
                            <div class="member__item">
                                <div class="member__inner">
                                    <div class="member__thumb">
                                        <img src="{{ URL::to('public/website/assets/images/member/home2/07.jpg') }}" alt="member-img">
                                        <span class="member__activity member__activity--ofline"></span>
                                    </div>
                                    <div class="member__content">
                                        <a href="/member-single">
                                            <h5>Barros Pereira</h5>
                                        </a>
                                        <p>registered 4 months, 1 week ago</p>
                                    </div>
                                </div>
                            </div>
                            <div class="member__item">
                                <div class="member__inner">
                                    <div class="member__thumb">
                                        <img src="{{ URL::to('public/website/assets/images/member/home2/08.jpg') }}" alt="member-img">
                                        <span class="member__activity"></span>
                                    </div>
                                    <div class="member__content">
                                        <a href="/member-single">
                                            <h5>Emily Fernandes</h5>
                                        </a>
                                        <p>registered 4 months, 1 week ago</p>
                                    </div>
                                </div>
                            </div>
                            <div class="member__item">
                                <div class="member__inner">
                                    <div class="member__thumb">
                                        <img src="{{ URL::to('public/website/assets/images/member/home2/09.jpg') }}" alt="member-img">
                                        <span class="member__activity member__activity--ofline"></span>
                                    </div>
                                    <div class="member__content">
                                        <a href="/member-single">
                                            <h5>Alves Fernandes</h5>
                                        </a>
                                        <p>registered 4 months, 1 week ago</p>
                                    </div>
                                </div>
                            </div>

                            <div class="member__item">
                                <div class="member__inner">
                                    <div class="member__thumb">
                                        <img src="{{ URL::to('public/website/assets/images/member/home2/02.jpg') }}" alt="member-img">
                                        <span class="member__activity member__activity--ofline"></span>
                                    </div>
                                    <div class="member__content">
                                        <a href="/member-single">
                                            <h5>Arika Q Smith</h5>
                                        </a>
                                        <p>registered 4 months, 1 week ago</p>
                                    </div>
                                </div>
                            </div>
                            <div class="member__item">
                                <div class="member__inner">
                                    <div class="member__thumb">
                                        <img src="{{ URL::to('public/website/assets/images/member/home2/03.jpg') }}" alt="member-img">
                                        <span class="member__activity"></span>
                                    </div>
                                    <div class="member__content">
                                        <a href="/member-single">
                                            <h5>William R Show</h5>
                                        </a>
                                        <p>registered 4 months, 1 week ago</p>
                                    </div>
                                </div>
                            </div>
                            <div class="member__item">
                                <div class="member__inner">
                                    <div class="member__thumb">
                                        <img src="{{ URL::to('public/website/assets/images/member/home2/04.jpg') }}" alt="member-img">
                                        <span class="member__activity member__activity--ofline"></span>
                                    </div>
                                    <div class="member__content">
                                        <a href="/member-single">
                                            <h5>Karolin Kuhn</h5>
                                        </a>
                                        <p>registered 4 months, 1 week ago</p>
                                    </div>
                                </div>
                            </div>
                            <div class="member__item">
                                <div class="member__inner">
                                    <div class="member__thumb">
                                        <img src="{{ URL::to('public/website/assets/images/member/home2/05.jpg') }}" alt="member-img">
                                        <span class="member__activity"></span>
                                    </div>
                                    <div class="member__content">
                                        <a href="/member-single">
                                            <h5>Tobias Wagner</h5>
                                        </a>
                                        <p>registered 4 months, 1 week ago</p>
                                    </div>
                                </div>
                            </div>
                            <div class="member__item">
                                <div class="member__inner">
                                    <div class="member__thumb">
                                        <img src="{{ URL::to('public/website/assets/images/member/home2/02.jpg') }}" alt="member-img">
                                        <span class="member__activity"></span>
                                    </div>
                                    <div class="member__content">
                                        <a href="/member-single">
                                            <h5>Sousa Carvalho</h5>
                                        </a>
                                        <p>registered 4 months, 1 week ago</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="popularmember" role="tabpanel" aria-labelledby="popularmember-tab">
                        <div class="row g-0 justify-content-center">
                            <div class="member__item">
                                <div class="member__inner">
                                    <div class="member__thumb">
                                        <img src="{{ URL::to('public/website/assets/images/member/home2/04.jpg') }}" alt="member-img">
                                        <span class="member__activity member__activity--ofline"></span>
                                    </div>
                                    <div class="member__content">
                                        <a href="/member-single">
                                            <h5>Karolin Kuhn</h5>
                                        </a>
                                        <p>registered 4 months, 1 week ago</p>
                                    </div>
                                </div>
                            </div>
                            <div class="member__item">
                                <div class="member__inner">
                                    <div class="member__thumb">
                                        <img src="{{ URL::to('public/website/assets/images/member/home2/05.jpg') }}" alt="member-img">
                                        <span class="member__activity"></span>
                                    </div>
                                    <div class="member__content">
                                        <a href="/member-single">
                                            <h5>Tobias Wagner</h5>
                                        </a>
                                        <p>registered 4 months, 1 week ago</p>
                                    </div>
                                </div>
                            </div>
                            <div class="member__item">
                                <div class="member__inner">
                                    <div class="member__thumb">
                                        <img src="{{ URL::to('public/website/assets/images/member/home2/06.jpg') }}" alt="member-img">
                                        <span class="member__activity"></span>
                                    </div>
                                    <div class="member__content">
                                        <a href="/member-single">
                                            <h5>Amanda Rodrigues</h5>
                                        </a>
                                        <p>registered 4 months, 1 week ago</p>
                                    </div>
                                </div>
                            </div>
                            <div class="member__item">
                                <div class="member__inner">
                                    <div class="member__thumb">
                                        <img src="{{ URL::to('public/website/assets/images/member/home2/07.jpg') }}" alt="member-img">
                                        <span class="member__activity member__activity--ofline"></span>
                                    </div>
                                    <div class="member__content">
                                        <a href="/member-single">
                                            <h5>Barros Pereira</h5>
                                        </a>
                                        <p>registered 4 months, 1 week ago</p>
                                    </div>
                                </div>
                            </div>
                            <div class="member__item">
                                <div class="member__inner">
                                    <div class="member__thumb">
                                        <img src="{{ URL::to('public/website/assets/images/member/home2/08.jpg') }}" alt="member-img">
                                        <span class="member__activity"></span>
                                    </div>
                                    <div class="member__content">
                                        <a href="/member-single">
                                            <h5>Emily Fernandes</h5>
                                        </a>
                                        <p>registered 4 months, 1 week ago</p>
                                    </div>
                                </div>
                            </div>
                            <div class="member__item">
                                <div class="member__inner">
                                    <div class="member__thumb">
                                        <img src="{{ URL::to('public/website/assets/images/member/home2/09.jpg') }}" alt="member-img">
                                        <span class="member__activity member__activity--ofline"></span>
                                    </div>
                                    <div class="member__content">
                                        <a href="/member-single">
                                            <h5>Alves Fernandes</h5>
                                        </a>
                                        <p>registered 4 months, 1 week ago</p>
                                    </div>
                                </div>
                            </div>
                            <div class="member__item">
                                <div class="member__inner">
                                    <div class="member__thumb">
                                        <img src="{{ URL::to('public/website/assets/images/member/home2/01.jpg') }}" alt="member-img">
                                        <span class="member__activity"></span>
                                    </div>
                                    <div class="member__content">
                                        <a href="/member-single">
                                            <h5>Smith Jhonson</h5>
                                        </a>
                                        <p>registered 4 months, 1 week ago</p>
                                    </div>
                                </div>
                            </div>
                            <div class="member__item">
                                <div class="member__inner">
                                    <div class="member__thumb">
                                        <img src="{{ URL::to('public/website/assets/images/member/home2/02.jpg') }}" alt="member-img">
                                        <span class="member__activity member__activity--ofline"></span>
                                    </div>
                                    <div class="member__content">
                                        <a href="/member-single">
                                            <h5>Arika Q Smith</h5>
                                        </a>
                                        <p>registered 4 months, 1 week ago</p>
                                    </div>
                                </div>
                            </div>
                            <div class="member__item">
                                <div class="member__inner">
                                    <div class="member__thumb">
                                        <img src="{{ URL::to('public/website/assets/images/member/home2/03.jpg') }}" alt="member-img">
                                        <span class="member__activity"></span>
                                    </div>
                                    <div class="member__content">
                                        <a href="/member-single">
                                            <h5>William R Show</h5>
                                        </a>
                                        <p>registered 4 months, 1 week ago</p>
                                    </div>
                                </div>
                            </div>
                            <div class="member__item">
                                <div class="member__inner">
                                    <div class="member__thumb">
                                        <img src="{{ URL::to('public/website/assets/images/member/home2/02.jpg') }}" alt="member-img">
                                        <span class="member__activity"></span>
                                    </div>
                                    <div class="member__content">
                                        <a href="/member-single">
                                            <h5>Sousa Carvalho</h5>
                                        </a>
                                        <p>registered 4 months, 1 week ago</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
                {{-- <div class="text-center mt-4">
                <a href="members.html" class="default-btn"><span>See More Popular</span></a>
            </div> --}}
            </div>
        </div>
    </div>
@endif
<!-- ================> Member section end here <================== -->
@endsection
@section('script')
@endsection
