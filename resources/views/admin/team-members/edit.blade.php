@extends('admin.layouts.app')

@section('title', 'Edit Team Member')

@section('content')
<div class="mb-4">
    <a href="{{ route('admin.team-members.index') }}" class="text-decoration-none">&larr; Back</a>
    <h2 class="mt-2">Edit {{ $teamMember->name }}</h2>
</div>

<div class="table-card">
    <form action="{{ route('admin.team-members.update', $teamMember) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label">Name *</label>
                <input type="text" name="name" class="form-control" value="{{ old('name', $teamMember->name) }}" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">Role *</label>
                <input type="text" name="role" class="form-control" value="{{ old('role', $teamMember->role) }}" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="{{ old('email', $teamMember->email) }}">
            </div>
            <div class="col-md-6">
                <label class="form-label">Mobile</label>
                <input type="text" name="mobile" class="form-control" value="{{ old('mobile', $teamMember->mobile) }}">
            </div>
            <div class="col-12">
                <label class="form-label">Bio (one paragraph per line)</label>
                <textarea name="bio" class="form-control" rows="5">{{ old('bio', implode("\n", $teamMember->bio ?? [])) }}</textarea>
            </div>
            <div class="col-md-6">
                <label class="form-label">Profile Photo</label>
                <input type="file" name="image" class="form-control" accept="image/*">
                @if($teamMember->image)
                    <small class="text-muted">Current: {{ $teamMember->image }}</small>
                @endif
            </div>
            <div class="col-md-6">
                <label class="form-label">CV (PDF, DOC, DOCX)</label>
                <input type="file" name="cv" class="form-control" accept=".pdf,.doc,.docx">
                @if($teamMember->hasCv())
                    <small class="text-success"><i class="bi bi-check-circle"></i> CV attached: {{ basename($teamMember->cv_path) }}</small>
                @endif
            </div>
            <div class="col-md-4">
                <label class="form-label">Sort Order</label>
                <input type="number" name="sort_order" class="form-control" value="{{ old('sort_order', $teamMember->sort_order) }}" min="0">
            </div>
            <div class="col-md-4 d-flex align-items-end">
                <div class="form-check mb-2">
                    <input type="checkbox" name="is_active" value="1" class="form-check-input" id="is_active"
                        {{ old('is_active', $teamMember->is_active) ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_active">Show on website</label>
                </div>
            </div>
        </div>
        <div class="mt-4">
            <button type="submit" class="btn btn-primary">Save Changes</button>
            <a href="{{ route('admin.team-members.index') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>
@endsection
