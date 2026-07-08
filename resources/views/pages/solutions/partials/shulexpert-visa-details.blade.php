<!--<< Solution Details Section (service-details layout) >>-->
<section class="visa-details-section section-padding emca-solution-visa-layout">
    <div class="container">
        <div class="visa-details-wrapper">
            <div class="row g-5">
                <div class="col-lg-4 order-2 order-md-1 align-self-lg-start">
                    <div class="visa-sidebar">
                        <div class="visa-widget-categories emca-benefits-categories">
                            <h4 class="wid-title">Key Benefits of ShuleXpert</h4>
                            <p class="emca-benefits-intro">ShuleXpert enhances transparency, performance, and collaboration — creating a smarter learning environment for every school.</p>
                            <ul id="shulexpertBenefitsList">
                                @foreach ([
                                    ['id' => 'benefit1', 'title' => 'Automation & Efficiency', 'text' => 'Digitize daily school operations — saving time, reducing paperwork, and improving accuracy across all departments.'],
                                    ['id' => 'benefit2', 'title' => 'Enhanced Collaboration', 'text' => 'Connect teachers, parents, and students through a shared communication and performance platform.'],
                                    ['id' => 'benefit3', 'title' => 'Data-Driven Decisions', 'text' => 'Real-time analytics and dashboards enable informed decisions on academics, finances, and staff performance.'],
                                    ['id' => 'benefit4', 'title' => 'Transparency & Accountability', 'text' => 'Ensure accurate fee tracking, grading, and attendance management for parents and administrators alike.'],
                                    ['id' => 'benefit5', 'title' => 'Accessibility', 'text' => 'Access ShuleXpert anytime, anywhere — on web browsers or mobile devices, even with low internet connectivity.'],
                                    ['id' => 'benefit6', 'title' => 'Support & Training', 'text' => 'Full system setup, user training, and ongoing support from ' . config('company.legal_name') . ' experts.'],
                                    ['id' => 'benefit7', 'title' => 'Customizable for Every School', 'text' => 'Designed to fit the structure and reporting standards of Pre, Primary, and Secondary Schools in Tanzania.'],
                                    ['id' => 'benefit8', 'title' => 'Cloud or On-Premise', 'text' => 'Flexible hosting options for schools with different infrastructure capabilities — secure and scalable.'],
                                ] as $i => $benefit)
                                <li class="emca-benefit-item wow fadeInUp" data-wow-delay="{{ number_format($i * 0.1 + 0.2, 1) }}s">
                                    <div class="emca-benefit-card">
                                        <a href="javascript:void(0)" class="emca-benefit-trigger collapsed" data-bs-toggle="collapse" data-bs-target="#{{ $benefit['id'] }}" aria-expanded="false" aria-controls="{{ $benefit['id'] }}">
                                            {{ $benefit['title'] }}
                                            <span><i class="fas fa-chevron-right"></i></span>
                                        </a>
                                        <div id="{{ $benefit['id'] }}" class="collapse emca-benefit-panel" data-bs-parent="#shulexpertBenefitsList">
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
                                    <div class="accordion" id="shulexpertFaqAccordion">
                                        @foreach ([
                                            ['id' => 'faq1', 'q' => 'What is ShuleXpert?', 'a' => 'ShuleXpert is an integrated School Management System by ' . config('company.legal_name') . ' that helps schools manage students, staff, fees, academics, and communication in one platform.'],
                                            ['id' => 'faq2', 'q' => 'Which school levels does it support?', 'a' => 'ShuleXpert is designed for Pre, Primary, and Secondary Schools in Tanzania — with flexible settings for each level\'s reporting standards.'],
                                            ['id' => 'faq3', 'q' => 'Does it manage fees and report cards?', 'a' => 'Yes. Automate fee billing, payments, and receipts while recording assessments, exams, and grades with instant report card generation.'],
                                            ['id' => 'faq4', 'q' => 'Is training and support included?', 'a' => 'Yes. ' . config('company.name') . ' provides system setup, user training, and ongoing technical support for your school team.'],
                                            ['id' => 'faq5', 'q' => 'Can parents access student progress?', 'a' => 'Yes. Parents can view attendance, grades, fee status, and announcements through the parent portal and SMS notifications.'],
                                            ['id' => 'faq6', 'q' => 'Does it work on mobile devices?', 'a' => 'Yes. ShuleXpert offers web and mobile access with Android and iOS apps for teachers, parents, and administrators.'],
                                            ['id' => 'faq7', 'q' => 'Is school data secure?', 'a' => 'ShuleXpert uses role-based access, secure backups, and encryption to protect sensitive student, staff, and financial records.'],
                                            ['id' => 'faq8', 'q' => 'Can small schools use it?', 'a' => 'Yes. ShuleXpert scales from small private schools to large institutions — with cloud or on-premise hosting options.'],
                                        ] as $i => $faq)
                                        <div class="accordion-item">
                                            <h4 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#{{ $faq['id'] }}" aria-expanded="false" aria-controls="{{ $faq['id'] }}">
                                                    {{ $faq['q'] }}
                                                </button>
                                            </h4>
                                            <div id="{{ $faq['id'] }}" class="accordion-collapse collapse" data-bs-parent="#shulexpertFaqAccordion">
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
                            'title' => 'ShuleXpert',
                            'description' => 'Talk to ' . config('company.name') . ' for demos, setup, and support for your school.',
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
                            <h2 class="title-anim">ShuleXpert Overview</h2>
                            <p class="mt-3">
                                ShuleXpert, developed by {{ config('company.legal_name') }}, is an integrated School Management System designed to meet the operational needs of Pre, Primary, and Secondary Schools in Tanzania.
                            </p>
                            <p class="mt-3">
                                The system automates student records, attendance, academic performance, finance, communication, and staff management — ensuring accountability, transparency, and efficiency. It centralizes school operations, connects teachers, students, and parents, and simplifies reporting for school heads and education authorities.
                            </p>

                            <div class="row mt-4">
                                <div class="col-lg-6">
                                    <div class="single-icon-items">
                                        @foreach ([
                                            'Student registration and academic record management',
                                            'Timetable and attendance tracking',
                                            'Continuous Assessment and report card generation',
                                            'Fee collection, invoicing, and expense tracking',
                                            'Parent and teacher communication portal',
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
                                            'Staff management with payroll and leave tracking',
                                            'Library and asset management tools',
                                            'Cloud-ready and mobile friendly for real-time access',
                                            'Mobile app for Android and iOS platforms',
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
                                Digital tools that simplify operations, enhance performance, and promote accountability for administrators, teachers, parents, and students.
                            </p>

                            <div class="row g-4 emca-module-details-list mt-4">
                                @foreach ([
                                    ['title' => 'Student Management', 'text' => 'Manage student enrollment, profiles, class allocation, performance, and disciplinary records in one central system.'],
                                    ['title' => 'Attendance & Timetable', 'text' => 'Track student and staff attendance digitally and generate automated timetables for classes and exams.'],
                                    ['title' => 'Academic & Examination', 'text' => 'Record continuous assessments, exams, and grades with instant report card generation and performance analytics.'],
                                    ['title' => 'Fees & Finance', 'text' => 'Automate fee billing, payments, and receipts. Monitor expenses and generate financial statements easily.'],
                                    ['title' => 'Staff & HR Management', 'text' => 'Manage teacher profiles, attendance, leave, and payroll while evaluating performance and workload distribution.'],
                                    ['title' => 'Parent-Teacher Communication', 'text' => 'Keep parents informed with student progress updates, fee reminders, and announcements through SMS and portal access.'],
                                    ['title' => 'Library & Asset Management', 'text' => 'Track books, equipment, and learning materials with digital borrowing, inventory control, and return reminders.'],
                                    ['title' => 'Reporting & Analytics', 'text' => 'Generate academic, financial, and administrative reports for management and education authorities instantly.'],
                                    ['title' => 'Cloud & Data Security', 'text' => 'Securely store and back up school data with role-based access and real-time data synchronization.'],
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
