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
                    <h1 class="wow fadeInUp" data-wow-delay=".3s">Coaching</h1>
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
                            Coaching
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!--<< Coaching Section Start >>-->
        <section class="coaching-section fix section-padding section-bg">
            <div class="container">
                <div class="row g-4">
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="coaching-card-items">
                            <div class="coacing-image">
                                <img src="{{ asset('visaland-html/assets/img/coaching/01.jpg') }}" alt="img">
                            </div>
                            <div class="icon">
                                <i class="flaticon-mortarboard"></i>
                            </div>
                            <div class="content text-center">
                                <h3><a href="{{ route('coaching.details') }}">IELTS Courses</a></h3>
                                <p>
                                    Sit amet conse bestibulume
                                    ullamcorper nulla amet
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="coaching-card-items">
                            <div class="coacing-image">
                                <img src="{{ asset('visaland-html/assets/img/coaching/02.jpg') }}" alt="img">
                            </div>
                            <div class="icon">
                                <i class="flaticon-graduated"></i>
                            </div>
                            <div class="content text-center">
                                <h3><a href="{{ route('coaching.details') }}">Citizenship Test</a></h3>
                                <p>
                                    Sit amet conse bestibulume
                                    ullamcorper nulla amet
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                        <div class="coaching-card-items active">
                            <div class="coacing-image">
                                <img src="{{ asset('visaland-html/assets/img/coaching/03.jpg') }}" alt="img">
                            </div>
                            <div class="icon">
                                <i class="flaticon-plane-ticket"></i>
                            </div>
                            <div class="content text-center">
                                <h3><a href="{{ route('coaching.details') }}">TOFEL Coaching</a></h3>
                                <p>
                                    Sit amet conse bestibulume
                                    ullamcorper nulla amet
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                        <div class="coaching-card-items">
                            <div class="coacing-image">
                                <img src="{{ asset('visaland-html/assets/img/coaching/04.jpg') }}" alt="img">
                            </div>
                            <div class="icon">
                                <i class="flaticon-airplane-2"></i>
                            </div>
                            <div class="content text-center">
                                <h3><a href="{{ route('coaching.details') }}">OET Coaching</a></h3>
                                <p>
                                    Sit amet conse bestibulume
                                    ullamcorper nulla amet
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--<< Coaching Section Start >>--> 
        <section class="coaching-section fix section-padding">
            <div class="container">
                <div class="row g-4">
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="coaching-box-items mt-0">
                            <div class="coaching-image">
                                <img src="{{ asset('visaland-html/assets/img/coaching/05.jpg') }}" alt="img">
                                <img src="{{ asset('visaland-html/assets/img/coaching/05.jpg') }}" alt="img">
                                <a href="{{ route('coaching.details') }}" class="image-overlay">
                                    <i class="fal fa-plus"></i>
                                </a>
                                <h5 class="price">$170</h5>
                            </div>
                            <div class="content">
                                <h4><a href="{{ route('coaching.details') }}">IELTS Course</a></h4>
                                <p>
                                    We approached WiaTech with
                                    complex project deliver
                                </p>
                                <a href="{{ route('coaching.details') }}" class="link-btn link-btn-2">
                                    <span>read more</span>
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="coaching-box-items mt-0">
                            <div class="coaching-image">
                                <img src="{{ asset('visaland-html/assets/img/coaching/06.jpg') }}" alt="img">
                                <img src="{{ asset('visaland-html/assets/img/coaching/06.jpg') }}" alt="img">
                                <a href="{{ route('coaching.details') }}" class="image-overlay">
                                    <i class="fal fa-plus"></i>
                                </a>
                                <h5 class="price">$170</h5>
                            </div>
                            <div class="content">
                                <h4><a href="{{ route('coaching.details') }}">PTE Course</a></h4>
                                <p>
                                    We approached WiaTech with
                                    complex project deliver
                                </p>
                                <a href="{{ route('coaching.details') }}" class="link-btn link-btn-2">
                                    <span>read more</span>
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                        <div class="coaching-box-items mt-0">
                            <div class="coaching-image">
                                <img src="{{ asset('visaland-html/assets/img/coaching/07.jpg') }}" alt="img">
                                <img src="{{ asset('visaland-html/assets/img/coaching/07.jpg') }}" alt="img">
                                <a href="{{ route('coaching.details') }}" class="image-overlay">
                                    <i class="fal fa-plus"></i>
                                </a>
                                <h5 class="price">$170</h5>
                            </div>
                            <div class="content">
                                <h4><a href="{{ route('coaching.details') }}">TOEFL Course</a></h4>
                                <p>
                                    We approached WiaTech with
                                    complex project deliver
                                </p>
                                <a href="{{ route('coaching.details') }}" class="link-btn link-btn-2">
                                    <span>read more</span>
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                        <div class="coaching-box-items mt-0">
                            <div class="coaching-image">
                                <img src="{{ asset('visaland-html/assets/img/coaching/08.jpg') }}" alt="img">
                                <img src="{{ asset('visaland-html/assets/img/coaching/08.jpg') }}" alt="img">
                                <a href="{{ route('coaching.details') }}" class="image-overlay">
                                    <i class="fal fa-plus"></i>
                                </a>
                                <h5 class="price">$170</h5>
                            </div>
                            <div class="content">
                                <h4><a href="{{ route('coaching.details') }}">GRE Course</a></h4>
                                <p>
                                    We approached WiaTech with
                                    complex project deliver
                                </p>
                                <a href="{{ route('coaching.details') }}" class="link-btn link-btn-2">
                                    <span>read more</span>
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--<< Coaching Section Start >>--> 
        <section class="coaching-section fix section-bg section-padding">
            <div class="container">
                <div class="row g-4">
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="coaching-box-items-2 mt-0">
                            <div class="coaching-image">
                                <img src="{{ asset('visaland-html/assets/img/coaching/01.jpg') }}" alt="img">
                            </div>
                            <div class="coaching-content">
                                <h3><a href="{{ route('coaching.details') }}">IELTS Courses</a></h3>
                                <p>
                                    At Tech Genius Solution we understand that business
                                    has unique IT needs offer a comprehensive
                                </p>
                                <a href="{{ route('news') }}" class="link-btn mt-2 d-inline-block">
                                      Read More<i class="fas fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="coaching-box-items-2 mt-0">
                            <div class="coaching-image">
                                <img src="{{ asset('visaland-html/assets/img/coaching/02.jpg') }}" alt="img">
                            </div>
                            <div class="coaching-content">
                                <h3><a href="{{ route('coaching.details') }}">Citizenship Test</a></h3>
                                <p>
                                    At Tech Genius Solution we understand that business
                                    has unique IT needs offer a comprehensive
                                </p>
                                <a href="{{ route('news') }}" class="link-btn mt-2 d-inline-block">
                                      Read More<i class="fas fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay=".6s">
                        <div class="coaching-box-items-2 mt-0">
                            <div class="coaching-image">
                                <img src="{{ asset('visaland-html/assets/img/coaching/03.jpg') }}" alt="img">
                            </div>
                            <div class="coaching-content">
                                <h3><a href="{{ route('coaching.details') }}">TOFEL Coaching</a></h3>
                                <p>
                                    At Tech Genius Solution we understand that business
                                    has unique IT needs offer a comprehensive
                                </p>
                                <a href="{{ route('news') }}" class="link-btn mt-2 d-inline-block">
                                      Read More<i class="fas fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay=".8s">
                        <div class="coaching-box-items-2 mt-0">
                            <div class="coaching-image">
                                <img src="{{ asset('visaland-html/assets/img/coaching/04.jpg') }}" alt="img">
                            </div>
                            <div class="coaching-content">
                                <h3><a href="{{ route('coaching.details') }}">OET Coaching</a></h3>
                                <p>
                                    At Tech Genius Solution we understand that business
                                    has unique IT needs offer a comprehensive
                                </p>
                                <a href="{{ route('news') }}" class="link-btn mt-2 d-inline-block">
                                      Read More<i class="fas fa-chevron-right"></i>
                                </a>
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