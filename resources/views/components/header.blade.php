<!--======== Header Onepage 2 start ========-->
<div class="full-width-header rs-header-layout2">
    <!--Header Start-->
    <header id="rs-header" class="rs-header" style="background-color: #002559 !important">
        <!-- Menu Start -->
        <div class="menu-area menu-sticky">
            <!-- Offer Section End -->
            <div class="container">
                <div class="rs-menu-area">
                    <div class="logo-area">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('frontend/assets/images/logos.png') }}" alt="Leniency International" />
                        </a>

                        <a href="{{ route('home') }}">
                            <img src="{{ asset('frontend/assets/images/logos.png') }}" alt="Leniency International" />
                        </a>
                    </div>
                    <div class="rs-header-rightside">
                        <div class="main-menu hidden-md">
                            <ul class="nav-menu">
                                <li>
                                    <a class="page-scroll" href="{{ route('home') }}">Home</a>
                                </li>

                                <li>
                                    <a class="page-scroll" href="#rs-service">Services</a>
                                </li>

                                <li>
                                    <a class="page-scroll" href="#rs-about">About</a>
                                </li>
                                <li>
                                    <a class="page-scroll" href="{{ route('companies') }}">Leniency Group
                                        Of Company</a>
                                </li>

                                <li>
                                    <a class="page-scroll" href="#rs-contact">Contact</a>
                                </li>
                                <li>
                                    <a class="page-scroll" href="{{ route('form') }}">Application Form</a>
                                </li>
                            </ul>
                            <!-- //.nav-menu -->
                        </div>

                        <div class="canvasmenu-trigger view-md">
                            <i class="fa fa-bars"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->
    </header>
    <!--Header End-->
</div>
<!--======== Header Onepage 2 start ========-->

<!--======== Offcanvas Menu start ========-->
<div class="offcanvas-menu offcanvas-menu-2">
    <div class="menu-canvas-close">
        <i class="fa fa-times" aria-hidden="true"></i>
    </div>
    <div class="offcanvas-menu-inner">
        <div class="offc-logo mb-40">
            <a href="{{ route('home') }}"><img src="{{ asset('frontend/assets/images/logos2.png') }}" alt="Logo" /></a>
        </div>
        <ul class="nav-menu">
            <li>
                <a class="page-scroll" href="{{ route('home') }}">Home</a>
            </li>

            <li>
                <a class="page-scroll" href="#rs-service">Services</a>
            </li>

            <li>
                <a class="page-scroll" href="#rs-about">About</a>
            </li>
            <li>
                <a class="page-scroll" href="{{ route('companies') }}">Leniency Group Of Company</a>
            </li>
            <li>
                <a class="page-scroll" href="#rs-contact">Contact</a>
            </li>

            <li>
                <a class="page-scroll" href="{{ route('form') }}">Application Form</a>
            </li>
        </ul>
        <!-- //.nav-menu -->
    </div>
</div>
<!--======== Offcanvas Menu Ends ========-->

<!--======== Preloader area start ========-->
<div id="pre-load">
    <div id="loader" class="loader">
        <div class="loader-container">
            <div class="loader-icon">
                <img src="{{ asset('frontend/assets/images/favicon.png') }}" alt="Favicon" />
            </div>
        </div>
    </div>
</div>
<!--======== Preloader area Ends ========-->