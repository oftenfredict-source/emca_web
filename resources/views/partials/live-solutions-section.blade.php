@php
    $liveSolutionSlugs = $liveSolutionSlugs ?? array_keys(config('live-solutions'));
@endphp

<section class="emca-live-solutions-section fix section-padding bg-cover" style="background-image: url('{{ asset('images/server1.jpg') }}');">
    <div class="container">
        <div class="section-title text-center emca-live-solutions-title">
            <span class="wow fadeInUp">Live Systems</span>
            <h2 class="title-anim">Explore our live systems currently in use by our clients</h2>
        </div>
        <div class="row g-4">
            @foreach ($liveSolutionSlugs as $slug)
                @php $item = config('live-solutions')[$slug]; @endphp
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp d-flex" data-wow-delay="{{ number_format($loop->iteration * 0.15 + 0.1, 2) }}s">
                    <div class="emca-live-solution-card w-100">
                        <div class="emca-live-solution-header">
                            <div class="emca-live-solution-icon">
                                <i class="fas {{ $item['icon'] }}"></i>
                            </div>
                            <div class="emca-live-solution-titles">
                                <h3>{{ $item['name'] }}</h3>
                                <span class="emca-live-solution-category">{{ $item['category'] }}</span>
                            </div>
                        </div>
                        <p class="emca-live-solution-desc">{{ $item['description'] }}</p>
                        <div class="emca-live-solution-footer">
                            @if ($item['live'])
                                <span class="emca-live-badge">
                                    <span class="emca-live-dot"></span>
                                    Live
                                </span>
                            @endif
                            <a href="{{ in_array($slug, array_keys(config('solutions')), true) ? route('solutions.show', $slug) : $item['url'] }}" class="emca-live-visit-link" @if(($item['url'] ?? '#') === '#' && !in_array($slug, array_keys(config('solutions')), true)) aria-disabled="true" @endif>
                                Visit Site
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        @if (!empty($showExploreButton))
            <div class="text-center mt-4 mt-md-5 wow fadeInUp" data-wow-delay=".4s">
                <a href="{{ route('solutions') }}" class="theme-btn">
                    <span>
                        Explore All Solutions
                        <i class="fas fa-chevron-right"></i>
                    </span>
                </a>
            </div>
        @endif
    </div>
</section>
