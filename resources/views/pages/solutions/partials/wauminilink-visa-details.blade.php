<!--<< Solution Details Section (service-details layout) >>-->
<section class="visa-details-section section-padding emca-solution-visa-layout">
    <div class="container">
        <div class="visa-details-wrapper">
            <div class="row g-5">
                <div class="col-lg-4 order-2 order-md-1 align-self-lg-start">
                    <div class="visa-sidebar">
                        <div class="visa-widget-categories emca-benefits-categories">
                            <h4 class="wid-title">Key Benefits of WauminiLink</h4>
                            <p class="emca-benefits-intro">WauminiLink simplifies church administration, enhances accountability, and strengthens fellowship through digital transformation.</p>
                            <ul id="wauminiBenefitsList">
                                @foreach ([
                                    ['id' => 'benefit1', 'title' => 'Faith-Based Digital Management', 'text' => 'Brings order, transparency, and digital efficiency to every aspect of church operations — from tithes to attendance.'],
                                    ['id' => 'benefit2', 'title' => 'Transparency & Accountability', 'text' => 'Track all contributions and expenditures with real-time reports that build member trust and stewardship.'],
                                    ['id' => 'benefit3', 'title' => 'Community Engagement', 'text' => 'Connect with members through SMS, email, and announcements — fostering unity and involvement.'],
                                    ['id' => 'benefit4', 'title' => 'Data-Driven Decisions', 'text' => 'Leaders gain access to real-time dashboards and analytics for effective planning and growth monitoring.'],
                                    ['id' => 'benefit5', 'title' => 'Multi-Church & Diocese Support', 'text' => 'Manage multiple congregations and branches under one centralized system with ease.'],
                                    ['id' => 'benefit6', 'title' => 'Data Security', 'text' => 'Protect sensitive member and financial data with encryption, backups, and controlled user access.'],
                                    ['id' => 'benefit7', 'title' => 'Cloud & Mobile Access', 'text' => 'Access your church data anywhere, anytime — via mobile devices or web browsers securely.'],
                                    ['id' => 'benefit8', 'title' => 'Training & Support', 'text' => 'Receive dedicated technical support and user training from ' . config('company.legal_name') . ' experts.'],
                                ] as $i => $benefit)
                                <li class="emca-benefit-item wow fadeInUp" data-wow-delay="{{ number_format($i * 0.1 + 0.2, 1) }}s">
                                    <div class="emca-benefit-card">
                                        <a href="javascript:void(0)" class="emca-benefit-trigger collapsed" data-bs-toggle="collapse" data-bs-target="#{{ $benefit['id'] }}" aria-expanded="false" aria-controls="{{ $benefit['id'] }}">
                                            {{ $benefit['title'] }}
                                            <span><i class="fas fa-chevron-right"></i></span>
                                        </a>
                                        <div id="{{ $benefit['id'] }}" class="collapse emca-benefit-panel" data-bs-parent="#wauminiBenefitsList">
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
                                    <div class="accordion" id="wauminiFaqAccordion">
                                        @foreach ([
                                            ['id' => 'faq1', 'q' => 'What is WauminiLink?', 'a' => 'WauminiLink is a Church Management System by ' . config('company.legal_name') . ' that helps churches manage members, tithes, departments, events, and finances in one platform.'],
                                            ['id' => 'faq2', 'q' => 'Can it manage multiple branches?', 'a' => 'Yes. WauminiLink supports multi-branch and multi-campus churches, allowing leaders to monitor all congregations from a central dashboard.'],
                                            ['id' => 'faq3', 'q' => 'Does it track tithes and offerings?', 'a' => 'Absolutely. You can record contributions, pledges, and donations with transparent receipts and automated financial summaries.'],
                                            ['id' => 'faq4', 'q' => 'Is training and support included?', 'a' => 'Yes. ' . config('company.name') . ' provides system setup, user training, and ongoing technical support for your church team.'],
                                            ['id' => 'faq5', 'q' => 'Can we send SMS to members?', 'a' => 'Yes. WauminiLink includes bulk SMS and email tools for announcements, ministry updates, fee reminders, and event notifications.'],
                                            ['id' => 'faq6', 'q' => 'Does it track attendance?', 'a' => 'Yes. Record attendance for services, meetings, and events automatically or manually, and generate participation reports easily.'],
                                            ['id' => 'faq7', 'q' => 'Is member data secure?', 'a' => 'WauminiLink uses role-based access, secure backups, and encryption to protect sensitive member and financial records.'],
                                            ['id' => 'faq8', 'q' => 'Can small churches use it?', 'a' => 'Yes. WauminiLink is designed for small congregations and large dioceses alike — scalable as your ministry grows.'],
                                        ] as $i => $faq)
                                        <div class="accordion-item">
                                            <h4 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#{{ $faq['id'] }}" aria-expanded="false" aria-controls="{{ $faq['id'] }}">
                                                    {{ $faq['q'] }}
                                                </button>
                                            </h4>
                                            <div id="{{ $faq['id'] }}" class="accordion-collapse collapse" data-bs-parent="#wauminiFaqAccordion">
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
                            'title' => 'WauminiLink',
                            'description' => 'Talk to ' . config('company.name') . ' for demos, setup, and support for your church or ministry.',
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
                            <h2 class="title-anim">WauminiLink Overview</h2>
                            <p class="mt-3">
                                WauminiLink, developed by {{ config('company.legal_name') }}, is a powerful and user-friendly Church Management System designed to help churches, dioceses, and ministries manage members, finances, departments, communication, and events efficiently.
                            </p>
                            <p class="mt-3">
                                The system centralizes all church activities in one digital platform — making it easy for leaders to track contributions, manage tithes and offerings, communicate with members, and generate financial and attendance reports in real time. It's the perfect solution for both small congregations and large multi-branch ministries.
                            </p>

                            <div class="row mt-4">
                                <div class="col-lg-6">
                                    <div class="single-icon-items">
                                        @foreach ([
                                            'Digital registration and categorization of church members',
                                            'Record and manage tithes, offerings, and pledges',
                                            'Department and group management (e.g., Youth, Choir, Women)',
                                            'Attendance tracking for services, meetings, and events',
                                            'Church calendar for services, ceremonies, and conferences',
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
                                            'SMS and email communication with members',
                                            'Accounting and budgeting tools for financial stewardship',
                                            'Cloud-ready, mobile-friendly, and multi-branch enabled',
                                            'Biometric device authentication for secure access',
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
                                WauminiLink empowers church leaders to manage members, finances, and ministries effectively — fostering accountability, growth, and unity within the body of Christ.
                            </p>

                            <div class="row g-4 emca-module-details-list mt-4">
                                @foreach ([
                                    ['title' => 'Member Management', 'text' => 'Register and categorize members by departments, age groups, and ministries. Maintain full member profiles with photos, contacts, and participation records.'],
                                    ['title' => 'Tithes, Offerings & Contributions', 'text' => 'Record all contributions, pledges, and donations with transparent receipts and automated financial summaries.'],
                                    ['title' => 'Departments & Groups', 'text' => 'Manage church groups like choirs, youth, women, and elders — with membership lists, meetings, and activity tracking.'],
                                    ['title' => 'Events & Attendance', 'text' => 'Plan and monitor services, weddings, and conferences. Record attendance and participation automatically or manually.'],
                                    ['title' => 'Communication & Notifications', 'text' => 'Send bulk SMS and emails to members for announcements, updates, and ministry reminders instantly.'],
                                    ['title' => 'Accounting & Budgeting', 'text' => 'Manage church income and expenses with budgeting tools, ledger entries, and instant financial statements.'],
                                    ['title' => 'Branch & Multi-Campus Management', 'text' => 'Link multiple church branches or zones and access consolidated reports from a central dashboard.'],
                                    ['title' => 'Reports & Analytics', 'text' => 'Generate insightful reports on attendance, finances, and member growth — supporting data-driven decision-making.'],
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
