<!DOCTYPE html>
<html lang="en">
    <!--<< Header Area >>-->
    <head>
        <!-- ========== Meta Tags ========== -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="EmCa Techonologies">
        <meta name="description" content="EmCa Techonologies — ICT solutions, software, and digital services in Tanzania and worldwide.">
        <!-- ======== Page title ============ -->
        <title>{{ config('company.site_title', 'EmCa Techonologies') }}</title>
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
                                                @include('partials.main-nav-menu')
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="header-right d-flex justify-content-end align-items-center">
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
                        @include('partials.hero-slides')
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
                                            Leading ICT Solutions in Tanzania & Worldwide
                                        </h2>
                                    </div>
                                    <p class="mt-4 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                        {{ config('company.legal_name') }} is a leading Tanzanian ICT firm that provides cutting-edge technology services and solutions to clients across the country and worldwide.
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
                            <a href="https://www.youtube.com/watch?v=mbE-MFd4UA0" class="video-buttton ripple" target="_blank" rel="noopener noreferrer">
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
                                            5+ years delivering trusted ICT services across Tanzania and worldwide.
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
    
            @include('partials.expert-team-section')
    
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
                                                <img src="{{ asset('images/why4.jpg') }}" alt="Why choose EmCa Techonologies">
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="choose-image-2 bg-cover wow fadeInUp" data-wow-delay=".3s" style="background-image: url('{{ asset('images/why2.jpg') }}');"></div>
                                            <div class="choose-image-3 wow fadeInUp" data-wow-delay=".5s">
                                                <img src="{{ asset('images/why3.jpg') }}" alt="Why choose EmCa Techonologies">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="circle-shape emca-projects-circle">
                                        <div class="emca-circle-ring emca-circle-ring--outer text-circle" aria-hidden="true">
                                            <svg viewBox="0 0 200 200" class="emca-circle-svg" role="img" aria-hidden="true">
                                                <defs>
                                                    <path id="emcaProjectsCirclePath" fill="none" d="M 100, 100 m -84, 0 a 84, 84 0 1, 1 168, 0 a 84, 84 0 1, 1 -168, 0"/>
                                                </defs>
                                                <text class="emca-circle-svg-text">
                                                    <textPath href="#emcaProjectsCirclePath" startOffset="0%">
                                                        SUCCESSFUL PROJECTS • EmCa TECHONOLOGIES •
                                                    </textPath>
                                                </text>
                                            </svg>
                                        </div>
                                        <div class="emca-circle-core">
                                            <div class="emca-circle-core__shine" aria-hidden="true"></div>
                                            <div class="about-title">
                                                <h2>50+</h2>
                                                <p>Successful <br> Projects</p>
                                            </div>
                                        </div>
                                        <div class="emca-circle-ring emca-circle-ring--dots text-circle-reverse" aria-hidden="true"></div>
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
                        @include('partials.testimonials-carousel', ['testimonials' => $testimonials ?? collect()])
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
                            <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".2s">
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
                            <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".4s">
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
                            <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".6s">
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
                            <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".8s">
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
                        @include('partials.home-news-section', ['latestPosts' => $latestPosts ?? collect()])
                        @if(empty($latestPosts) || $latestPosts->isEmpty())
                            <div class="col-12 text-center">
                                <p class="text-muted">Blog posts coming soon. Check back for updates from EmCa Techonologies.</p>
                            </div>
                        @endif
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