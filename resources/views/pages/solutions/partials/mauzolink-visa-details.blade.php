<!--<< Solution Details Section (service-details layout) >>-->
<section class="visa-details-section section-padding emca-solution-visa-layout">
    <div class="container">
        <div class="visa-details-wrapper">
            <div class="row g-5">
                <div class="col-lg-4 order-2 order-md-1 align-self-lg-start">
                    <div class="visa-sidebar">
                        <div class="visa-widget-categories emca-benefits-categories">
                            <h4 class="wid-title">Key Benefits of MauzoLink</h4>
                            <p class="emca-benefits-intro">MauzoLink empowers retailers and entrepreneurs with full visibility of sales, inventory, and profits — enabling smart business decisions and operational excellence.</p>
                            <ul id="mauzolinkBenefitsList">
                                @foreach ([
                                    ['id' => 'benefit1', 'title' => 'Speed & Accuracy', 'text' => 'Accelerate sales with barcode scanning, automatic pricing, and instant stock deductions after every sale.'],
                                    ['id' => 'benefit2', 'title' => 'Stock Control', 'text' => 'Maintain balanced stock levels and prevent losses through real-time inventory and expiry management.'],
                                    ['id' => 'benefit3', 'title' => 'Business Insights', 'text' => 'Access real-time sales summaries, profit margins, and performance dashboards for better decision-making.'],
                                    ['id' => 'benefit4', 'title' => 'Profit Tracking', 'text' => 'Monitor daily, weekly, and monthly profits with expense tracking and customizable reports.'],
                                    ['id' => 'benefit5', 'title' => 'Multi-Branch Management', 'text' => 'Oversee multiple stores or outlets from a centralized dashboard with branch-specific performance reports.'],
                                    ['id' => 'benefit6', 'title' => 'Data Security', 'text' => 'Keep all transactions safe with encrypted storage, access permissions, and reliable data backups.'],
                                    ['id' => 'benefit7', 'title' => 'Cloud & Offline Flexibility', 'text' => 'Operate online or offline — your sales continue even without an internet connection.'],
                                    ['id' => 'benefit8', 'title' => '24/7 Support', 'text' => 'Receive full support, system updates, and staff training from ' . config('company.legal_name') . ' experts.'],
                                ] as $i => $benefit)
                                <li class="emca-benefit-item wow fadeInUp" data-wow-delay="{{ number_format($i * 0.1 + 0.2, 1) }}s">
                                    <div class="emca-benefit-card">
                                        <a href="javascript:void(0)" class="emca-benefit-trigger collapsed" data-bs-toggle="collapse" data-bs-target="#{{ $benefit['id'] }}" aria-expanded="false" aria-controls="{{ $benefit['id'] }}">
                                            {{ $benefit['title'] }}
                                            <span><i class="fas fa-chevron-right"></i></span>
                                        </a>
                                        <div id="{{ $benefit['id'] }}" class="collapse emca-benefit-panel" data-bs-parent="#mauzolinkBenefitsList">
                                            <div class="emca-benefit-panel-inner">
                                                {{ $benefit['text'] }}
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="emca-sidebar-promo wow fadeInUp" data-wow-delay=".35s">
                            <img
                                src="{{ asset($solution['image']) }}"
                                alt="{{ $solution['name'] }}"
                                width="400"
                                height="280"
                                class="emca-sidebar-promo-img"
                            >
                        </div>

                        <div class="emca-sidebar-faq wow fadeInUp" data-wow-delay=".4s">
                            <h4 class="wid-title">Frequently Asked Questions</h4>
                            <div class="faq-content">
                                <div class="faq-accordion">
                                    <div class="accordion" id="mauzolinkFaqAccordion">
                                        @foreach ([
                                            ['id' => 'faq1', 'q' => 'What is MauzoLink?', 'a' => 'MauzoLink is a Point of Sale and Inventory Management System by ' . config('company.legal_name') . ' that helps retail shops, restaurants, pharmacies, and SMEs manage sales, stock, suppliers, and finances in one platform.'],
                                            ['id' => 'faq2', 'q' => 'Which businesses can use MauzoLink?', 'a' => 'MauzoLink is tailored for retail shops, supermarkets, restaurants, bars, pharmacies, and SMEs — with specialized modes for food service and pharmacy operations.'],
                                            ['id' => 'faq3', 'q' => 'Does it work without internet?', 'a' => 'Yes. MauzoLink supports offline sales processing — transactions continue at the counter and sync when your connection is restored.'],
                                            ['id' => 'faq4', 'q' => 'Can I manage multiple branches?', 'a' => 'Yes. Oversee multiple outlets from a centralized dashboard with branch-specific sales, stock, and profit reports.'],
                                            ['id' => 'faq5', 'q' => 'Does it support barcode scanning?', 'a' => 'Yes. Process sales quickly with barcode scanning, digital receipts, invoice generation, and flexible payment options.'],
                                            ['id' => 'faq6', 'q' => 'Are financial reports included?', 'a' => 'Yes. View real-time insights on top products, revenue trends, profit margins, expenses, and staff performance through visual dashboards.'],
                                            ['id' => 'faq7', 'q' => 'Is business data secure?', 'a' => 'MauzoLink uses encryption, role-based access, audit trails, and automatic backups to protect your sales and inventory data.'],
                                            ['id' => 'faq8', 'q' => 'Is training and support included?', 'a' => 'Yes. ' . config('company.name') . ' provides system setup, staff training, updates, and ongoing technical support for your team.'],
                                        ] as $i => $faq)
                                        <div class="accordion-item">
                                            <h4 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#{{ $faq['id'] }}" aria-expanded="false" aria-controls="{{ $faq['id'] }}">
                                                    {{ $faq['q'] }}
                                                </button>
                                            </h4>
                                            <div id="{{ $faq['id'] }}" class="accordion-collapse collapse" data-bs-parent="#mauzolinkFaqAccordion">
                                                <div class="accordion-body">
                                                    {{ $faq['a'] }}
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                        @include('partials.need-help-sidebar', [
                            'title' => 'MauzoLink',
                            'description' => 'Talk to ' . config('company.name') . ' for demos, setup, and support for your business.',
                        ])
                        <a href="{{ route('contact') }}" class="theme-btn w-100 text-center">
                            <span><i class="fas fa-play-circle me-3"></i> request a demo</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 order-1 order-md-2">
                    <div class="service-details-items">
                        <div class="details-image">
                            <img src="{{ asset($solution['image']) }}" alt="{{ $solution['name'] }}">
                        </div>
                        <div class="details-content">
                            <h2 class="title-anim">MauzoLink Overview</h2>
                            <p class="mt-3">
                                MauzoLink, developed by {{ config('company.legal_name') }}, is a modern Point of Sale and Inventory Management System tailored for retail shops, supermarkets, restaurants, bars, pharmacies, and SMEs. It automates sales processing, inventory tracking, supplier management, and financial reporting — improving accuracy, speed, and efficiency across your business.
                            </p>
                            <p class="mt-3">
                                The system connects your sales counters, storerooms, and management dashboards in real time — giving you full control of your business performance. Whether you manage a single outlet or multiple branches, MauzoLink helps you track every sale, monitor stock movements, and boost profitability effortlessly.
                            </p>

                            <div class="row mt-4">
                                <div class="col-lg-6">
                                    <div class="single-icon-items">
                                        @foreach ([
                                            'Fast and reliable POS interface for quick sales processing',
                                            'Real-time stock updates and low-inventory alerts',
                                            'Barcode scanning, digital receipts, and invoice generation',
                                            'Supplier and purchase order management',
                                            'Expense and profit tracking for each outlet',
                                        ] as $feature)
                                        <div class="icon-box">
                                            <div class="icon"><i class="fas fa-check-circle"></i></div>
                                            <h6>{{ $feature }}</h6>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="single-icon-items">
                                        @foreach ([
                                            'Multi-branch synchronization and consolidated reports',
                                            'Role-based access control and audit trails',
                                            'Cloud-ready and mobile responsive interface',
                                            'Mobile app for Android and iOS platforms',
                                        ] as $feature)
                                        <div class="icon-box">
                                            <div class="icon"><i class="fas fa-check-circle"></i></div>
                                            <h6>{{ $feature }}</h6>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <h3 class="mt-5">Core Functional Modules</h3>
                            <p class="mt-3">
                                MauzoLink provides all the tools needed to manage sales, inventory, and operations efficiently — from the counter to the back office.
                            </p>

                            <div class="row g-4 emca-module-details-list mt-4">
                                @foreach ([
                                    ['title' => 'Point of Sale (POS)', 'text' => 'Process sales instantly with barcode scanning, receipt printing, and flexible payment options — even when offline.'],
                                    ['title' => 'Inventory Management', 'text' => 'Monitor stock levels, transfers, and expiries in real time with alerts for low or out-of-stock products.'],
                                    ['title' => 'Supplier & Purchase Orders', 'text' => 'Manage suppliers, create purchase orders, record deliveries, and track supply performance and costs.'],
                                    ['title' => 'Billing & Invoicing', 'text' => 'Generate accurate invoices and digital receipts, track customer payments, and manage sales records automatically.'],
                                    ['title' => 'Restaurant & Bar Mode', 'text' => 'Handle table orders, food menus, and kitchen instructions seamlessly with waiter and counter synchronization.'],
                                    ['title' => 'Pharmacy Mode', 'text' => 'Manage medicine stock with expiry dates, batch tracking, and prescription-based sales processing.'],
                                    ['title' => 'Reporting & Analytics', 'text' => 'View real-time insights on top products, revenue trends, and staff performance through visual dashboards.'],
                                    ['title' => 'Data Security & Backup', 'text' => 'Automatic backups, encryption, and role-based access ensure secure, reliable, and recoverable business data.'],
                                ] as $module)
                                <div class="col-md-6">
                                    <div class="emca-module-detail-item h-100">
                                        <h4>{{ $module['title'] }}</h4>
                                        <p>{{ $module['text'] }}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
