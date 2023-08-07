    <!-- ================> header section start here <================== -->
    <header class="header header--style2" id="navbar">
        <div class="header__top d-none d-lg-block">
            <div class="container">
                <div class="header__top--area">
                    <div class="header__top--left">
                        <ul>
                            <li>
                                <i class="fa-solid fa-phone"></i> <span>+800-123-4567 6587</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-location-dot"></i> Beverley, New York 224 USA
                            </li>
                        </ul>
                    </div>
                    <div class="header__top--right">
                        <ul>
                            <li><a href="#"><i class="fa-brands fa-facebook-messenger"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-vimeo-v"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-skype"></i></a></li>
                            <li><a href="#"><i class="fa-solid fa-rss"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__bottom">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="/"><img
                            src="{{ URL::to('public/website/assets/images/logo/logo.png') }}" alt="logo"></a>
                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler--icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                        <div class="navbar-nav mainmenu">
                            <ul>
                                <li class="active">
                                    <a href="#0">Home</a>
                                    {{-- <ul>
										<li><a href="index.html">Home Page One</a></li>
										<li><a href="index-2.html">Home Page Two</a></li>
										<li><a href="index-3.html" class="active">Home Page Three</a></li>
									</ul> --}}
                                </li>
                                {{-- <li>
									<a href="#0">Pages</a>
									<ul>
										<li><a href="about.html">About Us</a></li>
                                        <li><a href="membership.html">Membership</a></li>
                                        <li><a href="login.html">Log In</a></li>
                                        <li><a href="register.html">Sign Up</a></li>
                                        <li><a href="comingsoon.html">comingsoon</a></li>
                                        <li><a href="404.html">404</a></li>
									</ul>
								</li> --}}
                                {{-- <li>
									<a href="#0">Community</a>
									<ul>
										<li><a href="community.html">Community</a></li>
										<li><a href="group.html">All Group</a></li>
										<li><a href="members.html">All Members</a></li>
										<li><a href="activity.html">Activity</a></li>

									</ul>
								</li> --}}
                                {{-- <li>
									<a href="#0">Shops</a>
									<ul>
										<li><a href="shop.html">Product</a></li>
										<li><a href="shop-single.html">Product Details</a></li>
										<li><a href="shop-cart.html">Product Cart</a></li>
									</ul>
								</li> --}}
                                <li>
                                    <a href="#0">Blogs</a>
                                    {{-- <ul>
										<li><a href="blog.html">Blog</a></li>
										<li><a href="blog-2.html">Blog Style Two</a></li>
										<li><a href="blog-single.html">Blog Details</a></li>
									</ul> --}}
                                </li>

                                <li><a href="contact">About Us</a></li>
                                <li><a href="contact">contact</a></li>
                            </ul>
                        </div>
                        <ul class="button-group">
                            @if (Session::has('sessdata'))
                                <li><a href="{{ url('logout') }}" class="default-btn login"><i
                                            class="fa-solid fa-user"></i> <span>LOG OUT</span> </a></li>
                            @else
                                <li><a href="{{ url('login') }}" class="default-btn login"><i
                                            class="fa-solid fa-user"></i> <span>LOG IN</span> </a></li>
                                <li><a href="{{ url('register') }}" class="default-btn signup"><i
                                            class="fa-solid fa-users"></i> <span>SIGN UP</span> </a></li>
                                <li><a href="{{ url('seller') }}" class="default-btn login"><i
                                            class="fa-solid fa-users"></i> <span>Create Profile</span> </a></li>
                            @endif
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ================> header section end here <================== -->
