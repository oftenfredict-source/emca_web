<!--<< Solution Details Section (service-details layout) >>-->
<section class="visa-details-section section-padding emca-solution-visa-layout">
    <div class="container">
        <div class="visa-details-wrapper">
            <div class="row g-5">
                <div class="col-lg-4 order-2 order-md-1 align-self-lg-start">
                    <div class="visa-sidebar">
                        <div class="visa-widget-categories emca-benefits-categories">
                            <h4 class="wid-title">Key Benefits to Your SACCOS</h4>
                            <p class="emca-benefits-intro">SACCOSLink is designed to support growth, accountability, and sustainability while providing excellent member experience.</p>
                            <ul id="saccosslinkBenefitsList">
                                @foreach ([
                                    ['id' => 'benefit1', 'title' => 'Efficiency & Automation', 'text' => 'Automate repetitive tasks, reduce paperwork, and minimize errors through digitized operations.'],
                                    ['id' => 'benefit2', 'title' => 'Data-Driven Insights', 'text' => 'Access real-time financial performance dashboards for informed decision-making and reporting.'],
                                    ['id' => 'benefit3', 'title' => 'Security & Compliance', 'text' => 'Built with strong security features, audit trails, and compliance tools aligned with Tanzanian laws.'],
                                    ['id' => 'benefit4', 'title' => 'Scalability', 'text' => 'Supports multi-branch and nationwide cooperative networks with ease of expansion and customization.'],
                                    ['id' => 'benefit5', 'title' => 'Seamless Integrations', 'text' => 'Integrates smoothly with ATM networks, Mobile Banking, Agency Banking, and national payment systems.'],
                                    ['id' => 'benefit6', 'title' => 'Cloud & On-Premise Deployment', 'text' => 'Flexible hosting options allowing your SACCOS to choose between secure cloud or local server deployment.'],
                                    ['id' => 'benefit7', 'title' => 'Member Empowerment', 'text' => 'Enhance member experience through mobile access, digital statements, and instant service delivery.'],
                                    ['id' => 'benefit8', 'title' => 'Support & Training', 'text' => 'Dedicated technical support and user training to ensure smooth adoption and sustainable system use.'],
                                ] as $i => $benefit)
                                <li class="emca-benefit-item wow fadeInUp" data-wow-delay="{{ number_format($i * 0.1 + 0.2, 1) }}s">
                                    <div class="emca-benefit-card">
                                        <a href="javascript:void(0)" class="emca-benefit-trigger collapsed" data-bs-toggle="collapse" data-bs-target="#{{ $benefit['id'] }}" aria-expanded="false" aria-controls="{{ $benefit['id'] }}">
                                            {{ $benefit['title'] }}
                                            <span><i class="fas fa-chevron-right"></i></span>
                                        </a>
                                        <div id="{{ $benefit['id'] }}" class="collapse emca-benefit-panel" data-bs-parent="#saccosslinkBenefitsList">
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
                                    <div class="accordion" id="saccosslinkFaqAccordion">
                                        @foreach ([
                                            ['id' => 'faq1', 'q' => 'What is SACCOSLink?', 'a' => 'SACCOSLink is a Core Banking System by ' . config('company.legal_name') . ' designed for Savings and Credit Cooperative Societies — automating members, shares, savings, deposits, loans, and accounting.'],
                                            ['id' => 'faq2', 'q' => 'Is it compliant with TCDC and COASCO?', 'a' => 'Yes. SACCOSLink generates PEARLS ratios, COASCO, TCDC, and BOT regulatory reports instantly — ensuring transparency and compliance with Tanzanian standards.'],
                                            ['id' => 'faq3', 'q' => 'Does it support mobile banking?', 'a' => 'Yes. Members can access services through the Member Portal, Mobile App, and USSD — including offline-capable channels for wider reach.'],
                                            ['id' => 'faq4', 'q' => 'Can it manage multiple branches?', 'a' => 'Yes. SACCOSLink supports multi-branch and multi-user operations — ideal for growing cooperatives and nationwide networks.'],
                                            ['id' => 'faq5', 'q' => 'How does loan management work?', 'a' => 'Digital loan lifecycle from application to repayment with guarantor verification, collateral tracking, flexible interest methods, and automated eligibility checks.'],
                                            ['id' => 'faq6', 'q' => 'Does it integrate with ATM and agency banking?', 'a' => 'Yes. SACCOSLink connects with ATM networks, Agency Banking, Mobile Money, and other core banking systems for real-time interoperability.'],
                                            ['id' => 'faq7', 'q' => 'Is member data secure?', 'a' => 'SACCOSLink uses advanced encryption, role-based access, automatic backups, and audit trails to safeguard cooperative data.'],
                                            ['id' => 'faq8', 'q' => 'Is training and support included?', 'a' => 'Yes. ' . config('company.name') . ' provides dedicated technical support, user training, and continuous updates for your SACCOS team.'],
                                        ] as $i => $faq)
                                        <div class="accordion-item">
                                            <h4 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#{{ $faq['id'] }}" aria-expanded="false" aria-controls="{{ $faq['id'] }}">
                                                    {{ $faq['q'] }}
                                                </button>
                                            </h4>
                                            <div id="{{ $faq['id'] }}" class="accordion-collapse collapse" data-bs-parent="#saccosslinkFaqAccordion">
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
                            'title' => 'SACCOSLink',
                            'description' => 'Talk to ' . config('company.name') . ' for demos, setup, and support for your SACCOS.',
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
                            <h2 class="title-anim">SACCOSLink Overview</h2>
                            <p class="mt-3">
                                SACCOSLink, developed by {{ config('company.legal_name') }}, is a secure and user-friendly Core Banking System designed for Savings and Credit Cooperative Societies (SACCOS). It automates key operations — transforming the way SACCOS operates from manual records to a fully digital platform — including Member Management, Shares, Savings, Deposits, Loans, and Accounting — ensuring efficiency, transparency, and compliance with TCDC, COASCO, BOT, and IFRS standards.
                            </p>
                            <p class="mt-3">
                                With seamless integration to ATM services, Mobile Banking (App &amp; USSD), Agency Banking, and the Members Portal (Internet Banking), SACCOSLink empowers your SACCOS to offer modern, connected, and reliable financial services that reach every member — anytime, anywhere.
                            </p>

                            <div class="row mt-4">
                                <div class="col-lg-6">
                                    <div class="single-icon-items">
                                        @foreach ([
                                            'Real-time transactions and instant notifications',
                                            'Web, Mobile App & USSD integration',
                                            'Cloud-ready and easily scalable',
                                            'Seamless integration with ATM, Agency & Banking Systems',
                                            'Automated accounting and regulatory reports (TCDC, COASCO & BOT)',
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
                                            'Role-based security and access control',
                                            'Multi-branch and multi-user capability',
                                            'Member self-service portal with digital statements',
                                            'Loan processing with automated eligibility checks',
                                            'Data backup, recovery, and audit trail for accountability',
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
                                SACCOSLink empowers cooperatives with modular, integrated, and automated systems that simplify financial operations and enhance member experiences.
                            </p>

                            <div class="row g-4 emca-module-details-list mt-4">
                                @foreach ([
                                    ['title' => 'Member Management', 'text' => 'Digital registration, KYC verification, and complete member profiles with real-time statements and analytics.'],
                                    ['title' => 'Savings, Shares & Deposits', 'text' => 'Automated interest calculations, recurring savings, and instant member notifications that build confidence and trust.'],
                                    ['title' => 'Loans Management', 'text' => 'Digital loan lifecycle from application to repayment with guarantor verification, collateral tracking, and flexible interest methods.'],
                                    ['title' => 'Accounting & Financials', 'text' => 'Integrated double-entry accounting system with automatic journal entries, reconciliations, and IFRS-compliant reporting.'],
                                    ['title' => 'Reporting & Compliance', 'text' => 'PEARLS ratios, COASCO, TCDC, and BOT regulatory reports generated instantly — ensuring transparency and compliance.'],
                                    ['title' => 'Digital Access Channels', 'text' => 'Member Portal, Mobile App, and USSD access — empowering members to transact anytime, anywhere, even offline.'],
                                    ['title' => 'System Integrations', 'text' => 'Seamlessly connects with ATM networks, Agency Banking, Mobile Money, and other core banking systems for real-time interoperability.'],
                                    ['title' => 'Data Backup & Security', 'text' => 'Advanced encryption, automatic backups, and audit trails safeguard your data and ensure business continuity at all times.'],
                                    ['title' => 'Task & Workflow Management', 'text' => 'Automates daily office workflows — from approvals to internal communications — ensuring accountability and performance tracking.'],
                                    ['title' => 'Analytics & Decision Support', 'text' => 'Interactive dashboards and visual reports for data-driven insights that support smarter, faster managerial decisions.'],
                                    ['title' => 'Notifications & Communication', 'text' => 'Instant SMS and email alerts keep members informed on loans, savings, and transactions — enhancing engagement and trust.'],
                                    ['title' => 'Cloud or On-Premise Deployment', 'text' => 'Flexible hosting options that adapt to your SACCOS infrastructure — whether on your own servers or in a secure cloud environment.'],
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
