@extends('admin.layouts.app')

@section('title', 'Create Post')

@section('content')
<div class="mb-4">
    <h2>Create Blog Post</h2>
</div>

<div class="table-card">
    <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('admin.posts._form')
        <div class="mt-3">
            <button type="submit" class="btn btn-primary">Create Post</button>
            <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>
@endsection
