<!--<< Solution Details Section (service-details layout) >>-->
<section class="visa-details-section section-padding emca-solution-visa-layout">
    <div class="container">
        <div class="visa-details-wrapper">
            <div class="row g-5">
                <div class="col-lg-4 order-2 order-md-1 align-self-lg-start">
                    <div class="visa-sidebar">
                        <div class="visa-widget-categories emca-benefits-categories">
                            <h4 class="wid-title">Key Benefits of PangishaLink</h4>
                            <p class="emca-benefits-intro">PangishaLink enhances control, accuracy, and efficiency in managing rental operations — empowering property owners and managers with real-time visibility.</p>
                            <ul id="pangishalinkBenefitsList">
                                @foreach ([
                                    ['id' => 'benefit1', 'title' => 'Automation & Efficiency', 'text' => 'Automate tenant billing, rent reminders, and renewals — saving time and reducing administrative workload.'],
                                    ['id' => 'benefit2', 'title' => 'Accurate Financial Management', 'text' => 'Gain instant insights into income, expenses, arrears, and profit margins through detailed reports and charts.'],
                                    ['id' => 'benefit3', 'title' => 'Multi-Property Management', 'text' => 'Manage several properties and locations within one account — ideal for institutions and real estate investors.'],
                                    ['id' => 'benefit4', 'title' => 'Tenant Engagement', 'text' => 'Tenants can access receipts, statements, and submit requests directly through the online portal or mobile app.'],
                                    ['id' => 'benefit5', 'title' => 'Data Security', 'text' => 'All transactions are encrypted with audit trails and backups ensuring maximum data safety and integrity.'],
                                    ['id' => 'benefit6', 'title' => 'Decision Support', 'text' => 'Visual dashboards display occupancy rates, payment trends, and performance metrics for smart decision-making.'],
                                    ['id' => 'benefit7', 'title' => 'Flexible Deployment', 'text' => 'Choose between cloud-hosted or on-premise installation tailored to your IT environment and scalability needs.'],
                                    ['id' => 'benefit8', 'title' => 'Dedicated Support', 'text' => 'Enjoy 24/7 technical assistance, user training, and continuous updates from ' . config('company.legal_name') . ' experts.'],
                                ] as $i => $benefit)
                                <li class="emca-benefit-item wow fadeInUp" data-wow-delay="{{ number_format($i * 0.1 + 0.2, 1) }}s">
                                    <div class="emca-benefit-card">
                                        <a href="javascript:void(0)" class="emca-benefit-trigger collapsed" data-bs-toggle="collapse" data-bs-target="#{{ $benefit['id'] }}" aria-expanded="false" aria-controls="{{ $benefit['id'] }}">
                                            {{ $benefit['title'] }}
                                            <span><i class="fas fa-chevron-right"></i></span>
                                        </a>
                                        <div id="{{ $benefit['id'] }}" class="collapse emca-benefit-panel" data-bs-parent="#pangishalinkBenefitsList">
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
                                    <div class="accordion" id="pangishalinkFaqAccordion">
                                        @foreach ([
                                            ['id' => 'faq1', 'q' => 'What is PangishaLink?', 'a' => 'PangishaLink is a Rental & Hostel Management System by ' . config('company.legal_name') . ' that helps property managers automate tenant registration, billing, rent collection, room allocation, and reporting.'],
                                            ['id' => 'faq2', 'q' => 'Who can use PangishaLink?', 'a' => 'PangishaLink is designed for real estate companies, landlords, hostel operators, and educational institutions managing rental properties and student accommodation.'],
                                            ['id' => 'faq3', 'q' => 'Does it support mobile payments?', 'a' => 'Yes. PangishaLink integrates with mobile payment gateways including M-Pesa, Tigo Pesa, and Airtel Money for convenient rent collection and reconciliation.'],
                                            ['id' => 'faq4', 'q' => 'Can I manage multiple properties?', 'a' => 'Yes. Manage multiple buildings, rooms, and locations from one account with occupancy tracking and branch-specific performance reports.'],
                                            ['id' => 'faq5', 'q' => 'Is there a tenant portal?', 'a' => 'Yes. Tenants can view statements, download receipts, and submit maintenance requests through the online portal or mobile app.'],
                                            ['id' => 'faq6', 'q' => 'How does maintenance tracking work?', 'a' => 'Record maintenance requests, assign technicians, track approval workflows, and monitor costs to keep every property in top condition.'],
                                            ['id' => 'faq7', 'q' => 'Is rental data secure?', 'a' => 'PangishaLink uses encryption, role-based access, audit trails, and automatic backups to protect tenant and financial records.'],
                                            ['id' => 'faq8', 'q' => 'Is training and support included?', 'a' => 'Yes. ' . config('company.name') . ' provides system setup, user training, updates, and ongoing technical support for your property management team.'],
                                        ] as $i => $faq)
                                        <div class="accordion-item">
                                            <h4 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#{{ $faq['id'] }}" aria-expanded="false" aria-controls="{{ $faq['id'] }}">
                                                    {{ $faq['q'] }}
                                                </button>
                                            </h4>
                                            <div id="{{ $faq['id'] }}" class="accordion-collapse collapse" data-bs-parent="#pangishalinkFaqAccordion">
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
                            'title' => 'PangishaLink',
                            'description' => 'Talk to ' . config('company.name') . ' for demos, setup, and support for your rental business.',
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
                            <h2 class="title-anim">PangishaLink Overview</h2>
                            <p class="mt-3">
                                PangishaLink, developed by {{ config('company.legal_name') }}, is a modern Rental & Hostel Management System that automates property operations for real estate companies, landlords, and educational institutions. It simplifies tenant registration, billing, rent collection, room allocation, maintenance, and reporting — all in one platform.
                            </p>
                            <p class="mt-3">
                                The system is designed to eliminate manual paperwork and provide instant visibility into your rental performance. With real-time dashboards, automated invoices, and digital payment integration, PangishaLink ensures full control, transparency, and profitability for property managers.
                            </p>

                            <div class="row mt-4">
                                <div class="col-lg-6">
                                    <div class="single-icon-items">
                                        @foreach ([
                                            'Automated tenant onboarding and digital tenancy agreements',
                                            'Rent invoicing, reminders, and payment tracking',
                                            'Room, block, and unit management with occupancy tracking',
                                            'Maintenance request and approval workflow',
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
                                            'Integration with mobile payment gateways (Mpesa, Tigopesa, Airtel Money)',
                                            'Financial and performance analytics dashboards',
                                            'Tenant portal for statements, receipts, and requests',
                                            'Cloud-based and mobile responsive access',
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
                                PangishaLink integrates all aspects of property, tenant, and financial management — ensuring seamless coordination and easy monitoring of every rental activity.
                            </p>

                            <div class="row g-4 emca-module-details-list mt-4">
                                @foreach ([
                                    ['title' => 'Property & Room Management', 'text' => 'Manage multiple buildings, rooms, and units with occupancy tracking, room allocation, and maintenance history.'],
                                    ['title' => 'Tenant Management', 'text' => 'Digital tenant registration, contract management, ID verification, and automated tenancy renewals.'],
                                    ['title' => 'Billing & Invoicing', 'text' => 'Automatically generate rent invoices, penalties, and utility charges — with instant SMS or email reminders.'],
                                    ['title' => 'Payments & Reconciliation', 'text' => 'Track payments from tenants, generate receipts, and reconcile accounts with automated payment matching.'],
                                    ['title' => 'Maintenance Management', 'text' => 'Record maintenance requests, assign technicians, and monitor costs to keep properties in top condition.'],
                                    ['title' => 'Landlord & Agent Portal', 'text' => 'Landlords or agents can access real-time rent reports, occupancy status, and income summaries securely online.'],
                                    ['title' => 'Reporting & Analytics', 'text' => 'Generate comprehensive reports — rent collection, vacancy trends, maintenance costs, and profit analysis.'],
                                    ['title' => 'Data Backup & Security', 'text' => 'All data is securely encrypted with automatic backups and role-based user access for full data protection.'],
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
