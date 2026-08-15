@extends('admin.layouts.app')

@section('title', 'Enquiries')

@section('content')
<div class="admin-dash">
    <div class="admin-dash-hero">
        <div>
            <p class="admin-dash-eyebrow">Inbox</p>
            <h1 class="admin-dash-title">Customer Enquiries</h1>
            <p class="admin-dash-subtitle">Review and manage messages submitted from your website.</p>
        </div>
        <div class="admin-dash-hero-actions">
            <a href="{{ route('admin.enquiries.index', ['status' => 'new']) }}" class="btn btn-light btn-sm">
                <i class="bi bi-envelope-exclamation"></i> New only
            </a>
        </div>
    </div>

    <div class="row g-3 g-xl-4 mb-4">
        <div class="col-sm-6 col-xl-3">
            <a href="{{ route('admin.enquiries.index') }}" class="admin-stat-card admin-stat-card--posts text-decoration-none">
                <div class="admin-stat-icon"><i class="bi bi-inbox"></i></div>
                <div class="admin-stat-body">
                    <span class="admin-stat-label">Total</span>
                    <strong class="admin-stat-value">{{ $counts['total'] }}</strong>
                    <span class="admin-stat-meta">all enquiries</span>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-xl-3">
            <a href="{{ route('admin.enquiries.index', ['status' => 'new']) }}" class="admin-stat-card admin-stat-card--enquiries text-decoration-none">
                <div class="admin-stat-icon"><i class="bi bi-envelope-open"></i></div>
                <div class="admin-stat-body">
                    <span class="admin-stat-label">New</span>
                    <strong class="admin-stat-value">{{ $counts['new'] }}</strong>
                    <span class="admin-stat-meta">needs attention</span>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-xl-3">
            <a href="{{ route('admin.enquiries.index', ['status' => 'read']) }}" class="admin-stat-card admin-stat-card--views text-decoration-none">
                <div class="admin-stat-icon"><i class="bi bi-eye"></i></div>
                <div class="admin-stat-body">
                    <span class="admin-stat-label">Read</span>
                    <strong class="admin-stat-value">{{ $counts['read'] }}</strong>
                    <span class="admin-stat-meta">opened messages</span>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-xl-3">
            <a href="{{ route('admin.enquiries.index', ['status' => 'replied']) }}" class="admin-stat-card admin-stat-card--testimonials text-decoration-none">
                <div class="admin-stat-icon"><i class="bi bi-reply"></i></div>
                <div class="admin-stat-body">
                    <span class="admin-stat-label">Replied</span>
                    <strong class="admin-stat-value">{{ $counts['replied'] }}</strong>
                    <span class="admin-stat-meta">completed follow-ups</span>
                </div>
            </a>
        </div>
    </div>

    <div class="admin-panel mb-4">
        <form method="GET" class="row g-2 align-items-end">
            <div class="col-md-5">
                <label class="form-label">Search</label>
                <input type="text" name="search" class="form-control" placeholder="Search name, email, message..." value="{{ request('search') }}">
            </div>
            <div class="col-md-3">
                <label class="form-label">Status</label>
                <select name="status" class="form-select">
                    <option value="">All statuses</option>
                    @foreach($statuses as $value => $label)
                        <option value="{{ $value }}" {{ request('status') === $value ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary w-100">
                    <i class="bi bi-funnel"></i> Filter
                </button>
            </div>
            @if(request()->filled('search') || request()->filled('status'))
                <div class="col-md-2">
                    <a href="{{ route('admin.enquiries.index') }}" class="btn btn-outline-secondary w-100">Clear</a>
                </div>
            @endif
        </form>
    </div>

    <div class="admin-panel">
        <form
            id="enquiries-bulk-form"
            action="{{ route('admin.enquiries.bulk-destroy') }}"
            method="POST"
            data-confirm="Delete the selected enquiries? This cannot be undone."
        >
            @csrf
            @method('DELETE')
            @if(request()->filled('status'))
                <input type="hidden" name="status" value="{{ request('status') }}">
            @endif
            @if(request()->filled('search'))
                <input type="hidden" name="search" value="{{ request('search') }}">
            @endif

            <div class="admin-panel-head">
                <div>
                    <h2>Messages</h2>
                    <p>
                        @if(request()->filled('status') || request()->filled('search'))
                            Filtered results
                        @else
                            Latest customer enquiries
                        @endif
                    </p>
                </div>
                <div class="d-flex align-items-center gap-2 flex-wrap">
                    <span id="enquiries-selected-count" class="small text-muted">0 selected</span>
                    <button
                        type="submit"
                        id="enquiries-bulk-delete"
                        class="btn btn-sm btn-outline-danger"
                        disabled
                    >
                        <i class="bi bi-trash"></i> Delete selected
                    </button>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table admin-table mb-0">
                    <thead>
                        <tr>
                            <th style="width: 42px">
                                <input
                                    type="checkbox"
                                    class="form-check-input"
                                    id="enquiries-select-all"
                                    aria-label="Select all enquiries on this page"
                                    @disabled($enquiries->isEmpty())
                                >
                            </th>
                            <th>Customer</th>
                            <th>Source</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($enquiries as $enquiry)
                            <tr class="{{ $enquiry->status === 'new' ? 'admin-row-new' : '' }}">
                                <td>
                                    <input
                                        type="checkbox"
                                        class="form-check-input enquiry-row-check"
                                        name="ids[]"
                                        value="{{ $enquiry->id }}"
                                        aria-label="Select enquiry from {{ $enquiry->name }}"
                                    >
                                </td>
                                <td>
                                    <div class="admin-person">
                                        <div class="admin-person-avatar">
                                            <span>{{ strtoupper(substr($enquiry->name, 0, 1)) }}</span>
                                        </div>
                                        <div class="admin-person-meta">
                                            <strong>{{ $enquiry->name }}</strong>
                                            <small class="text-muted d-block">{{ $enquiry->email }}</small>
                                            <small class="text-muted text-truncate d-block" style="max-width: 280px">
                                                {{ \Illuminate\Support\Str::limit($enquiry->message, 70) }}
                                            </small>
                                        </div>
                                    </div>
                                </td>
                                <td>{{ ucfirst($enquiry->source) }}</td>
                                <td>
                                    <span class="admin-status admin-status--{{ $enquiry->status === 'new' ? 'new' : 'muted' }}">
                                        {{ ucfirst($enquiry->status) }}
                                    </span>
                                </td>
                                <td class="text-muted">{{ $enquiry->created_at->format('M d, Y · H:i') }}</td>
                                <td class="text-end">
                                    <a href="{{ route('admin.enquiries.show', $enquiry) }}" class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-eye"></i> View
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6">
                                    <div class="admin-empty">
                                        <i class="bi bi-envelope"></i>
                                        <p>No enquiries found.</p>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </form>

        @if ($enquiries->hasPages())
            <div class="admin-pagination mt-3 d-flex justify-content-between align-items-center flex-wrap gap-2">
                <small class="text-muted">
                    Showing {{ $enquiries->firstItem() }}–{{ $enquiries->lastItem() }}
                    of {{ number_format($enquiries->total()) }}
                </small>
                {{ $enquiries->links() }}
            </div>
        @endif
    </div>
</div>
@endsection

@push('scripts')
<script>
    (function () {
        var form = document.getElementById('enquiries-bulk-form');
        if (!form) return;

        var selectAll = document.getElementById('enquiries-select-all');
        var deleteBtn = document.getElementById('enquiries-bulk-delete');
        var countLabel = document.getElementById('enquiries-selected-count');
        var checks = Array.prototype.slice.call(form.querySelectorAll('.enquiry-row-check'));

        function sync() {
            var selected = checks.filter(function (el) { return el.checked; });
            var selectedCount = selected.length;
            var total = checks.length;

            if (countLabel) {
                countLabel.textContent = selectedCount + ' selected';
            }
            if (deleteBtn) {
                deleteBtn.disabled = selectedCount === 0;
            }
            if (selectAll) {
                selectAll.checked = total > 0 && selectedCount === total;
                selectAll.indeterminate = selectedCount > 0 && selectedCount < total;
            }
        }

        if (selectAll) {
            selectAll.addEventListener('change', function () {
                checks.forEach(function (el) {
                    el.checked = selectAll.checked;
                });
                sync();
            });
        }

        checks.forEach(function (el) {
            el.addEventListener('change', sync);
        });

        form.addEventListener('submit', function (event) {
            var selectedCount = checks.filter(function (el) { return el.checked; }).length;
            if (selectedCount === 0) {
                event.preventDefault();
                return;
            }

            var message = form.getAttribute('data-confirm') || 'Delete selected enquiries?';
            if (!window.confirm(message)) {
                event.preventDefault();
            }
        });

        sync();
    })();
</script>
@endpush
