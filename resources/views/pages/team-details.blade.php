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
        <title>{{ $member['name']  }} - Team | {{ config('company.site_title', 'EmCa Techonologies') }}</title>
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

    <body class="emca-team-details-page">

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
           <div class="breadcrumb-wrapper section-padding bg-cover" style="background-image: url('{{ asset('images/team.jpg') }}');">
            <div class="container">
                <div class="page-heading">
                    <h1 class="wow fadeInUp" data-wow-delay=".3s">{{ $member['name'] }}</h1>
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
                            <a href="{{ route('team') }}">Team</a>
                        </li>
                        <li>
                            <i class="fal fa-minus"></i>
                        </li>
                        <li>
                            {{ $member['name'] }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        @include('partials.team-details-profile')

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