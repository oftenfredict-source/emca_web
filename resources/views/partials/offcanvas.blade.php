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
                <p class="d-none d-lg-block">
                    {{ config('company.location_description') }}
                </p>
                <div class="mobile-menu fix mb-3"></div>
                <div class="offcanvas__contact">
                    <h4>Contact Info</h4>
                    <ul>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon">
                                <i class="fal fa-map-marker-alt"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a target="_blank" href="{{ config('company.maps_url') }}">{{ config('company.address') }}</a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a href="mailto:{{ config('company.email') }}"><span>{{ config('company.email') }}</span></a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="fal fa-clock"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a target="_blank" href="#">Mon - Fri, 08:00 AM - 05:00 PM</a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="far fa-phone"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a href="tel:{{ str_replace(' ', '', config('company.phone')) }}">{{ config('company.phone') }}</a>
                            </div>
                        </li>
                    </ul>
                    <div class="header-button mt-4">
                        <a href="{{ route('contact') }}" class="theme-btn text-center">
                            <span>Contact Us<i class="fas fa-chevron-right"></i></span>
                        </a>
                    </div>
                    <div class="social-icon d-flex align-items-center">
                        @foreach (collect(config('company.social_links'))->whereIn('key', ['facebook', 'youtube', 'instagram', 'tiktok']) as $social)
                            <a href="{{ $social['url'] }}" target="_blank" rel="noopener noreferrer" aria-label="{{ $social['label'] }}">
                                <i class="{{ $social['icon'] }}"></i>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="offcanvas__overlay"></div>
