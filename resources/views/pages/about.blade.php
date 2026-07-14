<!DOCTYPE html>
<html lang="en">
    <!--<< Header Area >>-->
    <head>
        <!-- ========== Meta Tags ========== -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="modinatheme">
        <meta name="description" content="EmCa Techonologies LTD — leading Tanzanian ICT firm providing technology services and solutions across Tanzania and worldwide.">
        <!-- ======== Page title ============ -->
        <title>About Us - {{ config('company.site_title', 'EmCa Techonologies') }}</title>
        @include('partials.favicon')
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

    <body class="emca-about-page">

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
                                                @include('partials.main-nav-menu')
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
       <div class="breadcrumb-wrapper section-padding bg-cover" style="background-image: url('{{ asset('images/about-hero.png') }}');">
        <div class="container">
            <div class="page-heading">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">about us</h1>
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
                        About Us
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--<< About Section Start >>--> 
    <section class="about-section fix section-padding">
        <div class="container">
            <div class="about-wrapper">
                <div class="row g-4 g-lg-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="about-image-items">
                            <div class="border-shape">
                                <img src="{{ asset('visaland-html/assets/img/about/border-shape.png') }}" alt="shape-img">
                            </div>
                            <div class="about-image bg-cover wow fadeInLeft" data-wow-delay=".3s" style="background-image: url('{{ asset('images/About1.jpg') }}');">
                                <div class="about-image-2 emca-about-image-2 wow fadeInUp" data-wow-delay=".5s">
                                    <img src="{{ asset('images/About2.jpg') }}" alt="about-img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <div class="about-content">
                            <div class="section-title">
                                <span class="wow fadeInUp">About {{ config('company.name') }}</span>
                                <h2 class="title-anim">
                                    Leading ICT Solutions in Tanzania & Worldwide
                                </h2>
                            </div>
                            <p class="mt-4 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                {{ config('company.site_title', 'EmCa Techonologies') }} is a leading Tanzanian ICT firm that provides cutting-edge technology services and solutions to clients across the country and worldwide.
                            </p>
                            <p class="mt-3 wow fadeInUp" data-wow-delay=".55s">
                                Founded with a clear purpose: to provide reliable, modern, and affordable ICT services and solutions tailored to enable individuals, institutions, and businesses of all sizes to thrive in the digital era.
                            </p>
                            <p class="mt-3 wow fadeInUp emca-registration-text" data-wow-delay=".6s">
                                We are a fully registered company under the Companies Act, 2002 with Registration Number: 181103264, operating under a valid Business License: ICT Services Local: B.L. NO: BL01408832024-2500004066, Software Development, Installation and Maintenance: B.L.No: 20000095828, Supply of ICT Equipment: BL01408832025-2600001012, permit for the provision of ICT service (s) to Cooperatives Societies registered in Tanzania mainland; Permit Reg. Number: TCDC-SP-2025-00303 and a Taxpayer Identification Number (TIN): 181-103-264.
                            </p>
                            <div class="circle-progress-bar-wrapper">
                                <div class="single-circle-bar wow fadeInUp" data-wow-delay=".3s">
                                    <div class="circle-bar" data-percent="100" data-display="5+" data-duration="1000">
                                    </div>
                                    <div class="content">
                                        <h6>5+ Year of Experience</h6>
                                    </div>
                                </div>
                                <div class="single-circle-bar wow fadeInUp" data-wow-delay=".5s">
                                    <div class="circle-bar" data-percent="99" data-duration="1000">
                                    </div>
                                    <div class="content">
                                        <h6>Trusted Worldwide</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--<< Vision, Mission & Core Values Section Start >>-->
    <section class="emca-values-section section-padding section-bg pt-0">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="icon-box-items emca-icon-vision h-100">
                        <div class="icon">
                            <i class="fas fa-eye"></i>
                        </div>
                        <div class="content">
                            <h3>Our Vision</h3>
                            <p>
                                To become a leading provider of transformative and affordable ICT solutions that empower individuals, institutions, and businesses across Tanzania and worldwide.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="icon-box-items emca-icon-mission h-100">
                        <div class="icon">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <div class="content">
                            <h3>Our Mission</h3>
                            <p>
                                To deliver innovative, reliable, and client-focused ICT services and solutions that drive digital inclusion and operational excellence through modern technology and strategic partnerships.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="emca-core-values-block">
                <div class="section-title text-center">
                    <span class="wow fadeInUp">Our Core Values</span>
                    <h2 class="title-anim emca-values-title">What We Stand For</h2>
                    <p class="emca-core-values-intro wow fadeInUp" data-wow-delay=".3s">
                        The principles that guide how {{ config('company.name') }} serves clients, builds partnerships, and delivers ICT solutions every day.
                    </p>
                </div>

                <div class="row g-4 justify-content-center">
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="emca-core-value-card emca-icon-innovation">
                            <span class="value-accent"></span>
                            <div class="icon">
                                <i class="fas fa-lightbulb"></i>
                            </div>
                            <h3>Innovation</h3>
                            <p>Embracing emerging technologies to create smarter, future-ready solutions.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="emca-core-value-card emca-icon-excellence">
                            <span class="value-accent"></span>
                            <div class="icon">
                                <i class="fas fa-award"></i>
                            </div>
                            <h3>Excellence</h3>
                            <p>Striving for superior services with quality, precision, and continuous improvement.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="emca-core-value-card emca-icon-customer">
                            <span class="value-accent"></span>
                            <div class="icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <h3>Customer-Centricity</h3>
                            <p>Putting clients' needs first with responsive support and tailored ICT solutions.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="emca-core-value-card emca-icon-integrity">
                            <span class="value-accent"></span>
                            <div class="icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <h3>Integrity</h3>
                            <p>Building lasting trust through transparency, honesty, and ethical business practices.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--<< Service Counter Section Start >>-->
    <section class="service-counter-section fix">
        <div class="container">
            <div class="service-counter-wrapper">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="service-counter-content">
                            <div class="section-title">
                                <span class="text-white wow fadeInUp">Trusted ICT Partner</span>
                                <h2 class="text-white title-anim emca-counter-title">
                                    Empowering businesses across Tanzania & Worldwide
                                </h2>
                            </div>
                            <p class="mt-4 mt-md-0 text-white wow fadeInUp" data-wow-delay=".5s">
                                {{ config('company.name') }} delivers reliable, modern, and affordable ICT solutions — from consultancy and software development to web platforms and full infrastructure implementation.
                            </p>
                            <a href="{{ route('service') }}" class="theme-btn bg-white mt-4 wow fadeInUp" data-wow-delay=".7s">
                                <span>
                                    Explore Our Services
                                    <i class="fas fa-chevron-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 mt-4 mt-lg-0">
                        <div class="row g-3 g-md-4">
                        <div class="col-12 col-md-4 wow fadeInUp" data-wow-delay=".3s">
                                <div class="service-counter-items">
                                    <div class="icon">
                                        <i class="fas fa-layer-group"></i>
                                    </div>
                                    <div class="content">
                                        <h2>
                                            <span class="count">6</span>+</h2>
                                        <p>
                                            Professional <br>
                                            ICT Services
                                        </p>
                                    </div>
                                </div>
                        </div>
                        <div class="col-12 col-md-4 wow fadeInUp" data-wow-delay=".5s">
                            <div class="service-counter-items active">
                                <div class="icon">
                                    <i class="fas fa-award"></i>
                                </div>
                                <div class="content">
                                    <h2>
                                        <span class="count">100</span>%</h2>
                                    <p>
                                        Licensed & <br>
                                        Registered
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 wow fadeInUp" data-wow-delay=".7s">
                                <div class="service-counter-items">
                                    <div class="icon">
                                        <i class="fas fa-map-marked-alt"></i>
                                    </div>
                                    <div class="content">
                                        <h2>
                                            <span class="count">6</span>+</h2>
                                        <p>
                                            Regions <br>
                                            Served
                                        </p>
                                    </div>
                                </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--<< Testimonial Section Start >>-->
    <section class="testimonial-section-4 fix section-padding">
        <div class="client-1">
            <img src="{{ asset('visaland-html/assets/img/testimonial/08.png') }}" alt="img">
        </div>
        <div class="client-2">
            <img src="{{ asset('visaland-html/assets/img/testimonial/09.png') }}" alt="img">
        </div>
        <div class="container">
            <div class="section-title text-center">
                <span class="wow fadeInUp">Our Testimonials</span>
                <h2 class="title-anim">
                    Let’s Explore Why People Say <br> About Our Services
                </h2>
            </div>
            <div class="testimonial-carousel-active-4">
                @include('partials.testimonials-about-carousel', ['testimonials' => $testimonials ?? collect()])
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