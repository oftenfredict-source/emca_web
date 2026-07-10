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
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }

    .admin-brand-logo {
        width: 36px;
        height: 36px;
        object-fit: contain;
        background: #fff;
        border-radius: 8px;
        padding: 4px;
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

    /* Dashboard */
    .admin-dash-hero {
        display: flex;
        justify-content: space-between;
        align-items: flex-end;
        gap: 1.25rem;
        flex-wrap: wrap;
        margin-bottom: 1.5rem;
        padding: 1.5rem 1.75rem;
        border-radius: 1rem;
        background:
            linear-gradient(135deg, rgba(110, 0, 0, 0.96) 0%, rgba(148, 0, 0, 0.92) 55%, rgba(179, 51, 51, 0.9) 100%),
            radial-gradient(circle at top right, rgba(255, 255, 255, 0.18), transparent 45%);
        color: #fff;
        box-shadow: 0 18px 40px rgba(110, 0, 0, 0.18);
    }

    .admin-dash-eyebrow {
        margin: 0 0 0.35rem;
        font-size: 0.75rem;
        letter-spacing: 0.12em;
        text-transform: uppercase;
        opacity: 0.8;
    }

    .admin-dash-title {
        margin: 0;
        font-size: clamp(1.5rem, 2vw, 1.9rem);
        font-weight: 700;
        color: #fff;
    }

    .admin-dash-subtitle {
        margin: 0.4rem 0 0;
        opacity: 0.85;
        max-width: 36rem;
    }

    .admin-dash-hero-actions {
        display: flex;
        gap: 0.6rem;
        flex-wrap: wrap;
    }

    .admin-dash-hero-actions .btn-outline-light {
        border-color: rgba(255, 255, 255, 0.45);
    }

    .admin-stat-card {
        display: flex;
        gap: 1rem;
        align-items: flex-start;
        height: 100%;
        padding: 1.15rem 1.2rem;
        border-radius: 1rem;
        background: #fff;
        border: 1px solid rgba(148, 0, 0, 0.08);
        box-shadow: 0 10px 28px rgba(110, 0, 0, 0.06);
        color: inherit;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .admin-stat-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 16px 34px rgba(110, 0, 0, 0.12);
        color: inherit;
    }

    .admin-stat-icon {
        width: 48px;
        height: 48px;
        border-radius: 14px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 1.25rem;
        flex-shrink: 0;
        background: rgba(148, 0, 0, 0.08);
        color: var(--emca-primary);
    }

    .admin-stat-card--testimonials .admin-stat-icon {
        background: rgba(25, 135, 84, 0.1);
        color: #198754;
    }

    .admin-stat-card--enquiries .admin-stat-icon {
        background: rgba(255, 193, 7, 0.16);
        color: #b78103;
    }

    .admin-stat-card--views .admin-stat-icon {
        background: rgba(13, 110, 253, 0.1);
        color: #0d6efd;
    }

    .admin-stat-body {
        display: flex;
        flex-direction: column;
        min-width: 0;
    }

    .admin-stat-label {
        font-size: 0.82rem;
        color: #6c757d;
        margin-bottom: 0.15rem;
    }

    .admin-stat-value {
        font-size: 1.85rem;
        line-height: 1.1;
        font-weight: 700;
        color: #1f1f1f;
    }

    .admin-stat-meta {
        margin-top: 0.35rem;
        font-size: 0.8rem;
        color: #8a8f98;
    }

    .admin-panel {
        background: #fff;
        border-radius: 1rem;
        border: 1px solid rgba(148, 0, 0, 0.07);
        box-shadow: 0 10px 28px rgba(110, 0, 0, 0.05);
        padding: 1.35rem 1.4rem;
        height: 100%;
    }

    .admin-panel--compact {
        padding-bottom: 1rem;
    }

    .admin-panel-head {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        gap: 1rem;
        margin-bottom: 1.1rem;
    }

    .admin-panel-head h2 {
        margin: 0;
        font-size: 1.1rem;
        color: var(--emca-primary-dark);
        font-weight: 700;
    }

    .admin-panel-head p {
        margin: 0.2rem 0 0;
        color: #8a8f98;
        font-size: 0.85rem;
    }

    .admin-quick-actions {
        display: grid;
        gap: 0.65rem;
    }

    .admin-quick-action {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        padding: 0.85rem 0.95rem;
        border-radius: 0.8rem;
        background: #faf7f7;
        border: 1px solid rgba(148, 0, 0, 0.06);
        color: #333;
        text-decoration: none;
        transition: background 0.2s ease, border-color 0.2s ease;
    }

    .admin-quick-action:hover {
        background: #f7eeee;
        border-color: rgba(148, 0, 0, 0.16);
        color: var(--emca-primary-dark);
    }

    .admin-quick-action i {
        color: var(--emca-primary);
        font-size: 1.05rem;
    }

    .admin-glance-item {
        padding: 1rem;
        border-radius: 0.85rem;
        background: linear-gradient(180deg, #fff 0%, #faf7f7 100%);
        border: 1px solid rgba(148, 0, 0, 0.07);
        height: 100%;
    }

    .admin-glance-label {
        display: block;
        font-size: 0.8rem;
        color: #8a8f98;
        margin-bottom: 0.35rem;
    }

    .admin-glance-item strong {
        font-size: 1.55rem;
        color: var(--emca-primary-dark);
    }

    .admin-table {
        --bs-table-bg: transparent;
    }

    .admin-table thead th {
        font-size: 0.78rem;
        text-transform: uppercase;
        letter-spacing: 0.04em;
        color: #8a8f98;
        border-bottom-width: 1px;
        font-weight: 600;
    }

    .admin-table tbody td {
        vertical-align: middle;
        padding-top: 0.9rem;
        padding-bottom: 0.9rem;
    }

    .admin-table-link {
        font-weight: 600;
        text-decoration: none;
    }

    .admin-status {
        display: inline-flex;
        align-items: center;
        padding: 0.25rem 0.65rem;
        border-radius: 999px;
        font-size: 0.75rem;
        font-weight: 600;
    }

    .admin-status--new {
        background: rgba(148, 0, 0, 0.1);
        color: var(--emca-primary);
    }

    .admin-status--muted {
        background: #f1f3f5;
        color: #6c757d;
    }

    .admin-rank-list {
        list-style: none;
        margin: 0;
        padding: 0;
        display: grid;
        gap: 0.7rem;
    }

    .admin-rank-list li {
        display: grid;
        grid-template-columns: 28px 1fr auto;
        gap: 0.75rem;
        align-items: center;
        padding: 0.7rem 0.8rem;
        border-radius: 0.8rem;
        background: #faf7f7;
    }

    .admin-rank-index {
        width: 28px;
        height: 28px;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: var(--emca-primary);
        color: #fff;
        font-size: 0.78rem;
        font-weight: 700;
    }

    .admin-rank-path {
        color: #333;
        font-size: 0.92rem;
    }

    .admin-rank-views {
        font-weight: 700;
        color: var(--emca-primary-dark);
        font-size: 0.9rem;
    }

    .admin-empty {
        text-align: center;
        padding: 2rem 1rem;
        color: #8a8f98;
    }

    .admin-empty i {
        font-size: 1.75rem;
        color: rgba(148, 0, 0, 0.35);
        display: block;
        margin-bottom: 0.5rem;
    }

    .admin-empty p {
        margin: 0;
    }

    .admin-bars {
        display: flex;
        align-items: flex-end;
        gap: 0.45rem;
        min-height: 220px;
        padding: 0.5rem 0.25rem 0;
        overflow-x: auto;
    }

    .admin-bar-item {
        flex: 1 1 0;
        min-width: 34px;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 0.35rem;
    }

    .admin-bar-track {
        width: 100%;
        max-width: 28px;
        height: 150px;
        border-radius: 999px;
        background: #f3ecec;
        display: flex;
        align-items: flex-end;
        overflow: hidden;
    }

    .admin-bar-fill {
        width: 100%;
        border-radius: 999px;
        background: linear-gradient(180deg, #b33333 0%, #940000 70%, #6e0000 100%);
        min-height: 8px;
        transition: height 0.3s ease;
    }

    .admin-bar-value {
        font-size: 0.72rem;
        font-weight: 700;
        color: var(--emca-primary-dark);
    }

    .admin-bar-label {
        font-size: 0.68rem;
        color: #8a8f98;
        white-space: nowrap;
    }

    .admin-person {
        display: flex;
        align-items: center;
        gap: 0.8rem;
        min-width: 0;
    }

    .admin-person-avatar {
        width: 42px;
        height: 42px;
        border-radius: 50%;
        overflow: hidden;
        flex-shrink: 0;
        background: rgba(148, 0, 0, 0.1);
        color: var(--emca-primary);
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
    }

    .admin-person-avatar img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .admin-person-meta {
        min-width: 0;
    }

    .admin-person-meta strong {
        display: block;
        color: #222;
    }

    .admin-rating {
        color: #f0b429;
        letter-spacing: 0.05em;
        white-space: nowrap;
    }

    .admin-rating .bi-star {
        color: #d7dbe0;
    }

    .admin-row-new {
        background: rgba(148, 0, 0, 0.03);
    }

    .admin-detail-grid {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 1rem;
    }

    .admin-detail-item {
        padding: 0.9rem 1rem;
        border-radius: 0.8rem;
        background: #faf7f7;
        border: 1px solid rgba(148, 0, 0, 0.06);
    }

    .admin-detail-label {
        display: block;
        font-size: 0.75rem;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        color: #8a8f98;
        margin-bottom: 0.3rem;
    }

    .admin-detail-item strong {
        color: #222;
        font-weight: 600;
        word-break: break-word;
    }

    .admin-message-box {
        border-radius: 0.9rem;
        border: 1px solid rgba(148, 0, 0, 0.08);
        overflow: hidden;
    }

    .admin-message-body {
        padding: 1.1rem 1.2rem;
        background: #fff;
        line-height: 1.7;
        color: #333;
        white-space: pre-wrap;
    }

    .admin-team-preview-photo {
        width: 140px;
        height: 140px;
        border-radius: 1rem;
        overflow: hidden;
        border: 3px solid rgba(148, 0, 0, 0.12);
        box-shadow: 0 12px 28px rgba(110, 0, 0, 0.1);
    }

    .admin-team-preview-photo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .admin-post-thumb {
        border-radius: 10px !important;
        background: rgba(148, 0, 0, 0.08);
        color: var(--emca-primary);
        font-size: 1.1rem;
    }

    .btn-outline-danger {
        --bs-btn-color: #b02a37;
        --bs-btn-border-color: rgba(176, 42, 55, 0.35);
        --bs-btn-hover-bg: #b02a37;
        --bs-btn-hover-border-color: #b02a37;
    }

    @media (max-width: 768px) {
        .admin-sidebar { transform: translateX(-100%); }
        .admin-content { margin-left: 0; padding: 1rem; }

        .admin-dash-hero {
            padding: 1.2rem 1.15rem;
        }

        .admin-panel {
            padding: 1.1rem;
        }

        .admin-bars {
            min-height: 200px;
        }

        .admin-bar-track {
            height: 120px;
        }

        .admin-detail-grid {
            grid-template-columns: 1fr;
        }
    }
</style>
