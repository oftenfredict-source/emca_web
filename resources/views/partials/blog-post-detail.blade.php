<div class="blog-post-details border-wrap mt-0">
    <div class="single-blog-post post-details mt-0">
        <div class="post-content pt-0">
            <h2 class="mt-0 title-anim">{{ $post->title }}</h2>
            <div class="post-meta mt-3">
                <span><i class="fal fa-user"></i>{{ $post->author ?? 'EmCa Team' }}</span>
                @if($post->published_at)
                    <span><i class="fal fa-calendar-alt"></i>{{ $post->published_at->format('jS F Y') }}</span>
                @endif
            </div>
            @if($post->imageUrl())
                <img src="{{ $post->imageUrl() }}" alt="{{ $post->title }}" class="single-post-image my-4">
            @endif
            <div class="post-body">
                {!! nl2br(e($post->content)) !!}
            </div>
        </div>
    </div>
</div>
