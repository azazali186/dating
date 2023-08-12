@extends('website.layouts.app')
@section('content')
    <!-- ================> Group section end here <================== -->
    <div class="group group--single padding-bottom">
        <div class="about about--style3 pt-xl-0">
            <div class="container">
                <div class="section__wrapper wow fadeInUp" data-wow-duration="1.5s">
                    <form action="{{ url('/') }}">
                        <div class="banner__list">
                            <div class="row align-items-center row-cols-xl-5 row-cols-lg-3 row-cols-sm-2 row-cols-1">
                                <div class="col-6">
                                    <label>I am a</label>
                                    <div class="banner__inputlist">
                                        <select>
                                            <option>Select Gender</option>
                                            <option value="men" selected>Male</option>
                                            <option value="women">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label>Looking for</label>
                                    <div class="banner__inputlist">
                                        <select name="gender">
                                            <option>Select Gender</option>
                                            <option value="men">Male</option>
                                            <option value="women" selected>Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <label>Age</label>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="banner__inputlist">
                                                <select name="age_start">
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
                                                <select name="age_end">
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
                                    <label>Price</label>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="banner__inputlist">
                                                <input type="text" name="price_start">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="banner__inputlist">
                                                <input type="text" style="width: -webkit-fill-available;" name="price_end">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <label>City</label>
                                    <div class="banner__inputlist">
                                        <input type="text" id="location" name="city" />
                                    </div>
                                </div>
                                <div class="col">
                                    <button type="submit" class="default-btn reverse d-block">
                                        <span>Find Your Partner</span>
                                        </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ================> Group section end here <================== -->
@endsection
@section('script')
@endsection
