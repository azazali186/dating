<div class="section__wrapper wow fadeInUp" data-wow-duration="1.5s">
    <form action="{{ url('/') }}">
        <div class="banner__list">
            <div class="row align-items-center">
                {{-- row-cols-xl-5 row-cols-lg-3 row-cols-sm-2 row-cols-1 --}}
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
                <div class="col-12">
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
                <div class="col-12">
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
                <div class="col-12">
                    <label>City</label>
                    <div class="banner__inputlist">
                        {{-- <input type="text" id="location" name="city" /> --}}
                        <select name="city">
                            <option>Battambang</option>
                            <option>Banteay Meanchey</option>
                            <option>Bavet</option>
                            <option>Banlung</option>
                            <option>Chbar Mon</option>
                            <option>Doun Kaev</option>
                            <option>Kandal</option>
                            <option>Kampong Thom</option>
                            <option>Kampong Speu</option>
                            <option>Kampong Chhnang</option>
                            <option>Kampong Cham</option>
                            <option>Kampot</option>
                            <option>Koh Kong</option>
                            <option>Kratié</option>
                            <option>Kep</option>
                            <option>Koh Rong</option>
                            <option>Oddar Meanchey</option>
                            <option selected>Phnom Penh</option>
                            <option>Poipet</option>
                            <option>Pursat</option>
                            <option>Pailin</option>
                            <option>Prey Veng</option>
                            <option>Preah Vihear</option>
                            <option>Ratanakiri</option>
                            <option>Siem Reap</option>
                            <option>Serei Saophoan</option>
                            <option>Sihanoukville</option>
                            <option>Samraong</option>
                            <option>Stueng Saen</option>
                            <option>Svay Rieng</option>
                            <option>Suong</option>
                            <option>Ta Khmau</option>
                            <option>Takéo</option>
                            <option>Tboung Khmum</option>
                        </select>
                    </div>
                </div>
                <div class="col m-auto">
                    <button type="submit" class="default-btn reverse d-block">
                        <span>Find Your Partner</span>
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
