@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="admin-dash">
    <div class="admin-dash-hero">
        <div>
            <p class="admin-dash-eyebrow">EmCa Admin</p>
            <h1 class="admin-dash-title">Welcome back, {{ auth()->user()->name }}</h1>
            <p class="admin-dash-subtitle">Here’s what’s happening across your website today.</p>
        </div>
        <div class="admin-dash-hero-actions">
            <a href="{{ route('admin.posts.create') }}" class="btn btn-light btn-sm">
                <i class="bi bi-plus-lg"></i> New Post
            </a>
            <a href="{{ route('home') }}" class="btn btn-outline-light btn-sm" target="_blank">
                <i class="bi bi-box-arrow-up-right"></i> View Site
            </a>
        </div>
    </div>

    <div class="row g-3 g-xl-4 mb-4">
        <div class="col-sm-6 col-xl-3">
            <a href="{{ route('admin.posts.index') }}" class="admin-stat-card admin-stat-card--posts text-decoration-none">
                <div class="admin-stat-icon"><i class="bi bi-newspaper"></i></div>
                <div class="admin-stat-body">
                    <span class="admin-stat-label">Blog Posts</span>
                    <strong class="admin-stat-value">{{ $stats['published_posts'] }}</strong>
                    <span class="admin-stat-meta">{{ $stats['posts'] }} total posts</span>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-xl-3">
            <a href="{{ route('admin.testimonials.index') }}" class="admin-stat-card admin-stat-card--testimonials text-decoration-none">
                <div class="admin-stat-icon"><i class="bi bi-chat-quote"></i></div>
                <div class="admin-stat-body">
                    <span class="admin-stat-label">Testimonials</span>
                    <strong class="admin-stat-value">{{ $stats['testimonials'] }}</strong>
                    <span class="admin-stat-meta">active reviews</span>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-xl-3">
            <a href="{{ route('admin.enquiries.index') }}" class="admin-stat-card admin-stat-card--enquiries text-decoration-none">
                <div class="admin-stat-icon"><i class="bi bi-envelope-open"></i></div>
                <div class="admin-stat-body">
                    <span class="admin-stat-label">New Enquiries</span>
                    <strong class="admin-stat-value">{{ $stats['new_enquiries'] }}</strong>
                    <span class="admin-stat-meta">{{ $stats['enquiries'] }} total messages</span>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-xl-3">
            <a href="{{ route('admin.analytics.index') }}" class="admin-stat-card admin-stat-card--views text-decoration-none">
                <div class="admin-stat-icon"><i class="bi bi-eye"></i></div>
                <div class="admin-stat-body">
                    <span class="admin-stat-label">Page Views</span>
                    <strong class="admin-stat-value">{{ $stats['page_views_week'] }}</strong>
                    <span class="admin-stat-meta">{{ $stats['unique_visitors_week'] }} unique · 7 days</span>
                </div>
            </a>
        </div>
    </div>

    <div class="row g-3 g-xl-4 mb-4">
        <div class="col-lg-4">
            <div class="admin-panel admin-panel--compact">
                <div class="admin-panel-head">
                    <h2>Quick Actions</h2>
                </div>
                <div class="admin-quick-actions">
                    <a href="{{ route('admin.posts.create') }}" class="admin-quick-action">
                        <i class="bi bi-file-earmark-plus"></i>
                        <span>Create blog post</span>
                    </a>
                    <a href="{{ route('admin.enquiries.index', ['status' => 'new']) }}" class="admin-quick-action">
                        <i class="bi bi-inbox"></i>
                        <span>Review new enquiries</span>
                    </a>
                    <a href="{{ route('admin.team-members.index') }}" class="admin-quick-action">
                        <i class="bi bi-person-badge"></i>
                        <span>Manage team &amp; CVs</span>
                    </a>
                    <a href="{{ route('admin.analytics.index') }}" class="admin-quick-action">
                        <i class="bi bi-bar-chart-line"></i>
                        <span>Open analytics</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="admin-panel">
                <div class="admin-panel-head">
                    <div>
                        <h2>Today at a glance</h2>
                        <p>Live website activity snapshot</p>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-md-4">
                        <div class="admin-glance-item">
                            <span class="admin-glance-label">Views today</span>
                            <strong>{{ $stats['page_views_today'] }}</strong>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="admin-glance-item">
                            <span class="admin-glance-label">Unique visitors (7d)</span>
                            <strong>{{ $stats['unique_visitors_week'] }}</strong>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="admin-glance-item">
                            <span class="admin-glance-label">Open enquiries</span>
                            <strong>{{ $stats['new_enquiries'] }}</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-3 g-xl-4">
        <div class="col-lg-7">
            <div class="admin-panel">
                <div class="admin-panel-head">
                    <div>
                        <h2>Recent Enquiries</h2>
                        <p>Latest messages from your website</p>
                    </div>
                    <a href="{{ route('admin.enquiries.index') }}" class="btn btn-sm btn-outline-primary">View all</a>
                </div>

                @if($recentEnquiries->isEmpty())
                    <div class="admin-empty">
                        <i class="bi bi-envelope"></i>
                        <p>No enquiries yet.</p>
                    </div>
                @else
                    <div class="table-responsive">
                        <table class="table admin-table mb-0">
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
                                            <a href="{{ route('admin.enquiries.show', $enquiry) }}" class="admin-table-link">
                                                {{ $enquiry->name }}
                                            </a>
                                        </td>
                                        <td>{{ ucfirst($enquiry->source) }}</td>
                                        <td>
                                            <span class="admin-status admin-status--{{ $enquiry->status === 'new' ? 'new' : 'muted' }}">
                                                {{ ucfirst($enquiry->status) }}
                                            </span>
                                        </td>
                                        <td class="text-muted">{{ $enquiry->created_at->diffForHumans() }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>

        <div class="col-lg-5">
            <div class="admin-panel h-100">
                <div class="admin-panel-head">
                    <div>
                        <h2>Top Pages</h2>
                        <p>Most visited in the last 30 days</p>
                    </div>
                    <a href="{{ route('admin.analytics.index') }}" class="btn btn-sm btn-outline-primary">Analytics</a>
                </div>

                @if($topPages->isEmpty())
                    <div class="admin-empty">
                        <i class="bi bi-graph-up"></i>
                        <p>No visitor data yet.</p>
                    </div>
                @else
                    <ul class="admin-rank-list">
                        @foreach($topPages as $index => $page)
                            <li>
                                <span class="admin-rank-index">{{ $index + 1 }}</span>
                                <span class="admin-rank-path text-truncate" title="{{ $page->url }}">
                                    {{ parse_url($page->url, PHP_URL_PATH) ?: $page->url }}
                                </span>
                                <span class="admin-rank-views">{{ $page->views }}</span>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
