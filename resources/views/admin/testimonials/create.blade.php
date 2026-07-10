@extends('admin.layouts.app')

@section('title', 'Add Testimonial')

@section('content')
<div class="admin-dash">
    <div class="admin-dash-hero">
        <div>
            <p class="admin-dash-eyebrow">Testimonials</p>
            <h1 class="admin-dash-title">Add Testimonial</h1>
            <p class="admin-dash-subtitle">Create a new client review for the website.</p>
        </div>
        <div class="admin-dash-hero-actions">
            <a href="{{ route('admin.testimonials.index') }}" class="btn btn-outline-light btn-sm">
                <i class="bi bi-arrow-left"></i> Back
            </a>
        </div>
    </div>

    <div class="admin-panel">
        <form action="{{ route('admin.testimonials.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('admin.testimonials._form')
            <div class="mt-4 d-flex gap-2">
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-check-lg"></i> Save Testimonial
                </button>
                <a href="{{ route('admin.testimonials.index') }}" class="btn btn-outline-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection
