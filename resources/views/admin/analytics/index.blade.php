@extends('admin.layouts.app')

@section('title', 'Visitor Analytics')

@section('content')
<div class="mb-4">
    <h2>Visitor Analytics</h2>
    <p class="text-muted">Track page views and visitor engagement on your website.</p>
</div>

<div class="row g-3 mb-4">
    <div class="col-md-3">
        <div class="card stat-card p-3">
            <div class="text-muted small">Total Page Views</div>
            <div class="stat-value">{{ number_format($totalViews) }}</div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card stat-card p-3">
            <div class="text-muted small">Today</div>
            <div class="stat-value text-primary">{{ number_format($viewsToday) }}</div>
            <small class="text-muted">{{ $uniqueVisitorsToday }} unique</small>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card stat-card p-3">
            <div class="text-muted small">This Week</div>
            <div class="stat-value text-success">{{ number_format($viewsThisWeek) }}</div>
            <small class="text-muted">{{ $uniqueVisitorsWeek }} unique (7 days)</small>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card stat-card p-3">
            <div class="text-muted small">This Month</div>
            <div class="stat-value text-info">{{ number_format($viewsThisMonth) }}</div>
        </div>
    </div>
</div>

<div class="row g-4">
    <div class="col-lg-6">
        <div class="table-card">
            <h5 class="mb-3">Top Pages (Last 30 Days)</h5>
            @if($topPages->isEmpty())
                <p class="text-muted">No data yet.</p>
            @else
                <table class="table table-sm">
                    <thead><tr><th>Page</th><th class="text-end">Views</th></tr></thead>
                    <tbody>
                        @foreach($topPages as $page)
                            <tr>
                                <td class="text-truncate" style="max-width: 300px">{{ parse_url($page->url, PHP_URL_PATH) ?: $page->url }}</td>
                                <td class="text-end"><strong>{{ $page->views }}</strong></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
    <div class="col-lg-6">
        <div class="table-card">
            <h5 class="mb-3">Daily Views (Last 14 Days)</h5>
            @if($dailyViews->isEmpty())
                <p class="text-muted">No data yet.</p>
            @else
                <table class="table table-sm">
                    <thead><tr><th>Date</th><th class="text-end">Views</th></tr></thead>
                    <tbody>
                        @foreach($dailyViews as $day)
                            <tr>
                                <td>{{ \Carbon\Carbon::parse($day->date)->format('M d, Y') }}</td>
                                <td class="text-end"><strong>{{ $day->views }}</strong></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
    <div class="col-12">
        <div class="table-card">
            <h5 class="mb-3">Recent Activity</h5>
            <div class="table-responsive">
                <table class="table table-sm table-hover mb-0">
                    <thead>
                        <tr>
                            <th>Time</th>
                            <th>Page</th>
                            <th>IP</th>
                            <th>Referrer</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($recentViews as $view)
                            <tr>
                                <td>{{ $view->created_at->format('M d H:i') }}</td>
                                <td class="text-truncate" style="max-width: 250px">{{ parse_url($view->url, PHP_URL_PATH) }}</td>
                                <td>{{ $view->ip_address }}</td>
                                <td class="text-truncate" style="max-width: 200px">{{ $view->referrer ? parse_url($view->referrer, PHP_URL_HOST) : 'Direct' }}</td>
                            </tr>
                        @empty
                            <tr><td colspan="4" class="text-muted text-center">No visitor data yet.</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
