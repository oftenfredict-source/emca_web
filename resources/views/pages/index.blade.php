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

        <!-- Preloader Start -->
        <div id="preloader" class="preloader">
            <div class="animation-preloader">
                <div class="spinner">                
                </div>
                <div class="txt-loading">
                    <span data-text-preloader="V" class="letters-loading">
                        V
                    </span>
                    <span data-text-preloader="I" class="letters-loading">
                        I
                    </span>
                    <span data-text-preloader="S" class="letters-loading">
                        S
                    </span>
                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
                    <span data-text-preloader="L" class="letters-loading">
                        L
                    </span>
                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
                    <span data-text-preloader="N" class="letters-loading">
                        N
                    </span>
                    <span data-text-preloader="D" class="letters-loading">
                        D
                    </span>
                </div>
                <p class="text-center">Loading</p>
            </div>
            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div>

        <!--<< Mouse Cursor Start >>-->  
        <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div>

        <!-- Offcanvas Area Start -->
        <div class="fix-area">
            <div class="offcanvas__info">
                <div class="offcanvas__wrapper">
                    <div class="offcanvas__content">
                        <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                            <div class="offcanvas__logo">
                                <a href="{{ route('home') }}">
                                    <img src="{{ asset('images/logo_header.png') }}" alt="logo-img">
                                </a>
                            </div>
                            <div class="offcanvas__close">
                                <button>
                                <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>

                        <div class="mobile-menu fix mb-3"></div>
                        <div class="offcanvas__contact">
                            <h4>Contact Info</h4>
                            <ul>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a target="_blank" href="#">Main Street, Melbourne, Australia</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                         <a href="mailto:info@example.com"><span class="mailto:info@azent.com">info@example.com</span></a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="fal fa-clock"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a target="_blank" href="#">Mod-friday, 09am -05pm</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="far fa-phone"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a href="tel:+11002345909">+11002345909</a>
                                    </div>
                                </li>
                            </ul>
                            <div class="header-button mt-4">
                                <a href="{{ route('contact') }}" class="theme-btn text-center">
                                    <span>Contact Us<i class="fas fa-chevron-right"></i></span>
                                </a>
                            </div>
                            <div class="social-icon d-flex align-items-center">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="offcanvas__overlay"></div>

        @include('partials.header-top')

        <!-- Header Area Start -->
        <header class="header-section-1">
            <div id="header-sticky" class="header-1">
                <div class="container-fluid">
                    <div class="mega-menu-wrapper">
                        <div class="header-main">
                            <div class="header-left">
                                <div class="logo">
                                    <a href="{{ route('home') }}" class="header-logo">
                                        <img src="{{ asset('images/logo_header.png') }}" alt="logo-img">
                                    </a>
                                </div>
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
                                                <li>
                                                    <a href="{{ route('news') }}">
                                                        Blog
                                                        <i class="fas fa-angle-down"></i>
                                                    </a>
                                                    <ul class="submenu">
                                                        <li><a href="{{ route('news.grid') }}">Blog Grid</a></li>
                                                        <li><a href="{{ route('news') }}">Blog Standard </a></li>
                                                        <li><a href="{{ route('news.details') }}">Blog Details</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="{{ route('contact') }}">Contact</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="header-right d-flex justify-content-end align-items-center">
                                <div class="contact-info">
                                    <div class="icon">
                                        <img src="{{ asset('visaland-html/assets/img/call.png') }}" alt="img">
                                    </div>
                                    <div class="content">
                                        <p>Phone:</p>
                                        <h6>
                                            <a href="tel:+23645689622">+236 (456) 896 22</a>
                                        </h6>
                                    </div>
                                </div>
                                <div class="header-button">
                                    <a href="{{ route('contact') }}" class="link-btn">
                                        <span>Get A Quote</span>
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                </div>
                                <a href="#0" class="search-trigger search-icon"><i class="fal fa-search"></i></a>
                                <div class="header__hamburger d-lg-none my-auto">
                                    <div class="sidebar__toggle">
                                        <i class="far fa-bars"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Search Area Start -->
        <div class="search-wrap">
            <div class="search-inner">
                <i class="fas fa-times search-close" id="search-close"></i>
                <div class="search-cell">
                    <form method="get">
                        <div class="search-field-holder">
                            <input type="search" class="main-search-input" placeholder="Search...">
                        </div>
                    </form>
                </div>
            </div>
        </div>

            <!--<< Hero Section Start >>--> 
            <section class="hero-section hero-1">
                <div class="swiper-dot">
                    <div class="dot"></div>
                </div>
                <div class="swiper hero-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="shape-image" data-animation="fadeInLeft" data-delay="2.1s">
                                <img src="{{ asset('visaland-html/assets/img/hero/object1.png') }}" alt="shape-img">
                            </div>
                            <div class="shape-image-2 fadeInRight animated" data-animation="fadeInRight" data-delay="2.3s">
                                <img src="{{ asset('visaland-html/assets/img/hero/right-shape.png') }}" alt="shape-img">
                            </div>
                            <div class="hero-image bg-cover" style="background-image: url('{{ asset('visaland-html/assets/img/hero/hero-1.jpg') }}');"></div>
                            <div class="container">
                                <div class="row g-4">
                                    <div class="col-lg-8">
                                        <div class="hero-content">
                                            <h6 data-animation="slideInRight" data-duration="2s" data-delay=".3s">Your Most Trusted Partners</h6>
                                            <h1 data-animation="slideInRight" data-duration="2s" data-delay=".5s">
                                                Immigration & <br>  Visa Consulting <br>  Here...
                                            </h1>
                                            <p data-animation="slideInRight" data-duration="2s" data-delay=".7s">
                                                Transmds is the world’s driving worldwide coordinations supplier we uphold <br> industry and exchange  the worldwide trade of merchandi
                                            </p>
                                            <div class="hero-button">
                                                <a href="{{ route('home') }}" class="theme-btn theme-color-2" data-animation="slideInRight" data-duration="2s" data-delay=".9s"><span>Learn More <i class="fas fa-chevron-right"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="shape-image" data-animation="fadeInLeft" data-delay="2.1s">
                                <img src="{{ asset('visaland-html/assets/img/hero/object1.png') }}" alt="shape-img">
                            </div>
                            <div class="shape-image-2 fadeInRight animated" data-animation="fadeInRight" data-delay="2.3s">
                                <img src="{{ asset('visaland-html/assets/img/hero/right-shape.png') }}" alt="shape-img">
                            </div>
                            <div class="hero-image bg-cover" style="background-image: url('{{ asset('visaland-html/assets/img/hero/hero-2.jpg') }}');"></div>
                            <div class="container">
                                <div class="row g-4">
                                    <div class="col-lg-8">
                                        <div class="hero-content">
                                            <h6 data-animation="slideInRight" data-duration="2s" data-delay=".3s">Your Most Trusted Partners</h6>
                                            <h1 data-animation="slideInRight" data-duration="2s" data-delay=".5s">
                                                Immigration & <br>  Visa Consulting <br>  Here...
                                            </h1>
                                            <p data-animation="slideInRight" data-duration="2s" data-delay=".7s">
                                                Transmds is the world’s driving worldwide coordinations supplier we uphold <br> industry and exchange  the worldwide trade of merchandi
                                            </p>
                                            <div class="hero-button">
                                                <a href="{{ route('home') }}" class="theme-btn theme-color-2" data-animation="slideInRight" data-duration="2s" data-delay=".9s"><span>Learn More <i class="fas fa-chevron-right"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="shape-image" data-animation="fadeInLeft" data-delay="2.1s">
                                <img src="{{ asset('visaland-html/assets/img/hero/object1.png') }}" alt="shape-img">
                            </div>
                            <div class="shape-image-2 fadeInRight animated" data-animation="fadeInRight" data-delay="2.3s">
                                <img src="{{ asset('visaland-html/assets/img/hero/right-shape.png') }}" alt="shape-img">
                            </div>
                            <div class="hero-image bg-cover" style="background-image: url('{{ asset('visaland-html/assets/img/hero/hero-3.jpg') }}');"></div>
                            <div class="container">
                                <div class="row g-4">
                                    <div class="col-lg-8">
                                        <div class="hero-content">
                                            <h6 data-animation="slideInRight" data-duration="2s" data-delay=".3s">Your Most Trusted Partners</h6>
                                            <h1 data-animation="slideInRight" data-duration="2s" data-delay=".5s">
                                                Immigration & <br>  Visa Consulting <br>  Here...
                                            </h1>
                                            <p data-animation="slideInRight" data-duration="2s" data-delay=".7s">
                                                Transmds is the world’s driving worldwide coordinations supplier we uphold <br> industry and exchange  the worldwide trade of merchandi
                                            </p>
                                            <div class="hero-button">
                                                <a href="{{ route('home') }}" class="theme-btn theme-color-2" data-animation="slideInRight" data-duration="2s" data-delay=".9s"><span>Learn More <i class="fas fa-chevron-right"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="shape-image" data-animation="fadeInLeft" data-delay="2.1s">
                                <img src="{{ asset('visaland-html/assets/img/hero/object1.png') }}" alt="shape-img">
                            </div>
                            <div class="shape-image-2 fadeInRight animated" data-animation="fadeInRight" data-delay="2.3s">
                                <img src="{{ asset('visaland-html/assets/img/hero/right-shape.png') }}" alt="shape-img">
                            </div>
                            <div class="hero-image bg-cover" style="background-image: url('{{ asset('visaland-html/assets/img/hero/hero-2.jpg') }}');"></div>
                            <div class="container">
                                <div class="row g-4">
                                    <div class="col-lg-8">
                                        <div class="hero-content">
                                            <h6 data-animation="slideInRight" data-duration="2s" data-delay=".3s">Your Most Trusted Partners</h6>
                                            <h1 data-animation="slideInRight" data-duration="2s" data-delay=".5s">
                                                Immigration & <br>  Visa Consulting <br>  Here...
                                            </h1>
                                            <p data-animation="slideInRight" data-duration="2s" data-delay=".7s">
                                                Transmds is the world’s driving worldwide coordinations supplier we uphold <br> industry and exchange  the worldwide trade of merchandi
                                            </p>
                                            <div class="hero-button">
                                                <a href="{{ route('home') }}" class="theme-btn theme-color-2" data-animation="slideInRight" data-duration="2s" data-delay=".9s"><span>Learn More <i class="fas fa-chevron-right"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    
            <!--<< About Section Start >>--> 
            <section class="about-section fix section-padding emca-home-about-section">
                <div class="container">
                    <div class="about-wrapper">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="about-image-items">
                                    <div class="border-shape">
                                        <img src="{{ asset('visaland-html/assets/img/about/border-shape.png') }}" alt="shape-img">
                                    </div>
                                    <div class="about-image bg-cover wow fadeInLeft" data-wow-delay=".3s" style="background-image: url('{{ asset('images/About1.jpg') }}');">
                                        <div class="about-image-2 wow fadeInUp" data-wow-delay=".5s" style="width: 269px; height: 277px;">
                                            <img src="{{ asset('images/About2.jpg') }}" alt="about-img" width="269" height="277" style="width: 100%; height: 100%; object-fit: cover;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-5 mt-lg-0">
                                <div class="about-content">
                                    <div class="section-title">
                                        <span class="wow fadeInUp">About {{ config('company.name') }}</span>
                                        <h2 class="title-anim">
                                            Leading ICT Solutions in Tanzania & East Africa
                                        </h2>
                                    </div>
                                    <p class="mt-4 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                        {{ config('company.legal_name') }} is a leading Tanzanian ICT firm that provides cutting-edge technology services and solutions to clients across the country and the East African region.
                                    </p>
                                    <p class="mt-3 wow fadeInUp" data-wow-delay=".55s">
                                        Founded with a clear purpose: to provide reliable, modern, and affordable ICT services and solutions tailored to enable individuals, institutions, and businesses of all sizes to thrive in the digital era.
                                    </p>
                                    <p class="mt-3 wow fadeInUp" data-wow-delay=".6s">
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
                                        <div class="emca-about-read-more wow fadeInUp" data-wow-delay=".5s">
                                            <a href="{{ route('about') }}" class="theme-btn">
                                                <span>
                                                    Read More
                                                    <i class="fas fa-chevron-right"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    
            <!--<< Our Services Section Start >>-->
            <section class="service-section fix section-padding emca-home-services-section">
                <div class="container">
                    <div class="section-title text-center">
                        <span class="wow fadeInUp">Our Services</span>
                        <h2 class="title-anim">Explore our wide range of ICT services <br> tailored to your business needs</h2>
                    </div>
                    <div class="service-wrapper p-0">
                        <div class="row g-4 emca-service-cards-grid">
                            @php
                                $homeServiceSlugs = ['web-development', 'graphics-design', 'social-media-management'];
                            @endphp
                            @foreach ($homeServiceSlugs as $slug)
                                @php $item = config('emca-services')[$slug]; @endphp
                            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp d-flex" data-wow-delay="{{ number_format($loop->iteration * 0.2 + 0.1, 1) }}s">
                                <div class="service-card-items emca-service-card mt-0 w-100">
                                    <h3><a href="{{ route('services.show', $slug) }}">{{ $item['name'] }}</a></h3>
                                    <p class="emca-service-card-desc">{{ $item['description'] }}</p>
                                    <div class="service-thumb">
                                        <img src="{{ asset($item['image']) }}" alt="{{ $item['name'] }}">
                                    </div>
                                    <a href="{{ route('services.show', $slug) }}" class="link-btn">
                                        <span>read more</span>
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="text-center mt-4 mt-md-5 wow fadeInUp" data-wow-delay=".4s">
                        <a href="{{ route('service') }}" class="theme-btn">
                            <span>
                                Explore All Services
                                <i class="fas fa-chevron-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </section>
    
            <!--<< Our Solutions Section Start >>-->
            <section class="visa-service-section emca-home-solutions fix section-padding">
                <div class="container">
                    <div class="section-title text-center">
                        <span class="wow fadeInUp">Our Solutions</span>
                        <h2 class="title-anim">Software solutions to streamline <br> your business</h2>
                    </div>
                    <div class="row">
                        @php
                            $homeSolutionSlugs = ['shulexpert', 'mauzolink', 'wauminilink'];
                        @endphp
                        @foreach ($homeSolutionSlugs as $slug)
                            @php $solution = config('solutions')[$slug]; @endphp
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="{{ number_format($loop->iteration * 0.1 + 0.2, 1) }}s">
                            <div class="service-visa-items">
                                <div class="service-visa-thumb">
                                    <img src="{{ asset($solution['image']) }}" alt="{{ $solution['name'] }}">
                                    <img src="{{ asset($solution['image']) }}" alt="{{ $solution['name'] }}">
                                    <a href="{{ route('solutions.show', $slug) }}" class="image-overlay">
                                        <i class="fal fa-plus"></i>
                                    </a>
                                </div>
                                <div class="service-visa-content emca-solution-card-content">
                                    <span class="emca-solution-category">{{ $solution['category'] }}</span>
                                    <h3><a href="{{ route('solutions.show', $slug) }}">{{ $solution['name'] }}</a></h3>
                                    <p>{{ $solution['description'] }}</p>
                                    <a href="{{ route('solutions.show', $slug) }}" class="theme-btn emca-solution-btn">
                                        <span>
                                            Learn More
                                            <i class="fas fa-chevron-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="text-center mt-4 mt-md-5 wow fadeInUp" data-wow-delay=".4s">
                        <a href="{{ route('solutions') }}" class="theme-btn">
                            <span>
                                Explore All Solutions
                                <i class="fas fa-chevron-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </section>
    
            <!--<< Server Banner Section Start >>-->
            <section class="cta-banner-section emca-server-banner-section bg-cover section-padding" style="background-image: url('{{ asset('images/image1.jpg') }}');">
                <div class="container">
                    <div class="cta-banner-wrapper section-padding pt-0">
                        <div class="video-box wow fadeInUp" data-wow-delay=".3s">
                            <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I" class="video-buttton ripple video-popup">
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
    
            <!--<< Feature Icon Box Section Start >>-->
            <section class="feature-icon-box-area">
                <div class="container">
                    <div class="feature-icon-box-wrapper">
                        <div class="row g-4">
                            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                                <div class="icon-box-items">
                                    <div class="icon">
                                        <i class="fas fa-laptop-code"></i>
                                    </div>
                                    <div class="content">
                                        <h3>ICT Consultancy</h3>
                                        <p>
                                            Strategic guidance from assessment to implementation for smart digital transformation.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                                <div class="icon-box-items active">
                                    <div class="icon">
                                        <i class="fas fa-award"></i>
                                    </div>
                                    <div class="content">
                                        <h3>Proven Track Record</h3>
                                        <p>
                                            5+ years delivering trusted ICT services across Tanzania and East Africa.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                                <div class="icon-box-items">
                                    <div class="icon">
                                        <i class="fas fa-server"></i>
                                    </div>
                                    <div class="content">
                                        <h3>Cloud & Infrastructure</h3>
                                        <p>
                                            Reliable servers, networking, and cloud solutions built for security and growth.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    
            @include('partials.live-solutions-section')
    
            <!--<< Team Section Start >>-->
            <section class="team-section section-padding">
                <div class="container">
                    <div class="section-title text-center">
                        <span class="wow fadeInUp">Our Expert Team</span>
                        <h2 class="title-anim">
                            Meet our Creative architecture team <br> for your dream home
                        </h2>
                    </div>
                   <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="team-box-items style-2">
                                <div class="team-image">
                                    <img src="{{ asset('visaland-html/assets/img/team/01.jpg') }}" alt="Caroline Shija">
                                    <ul class="social-icon d-grid justify-content-center align-items-center">
                                        <li>
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="team-content">
                                    <h3><a href="{{ route('team.details') }}">Caroline Shija</a></h3>
                                    <p>Managing Director</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                            <div class="team-box-items">
                                <div class="team-image">
                                    <img src="{{ asset('visaland-html/assets/img/team/02.jpg') }}" alt="Mariana Swai">
                                    <ul class="social-icon d-grid justify-content-center align-items-center">
                                        <li>
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="team-content">
                                    <h3><a href="{{ route('team.details') }}">Mariana Swai</a></h3>
                                    <p>Accountant</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="team-box-items style-2">
                                <div class="team-image">
                                    <img src="{{ asset('images/often.jpg') }}" alt="Ofeni Mwakapola">
                                    <ul class="social-icon d-grid justify-content-center align-items-center">
                                        <li>
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="team-content">
                                    <h3><a href="{{ route('team.details') }}">Ofeni Mwakapola</a></h3>
                                    <p>Developer</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".9s">
                            <div class="team-box-items">
                                <div class="team-image">
                                    <img src="{{ asset('visaland-html/assets/img/team/04.jpg') }}" alt="Leonard Kingoye">
                                    <ul class="social-icon d-grid justify-content-center align-items-center">
                                        <li>
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="team-content">
                                    <h3><a href="{{ route('team.details') }}">Leonard Kingoye</a></h3>
                                    <p>Graphics Designer</p>
                                </div>
                            </div>
                        </div>
                   </div>
                </div>
            </section>
    
            <!--<<Choose us section Start >>-->
            <section class="choose-us-section emca-choose-us-section section-padding pt-0">
                <div class="container">
                    <div class="choose-us-wrapper">
                        <div class="row g-4">
                            <div class="col-lg-5">
                                <div class="choose-us-content emca-choose-us-content">
                                    <div class="section-title">
                                        <span class="wow fadeInUp">Why Choose Us</span>
                                        <h2 class="title-anim">ICT expertise and business insight that drive real results</h2>
                                    </div>
                                    <div class="icon-box-items wow fadeInUp" data-wow-delay=".3s">
                                        <div class="icon">
                                            <i class="fas fa-rocket"></i>
                                        </div>
                                        <div class="content">
                                            <h3 class="mb-2">Fast Implementation</h3>
                                            <p>Rapid deployment of solutions with minimal disruption to your business operations</p>
                                        </div>
                                    </div>
                                    <div class="icon-box-items wow fadeInUp" data-wow-delay=".4s">
                                        <div class="icon">
                                            <i class="fas fa-shield-alt"></i>
                                        </div>
                                        <div class="content">
                                            <h3 class="mb-2">Secure &amp; Reliable</h3>
                                            <p>Enterprise-grade security and 99.9% uptime guarantee for all our solutions</p>
                                        </div>
                                    </div>
                                    <div class="icon-box-items wow fadeInUp" data-wow-delay=".5s">
                                        <div class="icon">
                                            <i class="fas fa-headset"></i>
                                        </div>
                                        <div class="content">
                                            <h3 class="mb-2">24/7 Support</h3>
                                            <p>Round-the-clock technical support and maintenance services for peace of mind</p>
                                        </div>
                                    </div>
                                    <div class="icon-box-items wow fadeInUp" data-wow-delay=".5s">
                                        <div class="icon">
                                            <i class="fas fa-tags"></i>
                                        </div>
                                        <div class="content">
                                            <h3 class="mb-2">Cost-Effective</h3>
                                            <p>Affordable pricing without compromising on quality or functionality</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="choose-us-image-items">
                                    <div class="row g-4">
                                        <div class="col-lg-7 wow fadeInUp" data-wow-delay=".3s">
                                            <div class="choose-image-1">
                                                <img src="{{ asset('visaland-html/assets/img/choose-us/01.jpg') }}" alt="img">
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="choose-image-2 bg-cover wow fadeInUp" data-wow-delay=".3s" style="background-image: url('{{ asset('visaland-html/assets/img/choose-us/02.jpg') }}');"></div>
                                            <div class="choose-image-3 wow fadeInUp" data-wow-delay=".5s">
                                                <img src="{{ asset('visaland-html/assets/img/choose-us/03.jpg') }}" alt="img">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="choose-box">
                                        <h3>850+ Successful <br> Projects</h3>
                                        <img src="{{ asset('visaland-html/assets/img/about/client.png') }}" alt="author-img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    
            <!--<< Counter Section Start >>-->
            <section class="counter-section section-padding section-bg">
                <div class="container">
                    <div class="counter-wrapper">
                        <div class="row g-4">
                            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                                <div class="counter-items text-center">
                                    <div class="icon center">
                                        <i class="fas fa-folder-open"></i>
                                    </div>
                                    <div class="content">
                                        <h2><span class="count">50</span>+</h2>
                                        <p>
                                            Total <br>
                                            Projects
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                                <div class="counter-items text-center">
                                    <div class="icon center">
                                        <i class="fas fa-smile"></i>
                                    </div>
                                    <div class="content">
                                        <h2><span class="count">98</span>%</h2>
                                        <p>
                                            Client <br>
                                            Satisfaction
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                                <div class="counter-items text-center">
                                    <div class="icon center">
                                        <i class="fas fa-users"></i>
                                    </div>
                                    <div class="content">
                                        <h2><span class="count">10</span>+</h2>
                                        <p>
                                            Team <br>
                                            Members
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".9s">
                                <div class="counter-items text-center">
                                    <div class="icon center">
                                       <i class="fas fa-award"></i>
                                    </div>
                                    <div class="content">
                                        <h2><span class="count">5</span>+</h2>
                                        <p>
                                            Years <br>
                                            Experience
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    
            <!--<< Testimonial Section Start >>-->
            <section class="testimonial-section section-padding">
                <div class="container">
                    <div class="section-title text-center">
                        <span class="wow fadeInUp">Our Testimonials</span>
                        <h2 class="title-anim">
                            Let’s Explore Why People Say <br> About Our Services
                        </h2>
                    </div>
                    <div class="testimonial-carousel-active">
                        <div class="testimonial-card-items">
                            <div class="author-items">
                                <div class="author-image testimonial-person-icon">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="author-content">
                                    <h5>John Mwangi</h5>
                                    <span>CEO, Tech Solutions</span>
                                    <span class="emca-testimonial-client">Client</span>
                                </div>
                            </div>
                            <p>Excellent service and professional team. Highly recommended!</p>
                            <div class="star">
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                            </div>
                        </div>
                        <div class="testimonial-card-items">
                            <div class="author-items">
                                <div class="author-image testimonial-person-icon">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="author-content">
                                    <h5>Sarah Kimathi</h5>
                                    <span>Director, Business Innovations</span>
                                    <span class="emca-testimonial-client">Client</span>
                                </div>
                            </div>
                            <p>Outstanding work and great support. Exceeded our expectations!</p>
                            <div class="star">
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                            </div>
                        </div>
                        <div class="testimonial-card-items">
                            <div class="author-items">
                                <div class="author-image testimonial-person-icon">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="author-content">
                                    <h5>David Ochieng</h5>
                                    <span>Manager, Digital Services</span>
                                    <span class="emca-testimonial-client">Client</span>
                                </div>
                            </div>
                            <p>Professional service and reliable solutions. Great value for money!</p>
                            <div class="star">
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                            </div>
                        </div>
                        <div class="testimonial-card-items">
                            <div class="author-items">
                                <div class="author-image testimonial-person-icon">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="author-content">
                                    <h5>Shikon Islam</h5>
                                    <span>Graphics Designer</span>
                                    <span class="emca-testimonial-client">Client</span>
                                </div>
                            </div>
                            <p>Amazing graphics and branding. Our business looks professional and stands out!</p>
                            <div class="star">
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    
            <!--<< Cta Chat Section Start >>-->
            <section class="cta-chat-section section-padding pt-0">
                <div class="container">
                    <div class="cta-chat-wrapper">
                        <div class="chat-items wow fadeInUp" data-wow-delay=".3s">
                            <div class="icon">
                                <i class="flaticon-chat"></i>
                            </div>
                            <div class="content">
                                <h3>Let’s Discuss Your Business Needs</h3>
                                <p>Tell us what you’re looking for—ICT consulting, cloud & infrastructure, graphics design, or social media—and we’ll point you to the best service.</p>
                            </div>
                        </div>
                        <a href="{{ route('contact') }}" class="theme-btn bg-white wow fadeInUp" data-wow-delay=".5s">
                           <span>
                                Explore Our Services
                                <i class="fas fa-chevron-right"></i>
                           </span>
                        </a>
                    </div>
                </div>
            </section>
    
            <!--<< News Section Start >>-->
            <section class="process-work-section fix section-padding pt-0 emca-home-process-section">
                <div class="container">
                    <div class="section-title text-center">
                        <span class="wow fadeInUp">Working Process</span>
                        <h2 class="title-anim">4 Step Follow You Can Get <br>
                            Your Service Faster</h2>
                    </div>
                    <div class="process-work-wrapper">
                        <div class="line-shape">
                            <img src="{{ asset('visaland-html/assets/img/linepng.png') }}" alt="img">
                        </div>
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                <div class="work-process-items text-center">
                                    <div class="icon">
                                        <i class="fas fa-laptop-code"></i>
                                        <h6 class="number">
                                            1
                                        </h6>
                                    </div>
                                    <div class="content">
                                        <h4>Choose A Service</h4>
                                        <p>
                                            Pick the ICT, cloud, graphics design, or social media service that fits your needs.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                <div class="work-process-items text-center">
                                    <div class="content style-2">
                                        <h4>Request A Meeting</h4>
                                        <p>
                                            Book a short consultation with our team to understand your requirements.
                                        </p>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-calendar-alt"></i>
                                        <h6 class="number">
                                            2
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                <div class="work-process-items text-center">
                                    <div class="icon">
                                        <i class="fas fa-file-invoice-dollar"></i>
                                        <h6 class="number">
                                            3
                                        </h6>
                                    </div>
                                    <div class="content">
                                        <h4>Documents and Payments</h4>
                                        <p>
                                            Share the needed details and complete secure payments to start delivery.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                                <div class="work-process-items text-center">
                                    <div class="content style-2">
                                        <h4>Receive Your Service</h4>
                                        <p>
                                            We deliver your solution and guide you to a smooth launch.
                                        </p>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-rocket"></i>
                                        <h6 class="number">
                                            4
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    
            <!--<< News Section Start >>-->
            <section class="news-section fix section-padding emca-home-news-section">
                <div class="container">
                    <div class="section-title text-center">
                        <span class="wow fadeInUp">News & Blog</span>
                        <h2 class="title-anim">Read Our Latest News & Blog</h2>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="news-box-items">
                                <div class="news-image">
                                    <img src="{{ asset('visaland-html/assets/img/news/01.jpg') }}" alt="img">
                                    <img src="{{ asset('visaland-html/assets/img/news/01.jpg') }}" alt="img">
                                    <h6 class="date">26 <span>Nov</span></h6>
                                </div>
                                <div class="news-content">
                                    <ul class="post-date">
                                        <li>
                                            <i class="far fa-user-circle"></i>
                                            Shikhon .H
                                        </li>
                                        <li>
                                            <i class="fal fa-comments"></i>
                                            Comments (03)
                                        </li>
                                    </ul>
                                    <h3><a href="{{ route('news.details') }}">Navigating Borders Ultimate Guide to Visa Success</a></h3>
                                    <p>
                                        Transmds is the world’s driving worldwide coordinations supplier
                                        we uphold.
                                    </p>
                                    <a href="{{ route('news.details') }}" class="link-btn">
                                        <span>Read More</span> <i class="fas fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                            <div class="news-box-items">
                                <div class="news-image">
                                    <img src="{{ asset('visaland-html/assets/img/news/02.jpg') }}" alt="img">
                                    <img src="{{ asset('visaland-html/assets/img/news/02.jpg') }}" alt="img">
                                    <h6 class="date">11 <span>Dec</span></h6>
                                </div>
                                <div class="news-content">
                                    <ul class="post-date">
                                        <li>
                                            <i class="far fa-user-circle"></i>
                                            Shikhon .H
                                        </li>
                                        <li>
                                            <i class="fal fa-comments"></i>
                                            Comments (03)
                                        </li>
                                    </ul>
                                    <h3><a href="{{ route('news.details') }}">Unlocking Opportunities The Visa Journey Unveiled</a></h3>
                                    <p>
                                        Transmds is the world’s driving worldwide coordinations supplier
                                        we uphold.
                                    </p>
                                    <a href="{{ route('news.details') }}" class="link-btn">
                                        <span>Read More</span> <i class="fas fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="news-box-items">
                                <div class="news-image">
                                    <img src="{{ asset('visaland-html/assets/img/news/09.jpg') }}" alt="img">
                                    <img src="{{ asset('visaland-html/assets/img/news/09.jpg') }}" alt="img">
                                    <h6 class="date">27 <span>Sep</span></h6>
                                </div>
                                <div class="news-content">
                                    <ul class="post-date">
                                        <li>
                                            <i class="far fa-user-circle"></i>
                                            Shikhon .H
                                        </li>
                                        <li>
                                            <i class="fal fa-comments"></i>
                                            Comments (03)
                                        </li>
                                    </ul>
                                    <h3><a href="{{ route('news.details') }}">Navigating Borders Ultimate Guide to Visa Success</a></h3>
                                    <p>
                                        Transmds is the world’s driving worldwide coordinations supplier
                                        we uphold.
                                    </p>
                                    <a href="{{ route('news.details') }}" class="link-btn">
                                        <span>Read More</span> <i class="fas fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    
            <!--<< Brand Section Start >>-->
            <div class="brand-section fix section-padding emca-home-brand-section">
                <div class="container">
                    <div class="brand-wrapper">
                        <h6 class="text-center wow fadeInUp" data-wow-delay=".3s">Our Proudly Partners</h6>
                        <div class="brand-carousel-active">
                            @php
                                $brandLogos = [
                                    ['file' => 'asa-logo.png', 'name' => 'ASA'],
                                    ['file' => 'jomofa_logo.jpg', 'name' => 'Jomofa'],
                                    ['file' => 'lawsonlogo.png', 'name' => 'Lawson'],
                                    ['file' => 'next_sms_logo.png', 'name' => 'Next SMS'],
                                    ['file' => 'primeland_logo.png', 'name' => 'Primeland'],
                                    ['file' => 'samshostel_logo.png', 'name' => 'Sams Hostel'],
                                    ['file' => 'tz_pure_nature_logo.webp', 'name' => 'TZ Pure Nature'],
                                ];
                            @endphp
                            @foreach ($brandLogos as $logo)
                                <div class="brand-image">
                                    <img src="{{ asset('images/' . $logo['file']) }}" alt="{{ $logo['name'] }} logo">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
    
            <!--<< Footer Section Start >>-->
            <footer class="footer-section footer-bg">
                <div class="container">
                    <div class="footer-widgets-wrapper">
                        <div class="row">
                            <div class="col-xl-3 col-sm-6 col-md-6 col-lg-3 wow fadeInUp" data-wow-delay=".2s">
                                <div class="single-footer-widget">
                                    <div class="widget-head">
                                        <a href="{{ route('home') }}">
                                        <img src="{{ asset('images/logo_header.png') }}" alt="logo-img">
                                        </a>
                                    </div>
                                    <div class="footer-content">
                                        <p>
                                            We believe it has the power to do <br>
                                            amazing things.
                                        </p>
                                        <a href="mailto:info@example.com" class="link">info@example.com</a>
                                        <div class="social-icon d-flex align-items-center">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-vimeo-v"></i></a>
                                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 ps-lg-5 col-sm-6 col-md-3 col-lg-3 wow fadeInUp" data-wow-delay=".4s">
                                <div class="single-footer-widget">
                                    <div class="widget-head">
                                        <h5>Explore</h5>
                                    </div>
                                    <ul class="list-items">
                                        <li>
                                            <a href="{{ route('about') }}"> 
                                                About
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('team') }}">
                                                Meet Experts
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('news.details') }}">
                                                News & Media
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('service.details') }}">
                                                Projects
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('contact') }}">
                                                Contact
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-2 ps-lg-4 col-sm-6 col-md-3 col-lg-3 wow fadeInUp" data-wow-delay=".6s">
                                <div class="single-footer-widget">
                                    <div class="widget-head">
                                        <h5>Visa</h5>
                                    </div>
                                    <ul class="list-items">
                                        <li>
                                            <a href="{{ route('service.details') }}">
                                                Work Visa
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('service.details') }}">
                                                Students Visa
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('service.details') }}">
                                                Business Visa
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('service.details') }}">
                                                Family Visa
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('service.details') }}">
                                                Travel Visa
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-2 col-sm-6 col-md-6 col-lg-3 wow fadeInUp" data-wow-delay=".8s">
                                <div class="single-footer-widget">
                                    <div class="widget-head">
                                        <h5>Address:</h5>
                                    </div>
                                    <div class="footer-address-text">
                                        <p>
                                            570 8th Ave, New York,NY 10018
                                            United States
                                        </p>
                                        <h5>Hours:</h5>
                                        <p>
                                            9.30am – 6.30pm <br>
                                            Monday to Friday
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 ps-xl-5 col-sm-6 col-md-6 col-lg-4 wow fadeInUp" data-wow-delay=".9s">
                                <div class="single-footer-widget">
                                    <div class="widget-head">
                                        <h5>Instagram</h5>
                                    </div>
                                    <div class="footer-gallery">
                                        <div class="gallery-wrap">
                                            <div class="gallery-item">
                                                <div class="thumb">
                                                    <a href="{{ asset('visaland-html/assets/img/footer/gallery-1.jpg') }}" class="img-popup">
                                                        <img src="{{ asset('visaland-html/assets/img/footer/gallery-1.jpg') }}" alt="gallery-img">
                                                        <div class="icon">
                                                            <i class="far fa-plus"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="thumb">
                                                    <a href="{{ asset('visaland-html/assets/img/footer/gallery-2.jpg') }}" class="img-popup">
                                                        <img src="{{ asset('visaland-html/assets/img/footer/gallery-2.jpg') }}" alt="gallery-img">
                                                        <div class="icon">
                                                            <i class="far fa-plus"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="thumb">
                                                    <a href="{{ asset('visaland-html/assets/img/footer/gallery-3.jpg') }}" class="img-popup">
                                                        <img src="{{ asset('visaland-html/assets/img/footer/gallery-3.jpg') }}" alt="gallery-img">
                                                        <div class="icon">
                                                            <i class="far fa-plus"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="gallery-item">
                                                <div class="thumb">
                                                    <a href="{{ asset('visaland-html/assets/img/footer/gallery-4.jpg') }}" class="img-popup">
                                                        <img src="{{ asset('visaland-html/assets/img/footer/gallery-4.jpg') }}" alt="gallery-img">
                                                        <div class="icon">
                                                            <i class="far fa-plus"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="thumb">
                                                    <a href="{{ asset('visaland-html/assets/img/footer/gallery-5.jpg') }}" class="img-popup">
                                                        <img src="{{ asset('visaland-html/assets/img/footer/gallery-5.jpg') }}" alt="gallery-img">
                                                        <div class="icon">
                                                            <i class="far fa-plus"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="thumb">
                                                    <a href="{{ asset('visaland-html/assets/img/footer/gallery-6.jpg') }}" class="img-popup">
                                                        <img src="{{ asset('visaland-html/assets/img/footer/gallery-6.jpg') }}" alt="gallery-img">
                                                        <div class="icon">
                                                            <i class="far fa-plus"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="container">
                        <div class="footer-wrapper d-flex align-items-center justify-content-between">
                            <p class="wow fadeInLeft color-2" data-wow-delay=".3s">
                                Copyright © 2024 <a href="{{ route('home') }}">Modinatheme</a>. All Rights Reserved.
                            </p>
                            <ul class="footer-menu wow fadeInRight" data-wow-delay=".5s">
                                <li>
                                    <a href="{{ route('about') }}">
                                        Company
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}">
                                        Support
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}">
                                        Privacy
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('faq') }}">
                                    Faqs
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>

       

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