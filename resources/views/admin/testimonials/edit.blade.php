@extends('admin.layouts.app')

@section('title', 'Edit Testimonial')

@section('content')
<div class="mb-4"><h2>Edit Testimonial</h2></div>
<div class="table-card">
    <form action="{{ route('admin.testimonials.update', $testimonial) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        @include('admin.testimonials._form')
        <div class="mt-3">
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('admin.testimonials.index') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>
@endsection
