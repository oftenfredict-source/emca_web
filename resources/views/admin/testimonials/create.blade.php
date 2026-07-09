@extends('admin.layouts.app')

@section('title', 'Add Testimonial')

@section('content')
<div class="mb-4"><h2>Add Testimonial</h2></div>
<div class="table-card">
    <form action="{{ route('admin.testimonials.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('admin.testimonials._form')
        <div class="mt-3">
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('admin.testimonials.index') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>
@endsection
