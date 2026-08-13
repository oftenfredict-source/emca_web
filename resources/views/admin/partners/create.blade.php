@extends('admin.layouts.app')

@section('title', 'Add Partner')

@section('content')
<div class="admin-dash">
    <div class="admin-dash-hero">
        <div>
            <p class="admin-dash-eyebrow">Partners</p>
            <h1 class="admin-dash-title">Add Partner</h1>
            <p class="admin-dash-subtitle">Upload a logo for the homepage partners carousel.</p>
        </div>
    </div>

    <div class="admin-panel">
        <form action="{{ route('admin.partners.store') }}" method="POST" enctype="multipart/form-data" class="row g-3">
            @csrf

            <div class="col-md-6">
                <label class="form-label" for="name">Partner name</label>
                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
                @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>

            <div class="col-md-3">
                <label class="form-label" for="sort_order">Sort order</label>
                <input type="number" name="sort_order" id="sort_order" class="form-control" value="{{ old('sort_order', 0) }}" min="0">
            </div>

            <div class="col-md-3 d-flex align-items-end">
                <div class="form-check mb-2">
                    <input type="checkbox" name="is_active" id="is_active" class="form-check-input" value="1" @checked(old('is_active', true))>
                    <label class="form-check-label" for="is_active">Show on homepage</label>
                </div>
            </div>

            <div class="col-md-6">
                <label class="form-label" for="logo">Logo</label>
                <input type="file" name="logo" id="logo" class="form-control @error('logo') is-invalid @enderror" accept="image/*" required>
                @error('logo')<div class="invalid-feedback">{{ $message }}</div>@enderror
                <div class="form-text">PNG, JPG, or WEBP. Transparent PNG works best.</div>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Save partner</button>
                <a href="{{ route('admin.partners.index') }}" class="btn btn-outline-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection
