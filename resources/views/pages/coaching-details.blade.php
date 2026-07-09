<!DOCTYPE html>
<html lang="en">
    <!--<< Header Area >>-->
    <head>
        <!-- ========== Meta Tags ========== -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="modinatheme">
        <meta name="description" content="Immigration and Visa Consulting Html Template">
        <!-- ======== Page title ============ -->
        <title>Visaland - Immigration & Visa Consulting HTML Template</title>
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
        <div class="breadcrumb-wrapper section-padding bg-cover" style="background-image: url('{{ asset('visaland-html/assets/img/breadcrumb.jpg') }}');">
            <div class="container">
                <div class="page-heading">
                    <h1 class="wow fadeInUp" data-wow-delay=".3s">Coaching Deatails</h1>
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
                            Coaching Deatails
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!--<< Coaching Section Start >>-->
        <section class="coaching-details-section fix section-padding">
            <div class="container">
                <div class="coaching-details-wrapper">
                    <div class="row g-5">
                        <div class="col-lg-4 order-2 order-md-1">
                            <div class="country-sidebar">
                                <div class="single-contact-form">
                                    <h3 class="wid-title">
                                        Quick Contact
                                    </h3>
                                    <form action="#" id="contact-form" class="message-form">
                                       <div class="single-form-input">
                                           <input type="text" placeholder="your name">
                                       </div>
                                       <div class="single-form-input">
                                           <input type="email" placeholder="email address">
                                       </div>
                                       <div class="single-form-input">
                                          <textarea placeholder="message"></textarea>
                                      </div>
                                       <button class="theme-btn" type="submit">
                                          <span>Submit</span>
                                       </button>
                                   </form>
                                 </div>
                                 <div class="country-sidebar-widget">
                                    <div class="contact-bg bg-cover" style="background-image: url('{{ asset('visaland-html/assets/img/service/contact-bg.jpg') }}');">
                                        <h3>Dream Tour</h3>
                                        <h2 class="title-anim">
                                            Explore <br>
                                            The World
                                        </h2>
                                        <a href="{{ route('contact') }}" class="theme-btn bg-white">
                                            <span>
                                                contact us
                                                <i class="fas fa-chevron-right"></i>
                                            </span>
                                         </a>
                                    </div>
                                 </div>
                                <a href="{{ route('service.details') }}" class="theme-btn w-100 text-center">
                                    <span><i class="fas fa-file-pdf me-3"></i> download pdf file</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8 order-1 order-md-2">
                            <div class="coaching-details-items">
                                <div class="details-image">
                                    <img src="{{ asset('visaland-html/assets/img/coaching/details-1.jpg') }}" alt="img">
                                </div>
                                <div class="details-content">
                                    <h2 class="title-anim">Citizenship Test</h2>
                                    <p class="mb-3">
                                        Need something changed or is there something not quite working the way you envisaged? Is your van a
                                        little old and tired and need refreshing? Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not
                                        only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                    </p>
                                    <p>
                                        Need something changed or is there something not quite working the way you envisaged? Is your van a
                                        little old and tired and need refreshing? Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make.
                                    </p>
                                    <div class="row g-4 mt-3 mb-4">
                                        <div class="col-lg-6">
                                            <div class="details-thumb-2">
                                                <img src="{{ asset('visaland-html/assets/img/coaching/details-2.jpg') }}" alt="img">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="details-thumb-2">
                                                <img src="{{ asset('visaland-html/assets/img/coaching/details-3.jpg') }}" alt="img">
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mb-3">
                                        Need something changed or is there something not quite working the way you envisaged? Is your van a
                                        little old and tired and need refreshing? Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not
                                        only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                    </p>
                                    <p>
                                        Need something changed or is there something not quite working the way you envisaged? Is your van a
                                        little old and tired and need refreshing? Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make.
                                    </p>
                                    <div class="row g-5 mt-2 align-items-center">
                                        <div class="col-lg-6">
                                            <div class="thumb-2">
                                                <img src="{{ asset('visaland-html/assets/img/coaching/details-4.jpg') }}" alt="img">
                                                <div class="video-box">
                                                    <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I" class="video-btn ripple video-popup">
                                                        <i class="fas fa-play"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="content">
                                                <h3>Institutes:</h3>
                                                <ul>
                                                    <li>
                                                        <i class="fas fa-check-circle"></i>
                                                        Einstein College of England
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-check-circle"></i>
                                                        Cambridge College nternational
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-check-circle"></i>
                                                        Adelaide College Of Technology
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-check-circle"></i>
                                                        Brisbane College of England
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-check-circle"></i>
                                                        Central Queensland University
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <h2 class="mt-5 title-anim">How To Do Test Preparation</h2>
                                    <p>
                                        Need something changed or is there something not quite working the way you envisaged? Is your van a
                                        little old and tired and need refreshing? Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
    <!--<< Main.js >>-->
    <script src="{{ asset('visaland-html/assets/js/main.js') }}"></script>
    </body>
</html>