@if(isset($recentPosts) && $recentPosts->isNotEmpty())
    <div class="popular-posts">
        @foreach($recentPosts as $recent)
            @php
                $thumb = $recent->imageUrl()
                    ?: asset('visaland-html/assets/img/news/pp1.jpg');
            @endphp
            <div class="single-post-item">
                <div class="thumb bg-cover" style="background-image: url('{{ $thumb }}');"></div>
                <div class="post-content">
                    <h5><a href="{{ route('news.details', $recent->slug) }}">{{ $recent->title }}</a></h5>
                    @if($recent->published_at)
                        <div class="post-date">
                            <i class="far fa-calendar-alt"></i>{{ $recent->published_at->format('jS F Y') }}
                        </div>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
@endif
