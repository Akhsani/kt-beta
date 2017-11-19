<div class="nav-container">

    <!-- Navbar Mobile -->
    <div class="bar bar--sm visible-xs bg--dark">
        <div class="container">
            <div class="row">
                <div class="col-xs-3 col-sm-2">
                    <a href="index.html">
                        <img class="logo logo-dark" alt="logo" src="{{ asset('images/logo-color.png') }}" />
                        <img class="logo logo-light" alt="logo" src="{{ asset('images/logo-color.png') }}" />
                    </a>
                </div>
                <div class="col-xs-9 col-sm-10 text-right">
                    <a href="#" class="hamburger-toggle" data-toggle-class="#menu1;hidden-xs">
                        <i class="icon icon--sm stack-interface stack-menu"></i>
                    </a>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </div>
    <!--end bar-->

    <!-- Navbar Desktop -->
    <nav id="menu1" class="bar bar--sm bar-1 hidden-xs bg--dark">
        <div class="container">
            <div class="row">
                <div class="col-md-1 col-sm-2 hidden-xs">
                <!-- logo -->
                    <div class="bar__module">
                        <a href="/">
                            <img class="logo logo-dark" alt="logo" src="{{ asset('images/logo-color.png') }}" />
                            <img class="logo logo-light" alt="logo" src="{{ asset('images/logo-color.png') }}" />
                        </a>
                    </div>
                    
                </div>
                <!-- menu -->
                <div class="col-md-11 col-sm-12 text-right text-left-xs text-left-sm">

                <!-- explore -->
                    <div class="bar__module">
                        <ul class="menu-horizontal text-left">
                            <li class="dropdown">
                                <span class="dropdown__trigger">Explore Talents</span>
                                <div class="dropdown__container">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-8 dropdown__content dropdown__content--lg">
                                                <div class="pos-absolute col-md-5 imagebg hidden-sm hidden-xs" data-overlay="4">
                                                    <div class="background-image-holder">
                                                        <img alt="background" src="images/event_festival.jpg" />
                                                    </div>
                                                    <div class="container pos-vertical-center">
                                                        <div class="row">
                                                            <div class="col-md-8 col-md-offset-2">
                                                                <img alt="Logo" src="images/logo-color.png" class="image--xxs" />
                                                                <span class="h3 color--white">Finding talent has never been easier</span>
                                                                <a href="elements.html" class="btn btn--primary type--uppercase">
                                                                    <span class="btn__text">
                                                                        Explore Talents
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-md-offset-6 col-sm-4">
                                                    <ul class="menu-vertical">
                                                        <li>
                                                            <span class="color--dark"><strong>Explore by Category</strong></span>
                                                        </li>
                                                        <li>
                                                            <a href="category.html">
                                                                Band
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="category.html">
                                                                DJ
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="category.html">
                                                                MC
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="category.html">
                                                                Stand Up Comedy
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="ecategory.html">
                                                                Singer
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="category.html">
                                                                Musician
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="category.html">
                                                                Magician
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="category.html">
                                                                Dancer
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="category.html">
                                                                Model
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-2 col-sm-4">
                                                    <ul class="menu-vertical">
                                                        <li>
                                                            <span class="color--dark"><strong>Explore by Event</strong></span>
                                                        </li>
                                                        <li>
                                                            <a href="category.html">
                                                                Corporate
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="category.html">
                                                                Private Party
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="category.html">
                                                                Festival
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="category.html">
                                                                Campus
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="category.html">
                                                                School
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="category.html">
                                                                Social
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="category.html">
                                                                Weddings
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="category.html">
                                                                Cafe/Restaurant/Pub
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="category.html">
                                                                Club
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!--end dropdown content-->
                                        </div>
                                    </div>
                                </div>
                                <!--end dropdown container-->
                            </li>
                        </ul>
                    </div>
                    
                    @guest
                <!-- Register/Login -->
                    <div class="bar__module">
                        <div class="modal-instance">
                            <a class="btn btn--sm type--uppercase" href="{{ route('register') }}">
                                <span class="btn__text">
                                    Register
                                </span>
                            </a>
                            <a class="btn btn--sm btn--primary type--uppercase" href="{{ route('login') }}">
                                <span class="btn__text">
                                    Login
                                </span>
                            </a>
                        </div>
                    </div>

                    @else
                <!-- Post Talent -->
                    <div class="bar__module">
                        <div class="modal-instance">
                            <a class="btn btn--sm type--uppercase" href="/talents/create">
                                <span class="btn__text">
                                    + Post a Talent
                                </span>
                            </a>
                        </div> 
                    </div>

                <!-- Profile Menu -->
                    <div class="bar__module text-left">
                        <ul class="menu-horizontal">
                            <li class="dropdown">
                                <span class="dropdown__trigger">
                                    <img alt="avatar" class="avatar image--xxs" src="{{ Auth::user()->avatar }}">
                                </span>
                                <div class="dropdown__container">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 dropdown__content">
                                                <ul class="menu-vertical">
                                                    <li><a href="#">Inbox</a></li>
                                                    <li><a href="#">Transaction</a></li>
                                                    <li><a href="#">Profile</a></li>
                                                    <li><a href="#">Setting</a></li>
                                                    <li><hr></li>
                                                    <li>
                                                        <a ref="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Log Out</a>
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;" style="cursor:pointer">
                                                            {{ csrf_field() }}
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div><!--end row-->
                                    </div><!--end container-->
                                </div>
                            </li>
                        </ul>
                    </div>

                    @endguest
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </nav>
    <!--end bar-->
    </div>
    