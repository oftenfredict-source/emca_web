<style>
    :root {
        --sidebar-width: 260px;
        --emca-primary: #940000;
        --emca-primary-dark: #6e0000;
        --emca-primary-light: #b33333;
        --emca-font: "Century Gothic", CenturyGothic, AppleGothic, "Trebuchet MS", sans-serif;
        --bs-primary: #940000;
        --bs-primary-rgb: 148, 0, 0;
        --bs-link-color: #940000;
        --bs-link-hover-color: #6e0000;
    }

    body {
        font-family: var(--emca-font);
        background: #f8f5f5;
        min-height: 100vh;
        color: #333;
    }

    h1, h2, h3, h4, h5, h6,
    .btn, .form-label, .nav-link, .brand {
        font-family: var(--emca-font);
    }

    .btn-primary {
        --bs-btn-bg: var(--emca-primary);
        --bs-btn-border-color: var(--emca-primary);
        --bs-btn-hover-bg: var(--emca-primary-dark);
        --bs-btn-hover-border-color: var(--emca-primary-dark);
        --bs-btn-active-bg: var(--emca-primary-dark);
        --bs-btn-active-border-color: var(--emca-primary-dark);
        --bs-btn-disabled-bg: var(--emca-primary);
        --bs-btn-disabled-border-color: var(--emca-primary);
    }

    .btn-outline-primary {
        --bs-btn-color: var(--emca-primary);
        --bs-btn-border-color: var(--emca-primary);
        --bs-btn-hover-bg: var(--emca-primary);
        --bs-btn-hover-border-color: var(--emca-primary);
        --bs-btn-active-bg: var(--emca-primary-dark);
        --bs-btn-active-border-color: var(--emca-primary-dark);
    }

    .text-primary { color: var(--emca-primary) !important; }
    .bg-primary { background-color: var(--emca-primary) !important; }
    .badge.bg-primary { background-color: var(--emca-primary) !important; }
    .badge.bg-danger { background-color: var(--emca-primary) !important; }

    .form-check-input:checked {
        background-color: var(--emca-primary);
        border-color: var(--emca-primary);
    }

    .form-control:focus,
    .form-select:focus {
        border-color: var(--emca-primary-light);
        box-shadow: 0 0 0 0.2rem rgba(148, 0, 0, 0.15);
    }

    .page-link {
        color: var(--emca-primary);
    }

    .page-item.active .page-link {
        background-color: var(--emca-primary);
        border-color: var(--emca-primary);
    }

    a {
        color: var(--emca-primary);
    }

    a:hover {
        color: var(--emca-primary-dark);
    }

    .admin-sidebar {
        width: var(--sidebar-width);
        min-height: 100vh;
        background: linear-gradient(180deg, var(--emca-primary-dark) 0%, var(--emca-primary) 100%);
        position: fixed;
        left: 0;
        top: 0;
        z-index: 1000;
    }

    .admin-sidebar .brand {
        padding: 1.25rem 1.5rem;
        color: #fff;
        font-weight: 700;
        font-size: 1.15rem;
        border-bottom: 1px solid rgba(255, 255, 255, 0.15);
        letter-spacing: 0.02em;
    }

    .admin-sidebar .nav-link {
        color: rgba(255, 255, 255, 0.85);
        padding: 0.75rem 1.5rem;
        display: flex;
        align-items: center;
        gap: 0.75rem;
        border-left: 3px solid transparent;
        transition: all 0.2s ease;
    }

    .admin-sidebar .nav-link:hover,
    .admin-sidebar .nav-link.active {
        color: #fff;
        background: rgba(255, 255, 255, 0.12);
        border-left-color: #fff;
    }

    .admin-content {
        margin-left: var(--sidebar-width);
        padding: 1.5rem 2rem;
    }

    .stat-card {
        border: none;
        border-radius: 0.75rem;
        box-shadow: 0 1px 3px rgba(148, 0, 0, 0.08);
        border-top: 3px solid var(--emca-primary);
    }

    .stat-card .stat-value {
        font-size: 1.75rem;
        font-weight: 700;
        color: var(--emca-primary);
    }

    .table-card {
        background: #fff;
        border-radius: 0.75rem;
        box-shadow: 0 1px 3px rgba(148, 0, 0, 0.08);
        padding: 1.5rem;
        border: 1px solid rgba(148, 0, 0, 0.06);
    }

    .table-card h2,
    .table-card h5 {
        color: var(--emca-primary-dark);
    }

    .alert-success {
        border-color: rgba(148, 0, 0, 0.15);
        background-color: #fdf8f8;
        color: var(--emca-primary-dark);
    }

    @media (max-width: 768px) {
        .admin-sidebar { transform: translateX(-100%); }
        .admin-content { margin-left: 0; }
    }
</style>
