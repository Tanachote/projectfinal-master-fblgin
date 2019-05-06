<!-- Header Area Start -->
<header class="header-area">
    <div class="classy-nav-container breakpoint-off">
        <div class="container">
            <!-- Classy Menu -->
            <nav class="classy-navbar justify-content-between" id="conferNav">

                <!-- Logo -->


                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <!-- Menu -->
                <div class="classy-menu">
                    <!-- Menu Close Button -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul id="nav">
                            <li class="active"><a href="{{ action('Admin\AdminController@index') }}">Home</a></li>
                            <!-- <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="index.html">- Home</a></li>
                                    <li><a href="about.html">- About Us</a></li>
                                    <li><a href="speakers.html">- Speakears</a></li>
                                </ul>
                            </li> -->
                        </ul>
                        <!-- Get Tickets Button -->
                        <li class="active"><a style="color: #FFFFFF; margin-left: 105ch;">{{ Auth::user()->name }}</a></li>
                            <a class="btn confer-btn mt-3 mt-lg-0 ml-3 ml-lg-5" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">{{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>
        </div>
    </div>
</header>
<!-- Header Area End -->
