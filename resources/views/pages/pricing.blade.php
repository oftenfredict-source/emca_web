<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="{{ config('company.name') }}">
        <meta name="description" content="{{ $service['name'] }} pricing, {{ $meta['intro'] }}">
        <title>{{ $service['name'] }} Pricing - {{ config('company.site_title', 'EmCa Techonologies') }}</title>
        @include('partials.favicon')
        <link rel="stylesheet" href="{{ asset('visaland-html/assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('visaland-html/assets/css/font-awesome.css') }}">
        <link rel="stylesheet" href="{{ asset('visaland-html/assets/css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('visaland-html/assets/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('visaland-html/assets/css/meanmenu.css') }}">
        <link rel="stylesheet" href="{{ asset('visaland-html/assets/css/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('visaland-html/assets/css/swiper-bundle.min.css') }}">
        <link rel="stylesheet" href="{{ asset('visaland-html/assets/css/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('visaland-html/assets/css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('visaland-html/style.css') }}">
    </head>

    <body class="emca-pricing-page">

        <div class="scroll-up">
            <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>

        @include('partials.preloader')

        <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div>

        @include('partials.offcanvas')
        @include('partials.header-top')

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

        <div class="breadcrumb-wrapper section-padding bg-cover" style="background-image: url('{{ asset($meta['banner']) }}');">
            <div class="container">
                <div class="page-heading">
                    <h1 class="wow fadeInUp" data-wow-delay=".3s">Pricing</h1>
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                        <li>
                            <a href="{{ route('home') }}">Home Page</a>
                        </li>
                        <li>
                            <i class="fal fa-minus"></i>
                        </li>
                        <li>
                            <a href="{{ route('pricing') }}">Pricing</a>
                        </li>
                        <li>
                            <i class="fal fa-minus"></i>
                        </li>
                        <li>{{ $service['name'] }}</li>
                    </ul>
                </div>
            </div>
        </div>

        <section class="visa-details-section fix section-padding">
            <div class="container">
                <div class="visa-details-wrapper">
                    <div class="row g-5">
                        <div class="col-lg-4 order-2 order-md-1 align-self-lg-start">
                            <div class="visa-sidebar">
                                <div class="visa-widget-categories">
                                    <h4 class="wid-title">Our Services</h4>
                                    <ul>
                                        @foreach ($services as $navSlug => $navService)
                                            <li class="{{ $navSlug === $slug ? 'active' : '' }}">
                                                <a href="{{ route('pricing.show', $navSlug) }}">
                                                    {{ $navService['name'] }}
                                                    <span><i class="fas fa-chevron-right"></i></span>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>

                                @include('partials.need-help-sidebar', [
                                    'title' => $service['name'],
                                    'description' => 'Request a free consultation and get a tailored quotation for your project.',
                                ])

                                <a href="{{ asset($meta['document']) }}" class="theme-btn w-100 text-center" target="_blank" rel="noopener noreferrer" download>
                                    <span><i class="fas fa-file-pdf me-3"></i> download pricing PDF</span>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-8 order-1 order-md-2 align-self-lg-start">
                            <div class="service-details-items emca-pricing-content">
                                <div class="details-content">
                                    <div class="emca-pricing-intro wow fadeInUp" data-wow-delay=".2s">
                                        <div class="emca-pricing-toolbar">
                                            <span class="emca-pricing-year">
                                                Valid for {{ $meta['year'] }} · Starting prices
                                            </span>
                                            <div class="emca-currency-toggle" role="group" aria-label="Currency">
                                                <button type="button" class="emca-currency-btn is-active" data-currency="TZS" aria-pressed="true">TZS</button>
                                                <button type="button" class="emca-currency-btn" data-currency="USD" aria-pressed="false">USD</button>
                                            </div>
                                        </div>
                                        <p class="emca-currency-rate-note" id="emcaCurrencyRateNote">
                                            Showing prices in <strong id="emcaActiveCurrency">TZS</strong>.
                                            <span class="emca-usd-hint d-none">
                                                1 USD ≈ TZS {{ number_format($meta['usd_rate'], $meta['usd_rate_is_live'] ?? false ? 2 : 0) }}
                                                @if (!empty($meta['usd_rate_is_live']))
                                                    (live market rate
                                                    @if (!empty($meta['usd_rate_fetched_at']))
                                                        · updated {{ \Illuminate\Support\Carbon::parse($meta['usd_rate_fetched_at'])->timezone(config('app.timezone'))->format('d M Y, H:i') }}
                                                    @endif
                                                    ).
                                                @else
                                                    (fallback rate, live update unavailable).
                                                @endif
                                                {{ $meta['usd_rate_note'] }}
                                            </span>
                                        </p>
                                        <h2 class="emca-pricing-title">{{ $service['name'] }} Pricing</h2>
                                        <p class="emca-pricing-desc">{{ $service['description'] }}</p>
                                        @if (!empty($service['note']))
                                            <p class="emca-pricing-note">{{ $service['note'] }}</p>
                                        @endif
                                    </div>

                                    <div class="emca-pricing-grid mt-4 wow fadeInUp" data-wow-delay=".3s" data-usd-rate="{{ (float) $meta['usd_rate'] }}">
                                        @foreach ($service['packages'] as $package)
                                            <article class="emca-price-card">
                                                <div class="emca-price-card-top">
                                                    <span class="emca-price-card-no">{{ str_pad((string) $loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                                                    <span class="emca-price-card-name">{{ $package['name'] }}</span>
                                                </div>
                                                <p class="emca-price-card-includes">{{ $package['includes'] }}</p>
                                                <div class="emca-price-card-foot">
                                                    <span class="emca-price-card-label">Starting from</span>
                                                    <span
                                                        class="emca-pricing-amount"
                                                        data-amount="{{ (float) ($package['amount'] ?? 0) }}"
                                                        data-period="{{ $package['period'] ?? '' }}"
                                                    >{{ $package['price'] }}</span>
                                                </div>
                                            </article>
                                        @endforeach
                                    </div>

                                    <div class="emca-pricing-disclaimer mt-4 wow fadeInUp" data-wow-delay=".4s">
                                        <h4>Important</h4>
                                        <p>{{ $meta['disclaimer'] }}</p>
                                    </div>

                                    <div class="emca-pricing-steps mt-4 wow fadeInUp" data-wow-delay=".45s">
                                        <h4>How to Get Started</h4>
                                        <ol>
                                            <li>Choose a service package from this page.</li>
                                            <li>Request a free meeting, call, WhatsApp, email, or visit our office.</li>
                                            <li>Share requirements and complete secure payment to start.</li>
                                            <li>We deliver your solution and guide you through a smooth launch.</li>
                                        </ol>
                                    </div>

                                    <div class="emca-pricing-cta mt-4">
                                        <a href="{{ route('contact') }}" class="theme-btn">
                                            <span>
                                                request a free quote
                                                <i class="fas fa-chevron-right"></i>
                                            </span>
                                        </a>
                                        <a href="tel:{{ preg_replace('/\s+/', '', config('company.phone')) }}" class="emca-pricing-phone">
                                            <i class="fas fa-phone-alt"></i>
                                            {{ config('company.phone') }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('partials.footer')

        <script src="{{ asset('visaland-html/assets/js/jquery-3.7.1.min.js') }}"></script>
        <script src="{{ asset('visaland-html/assets/js/viewport.jquery.js') }}"></script>
        <script src="{{ asset('visaland-html/assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('visaland-html/assets/js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('visaland-html/assets/js/jquery.waypoints.js') }}"></script>
        <script src="{{ asset('visaland-html/assets/js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('visaland-html/assets/js/slick.min.js') }}"></script>
        <script src="{{ asset('visaland-html/assets/js/jquery.meanmenu.min.js') }}"></script>
        <script src="{{ asset('visaland-html/assets/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('visaland-html/assets/js/wow.min.js') }}"></script>
        <script src="{{ asset('visaland-html/assets/js/main.js') }}"></script>
        <script>
            (function () {
                var wrap = document.querySelector('.emca-pricing-grid');
                if (!wrap) return;

                var rate = parseFloat(wrap.getAttribute('data-usd-rate')) || 2650;
                var amounts = document.querySelectorAll('.emca-pricing-amount');
                var buttons = document.querySelectorAll('.emca-currency-btn');
                var activeLabel = document.getElementById('emcaActiveCurrency');
                var usdHint = document.querySelector('.emca-usd-hint');
                var storageKey = 'emca_pricing_currency';

                function formatNumber(value, currency) {
                    if (currency === 'USD') {
                        return value.toLocaleString('en-US', {
                            minimumFractionDigits: 2,
                            maximumFractionDigits: 2
                        });
                    }

                    return Math.round(value).toLocaleString('en-US');
                }

                function formatPrice(amountTzs, period, currency) {
                    var value = currency === 'USD' ? (amountTzs / rate) : amountTzs;
                    var code = currency === 'USD' ? 'USD' : 'TZS';
                    return code + ' ' + formatNumber(value, currency) + (period || '');
                }

                function setCurrency(currency) {
                    amounts.forEach(function (el) {
                        var amount = parseFloat(el.getAttribute('data-amount')) || 0;
                        var period = el.getAttribute('data-period') || '';
                        el.textContent = formatPrice(amount, period, currency);
                    });

                    buttons.forEach(function (btn) {
                        var isActive = btn.getAttribute('data-currency') === currency;
                        btn.classList.toggle('is-active', isActive);
                        btn.setAttribute('aria-pressed', isActive ? 'true' : 'false');
                    });

                    if (activeLabel) activeLabel.textContent = currency;
                    if (usdHint) usdHint.classList.toggle('d-none', currency !== 'USD');

                    try {
                        localStorage.setItem(storageKey, currency);
                    } catch (e) {}
                }

                buttons.forEach(function (btn) {
                    btn.addEventListener('click', function () {
                        setCurrency(btn.getAttribute('data-currency'));
                    });
                });

                var initial = 'TZS';
                try {
                    var saved = localStorage.getItem(storageKey);
                    if (saved === 'TZS' || saved === 'USD') initial = saved;
                } catch (e) {}

                setCurrency(initial);
            })();
        </script>
    </body>
</html>
