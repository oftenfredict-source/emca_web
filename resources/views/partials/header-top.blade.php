        <!-- Header Top Start -->
        <div class="header-top-section fix">
            <div class="container">
                <div class="header-top-wrapper">
                    <ul class="contact-list">
                        <li>
                            <i class="far fa-phone"></i>
                            <a href="tel:+255749719998" class="link">+255 749 719 998</a>
                        </li>
                        <li>
                            <i class="far fa-envelope"></i>
                            <a href="mailto:emca@emca.tech" class="link">emca@emca.tech</a>
                        </li>
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            Ben Bella Street, Moshi
                        </li>
                    </ul>
                    <div class="top-right">
                        <div class="social-icon d-flex align-items-center">
                            @foreach (collect(config('company.social_links'))->whereIn('key', ['facebook', 'youtube', 'instagram', 'tiktok']) as $social)
                                <a href="{{ $social['url'] }}" target="_blank" rel="noopener noreferrer" aria-label="{{ $social['label'] }}">
                                    <i class="{{ $social['icon'] }}"></i>
                                </a>
                            @endforeach
                        </div>
                        <ul class="header-menu">
                            <li>
                                <a href="{{ route('contact') }}">
                                    Help
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}">
                                    Support
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
        </div>
