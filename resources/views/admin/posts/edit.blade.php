@extends('admin.layouts.app')

@section('title', 'Edit Post')

@section('content')
<div class="mb-4">
    <h2>Edit Blog Post</h2>
</div>

<div class="table-card">
    <form action="{{ route('admin.posts.update', $post) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        @include('admin.posts._form')
        <div class="mt-3">
            <button type="submit" class="btn btn-primary">Update Post</button>
            <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>
@endsection
