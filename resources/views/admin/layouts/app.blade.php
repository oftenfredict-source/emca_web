<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Admin') - EmCa Admin</title>
    @include('partials.favicon')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    @include('admin.partials.theme')
    <style>
        @media (max-width: 768px) {
            .admin-sidebar { transform: translateX(-100%); }
            .admin-content { margin-left: 0; }
        }
    </style>
    @stack('styles')
</head>
<body>
    <aside class="admin-sidebar">
        <div class="brand">
            <img src="{{ function_exists('site_image_url') ? site_image_url('logo') : asset('images/logo_header.png') }}" alt="EmCa" class="admin-brand-logo">
            <span>EmCa Admin</span>
        </div>
        <nav class="admin-sidebar-nav py-2">
            <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <i class="bi bi-speedometer2"></i> Dashboard
            </a>
            <a href="{{ route('admin.posts.index') }}" class="nav-link {{ request()->routeIs('admin.posts.*') ? 'active' : '' }}">
                <i class="bi bi-newspaper"></i> Blog Posts
            </a>
            <a href="{{ route('admin.testimonials.index') }}" class="nav-link {{ request()->routeIs('admin.testimonials.*') ? 'active' : '' }}">
                <i class="bi bi-chat-quote"></i> Testimonials
            </a>
            @if (\Illuminate\Support\Facades\Route::has('admin.partners.index'))
            <a href="{{ route('admin.partners.index') }}" class="nav-link {{ request()->routeIs('admin.partners.*') ? 'active' : '' }}">
                <i class="bi bi-building"></i> Partners
            </a>
            @endif
            <a href="{{ route('admin.enquiries.index') }}" class="nav-link {{ request()->routeIs('admin.enquiries.*') ? 'active' : '' }}">
                <i class="bi bi-envelope"></i> Enquiries
                @php
                    try {
                        $newCount = \App\Models\Enquiry::new()->count();
                    } catch (\Throwable $exception) {
                        $newCount = 0;
                    }
                @endphp
                @if($newCount > 0)
                    <span class="badge bg-danger ms-auto">{{ $newCount }}</span>
                @endif
            </a>
            <a href="{{ route('admin.team-members.index') }}" class="nav-link {{ request()->routeIs('admin.team-members.*') ? 'active' : '' }}">
                <i class="bi bi-people"></i> Team & CVs
            </a>
            @if (\Illuminate\Support\Facades\Route::has('admin.site-images.index'))
            @php
                $siteImageGroups = config('site-images.groups', []);
                $siteImagesOpen = request()->routeIs('admin.site-images.*');
                $activeSiteImageGroup = (string) request()->query('group', array_key_first($siteImageGroups) ?: 'brand');
            @endphp
            <div class="admin-nav-group {{ $siteImagesOpen ? 'is-open' : '' }}">
                <button
                    type="button"
                    class="nav-link admin-nav-toggle {{ $siteImagesOpen ? 'active' : '' }}"
                    data-admin-nav-toggle
                    aria-expanded="{{ $siteImagesOpen ? 'true' : 'false' }}"
                >
                    <i class="bi bi-images"></i>
                    <span>Site Images</span>
                    <i class="bi bi-chevron-down admin-nav-chevron ms-auto"></i>
                </button>
                <div class="admin-nav-submenu">
                    @foreach ($siteImageGroups as $groupKey => $groupLabel)
                        <a
                            href="{{ route('admin.site-images.index', ['group' => $groupKey]) }}"
                            class="nav-link admin-nav-sublink {{ $siteImagesOpen && $activeSiteImageGroup === $groupKey ? 'active' : '' }}"
                        >
                            {{ $groupLabel }}
                        </a>
                    @endforeach
                </div>
            </div>
            @endif
            @php
                try {
                    $pricingNavServices = \App\Models\PricingService::query()->orderBy('sort_order')->get(['slug', 'name']);
                } catch (\Throwable $exception) {
                    $pricingNavServices = collect();
                }
                $pricingOpen = request()->routeIs('admin.pricing.*');
                $activePricingSlug = (string) request()->query('service', $pricingNavServices->first()->slug ?? '');
            @endphp
            @if (\Illuminate\Support\Facades\Route::has('admin.pricing.index'))
            <div class="admin-nav-group {{ $pricingOpen ? 'is-open' : '' }}">
                <button
                    type="button"
                    class="nav-link admin-nav-toggle {{ $pricingOpen ? 'active' : '' }}"
                    data-admin-nav-toggle
                    aria-expanded="{{ $pricingOpen ? 'true' : 'false' }}"
                >
                    <i class="bi bi-tags"></i>
                    <span>Pricing</span>
                    <i class="bi bi-chevron-down admin-nav-chevron ms-auto"></i>
                </button>
                <div class="admin-nav-submenu">
                    @forelse ($pricingNavServices as $pricingService)
                        <a
                            href="{{ route('admin.pricing.index', ['service' => $pricingService->slug]) }}"
                            class="nav-link admin-nav-sublink {{ $pricingOpen && $activePricingSlug === $pricingService->slug ? 'active' : '' }}"
                        >
                            {{ $pricingService->name }}
                        </a>
                    @empty
                        <a href="{{ route('admin.pricing.index') }}" class="nav-link admin-nav-sublink {{ $pricingOpen ? 'active' : '' }}">
                            Pricing
                        </a>
                    @endforelse
                </div>
            </div>
            @endif
            <a href="{{ route('admin.analytics.index') }}" class="nav-link {{ request()->routeIs('admin.analytics.*') ? 'active' : '' }}">
                <i class="bi bi-graph-up"></i> Visitor Analytics
            </a>
            <hr class="border-secondary mx-3">
            <a href="{{ route('home') }}" class="nav-link" target="_blank">
                <i class="bi bi-box-arrow-up-right"></i> View Website
            </a>
            <form id="admin-logout-form" action="{{ route('admin.logout') }}" method="POST" class="px-3 mt-2">
                @csrf
                <button type="submit" class="btn btn-outline-light btn-sm w-100">
                    <i class="bi bi-box-arrow-right"></i> Logout
                </button>
            </form>
        </nav>
    </aside>

    <main class="admin-content">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if(isset($errors) && $errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.querySelectorAll('[data-admin-nav-toggle]').forEach(function (button) {
            button.addEventListener('click', function () {
                var group = button.closest('.admin-nav-group');
                if (!group) return;
                var isOpen = group.classList.toggle('is-open');
                button.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
            });
        });

        (function () {
            var idleMs = {{ max(1, (int) config('admin_auth.idle_timeout_minutes', 5)) }} * 60 * 1000;
            var pingEveryMs = 30000;
            var idleTimer;
            var lastPing = 0;
            var csrf = document.querySelector('meta[name="csrf-token"]');
            var pingUrl = @json(route('admin.session.ping'));
            var loginUrl = @json(route('admin.login'));
            var logoutForm = document.getElementById('admin-logout-form');

            function logoutIdle() {
                if (logoutForm) {
                    logoutForm.submit();
                    return;
                }
                window.location.href = loginUrl;
            }

            function ping() {
                var now = Date.now();
                if (now - lastPing < pingEveryMs || !csrf) {
                    return;
                }
                lastPing = now;
                fetch(pingUrl, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': csrf.getAttribute('content'),
                        'Accept': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest'
                    },
                    credentials: 'same-origin'
                }).then(function (res) {
                    if (res.status === 401) {
                        window.location.href = loginUrl;
                    }
                }).catch(function () {});
            }

            function resetIdle() {
                clearTimeout(idleTimer);
                idleTimer = setTimeout(logoutIdle, idleMs);
                ping();
            }

            ['click', 'keydown', 'mousemove', 'scroll', 'touchstart'].forEach(function (evt) {
                document.addEventListener(evt, resetIdle, { passive: true });
            });

            resetIdle();
        })();
    </script>
    @stack('scripts')
</body>
</html>
