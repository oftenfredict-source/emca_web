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
                                    <a href="{{ $member['social']['linkedin'] ?? '#' }}" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="emca-team-details-divider"></div>

                    <div class="emca-team-details-bio wow fadeInUp" data-wow-delay=".2s">
                        @foreach ($member['bio'] as $paragraph)
                            @php
                                $escaped = e($paragraph);
                                // Prefer the full legal name in bio when present (e.g. Caroline Ceasar Shija).
                                if (str_contains($paragraph, 'Caroline Ceasar Shija')) {
                                    $escaped = str_replace('Caroline Ceasar Shija', '<strong>Caroline Ceasar Shija</strong>', $escaped);
                                } else {
                                    $escaped = str_replace(e($member['name']), '<strong>' . e($member['name']) . '</strong>', $escaped);
                                }
                            @endphp
                            <p>{!! $escaped !!}</p>
                        @endforeach
                    </div>

                    @if (! empty($member['has_cv']))
                        @include('partials.team-cv-button', [
                            'url' => $member['cv'],
                            'class' => 'emca-team-details-cv wow fadeInUp',
                        ])
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
