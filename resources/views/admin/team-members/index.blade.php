@extends('admin.layouts.app')

@section('title', 'Team & CVs')

@section('content')
<div class="admin-dash">
    <div class="admin-dash-hero">
        <div>
            <p class="admin-dash-eyebrow">People</p>
            <h1 class="admin-dash-title">Team Members &amp; CVs</h1>
            <p class="admin-dash-subtitle">Update profiles, photos, and downloadable CVs for your team.</p>
        </div>
        <div class="admin-dash-hero-actions">
            <a href="{{ route('team') }}" class="btn btn-outline-light btn-sm" target="_blank">
                <i class="bi bi-box-arrow-up-right"></i> View Team Page
            </a>
        </div>
    </div>

    <div class="row g-3 g-xl-4 mb-4">
        <div class="col-sm-6 col-xl-4">
            <div class="admin-stat-card admin-stat-card--posts">
                <div class="admin-stat-icon"><i class="bi bi-people"></i></div>
                <div class="admin-stat-body">
                    <span class="admin-stat-label">Total Members</span>
                    <strong class="admin-stat-value">{{ $totalCount }}</strong>
                    <span class="admin-stat-meta">in the team directory</span>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-4">
            <div class="admin-stat-card admin-stat-card--testimonials">
                <div class="admin-stat-icon"><i class="bi bi-eye"></i></div>
                <div class="admin-stat-body">
                    <span class="admin-stat-label">Active</span>
                    <strong class="admin-stat-value">{{ $activeCount }}</strong>
                    <span class="admin-stat-meta">visible on website</span>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-4">
            <div class="admin-stat-card admin-stat-card--views">
                <div class="admin-stat-icon"><i class="bi bi-file-earmark-pdf"></i></div>
                <div class="admin-stat-body">
                    <span class="admin-stat-label">CVs Attached</span>
                    <strong class="admin-stat-value">{{ $withCvCount }}</strong>
                    <span class="admin-stat-meta">ready for download</span>
                </div>
            </div>
        </div>
    </div>

    <div class="admin-panel">
        <div class="admin-panel-head">
            <div>
                <h2>Team Directory</h2>
                <p>Edit member details and upload CVs</p>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table admin-table mb-0">
                <thead>
                    <tr>
                        <th>Member</th>
                        <th>Role</th>
                        <th>CV</th>
                        <th>Status</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($members as $member)
                        <tr>
                            <td>
                                <div class="admin-person">
                                    <div class="admin-person-avatar">
                                        <img src="{{ $member->imageUrl() }}" alt="{{ $member->name }}">
                                    </div>
                                    <div class="admin-person-meta">
                                        <strong>{{ $member->name }}</strong>
                                        <small class="text-muted d-block">{{ $member->resolvedEmail() ?: 'No email' }}</small>
                                    </div>
                                </div>
                            </td>
                            <td>{{ $member->role }}</td>
                            <td>
                                @if($member->hasCv())
                                    <span class="admin-status admin-status--new">
                                        <i class="bi bi-file-earmark-check"></i> Attached
                                    </span>
                                @else
                                    <span class="admin-status admin-status--muted">No CV</span>
                                @endif
                            </td>
                            <td>
                                <span class="admin-status admin-status--{{ $member->is_active ? 'new' : 'muted' }}">
                                    {{ $member->is_active ? 'Active' : 'Hidden' }}
                                </span>
                            </td>
                            <td class="text-end text-nowrap">
                                <a href="{{ route('admin.team-members.edit', $member) }}" class="btn btn-sm btn-outline-primary">
                                    <i class="bi bi-pencil"></i> Edit / Upload CV
                                </a>
                                <a href="{{ route('team.details', $member->slug) }}" class="btn btn-sm btn-outline-secondary" target="_blank">
                                    <i class="bi bi-eye"></i>
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">
                                <div class="admin-empty">
                                    <i class="bi bi-people"></i>
                                    <p>No team members found.</p>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if ($members->hasPages())
            <div class="admin-pagination mt-3 d-flex justify-content-between align-items-center flex-wrap gap-2">
                <small class="text-muted">
                    Showing {{ $members->firstItem() }}–{{ $members->lastItem() }}
                    of {{ number_format($members->total()) }}
                </small>
                {{ $members->links() }}
            </div>
        @endif
    </div>
</div>
@endsection
