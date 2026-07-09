@php
    $isSystemDeveloper = stripos($member['role'], 'developer') !== false;
@endphp

<!-- Team Details Section Start -->
<section class="emca-team-details-section section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-10 col-xl-11 col-lg-12">
                <div class="emca-team-details-card wow fadeInUp" data-wow-delay=".3s">
                    <div class="row g-4 g-xl-5 align-items-center">
                        <div class="col-lg-5 col-xl-4">
                            <div class="emca-team-details-photo">
                                <img src="{{ $member['image'] }}" alt="{{ $member['name'] }}">
                            </div>
                        </div>
                        <div class="col-lg-7 col-xl-8">
                            <div class="emca-team-details-profile">
                                <h2 class="emca-team-details-name wow fadeInUp" data-wow-delay=".1s">{{ $member['name'] }}</h2>
                                <p class="emca-team-details-role wow fadeInUp" data-wow-delay=".2s">{{ $member['role'] }}</p>

                                <ul class="emca-team-details-meta wow fadeInUp" data-wow-delay=".3s">
                                    <li>
                                        <span class="label">Email</span>
                                        <a href="mailto:{{ $member['email'] }}">{{ $member['email'] }}</a>
                                    </li>
                                    <li>
                                        <span class="label">Mobile</span>
                                        <a href="tel:{{ preg_replace('/\s+/', '', $member['mobile']) }}">{{ $member['mobile'] }}</a>
                                    </li>
                                </ul>

                                <div class="emca-team-details-social social-icon d-flex align-items-center wow fadeInUp" data-wow-delay=".4s">
                                    <a href="mailto:{{ $member['email'] }}" aria-label="Email"><i class="fas fa-envelope"></i></a>
                                    <a href="{{ $member['social']['instagram'] ?? '#' }}" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                                    <a href="{{ $member['social']['facebook'] ?? '#' }}" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                                    @if ($isSystemDeveloper)
                                        <a href="{{ $member['social']['github'] ?? '#' }}" aria-label="GitHub"><i class="fab fa-github"></i></a>
                                    @else
                                        <a href="{{ $member['social']['linkedin'] ?? '#' }}" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="emca-team-details-divider"></div>

                    <div class="emca-team-details-bio wow fadeInUp" data-wow-delay=".2s">
                        @foreach ($member['bio'] as $index => $paragraph)
                            <p>
                                @if ($index === 0)
                                    {!! str_replace(e($member['name']), '<strong>' . e($member['name']) . '</strong>', e($paragraph)) !!}
                                @else
                                    {{ $paragraph }}
                                @endif
                            </p>
                        @endforeach
                    </div>

                    @if (! empty($member['cv']))
                        <a href="{{ $member['cv'] }}" class="theme-btn emca-team-details-cv wow fadeInUp" data-wow-delay=".3s" download>
                            <span>
                                Download CV
                                <i class="far fa-file-alt"></i>
                            </span>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
