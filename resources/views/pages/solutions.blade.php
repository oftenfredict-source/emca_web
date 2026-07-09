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
        <title>Solutions - {{ config('company.name', 'EmCa Techonologies LTD') }}</title>
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
            <div class="breadcrumb-wrapper section-padding bg-cover" style="background-image: url('{{ asset('images/Solution.jpg') }}');">
                <div class="container">
                    <div class="page-heading">
                        <h1 class="wow fadeInUp" data-wow-delay=".3s">Solutions</h1>
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
                                Solutions
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
    
    
            <!--<< Solutions Section Start >>-->
            <section class="visa-service-section emca-home-solutions fix section-padding emca-solutions-listing-section">
                <div class="container">
                    <p class="emca-listing-intro wow fadeInUp">Software solutions to streamline your business</p>
                    <div class="row">
                        @foreach (config('solutions') as $slug => $solution)
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
                </div>
            </section>
    
            <!--<< Cta Contact Section Start >>--> 
            <section class="cta-banner-contact-section fix section-padding bg-cover" style="background-image: url('{{ asset('visaland-html/assets/img/contact-bg.jpg') }}');">
                <div class="container">
                    <div class="cta-banner-concat-wrapper">
                        <h2 class="title-anim">Ready to Streamline Your <br> Business Operations?</h2>
                        <a href="{{ route('contact') }}" class="theme-btn hover-white wow fadeInUp" data-wow-delay=".5s">
                            <span>
                                Contact Us
                                <i class="fas fa-chevron-right"></i>
                            </span>
                         </a>
                    </div>
                </div>
            </section>
    
            <!--<< Contact Section Start >>-->
            <section class="contact-section-one fix">
                <div class="container">
                    <div class="contact-wrapper">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="contact-left">
                                    <div class="contact-bg bg-cover" style="background-image: url('{{ asset('visaland-html/assets/img/contact/01.jpg') }}');"></div>
                                    <div class="contact-shape" style="background-image: url(assets/img/contact/bg-shape.png);"></div>
                                    <div class="section-title">
                                        <span class="text-white wow fadeInUp">Contact us</span>
                                        <h2 class="text-white title-anim">Get a Call Back</h2>
                                    </div>
                                    <form action="#" id="contact-form" method="POST" class="mt-4 mt-md-0">
                                        <div class="row g-3">
                                            <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                                                <div class="form-clt">
                                                    <input type="text" name="name" id="name" placeholder="First Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                                                <div class="form-clt">
                                                    <input type="text" name="email" id="email" placeholder="Email Address">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                                                <div class="form-clt">
                                                    <input type="text" name="phone" id="phone" placeholder="Phone Number">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                                                <div class="form-clt">
                                                    <div class="nice-select open" tabindex="0">
                                                       <span class="current">
                                                         Choose Services
                                                       </span>
                                                       <ul class="list">
                                                          <li data-value="1" class="option selected focus">
                                                             Default sorting
                                                       </li>
                                                       <li data-value="1" class="option">
                                                          Sort by popularity
                                                       </li>
                                                       <li data-value="1" class="option">
                                                          Sort by average rating
                                                       </li>
                                                       <li data-value="1" class="option">
                                                          Sort by latest
                                                       </li>
                                                    </ul>
                                                    </div>
                                                 </div>
                                            </div>
                                            <div class="col-lg-12 wow fadeInUp" data-wow-delay=".3s">
                                                <div class="form-clt">
                                                    <textarea name="message" id="message" placeholder="Write Your Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 wow fadeInUp" data-wow-delay=".5s">
                                                <button type="submit" class="theme-btn">
                                                   <span>
                                                    Send Us Messages
                                                    <i class="fas fa-chevron-right"></i>
                                                   </span>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="contact-right">
                                    <div class="google-map-box">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6678.7619084840835!2d144.9618311901502!3d-37.81450084255415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642b4758afc1d%3A0x3119cc820fdfc62e!2sEnvato!5e0!3m2!1sen!2sbd!4v1641984054261!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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