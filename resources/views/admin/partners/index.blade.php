@extends('admin.layouts.app')

@section('title', 'Partners')

@section('content')
<div class="admin-dash">
    <div class="admin-dash-hero">
        <div>
            <p class="admin-dash-eyebrow">Homepage</p>
            <h1 class="admin-dash-title">Partners</h1>
            <p class="admin-dash-subtitle">Manage logos shown in “Our Proudly Partners” on the homepage.</p>
        </div>
        <div class="admin-dash-hero-actions">
            <a href="{{ route('admin.partners.create') }}" class="btn btn-light btn-sm">
                <i class="bi bi-plus-lg"></i> Add Partner
            </a>
        </div>
    </div>

    <div class="row g-3 g-xl-4 mb-4">
        <div class="col-sm-6 col-xl-4">
            <div class="admin-stat-card">
                <div class="admin-stat-icon"><i class="bi bi-building"></i></div>
                <div class="admin-stat-body">
                    <span class="admin-stat-label">Total</span>
                    <strong class="admin-stat-value">{{ $totalCount }}</strong>
                    <span class="admin-stat-meta">all partners</span>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-4">
            <div class="admin-stat-card admin-stat-card--testimonials">
                <div class="admin-stat-icon"><i class="bi bi-eye"></i></div>
                <div class="admin-stat-body">
                    <span class="admin-stat-label">Active</span>
                    <strong class="admin-stat-value">{{ $activeCount }}</strong>
                    <span class="admin-stat-meta">visible on homepage</span>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-4">
            <div class="admin-stat-card admin-stat-card--enquiries">
                <div class="admin-stat-icon"><i class="bi bi-eye-slash"></i></div>
                <div class="admin-stat-body">
                    <span class="admin-stat-label">Hidden</span>
                    <strong class="admin-stat-value">{{ max(0, $totalCount - $activeCount) }}</strong>
                    <span class="admin-stat-meta">not shown publicly</span>
                </div>
            </div>
        </div>
    </div>

    <div class="admin-panel">
        <div class="admin-panel-head">
            <div>
                <h2>All Partners</h2>
                <p>Upload logos, reorder, or hide partners</p>
            </div>
            <a href="{{ route('admin.partners.create') }}" class="btn btn-sm btn-primary">
                <i class="bi bi-plus-lg"></i> Add
            </a>
        </div>

        @if ($partners->isEmpty())
            <div class="admin-empty">
                <i class="bi bi-building"></i>
                <p>No partners yet. Add the first logo.</p>
            </div>
        @else
            <div class="table-responsive">
                <table class="table admin-table align-middle mb-0">
                    <thead>
                        <tr>
                            <th>Logo</th>
                            <th>Name</th>
                            <th>Order</th>
                            <th>Status</th>
                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($partners as $partner)
                            <tr>
                                <td style="width: 100px;">
                                    <div class="bg-light rounded border d-flex align-items-center justify-content-center" style="width: 72px; height: 48px; padding: 6px;">
                                        <img src="{{ $partner->logoUrl() }}" alt="{{ $partner->name }}" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                                    </div>
                                </td>
                                <td><strong>{{ $partner->name }}</strong></td>
                                <td>{{ $partner->sort_order }}</td>
                                <td>
                                    @if ($partner->is_active)
                                        <span class="admin-status admin-status--new">Active</span>
                                    @else
                                        <span class="admin-status admin-status--muted">Hidden</span>
                                    @endif
                                </td>
                                <td class="text-end">
                                    <a href="{{ route('admin.partners.edit', $partner) }}" class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <form action="{{ route('admin.partners.destroy', $partner) }}" method="POST" class="d-inline" onsubmit="return confirm('Remove {{ $partner->name }}?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-3">
                {{ $partners->links() }}
            </div>
        @endif
    </div>
</div>
@endsection
