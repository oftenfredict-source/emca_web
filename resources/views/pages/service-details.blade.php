<!DOCTYPE html>
<html lang="en">
    <!--<< Header Area >>-->
    <head>
        <!-- ========== Meta Tags ========== -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="modinatheme">
        <meta name="description" content="{{ $service['name'] }} — {{ config('company.name') }}">
        <!-- ======== Page title ============ -->
        <title>{{ $service['title'] }} - {{ config('company.site_title', 'EmCa Techonologies') }}</title>
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
        <div class="breadcrumb-wrapper section-padding bg-cover" style="background-image: url('{{ asset($service['banner'] ?? $service['image']) }}');">
            <div class="container">
                <div class="page-heading">
                    <h1 class="wow fadeInUp" data-wow-delay=".3s">{{ $service['name'] }}</h1>
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
                            <a href="{{ route('service') }}">Services</a>
                        </li>
                        <li>
                            <i class="fal fa-minus"></i>
                        </li>
                        <li>
                            {{ $service['name'] }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!--<< Service Details Section Start >>--> 
        <section class="visa-details-section fix section-padding emca-solution-visa-layout">
            <div class="container">
                <div class="visa-details-wrapper">
                    <div class="row g-5">
                        <div class="col-lg-4 order-2 order-md-1 align-self-lg-start">
                            <div class="visa-sidebar">
                                @php
                                    $sidebarBenefits = $service['sidebar_benefits'] ?? null;
                                    $sidebarTitle = $sidebarBenefits['title'] ?? 'Key Benefits of ' . $service['name'];
                                    $sidebarIntro = $sidebarBenefits['intro'] ?? $service['description'];
                                    $sidebarItems = $sidebarBenefits['items'] ?? array_map(
                                        fn ($item) => ['title' => $item['title'], 'text' => $item['description']],
                                        array_slice($service['key_services']['items'] ?? [], 0, 8)
                                    );
                                @endphp
                                <div class="visa-widget-categories emca-benefits-categories">
                                    <h4 class="wid-title">{{ $sidebarTitle }}</h4>
                                    <p class="emca-benefits-intro">{{ $sidebarIntro }}</p>
                                    @if (!empty($sidebarItems))
                                    <ul id="serviceBenefitsList">
                                        @foreach ($sidebarItems as $i => $item)
                                        @php
                                            $benefitId = 'benefit-' . $slug . '-' . ($i + 1);
                                        @endphp
                                        <li class="emca-benefit-item wow fadeInUp" data-wow-delay="{{ number_format($i * 0.1 + 0.2, 1) }}s">
                                            <div class="emca-benefit-card">
                                                <a href="javascript:void(0)" class="emca-benefit-trigger collapsed" data-bs-toggle="collapse" data-bs-target="#{{ $benefitId }}" aria-expanded="false" aria-controls="{{ $benefitId }}">
                                                    {{ $item['title'] }}
                                                    <span><i class="fas fa-chevron-right"></i></span>
                                                </a>
                                                <div id="{{ $benefitId }}" class="collapse emca-benefit-panel" data-bs-parent="#serviceBenefitsList">
                                                    <div class="emca-benefit-panel-inner">
                                                        {{ $item['text'] }}
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </div>
                                <div class="emca-sidebar-faq mt-2">
                                    <div class="faq-accordion">
                                        @php
                                            $faqItems = $service['faq']['items'] ?? [];
                                            $faqTitle = $service['faq']['title'] ?? 'Frequently Asked Questions';
                                            $faqIntro = $service['faq']['intro'] ?? null;
                                        @endphp
                                        <h4 class="wid-title">{{ $faqTitle }}</h4>
                                        @if (!empty($faqIntro))
                                        <p class="mt-2">{{ $faqIntro }}</p>
                                        @endif
                                        <div class="faq-content">
                                            <div class="accordion mt-3" id="accordion-{{ $slug }}">
                                            @if (!empty($faqItems))
                                                @foreach ($faqItems as $index => $faq)
                                                @php
                                                    $faqId = 'faq-' . $slug . '-' . ($index + 1);
                                                @endphp
                                                <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                                                    <h4 class="accordion-header">
                                                        <button class="accordion-button {{ $index === 0 ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target="#{{ $faqId }}" aria-expanded="{{ $index === 0 ? 'true' : 'false' }}" aria-controls="{{ $faqId }}">
                                                            {{ $faq['question'] }}
                                                        </button>
                                                    </h4>
                                                    <div id="{{ $faqId }}" class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}" data-bs-parent="#accordion-{{ $slug }}">
                                                        <div class="accordion-body">
                                                            {{ $faq['answer'] }}
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            @else
                                                <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                                                    <h4 class="accordion-header">
                                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq-default-{{ $slug }}" aria-expanded="true" aria-controls="faq-default-{{ $slug }}">
                                                            Need help choosing the right {{ strtolower($service['name']) }} service?
                                                        </button>
                                                    </h4>
                                                    <div id="faq-default-{{ $slug }}" class="accordion-collapse collapse show" data-bs-parent="#accordion-{{ $slug }}">
                                                        <div class="accordion-body">
                                                            Contact {{ config('company.name') }} and our team will help you identify the best approach based on your goals, budget, and timeline.
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @include('partials.need-help-sidebar', [
                                    'title' => $service['name'],
                                    'description' => 'Talk to ' . config('company.name') . ' for expert support and tailored ICT solutions.',
                                ])
                                <a href="{{ route('contact') }}" class="theme-btn w-100 text-center">
                                    <span><i class="fas fa-play-circle me-3"></i> request a quote</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8 order-1 order-md-2 align-self-lg-start">
                            <div class="service-details-items">
                                <div class="details-image">
                                    <img src="{{ asset($service['image']) }}" alt="{{ $service['name'] }}">
                                </div>
                                <div class="details-content">
                                    <h2 class="title-anim">{{ $service['name'] }} Overview</h2>
                                    @if (!empty($service['overview']))
                                        @foreach ($service['overview'] as $paragraph)
                                        <p class="mt-3">{{ $paragraph }}</p>
                                        @endforeach
                                    @else
                                    <p class="mt-3">
                                        {{ $service['description'] }}
                                    </p>
                                    <p class="mt-3">
                                        {{ config('company.site_title', 'EmCa Techonologies') }} delivers professional {{ strtolower($service['name']) }} services to help individuals, institutions, and businesses across Tanzania and worldwide thrive in the digital era.
                                    </p>
                                    @endif
                                    @if (!empty($service['highlights']))
                                    <div class="row g-3 emca-service-highlights-row mt-4">
                                        @foreach ($service['highlights'] as $highlight)
                                        <div class="col-md-4">
                                            <div class="icon-box h-100">
                                                <div class="icon">
                                                    <i class="fas fa-check-circle"></i>
                                                </div>
                                                <h6>{{ $highlight }}</h6>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    @endif
                                    @if (!empty($service['development_process']))
                                    @php
                                        $processItems = $service['development_process']['items'];
                                        $processSplit = (int) ceil(count($processItems) / 2);
                                        $processColumns = [
                                            array_slice($processItems, 0, $processSplit),
                                            array_slice($processItems, $processSplit),
                                        ];
                                    @endphp
                                    <h3 class="mt-4">{{ $service['development_process']['title'] }}</h3>
                                    @if (!empty($service['development_process']['intro']))
                                    <p class="mt-3">{{ $service['development_process']['intro'] }}</p>
                                    @endif
                                    <div class="row g-3 emca-process-benefits-row mt-4">
                                        @foreach ($processColumns as $colIndex => $columnItems)
                                        @if (!empty($columnItems))
                                        <div class="col-md-6">
                                            <div class="emca-benefits-categories emca-process-benefits h-100">
                                                <ul id="developmentProcessList-{{ $slug }}-{{ $colIndex }}">
                                                    @foreach ($columnItems as $item)
                                                    @php
                                                        $processId = 'process-' . $slug . '-' . ($item['step'] ?? $loop->iteration);
                                                    @endphp
                                                    <li class="emca-benefit-item wow fadeInUp" data-wow-delay="{{ number_format($loop->index * 0.1 + 0.2, 1) }}s">
                                                        <div class="emca-benefit-card">
                                                            <a href="javascript:void(0)" class="emca-benefit-trigger collapsed" data-bs-toggle="collapse" data-bs-target="#{{ $processId }}" aria-expanded="false" aria-controls="{{ $processId }}">
                                                                {{ $item['step'] ?? $loop->iteration }}. {{ $item['title'] }}
                                                                <span><i class="fas fa-chevron-right"></i></span>
                                                            </a>
                                                            <div id="{{ $processId }}" class="collapse emca-benefit-panel" data-bs-parent="#developmentProcessList-{{ $slug }}-{{ $colIndex }}">
                                                                <div class="emca-benefit-panel-inner">
                                                                    {{ $item['description'] }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                        @endif
                                        @endforeach
                                    </div>
                                    @endif
                                    @if (!empty($service['key_services']))
                                    <h3 class="mt-4">{{ $service['key_services']['title'] }}</h3>
                                    @if (!empty($service['key_services']['intro']))
                                    <p class="mt-3">{{ $service['key_services']['intro'] }}</p>
                                    @endif
                                    @php
                                        $keyServiceItems = $service['key_services']['items'];
                                        $keyServiceLayout = $service['key_services']['layout'] ?? 'accordion';
                                    @endphp
                                    @if ($keyServiceLayout === 'cards')
                                    <div class="row g-4 emca-module-details-list mt-4">
                                        @foreach ($keyServiceItems as $item)
                                        <div class="col-md-6 wow fadeInUp" data-wow-delay="{{ number_format($loop->index * 0.1 + 0.2, 1) }}s">
                                            <div class="emca-module-detail-item h-100">
                                                <h4>{{ $item['title'] }}</h4>
                                                <p>{{ $item['description'] }}</p>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    @else
                                    @php
                                        $keyServicesExpanded = !empty($service['key_services']['expanded']);
                                        $keyServiceSplit = (int) ceil(count($keyServiceItems) / 2);
                                        $keyServiceColumns = [
                                            array_slice($keyServiceItems, 0, $keyServiceSplit),
                                            array_slice($keyServiceItems, $keyServiceSplit),
                                        ];
                                    @endphp
                                    <div class="row g-3 emca-process-benefits-row mt-4">
                                        @foreach ($keyServiceColumns as $colIndex => $columnItems)
                                        @if (!empty($columnItems))
                                        <div class="col-md-6">
                                            <div class="emca-benefits-categories emca-process-benefits h-100">
                                                <ul id="keyServicesList-{{ $slug }}-{{ $colIndex }}">
                                                    @foreach ($columnItems as $item)
                                                    @php
                                                        $keyServiceId = 'key-service-' . $slug . '-' . $colIndex . '-' . $loop->iteration;
                                                    @endphp
                                                    <li class="emca-benefit-item wow fadeInUp" data-wow-delay="{{ number_format($loop->index * 0.1 + 0.2, 1) }}s">
                                                        <div class="emca-benefit-card{{ $keyServicesExpanded ? ' emca-benefit-card-expanded' : '' }}">
                                                            <a href="javascript:void(0)" class="emca-benefit-trigger{{ $keyServicesExpanded ? '' : ' collapsed' }}" data-bs-toggle="collapse" data-bs-target="#{{ $keyServiceId }}" aria-expanded="{{ $keyServicesExpanded ? 'true' : 'false' }}" aria-controls="{{ $keyServiceId }}">
                                                                {{ $item['title'] }}
                                                                <span><i class="fas fa-chevron-right"></i></span>
                                                            </a>
                                                            <div id="{{ $keyServiceId }}" class="collapse{{ $keyServicesExpanded ? ' show' : '' }} emca-benefit-panel"@if(!$keyServicesExpanded) data-bs-parent="#keyServicesList-{{ $slug }}-{{ $colIndex }}"@endif>
                                                                <div class="emca-benefit-panel-inner">
                                                                    {{ $item['description'] }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                        @endif
                                        @endforeach
                                    </div>
                                    @endif
                                    @elseif (empty($service['development_process']))
                                    <h3 class="mt-5">Our Service Approach</h3>
                                    <p class="mt-3"> 
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat qui ducimus illum modi perspiciatis
                                        accusamus soluta perferendis delectus rem.Lorem ipsum dolor sit amet delectus rem.Lorem ipsum dolor sit amet.
                                    </p>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="single-icon-items">
                                                <div class="icon-box">
                                                    <div class="icon">
                                                        <i class="fas fa-check-circle"></i>
                                                    </div>
                                                    <h6>Entering & Leaving From Country</h6>
                                                </div>
                                                <div class="icon-box">
                                                    <div class="icon">
                                                        <i class="fas fa-check-circle"></i>
                                                    </div>
                                                    <h6>Settling In Country</h6>
                                                </div>
                                                <div class="icon-box">
                                                    <div class="icon">
                                                        <i class="fas fa-check-circle"></i>
                                                    </div>
                                                    <h6>Documents & Payments</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="single-icon-items">
                                                <div class="icon-box">
                                                    <div class="icon">
                                                        <i class="fas fa-check-circle"></i>
                                                    </div>
                                                    <h6>Receive Your Visa</h6>
                                                </div>
                                                <div class="icon-box">
                                                    <div class="icon">
                                                        <i class="fas fa-check-circle"></i>
                                                    </div>
                                                    <h6>Quick & Easy Process</h6>
                                                </div>
                                                <div class="icon-box">
                                                    <div class="icon">
                                                        <i class="fas fa-check-circle"></i>
                                                    </div>
                                                    <h6>Country Citizenship</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @if (!empty($service['platforms']))
                                    <h3 class="mt-4">{{ $service['platforms']['title'] }}</h3>
                                    @if (!empty($service['platforms']['intro']))
                                    <p class="mt-3">{{ $service['platforms']['intro'] }}</p>
                                    @endif
                                    <div class="row g-3 emca-platforms-grid mt-4">
                                        @foreach ($service['platforms']['items'] as $platform)
                                        <div class="col-6 col-md-4">
                                            <div class="emca-platform-item h-100">
                                                <i class="{{ $platform['icon'] ?? 'fas fa-share-alt' }}"></i>
                                                <span>{{ $platform['name'] }}</span>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    @endif
                                    @if (!empty($service['website_types']))
                                    <h3 class="mt-4">{{ $service['website_types']['title'] }}</h3>
                                    @if (!empty($service['website_types']['intro']))
                                    <p class="mt-3">{{ $service['website_types']['intro'] }}</p>
                                    @endif
                                    <div class="row g-4 emca-module-details-list mt-4">
                                        @foreach ($service['website_types']['items'] as $item)
                                        <div class="col-md-6">
                                            <div class="emca-module-detail-item h-100">
                                                <h4>{{ $item['title'] }}</h4>
                                                <p>{{ $item['description'] }}</p>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    @endif
                                    @if (!empty($service['software_types']))
                                    <h3 class="mt-4">{{ $service['software_types']['title'] }}</h3>
                                    @if (!empty($service['software_types']['intro']))
                                    <p class="mt-3">{{ $service['software_types']['intro'] }}</p>
                                    @endif
                                    <div class="row g-4 emca-module-details-list mt-4">
                                        @foreach ($service['software_types']['items'] as $item)
                                        <div class="col-md-6">
                                            <div class="emca-module-detail-item h-100">
                                                <h4>{{ $item['title'] }}</h4>
                                                <p>{{ $item['description'] }}</p>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    @endif
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