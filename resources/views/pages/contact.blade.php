<!DOCTYPE html>
<html lang="en">
    <!--<< Header Area >>-->
    <head>
        <!-- ========== Meta Tags ========== -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="modinatheme">
        <meta name="description" content="Contact {{ config('company.legal_name') }} — Ben Bella Street, Moshi Municipality. Call {{ config('company.phone') }} or email {{ config('company.email') }}.">
        <!-- ======== Page title ============ -->
        <title>Contact Us - {{ config('company.legal_name') }}</title>
        <!--<< Favcion >>-->
        <link rel="shortcut icon" href="{{ asset('visaland-html/assets/img/favicon.svg') }}">
        <!--<< Bootstrap min.css >>-->
        <link rel="stylesheet" href="{{ asset('visaland-html/assets/css/bootstrap.min.css') }}">
        <!--<< Font Awesome.css >>-->
        <link rel="stylesheet" href="{{ asset('visaland-html/assets/css/font-awesome.css') }}">
        <!--<< Animate.css >>-->
        <link rel="stylesheet" href="{{ asset('visaland-html/assets/css/animate.css') }}">
        <!--<< Magnific Popup.css >>-->
        <link rel="stylesheet" href="{{ asset('visaland-html/assets/css/magnific-popup.css') }}">
        <!--<< MeanMenu.css >>-->
        <link rel="stylesheet" href="{{ asset('visaland-html/assets/css/meanmenu.css') }}">
        <!--<< Slick.css >>-->
        <link rel="stylesheet" href="{{ asset('visaland-html/assets/css/slick.css') }}">
        <!--<< Swiper Slider.css >>-->
        <link rel="stylesheet" href="{{ asset('visaland-html/assets/css/swiper-bundle.min.css') }}">
        <!--<< Nice Select.css >>-->
        <link rel="stylesheet" href="{{ asset('visaland-html/assets/css/nice-select.css') }}">
        <!--<< Main.css >>-->
        <link rel="stylesheet" href="{{ asset('visaland-html/assets/css/main.css') }}">
        <!--<< Style.css >>-->
        <link rel="stylesheet" href="{{ asset('visaland-html/style.css') }}">
    </head>

    <body>

         <!-- Back To Top Start -->
         <div class="scroll-up">
            <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>

        @include('partials.preloader')

        <!--<< Mouse Cursor Start >>-->  
        <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div>

        @include('partials.offcanvas')

        @include('partials.header-top')

        <!-- Header Area Start -->
        <header class="header-section-3">
            <div id="header-sticky" class="header-3">
                <div class="container-fluid">
                    <div class="mega-menu-wrapper">
                        <div class="header-main style-2">
                            <div class="logo">
                                <a href="{{ route('home') }}" class="header-logo">
                                    <img src="{{ asset('images/logo_header.png') }}" alt="logo-img">
                                </a>
                            </div>
                            <div class="header-left">
                                <div class="mean__menu-wrapper">
                                    <div class="main-menu">
                                        <nav id="mobile-menu">
                                            <ul>
                                                <li class="has-dropdown active menu-thumb">
                                                    <a href="{{ route('home') }}">
                                                    Home 
                                                    <i class="fas fa-angle-down"></i>
                                                    </a>
                                                    <ul class="submenu has-home-menu">
                                                        <li class="border-none">
                                                            <div class="row g-4">
                                                                <div class="col-lg-3 home-menu">
                                                                    <div class="home-menu-thumb">
                                                                        <img src="{{ asset('visaland-html/assets/img/header/home-1.jpg') }}" alt="img">
                                                                        <div class="demo-button">
                                                                            <a href="{{ route('home') }}" class="theme-btn">
                                                                                <span>Multi Page</span>
                                                                            </a>
                                                                            <a href="{{ route('home') }}" class="theme-btn">
                                                                                <span>One Page</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="home-menu-content text-center">
                                                                        <h4 class="home-menu-title">
                                                                            Home 01
                                                                        </h4>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3  home-menu">
                                                                    <div class="home-menu-thumb mb-15">
                                                                        <img src="{{ asset('visaland-html/assets/img/header/home-2.jpg') }}" alt="img">
                                                                        <div class="demo-button">
                                                                            <a href="{{ route('home') }}" class="theme-btn">
                                                                                <span>Multi Page</span>
                                                                            </a>
                                                                            <a href="{{ route('home') }}" class="theme-btn">
                                                                                <span>One Page</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="home-menu-content text-center">
                                                                        <h4 class="home-menu-title">
                                                                            Home 02
                                                                        </h4>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 home-menu">
                                                                    <div class="home-menu-thumb mb-15">
                                                                        <img src="{{ asset('visaland-html/assets/img/header/home-3.jpg') }}" alt="img">
                                                                        <div class="demo-button">
                                                                            <a href="{{ route('home') }}" class="theme-btn">
                                                                                <span>Multi Page</span>
                                                                            </a>
                                                                            <a href="{{ route('home') }}" class="theme-btn">
                                                                                <span>One Page</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="home-menu-content text-center">
                                                                        <h4 class="home-menu-title">
                                                                            Home 03
                                                                        </h4>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 home-menu">
                                                                    <div class="home-menu-thumb mb-15">
                                                                        <img src="{{ asset('visaland-html/assets/img/header/home-4.jpg') }}" alt="img">
                                                                        <div class="demo-button">
                                                                            <a href="{{ route('home') }}" class="theme-btn">
                                                                                <span>Multi Page</span>
                                                                            </a>
                                                                            <a href="{{ route('home') }}" class="theme-btn">
                                                                                <span>One Page</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="home-menu-content text-center">
                                                                        <h4 class="home-menu-title">
                                                                            Home 04
                                                                        </h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="has-dropdown active d-lg-none">
                                                    <a href="{{ route('team') }}" class="border-none">
                                                    Home
                                                    <i class="fas fa-angle-down"></i>
                                                    </a>
                                                    <ul class="submenu">
                                                        <li><a href="{{ route('home') }}">Home 01</a></li>
                                                        <li><a href="{{ route('home') }}">Home 02</a></li>
                                                        <li><a href="{{ route('home') }}">Home 03</a></li>
                                                        <li><a href="{{ route('home') }}">Home 04</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="{{ route('about') }}">About</a>
                                                </li>
                                                @include('partials.nav-pages-services')

                                                @include('partials.nav-pages-solutions')
                                                @include('partials.nav-blog')
                                                <li>
                                                    <a href="{{ route('contact') }}">Contact</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="header-right d-flex justify-content-end align-items-center">
                                <div class="header-button">
                                    <a href="{{ route('contact') }}" class="theme-btn">
                                        <span>
                                            contact us
                                            <i class="fas fa-chevron-right"></i>
                                        </span>
                                     </a>
                                </div>
                                <div class="header__hamburger d-xl-block my-auto">
                                    <div class="sidebar__toggle">
                                        <div class="header-bar">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!--<< Breadcrumb Section Start >>-->
        <div class="breadcrumb-wrapper section-padding bg-cover" style="background-image: url('{{ asset('images/Contact.jpg') }}');">
            <div class="container">
                <div class="page-heading">
                    <h1 class="wow fadeInUp" data-wow-delay=".3s">Contact Us</h1>
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                        <li>
                            <a href="{{ route('home') }}">
                            Home Page
                            </a>
                        </li>
                        <li>
                            <i class="fal fa-minus"></i>
                        </li>
                        <li>
                            Contact Us
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!--<< Contact Section Start >>-->
        <section class="contact-main-area section-padding emca-contact-page">
            <div class="container">
                <div class="contact-main-wrapper">
                    <div class="row g-4 align-items-lg-start">
                        <div class="col-lg-6">
                            <div class="contact-content">
                                <div class="section-title mb-2">
                                    <span class="wow fadeInUp">Get In Touch</span>
                                    <h2 class="title-anim">Contact Us</h2>
                                </div>
                                <p class="mt-4 mt-md-0 wow fadeInUp" data-wow-delay=".4s">
                                    {{ config('company.location_description') }}
                                </p>
                                <div class="row g-4 mt-3">
                                    <div class="col-lg-12 wow fadeInUp" data-wow-delay=".3s">
                                        <div class="info-items">
                                            <div class="icon">
                                                <i class="fas fa-map-marker-alt"></i>
                                            </div>
                                            <div class="content">
                                                <h5>Our Location</h5>
                                                <p class="mb-2"><strong>Address</strong></p>
                                                <p class="mb-0">
                                                    {{ config('company.address') }}<br>
                                                    {{ config('company.address_line_2') }}<br>
                                                    {{ config('company.po_box') }}<br>
                                                    Postcode: {{ config('company.postcode') }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                                        <div class="info-items">
                                            <div class="icon">
                                                <i class="far fa-phone"></i>
                                            </div>
                                            <div class="content">
                                                <h5>Call Us Now</h5>
                                                <a href="tel:{{ preg_replace('/\s+/', '', config('company.phone')) }}">{{ config('company.phone') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".7s">
                                        <div class="info-items">
                                            <div class="icon">
                                                <i class="fal fa-envelope"></i>
                                            </div>
                                            <div class="content">
                                                <h5>Mail Us Now</h5>
                                                <a href="mailto:{{ config('company.email') }}" class="link">{{ config('company.email') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-5 mt-lg-0">
                            <div class="contact-form-items emca-contact-form wow fadeInUp" data-wow-delay=".3s">
                                <div class="contact-title">
                                    <h3>Fill Up The Form</h3>
                                    <p>Your email address will not be published. Required fields are marked *</p>
                                </div>
                                <form action="{{ route('contact.store') }}" id="contact-form" method="POST">
                                    @csrf
                                    @if(session('success'))
                                        <div class="alert alert-success mb-3">{{ session('success') }}</div>
                                    @endif
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <div class="form-clt">
                                                <input type="text" name="name" id="name" placeholder="Your Name*">
                                                <div class="icon">
                                                    <i class="fal fa-user"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-clt">
                                                <input type="email" name="email" id="email" placeholder="Email Address*">
                                                <div class="icon">
                                                    <i class="fal fa-envelope"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-clt">
                                                <textarea name="message" id="message" placeholder="Enter Your Messege here"></textarea>
                                                <div class="icon">
                                                    <i class="fal fa-edit"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="theme-btn emca-contact-submit">
                                                <span><i class="fal fa-paper-plane me-2"></i>Get In Touch</span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--<< Map Section Start >>-->
        <div class="map-section">
            <div class="google-map wow fadeInUp" data-wow-delay=".7s">
                <iframe src="{{ config('company.maps_embed_url') }}" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
            </div>
        </div>

        @include('partials.footer')

       

    <!--<< All JS Plugins >>-->
    <script src="{{ asset('visaland-html/assets/js/jquery-3.7.1.min.js') }}"></script>
    <!--<< Viewport Js >>-->
    <script src="{{ asset('visaland-html/assets/js/viewport.jquery.js') }}"></script>
    <!--<< Bootstrap Js >>-->
    <script src="{{ asset('visaland-html/assets/js/bootstrap.bundle.min.js') }}"></script>
    <!--<< Gsap Js >>-->
    <script src="{{ asset('visaland-html/assets/js/gsap/gsap.js') }}"></script>
    <!--<< Gsap Scroll Trigger Js >>-->
    <script src="{{ asset('visaland-html/assets/js/gsap/gsap-scroll-trigger.js') }}"></script>
    <!--<< Gsap Split Text Js >>-->
    <script src="{{ asset('visaland-html/assets/js/gsap/gsap-split-text.js') }}"></script>
    <!--<< Nice Select Js >>-->
    <script src="{{ asset('visaland-html/assets/js/jquery.nice-select.min.js') }}"></script>
    <!--<< Waypoints Js >>-->
    <script src="{{ asset('visaland-html/assets/js/jquery.waypoints.js') }}"></script>
    <!--<< Counterup Js >>-->
    <script src="{{ asset('visaland-html/assets/js/jquery.counterup.min.js') }}"></script>
    <!--<< Slick Js >>-->
    <script src="{{ asset('visaland-html/assets/js/slick.min.js') }}"></script>
    <!--<< Swiper Slider Js >>-->
    <script src="{{ asset('visaland-html/assets/js/swiper-bundle.min.js') }}"></script>
    <!--<< Slick Animation Js >>-->
    <script src="{{ asset('visaland-html/assets/js/slick-animation.min.js') }}"></script>
    <!--<< MeanMenu Js >>-->
    <script src="{{ asset('visaland-html/assets/js/jquery.meanmenu.min.js') }}"></script>
    <!--<< Magnific Popup Js >>-->
    <script src="{{ asset('visaland-html/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!--<< Wow Animation Js >>-->
    <script src="{{ asset('visaland-html/assets/js/wow.min.js') }}"></script>
    <!--<< Circle Progress Js >>-->
    <script src="{{ asset('visaland-html/assets/js/circle-progress.js') }}"></script>
    <!--<< Ajax.js >>-->
    <script src="{{ asset('visaland-html/assets/js/ajax-mail.js') }}"></script>
    <!--<< Main.js >>-->
    <script src="{{ asset('visaland-html/assets/js/main.js') }}"></script>
    </body>
</html>