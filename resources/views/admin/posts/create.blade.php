@extends('admin.layouts.app')

@section('title', 'Create Post')

@section('content')
<div class="admin-dash">
    <div class="admin-dash-hero">
        <div>
            <p class="admin-dash-eyebrow">Blog Posts</p>
            <h1 class="admin-dash-title">Create Blog Post</h1>
            <p class="admin-dash-subtitle">Write a new article for your news and blog section.</p>
        </div>
        <div class="admin-dash-hero-actions">
            <a href="{{ route('admin.posts.index') }}" class="btn btn-outline-light btn-sm">
                <i class="bi bi-arrow-left"></i> Back
            </a>
        </div>
    </div>

    <div class="admin-panel">
        <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('admin.posts._form')
            <div class="mt-4 d-flex gap-2">
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-check-lg"></i> Create Post
                </button>
                <a href="{{ route('admin.posts.index') }}" class="btn btn-outline-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection
