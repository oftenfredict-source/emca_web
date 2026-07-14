@if(isset($latestPosts) && $latestPosts->isNotEmpty())
    @foreach($latestPosts as $index => $post)
        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="{{ '.' . (3 + $index * 2) }}s">
            <div class="news-box-items">
                <div class="news-image">
                    @php
                        $image = $post->imageUrl()
                            ?: asset('visaland-html/assets/img/news/0'.(($index % 3) + 1).'.jpg');
                    @endphp
                    <img src="{{ $image }}" alt="{{ $post->title }}">
                    <img src="{{ $image }}" alt="{{ $post->title }}">
                    @if($post->published_at)
                        <h6 class="date">{{ $post->published_at->format('d') }} <span>{{ $post->published_at->format('M') }}</span></h6>
                    @endif
                </div>
                <div class="news-content">
                    <h3><a href="{{ route('news.details', $post->slug) }}">{{ $post->title }}</a></h3>
                    <p>{{ $post->excerpt ?? Str::limit(strip_tags($post->content), 120) }}</p>
                    <a href="{{ route('news.details', $post->slug) }}" class="link-btn">
                        <span>Read More</span> <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
    @endforeach
@endif
