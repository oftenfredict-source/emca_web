<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <img src="{{ asset('images/logo_header.png') }}" alt="EmCa" class="admin-brand-logo">
            <span>EmCa Admin</span>
        </div>
        <nav class="nav flex-column py-2">
            <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <i class="bi bi-speedometer2"></i> Dashboard
            </a>
            <a href="{{ route('admin.posts.index') }}" class="nav-link {{ request()->routeIs('admin.posts.*') ? 'active' : '' }}">
                <i class="bi bi-newspaper"></i> Blog Posts
            </a>
            <a href="{{ route('admin.testimonials.index') }}" class="nav-link {{ request()->routeIs('admin.testimonials.*') ? 'active' : '' }}">
                <i class="bi bi-chat-quote"></i> Testimonials
            </a>
            <a href="{{ route('admin.enquiries.index') }}" class="nav-link {{ request()->routeIs('admin.enquiries.*') ? 'active' : '' }}">
                <i class="bi bi-envelope"></i> Enquiries
                @php $newCount = \App\Models\Enquiry::new()->count(); @endphp
                @if($newCount > 0)
                    <span class="badge bg-danger ms-auto">{{ $newCount }}</span>
                @endif
            </a>
            <a href="{{ route('admin.team-members.index') }}" class="nav-link {{ request()->routeIs('admin.team-members.*') ? 'active' : '' }}">
                <i class="bi bi-people"></i> Team & CVs
            </a>
            <a href="{{ route('admin.analytics.index') }}" class="nav-link {{ request()->routeIs('admin.analytics.*') ? 'active' : '' }}">
                <i class="bi bi-graph-up"></i> Visitor Analytics
            </a>
            <hr class="border-secondary mx-3">
            <a href="{{ route('home') }}" class="nav-link" target="_blank">
                <i class="bi bi-box-arrow-up-right"></i> View Website
            </a>
            <form action="{{ route('admin.logout') }}" method="POST" class="px-3 mt-2">
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
    @stack('scripts')
</body>
</html>
