@extends('admin.layouts.app')

@section('title', 'Testimonials')

@section('content')
<div class="admin-dash">
    <div class="admin-dash-hero">
        <div>
            <p class="admin-dash-eyebrow">Content</p>
            <h1 class="admin-dash-title">Testimonials</h1>
            <p class="admin-dash-subtitle">Manage client reviews shown on your website.</p>
        </div>
        <div class="admin-dash-hero-actions">
            <a href="{{ route('admin.testimonials.create') }}" class="btn btn-light btn-sm">
                <i class="bi bi-plus-lg"></i> Add Testimonial
            </a>
        </div>
    </div>

    <div class="row g-3 g-xl-4 mb-4">
        <div class="col-sm-6 col-xl-4">
            <div class="admin-stat-card admin-stat-card--posts">
                <div class="admin-stat-icon"><i class="bi bi-chat-quote"></i></div>
                <div class="admin-stat-body">
                    <span class="admin-stat-label">Total</span>
                    <strong class="admin-stat-value">{{ $totalCount }}</strong>
                    <span class="admin-stat-meta">all testimonials</span>
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
                <h2>All Testimonials</h2>
                <p>Edit, hide, or remove client feedback</p>
            </div>
            <a href="{{ route('admin.testimonials.create') }}" class="btn btn-sm btn-primary">
                <i class="bi bi-plus-lg"></i> Add
            </a>
        </div>

        <div class="table-responsive">
            <table class="table admin-table mb-0">
                <thead>
                    <tr>
                        <th>Client</th>
                        <th>Role</th>
                        <th>Rating</th>
                        <th>Status</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($testimonials as $testimonial)
                        <tr>
                            <td>
                                <div class="admin-person">
                                    <div class="admin-person-avatar">
                                        @if($testimonial->image)
                                            <img src="{{ asset('storage/'.$testimonial->image) }}" alt="{{ $testimonial->name }}">
                                        @else
                                            <span>{{ strtoupper(substr($testimonial->name, 0, 1)) }}</span>
                                        @endif
                                    </div>
                                    <div class="admin-person-meta">
                                        <strong>{{ $testimonial->name }}</strong>
                                        <small class="text-muted text-truncate d-block" style="max-width: 260px">
                                            {{ \Illuminate\Support\Str::limit($testimonial->content, 70) }}
                                        </small>
                                    </div>
                                </div>
                            </td>
                            <td>{{ $testimonial->role ?: '—' }}</td>
                            <td>
                                <span class="admin-rating" aria-label="{{ $testimonial->rating }} stars">
                                    @for($i = 1; $i <= 5; $i++)
                                        <i class="bi bi-star{{ $i <= $testimonial->rating ? '-fill' : '' }}"></i>
                                    @endfor
                                </span>
                            </td>
                            <td>
                                <span class="admin-status admin-status--{{ $testimonial->is_active ? 'new' : 'muted' }}">
                                    {{ $testimonial->is_active ? 'Active' : 'Hidden' }}
                                </span>
                            </td>
                            <td class="text-end text-nowrap">
                                <a href="{{ route('admin.testimonials.edit', $testimonial) }}" class="btn btn-sm btn-outline-primary">
                                    <i class="bi bi-pencil"></i> Edit
                                </a>
                                <form action="{{ route('admin.testimonials.destroy', $testimonial) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this testimonial?')">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">
                                <div class="admin-empty">
                                    <i class="bi bi-chat-quote"></i>
                                    <p>No testimonials yet.</p>
                                    <a href="{{ route('admin.testimonials.create') }}" class="btn btn-sm btn-primary mt-2">Add your first review</a>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if ($testimonials->hasPages())
            <div class="admin-pagination mt-3 d-flex justify-content-between align-items-center flex-wrap gap-2">
                <small class="text-muted">
                    Showing {{ $testimonials->firstItem() }}–{{ $testimonials->lastItem() }}
                    of {{ number_format($testimonials->total()) }}
                </small>
                {{ $testimonials->links() }}
            </div>
        @endif
    </div>
</div>
@endsection
