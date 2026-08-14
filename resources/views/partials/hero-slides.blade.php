@php
    $heroSettings = app(\App\Services\SiteSettingService::class);
    $heroMode = $heroSettings->heroMode();
    $youtubeEmbedUrl = $heroSettings->youtubeEmbedUrl();
    $useVideoHero = $heroMode === 'video' && filled($youtubeEmbedUrl);

    $slides = [
        [
            'image' => site_image('hero_1', 'images/Banner_hero1.jpg'),
            'tagline' => 'EmCa Techonologies LTD',
            'title' => "Leading ICT Solutions <br> in Tanzania & <br> Worldwide",
            'text' => 'Reliable, modern, and affordable technology services for schools, <br> businesses, and institutions ready to thrive in the digital era.',
            'btn_label' => 'Learn More',
            'btn_url' => route('about'),
        ],
        [
            'image' => site_image('hero_2', 'images/Banner_hero2.jpg'),
            'tagline' => 'Smart Software Solutions',
            'title' => "School & Business <br> Management <br> Systems",
            'text' => 'From ShuleXpert for schools to MauzoLink for retail, we build <br> practical software that simplifies daily operations.',
            'btn_label' => 'Our Solutions',
            'btn_url' => route('solutions'),
        ],
        [
            'image' => site_image('hero_3', 'images/Banner_hero3.jpg'),
            'tagline' => 'ICT Consultancy & Infrastructure',
            'title' => "Expert Technology <br> Services for Your <br> Organization",
            'text' => 'ICT consulting, cloud setup, network infrastructure, and ongoing <br> support to keep your systems secure and running smoothly.',
            'btn_label' => 'Our Services',
            'btn_url' => route('service'),
        ],
        [
            'image' => site_image('hero_4', 'images/Banner_hero4.jpg'),
            'tagline' => 'Creative & Digital Services',
            'title' => "Graphics Design & <br> Social Media <br> Management",
            'text' => 'Professional branding, marketing visuals, and social media strategies <br> that help your business stand out and connect with customers.',
            'btn_label' => 'Get In Touch',
            'btn_url' => route('contact'),
        ],
    ];
@endphp

@foreach ($slides as $slide)
    <div class="swiper-slide">
        @unless ($useVideoHero)
            <div class="hero-image bg-cover" style="background-image: url('{{ asset($slide['image']) }}');"></div>
        @endunless
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="hero-content">
                        <h6 data-animation="slideInRight" data-duration="2s" data-delay=".3s">{{ $slide['tagline'] }}</h6>
                        <h1 data-animation="slideInRight" data-duration="2s" data-delay=".5s">
                            {!! $slide['title'] !!}
                        </h1>
                        <p data-animation="slideInRight" data-duration="2s" data-delay=".7s">
                            {!! $slide['text'] !!}
                        </p>
                        <div class="hero-button">
                            <a href="{{ $slide['btn_url'] }}" class="theme-btn theme-color-2" data-animation="slideInRight" data-duration="2s" data-delay=".9s">
                                <span>{{ $slide['btn_label'] }} <i class="fas fa-chevron-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
