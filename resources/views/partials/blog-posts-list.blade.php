@if(isset($posts) && $posts->isNotEmpty())
    @foreach($posts as $index => $post)
        @php
            $image = $post->image
                ? asset('storage/'.$post->image)
                : asset('visaland-html/assets/img/news/post-'.(($index % 3) + 1).'.jpg');
        @endphp
        <div class="single-blog-post">
            <div class="post-featured-thumb bg-cover" style="background-image: url('{{ $image }}');"></div>
            <div class="post-content">
                <div class="post-meta">
                    @if($post->published_at)
                        <span><i class="fal fa-calendar-alt"></i>{{ $post->published_at->format('jS F Y') }}</span>
                    @endif
                </div>
                <h2 class="title-anim">
                    <a href="{{ route('news.details', $post->slug) }}">{{ $post->title }}</a>
                </h2>
                <p>{{ $post->excerpt ?? \Illuminate\Support\Str::limit(strip_tags($post->content), 200) }}</p>
                <a href="{{ route('news.details', $post->slug) }}" class="theme-btn mt-4 line-height">
                    <span>READ MORE <i class="fas fa-chevron-right"></i></span>
                </a>
            </div>
        </div>
    @endforeach
    <div class="mt-4">{{ $posts->links() }}</div>
@else
    <div class="single-blog-post">
        <div class="post-content">
            <h2>No blog posts yet</h2>
            <p>Check back soon for news and updates from EmCa Techonologies.</p>
        </div>
    </div>
@endif
