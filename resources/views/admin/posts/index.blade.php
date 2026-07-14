@extends('admin.layouts.app')

@section('title', 'Blog Posts')

@section('content')
<div class="admin-dash">
    <div class="admin-dash-hero">
        <div>
            <p class="admin-dash-eyebrow">Content</p>
            <h1 class="admin-dash-title">Blog Posts</h1>
            <p class="admin-dash-subtitle">Create and manage news articles published on your website.</p>
        </div>
        <div class="admin-dash-hero-actions">
            <a href="{{ route('news') }}" class="btn btn-outline-light btn-sm" target="_blank">
                <i class="bi bi-box-arrow-up-right"></i> View Blog
            </a>
            <a href="{{ route('admin.posts.create') }}" class="btn btn-light btn-sm">
                <i class="bi bi-plus-lg"></i> New Post
            </a>
        </div>
    </div>

    <div class="row g-3 g-xl-4 mb-4">
        <div class="col-sm-6 col-xl-4">
            <div class="admin-stat-card admin-stat-card--posts">
                <div class="admin-stat-icon"><i class="bi bi-newspaper"></i></div>
                <div class="admin-stat-body">
                    <span class="admin-stat-label">Total Posts</span>
                    <strong class="admin-stat-value">{{ $totalCount }}</strong>
                    <span class="admin-stat-meta">all articles</span>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-4">
            <div class="admin-stat-card admin-stat-card--testimonials">
                <div class="admin-stat-icon"><i class="bi bi-check2-circle"></i></div>
                <div class="admin-stat-body">
                    <span class="admin-stat-label">Published</span>
                    <strong class="admin-stat-value">{{ $publishedCount }}</strong>
                    <span class="admin-stat-meta">live on website</span>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-4">
            <div class="admin-stat-card admin-stat-card--enquiries">
                <div class="admin-stat-icon"><i class="bi bi-pencil-square"></i></div>
                <div class="admin-stat-body">
                    <span class="admin-stat-label">Drafts</span>
                    <strong class="admin-stat-value">{{ $draftCount }}</strong>
                    <span class="admin-stat-meta">not published yet</span>
                </div>
            </div>
        </div>
    </div>

    <div class="admin-panel">
        <div class="admin-panel-head">
            <div>
                <h2>All Posts</h2>
                <p>Edit, publish, or remove blog articles</p>
            </div>
            <a href="{{ route('admin.posts.create') }}" class="btn btn-sm btn-primary">
                <i class="bi bi-plus-lg"></i> New Post
            </a>
        </div>

        <div class="table-responsive">
            <table class="table admin-table mb-0">
                <thead>
                    <tr>
                        <th>Post</th>
                        <th>Author</th>
                        <th>Status</th>
                        <th>Published</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($posts as $post)
                        <tr>
                            <td>
                                <div class="admin-person">
                                    <div class="admin-person-avatar admin-post-thumb">
                                        @if($post->imageUrl())
                                            <img src="{{ $post->imageUrl() }}" alt="{{ $post->title }}">
                                        @else
                                            <i class="bi bi-image"></i>
                                        @endif
                                    </div>
                                    <div class="admin-person-meta">
                                        <strong>{{ $post->title }}</strong>
                                        <small class="text-muted text-truncate d-block" style="max-width: 320px">
                                            {{ $post->excerpt ?: \Illuminate\Support\Str::limit(strip_tags($post->content), 80) }}
                                        </small>
                                    </div>
                                </div>
                            </td>
                            <td>{{ $post->author ?: '—' }}</td>
                            <td>
                                <span class="admin-status admin-status--{{ $post->is_published ? 'new' : 'muted' }}">
                                    {{ $post->is_published ? 'Published' : 'Draft' }}
                                </span>
                            </td>
                            <td class="text-muted">{{ $post->published_at?->format('M d, Y') ?? '—' }}</td>
                            <td class="text-end text-nowrap">
                                @if($post->is_published)
                                    <a href="{{ route('news.details', $post->slug) }}" class="btn btn-sm btn-outline-secondary" target="_blank">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                @endif
                                <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-sm btn-outline-primary">
                                    <i class="bi bi-pencil"></i> Edit
                                </a>
                                <form action="{{ route('admin.posts.destroy', $post) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this post?')">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">
                                <div class="admin-empty">
                                    <i class="bi bi-newspaper"></i>
                                    <p>No blog posts yet.</p>
                                    <a href="{{ route('admin.posts.create') }}" class="btn btn-sm btn-primary mt-2">Create your first post</a>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if ($posts->hasPages())
            <div class="admin-pagination mt-3 d-flex justify-content-between align-items-center flex-wrap gap-2">
                <small class="text-muted">
                    Showing {{ $posts->firstItem() }}–{{ $posts->lastItem() }}
                    of {{ number_format($posts->total()) }}
                </small>
                {{ $posts->links() }}
            </div>
        @endif
    </div>
</div>
@endsection
