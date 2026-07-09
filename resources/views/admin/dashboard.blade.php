@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="mb-0">Dashboard</h2>
    <span class="text-muted">Welcome, {{ auth()->user()->name }}</span>
</div>

<div class="row g-3 mb-4">
    <div class="col-md-3">
        <div class="card stat-card p-3">
            <div class="text-muted small">Blog Posts</div>
            <div class="stat-value text-primary">{{ $stats['published_posts'] }}</div>
            <small class="text-muted">{{ $stats['posts'] }} total</small>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card stat-card p-3">
            <div class="text-muted small">Testimonials</div>
            <div class="stat-value text-success">{{ $stats['testimonials'] }}</div>
            <small class="text-muted">active</small>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card stat-card p-3">
            <div class="text-muted small">Enquiries</div>
            <div class="stat-value text-warning">{{ $stats['new_enquiries'] }}</div>
            <small class="text-muted">{{ $stats['enquiries'] }} total</small>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card stat-card p-3">
            <div class="text-muted small">Page Views (7 days)</div>
            <div class="stat-value text-info">{{ $stats['page_views_week'] }}</div>
            <small class="text-muted">{{ $stats['unique_visitors_week'] }} unique visitors</small>
        </div>
    </div>
</div>

<div class="row g-4">
    <div class="col-lg-7">
        <div class="table-card">
            <h5 class="mb-3">Recent Enquiries</h5>
            @if($recentEnquiries->isEmpty())
                <p class="text-muted mb-0">No enquiries yet.</p>
            @else
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Source</th>
                                <th>Status</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($recentEnquiries as $enquiry)
                                <tr>
                                    <td>
                                        <a href="{{ route('admin.enquiries.show', $enquiry) }}">{{ $enquiry->name }}</a>
                                    </td>
                                    <td>{{ $enquiry->source }}</td>
                                    <td><span class="badge bg-{{ $enquiry->status === 'new' ? 'danger' : 'secondary' }}">{{ ucfirst($enquiry->status) }}</span></td>
                                    <td>{{ $enquiry->created_at->diffForHumans() }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
    <div class="col-lg-5">
        <div class="table-card">
            <h5 class="mb-3">Top Pages (30 days)</h5>
            @if($topPages->isEmpty())
                <p class="text-muted mb-0">No visitor data yet.</p>
            @else
                <ul class="list-group list-group-flush">
                    @foreach($topPages as $page)
                        <li class="list-group-item d-flex justify-content-between px-0">
                            <span class="text-truncate me-2" style="max-width: 70%">{{ parse_url($page->url, PHP_URL_PATH) ?: $page->url }}</span>
                            <span class="badge bg-primary">{{ $page->views }}</span>
                        </li>
                    @endforeach
                </ul>
            @endif
            <a href="{{ route('admin.analytics.index') }}" class="btn btn-sm btn-outline-primary mt-3">View Full Analytics</a>
        </div>
    </div>
</div>
@endsection
