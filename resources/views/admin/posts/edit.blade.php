@extends('admin.layouts.app')

@section('title', 'Edit Post')

@section('content')
<div class="admin-dash">
    <div class="admin-dash-hero">
        <div>
            <p class="admin-dash-eyebrow">Blog Posts</p>
            <h1 class="admin-dash-title">Edit Blog Post</h1>
            <p class="admin-dash-subtitle">Update “{{ $post->title }}”.</p>
        </div>
        <div class="admin-dash-hero-actions">
            <a href="{{ route('admin.posts.index') }}" class="btn btn-outline-light btn-sm">
                <i class="bi bi-arrow-left"></i> Back
            </a>
            @if($post->is_published)
                <a href="{{ route('news.details', $post->slug) }}" class="btn btn-light btn-sm" target="_blank">
                    <i class="bi bi-box-arrow-up-right"></i> View Post
                </a>
            @endif
        </div>
    </div>

    <div class="admin-panel">
        <form action="{{ route('admin.posts.update', $post) }}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')
            @include('admin.posts._form')
            <div class="mt-4 d-flex gap-2">
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-check-lg"></i> Update Post
                </button>
                <a href="{{ route('admin.posts.index') }}" class="btn btn-outline-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection
