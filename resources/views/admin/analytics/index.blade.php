@extends('admin.layouts.app')

@section('title', 'Visitor Analytics')

@section('content')
@php
    $maxDailyViews = max(1, (int) $dailyViews->max('views'));
@endphp

<div class="admin-dash">
    <div class="admin-dash-hero">
        <div>
            <p class="admin-dash-eyebrow">Insights</p>
            <h1 class="admin-dash-title">Visitor Analytics</h1>
            <p class="admin-dash-subtitle">Track page views, unique visitors, and engagement across your website.</p>
        </div>
        <div class="admin-dash-hero-actions">
            <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-light btn-sm">
                <i class="bi bi-arrow-left"></i> Dashboard
            </a>
            <a href="{{ route('home') }}" class="btn btn-light btn-sm" target="_blank">
                <i class="bi bi-box-arrow-up-right"></i> View Site
            </a>
        </div>
    </div>

    <div class="row g-3 g-xl-4 mb-4">
        <div class="col-sm-6 col-xl-3">
            <div class="admin-stat-card admin-stat-card--posts">
                <div class="admin-stat-icon"><i class="bi bi-collection"></i></div>
                <div class="admin-stat-body">
                    <span class="admin-stat-label">Total Page Views</span>
                    <strong class="admin-stat-value">{{ number_format($totalViews) }}</strong>
                    <span class="admin-stat-meta">all time</span>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="admin-stat-card admin-stat-card--views">
                <div class="admin-stat-icon"><i class="bi bi-sun"></i></div>
                <div class="admin-stat-body">
                    <span class="admin-stat-label">Today</span>
                    <strong class="admin-stat-value">{{ number_format($viewsToday) }}</strong>
                    <span class="admin-stat-meta">{{ $uniqueVisitorsToday }} unique visitors</span>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="admin-stat-card admin-stat-card--testimonials">
                <div class="admin-stat-icon"><i class="bi bi-calendar-week"></i></div>
                <div class="admin-stat-body">
                    <span class="admin-stat-label">This Week</span>
                    <strong class="admin-stat-value">{{ number_format($viewsThisWeek) }}</strong>
                    <span class="admin-stat-meta">{{ $uniqueVisitorsWeek }} unique · 7 days</span>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="admin-stat-card admin-stat-card--enquiries">
                <div class="admin-stat-icon"><i class="bi bi-calendar-month"></i></div>
                <div class="admin-stat-body">
                    <span class="admin-stat-label">This Month</span>
                    <strong class="admin-stat-value">{{ number_format($viewsThisMonth) }}</strong>
                    <span class="admin-stat-meta">since {{ now()->startOfMonth()->format('M d') }}</span>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-3 g-xl-4 mb-4">
        <div class="col-lg-6">
            <div class="admin-panel h-100">
                <div class="admin-panel-head">
                    <div>
                        <h2>Top Pages</h2>
                        <p>Most visited in the last 30 days</p>
                    </div>
                </div>

                @if($topPages->isEmpty())
                    <div class="admin-empty">
                        <i class="bi bi-file-earmark-bar-graph"></i>
                        <p>No page data yet.</p>
                    </div>
                @else
                    <ul class="admin-rank-list">
                        @foreach($topPages as $index => $page)
                            <li>
                                <span class="admin-rank-index">{{ $index + 1 }}</span>
                                <span class="admin-rank-path text-truncate" title="{{ $page->url }}">
                                    {{ parse_url($page->url, PHP_URL_PATH) ?: $page->url }}
                                </span>
                                <span class="admin-rank-views">{{ number_format($page->views) }}</span>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>

        <div class="col-lg-6">
            <div class="admin-panel h-100">
                <div class="admin-panel-head">
                    <div>
                        <h2>Daily Views</h2>
                        <p>Traffic trend for the last 14 days</p>
                    </div>
                </div>

                @if($dailyViews->isEmpty())
                    <div class="admin-empty">
                        <i class="bi bi-bar-chart"></i>
                        <p>No daily data yet.</p>
                    </div>
                @else
                    <div class="admin-bars">
                        @foreach($dailyViews as $day)
                            @php
                                $views = (int) $day->views;
                                $height = max(8, (int) round(($views / $maxDailyViews) * 100));
                            @endphp
                            <div class="admin-bar-item" title="{{ $views }} views">
                                <div class="admin-bar-track">
                                    <div class="admin-bar-fill" style="height: {{ $height }}%"></div>
                                </div>
                                <span class="admin-bar-value">{{ $views }}</span>
                                <span class="admin-bar-label">{{ \Carbon\Carbon::parse($day->date)->format('M j') }}</span>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
