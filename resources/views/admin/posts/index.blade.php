@extends('admin.layouts.app')

@section('title', 'Blog Posts')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="mb-0">Blog Posts</h2>
    <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-lg"></i> New Post
    </a>
</div>

<div class="table-card">
    <div class="table-responsive">
        <table class="table table-hover mb-0">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Status</th>
                    <th>Published</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->author ?? '—' }}</td>
                        <td>
                            @if($post->is_published)
                                <span class="badge bg-success">Published</span>
                            @else
                                <span class="badge bg-secondary">Draft</span>
                            @endif
                        </td>
                        <td>{{ $post->published_at?->format('M d, Y') ?? '—' }}</td>
                        <td>
                            <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                            <form action="{{ route('admin.posts.destroy', $post) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this post?')">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="5" class="text-muted text-center py-4">No blog posts yet. Create your first post!</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="mt-3">{{ $posts->links() }}</div>
</div>
@endsection
