@extends('admin.layouts.app')

@section('title', 'Edit Team Member')

@section('content')
<div class="admin-dash">
    <div class="admin-dash-hero">
        <div>
            <p class="admin-dash-eyebrow">Team Member</p>
            <h1 class="admin-dash-title">{{ $teamMember->name }}</h1>
            <p class="admin-dash-subtitle">Update profile details, photo, social links, and CV for this team member.</p>
        </div>
        <div class="admin-dash-hero-actions">
            <a href="{{ route('admin.team-members.index') }}" class="btn btn-outline-light btn-sm">
                <i class="bi bi-arrow-left"></i> Back
            </a>
            <a href="{{ route('team.details', $teamMember->slug) }}" class="btn btn-light btn-sm" target="_blank">
                <i class="bi bi-box-arrow-up-right"></i> View Profile
            </a>
        </div>
    </div>

    <div class="row g-3 g-xl-4">
        <div class="col-lg-4">
            <div class="admin-panel">
                <div class="admin-panel-head">
                    <div>
                        <h2>Preview</h2>
                        <p>Current public profile</p>
                    </div>
                </div>
                <div class="admin-team-preview text-center">
                    <div class="admin-team-preview-photo mx-auto mb-3">
                        <img src="{{ $teamMember->imageUrl() }}" alt="{{ $teamMember->name }}">
                    </div>
                    <h3 class="h5 mb-1">{{ $teamMember->name }}</h3>
                    <p class="text-muted mb-3">{{ $teamMember->role }}</p>
                    @if($teamMember->hasCv())
                        <a href="{{ $teamMember->cvUrl() }}" class="btn btn-sm btn-outline-primary" target="_blank" rel="noopener">
                            <i class="bi bi-download"></i> Download current CV
                        </a>
                    @else
                        <span class="admin-status admin-status--muted">No CV uploaded yet</span>
                    @endif
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="admin-panel">
                <div class="admin-panel-head">
                    <div>
                        <h2>Edit details</h2>
                        <p>Save changes to update the website profile</p>
                    </div>
                </div>

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

                        <div class="col-12">
                            <hr class="my-1">
                            <h3 class="h6 mb-1">Social media links</h3>
                            <p class="text-muted small mb-3">Paste full profile URLs. Leave blank if not available.</p>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label"><i class="bi bi-instagram"></i> Instagram</label>
                            <input type="text" name="social[instagram]" class="form-control" placeholder="https://instagram.com/..."
                                value="{{ old('social.instagram', (($teamMember->social['instagram'] ?? '') === '#' ? '' : ($teamMember->social['instagram'] ?? ''))) }}">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label"><i class="bi bi-facebook"></i> Facebook</label>
                            <input type="text" name="social[facebook]" class="form-control" placeholder="https://facebook.com/..."
                                value="{{ old('social.facebook', (($teamMember->social['facebook'] ?? '') === '#' ? '' : ($teamMember->social['facebook'] ?? ''))) }}">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label"><i class="bi bi-linkedin"></i> LinkedIn</label>
                            <input type="text" name="social[linkedin]" class="form-control" placeholder="https://linkedin.com/in/..."
                                value="{{ old('social.linkedin', (($teamMember->social['linkedin'] ?? '') === '#' ? '' : ($teamMember->social['linkedin'] ?? ''))) }}">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Profile Photo</label>
                            <input type="file" name="image" class="form-control" accept="image/*">
                            @if($teamMember->image)
                                <small class="text-muted">Current: {{ basename($teamMember->image) }}</small>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">CV (PDF, DOC, DOCX)</label>
                            <input type="file" name="cv" class="form-control" accept=".pdf,.doc,.docx">
                            @if($teamMember->hasCv())
                                <small class="text-success"><i class="bi bi-check-circle"></i> CV attached: {{ basename($teamMember->cv_path ?: $teamMember->slug.'.pdf') }}</small>
                            @endif
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Sort Order</label>
                            <input type="number" name="sort_order" class="form-control" value="{{ old('sort_order', $teamMember->sort_order) }}" min="0">
                        </div>
                        <div class="col-md-8 d-flex align-items-end">
                            <div class="form-check mb-2">
                                <input type="checkbox" name="is_active" value="1" class="form-check-input" id="is_active"
                                    {{ old('is_active', $teamMember->is_active) ? 'checked' : '' }}>
                                <label class="form-check-label" for="is_active">Show on website</label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 d-flex gap-2">
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-check-lg"></i> Save Changes
                        </button>
                        <a href="{{ route('admin.team-members.index') }}" class="btn btn-outline-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
