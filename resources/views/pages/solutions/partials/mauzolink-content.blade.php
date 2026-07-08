<div class="emca-solution-content">

    <div class="details-image emca-solution-hero wow fadeInUp" data-wow-delay=".2s">
        <img src="{{ asset('visaland-html/assets/img/coaching/details-1.jpg') }}" alt="MauzoLink POS and Inventory System">
        <span class="emca-solution-hero-badge">
            <i class="fas fa-cash-register me-2"></i>POS & Inventory System
        </span>
    </div>

    <div class="emca-solution-intro wow fadeInUp" data-wow-delay=".3s">
        <div class="section-title">
            <span>By {{ config('company.legal_name') }}</span>
            <h2 class="title-anim">Point of Sale & Inventory Management</h2>
        </div>
        <p>
            MauzoLink, developed by {{ config('company.legal_name') }}, is a modern Point of Sale and Inventory Management System tailored for retail shops, supermarkets, restaurants, bars, pharmacies, and SMEs. It automates sales processing, inventory tracking, supplier management, and financial reporting — improving accuracy, speed, and efficiency across your business.
        </p>
        <p class="mb-0">
            The system connects your sales counters, storerooms, and management dashboards in real time — giving you full control of your business performance. Whether you manage a single outlet or multiple branches, MauzoLink helps you track every sale, monitor stock movements, and boost profitability effortlessly.
        </p>
    </div>

    <div class="emca-solution-stats row g-3 wow fadeInUp" data-wow-delay=".35s">
        <div class="col-6 col-md-3">
            <div class="emca-stat-pill">
                <i class="fas fa-store"></i>
                <strong>Retail & SMEs</strong>
                <span>Shops to supermarkets</span>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="emca-stat-pill">
                <i class="fas fa-utensils"></i>
                <strong>Food & Beverage</strong>
                <span>Restaurants & bars</span>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="emca-stat-pill">
                <i class="fas fa-sitemap"></i>
                <strong>Multi-Branch</strong>
                <span>Single or many outlets</span>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="emca-stat-pill">
                <i class="fas fa-chart-line"></i>
                <strong>Real-Time</strong>
                <span>Live sales & stock data</span>
            </div>
        </div>
    </div>

    <div class="emca-solution-block">
        <div class="section-title">
            <span class="wow fadeInUp">Capabilities</span>
            <h2 class="title-anim wow fadeInUp" data-wow-delay=".1s">Key Features</h2>
        </div>
        <div class="row g-4">
            @foreach ([
                ['icon' => 'fa-cash-register', 'accent' => 'blue', 'title' => 'Point of Sale', 'text' => 'Fast, accurate sales processing at the counter with receipts and payment tracking'],
                ['icon' => 'fa-boxes', 'accent' => 'green', 'title' => 'Inventory Tracking', 'text' => 'Monitor stock levels, movements, and alerts across storerooms and shelves'],
                ['icon' => 'fa-truck', 'accent' => 'orange', 'title' => 'Supplier Management', 'text' => 'Manage suppliers, purchase orders, and incoming stock deliveries'],
                ['icon' => 'fa-file-invoice-dollar', 'accent' => 'red', 'title' => 'Financial Reporting', 'text' => 'Generate sales, profit, and expense reports for smarter decisions'],
                ['icon' => 'fa-sitemap', 'accent' => 'purple', 'title' => 'Multi-Branch Control', 'text' => 'Oversee single outlets or multiple branches from one dashboard'],
                ['icon' => 'fa-tachometer-alt', 'accent' => 'navy', 'title' => 'Live Dashboards', 'text' => 'Real-time visibility into sales performance and business health'],
                ['icon' => 'fa-pills', 'accent' => 'blue', 'title' => 'Pharmacy Ready', 'text' => 'Suited for pharmacies with structured product and stock control'],
                ['icon' => 'fa-concierge-bell', 'accent' => 'green', 'title' => 'Restaurant & Bar', 'text' => 'Built for food service businesses with flexible sales workflows'],
                ['icon' => 'fa-shopping-basket', 'accent' => 'orange', 'title' => 'Retail & Supermarket', 'text' => 'Handles high-volume retail and supermarket operations with ease'],
                ['icon' => 'fa-briefcase', 'accent' => 'red', 'title' => 'SME Friendly', 'text' => 'Affordable, scalable tools designed for growing Tanzanian businesses'],
            ] as $i => $feature)
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="{{ number_format(($i % 3) * 0.1 + 0.2, 1) }}s">
                <div class="emca-feature-card accent-{{ $feature['accent'] }}">
                    <div class="feature-icon"><i class="fas {{ $feature['icon'] }}"></i></div>
                    <h4>{{ $feature['title'] }}</h4>
                    <p>{{ $feature['text'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="emca-solution-block emca-modules-block">
        <div class="section-title text-center">
            <span class="wow fadeInUp">Platform Modules</span>
            <h2 class="title-anim wow fadeInUp" data-wow-delay=".1s">Core Functional Modules</h2>
            <p class="emca-block-intro wow fadeInUp" data-wow-delay=".2s">
                Connected tools that link your counters, storerooms, and management team — keeping sales, stock, and finances in sync.
            </p>
        </div>
        <div class="row g-4">
            @foreach ([
                ['icon' => 'fa-shopping-cart', 'accent' => 'blue', 'title' => 'Sales & POS', 'text' => 'Process sales quickly at the counter with receipts, discounts, and multiple payment methods.'],
                ['icon' => 'fa-warehouse', 'accent' => 'green', 'title' => 'Inventory Control', 'text' => 'Track products, stock quantities, low-stock alerts, and warehouse movements in real time.'],
                ['icon' => 'fa-dolly', 'accent' => 'orange', 'title' => 'Purchases & Stock-In', 'text' => 'Record incoming goods, update inventory automatically, and maintain accurate stock records.'],
                ['icon' => 'fa-handshake', 'accent' => 'red', 'title' => 'Supplier Management', 'text' => 'Manage supplier profiles, orders, deliveries, and purchase history from one place.'],
                ['icon' => 'fa-chart-bar', 'accent' => 'purple', 'title' => 'Financial Reports', 'text' => 'View sales summaries, profit margins, expenses, and performance trends instantly.'],
                ['icon' => 'fa-building', 'accent' => 'navy', 'title' => 'Multi-Branch Management', 'text' => 'Monitor and compare performance across branches with centralized control.'],
                ['icon' => 'fa-users-cog', 'accent' => 'blue', 'title' => 'Users & Permissions', 'text' => 'Assign roles to cashiers, managers, and admins with secure access controls.'],
                ['icon' => 'fa-user-friends', 'accent' => 'green', 'title' => 'Customer Records', 'text' => 'Track customer purchases and build loyalty through organized sales history.'],
                ['icon' => 'fa-shield-alt', 'accent' => 'red', 'title' => 'Data Security', 'text' => 'Protect business data with role-based access and reliable backup options.'],
            ] as $i => $module)
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="{{ number_format(($i % 3) * 0.1 + 0.2, 1) }}s">
                <div class="emca-module-card accent-{{ $module['accent'] }}">
                    <span class="module-accent"></span>
                    <div class="module-icon"><i class="fas {{ $module['icon'] }}"></i></div>
                    <h3>{{ $module['title'] }}</h3>
                    <p>{{ $module['text'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="row g-4 align-items-center emca-solution-highlight wow fadeInUp" data-wow-delay=".3s">
        <div class="col-lg-6">
            <div class="details-thumb-2 emca-highlight-image">
                <img src="{{ asset('visaland-html/assets/img/coaching/details-2.jpg') }}" alt="MauzoLink dashboard">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="emca-highlight-content">
                <span class="highlight-label">Why Businesses Choose MauzoLink</span>
                <h3>Every Sale, Every Stock Item — Under Control</h3>
                <p>From the sales counter to the storeroom and management office — MauzoLink keeps your entire operation connected and visible in real time.</p>
                <ul class="emca-check-list">
                    <li><i class="fas fa-check-circle"></i>Track every sale as it happens</li>
                    <li><i class="fas fa-check-circle"></i>Monitor stock movements across outlets</li>
                    <li><i class="fas fa-check-circle"></i>Manage suppliers and purchases digitally</li>
                    <li><i class="fas fa-check-circle"></i>Instant financial and performance reports</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="emca-solution-block emca-benefits-block">
        <div class="section-title">
            <span class="wow fadeInUp">Advantages</span>
            <h2 class="title-anim wow fadeInUp" data-wow-delay=".1s">Key Benefits of MauzoLink</h2>
            <p class="emca-block-intro wow fadeInUp" data-wow-delay=".2s">
                Improved speed, accuracy, and profitability — giving you full control whether you run one shop or many branches.
            </p>
        </div>
        <div class="row g-4">
            @foreach ([
                ['icon' => 'fa-bolt', 'accent' => 'blue', 'title' => 'Speed & Accuracy', 'text' => 'Automate sales and inventory processes — reducing errors and saving time at every transaction.'],
                ['icon' => 'fa-eye', 'accent' => 'green', 'title' => 'Real-Time Visibility', 'text' => 'See live sales, stock levels, and branch performance from anywhere, anytime.'],
                ['icon' => 'fa-chart-pie', 'accent' => 'orange', 'title' => 'Better Profitability', 'text' => 'Identify top products, control costs, and make data-driven decisions to grow revenue.'],
                ['icon' => 'fa-expand-arrows-alt', 'accent' => 'red', 'title' => 'Scalable Growth', 'text' => 'Start with one outlet and expand to multiple branches without changing systems.'],
                ['icon' => 'fa-cogs', 'accent' => 'purple', 'title' => 'Operational Efficiency', 'text' => 'Streamline daily tasks from stock-taking to end-of-day reporting across your team.'],
                ['icon' => 'fa-store-alt', 'accent' => 'navy', 'title' => 'Built for Your Industry', 'text' => 'Tailored for retail, supermarkets, restaurants, bars, pharmacies, and SMEs.'],
                ['icon' => 'fa-headset', 'accent' => 'blue', 'title' => 'Support & Training', 'text' => 'Full setup, staff training, and ongoing support from ' . config('company.legal_name') . ' experts.'],
                ['icon' => 'fa-server', 'accent' => 'green', 'title' => 'Flexible Deployment', 'text' => 'Cloud or on-premise hosting options to match your business infrastructure.'],
            ] as $i => $benefit)
            <div class="col-md-6 wow fadeInUp" data-wow-delay="{{ number_format(($i % 2) * 0.1 + 0.2, 1) }}s">
                <div class="emca-benefit-item accent-{{ $benefit['accent'] }}">
                    <div class="benefit-icon"><i class="fas {{ $benefit['icon'] }}"></i></div>
                    <div class="benefit-text">
                        <h4>{{ $benefit['title'] }}</h4>
                        <p>{{ $benefit['text'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</div>
