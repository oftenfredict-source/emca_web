<div class="emca-solution-content">

    <div class="details-image emca-solution-hero wow fadeInUp" data-wow-delay=".2s">
        <img src="{{ asset('visaland-html/assets/img/coaching/details-1.jpg') }}" alt="ShuleXpert School Management System">
        <span class="emca-solution-hero-badge">
            <i class="fas fa-graduation-cap me-2"></i>School Management System
        </span>
    </div>

    <div class="emca-solution-intro wow fadeInUp" data-wow-delay=".3s">
        <div class="section-title">
            <span>By {{ config('company.legal_name') }}</span>
            <h2 class="title-anim">Integrated School Management for Tanzania</h2>
        </div>
        <p>
            ShuleXpert is an integrated School Management System designed to meet the operational needs of Pre, Primary, and Secondary Schools in Tanzania. It automates student records, attendance, academic performance, finance, communication, and staff management — ensuring accountability, transparency, and efficiency.
        </p>
        <p class="mb-0">
            The system centralizes school operations, connects teachers, students, and parents, and simplifies reporting for school heads and education authorities. With web and mobile access, ShuleXpert makes school management easier, faster, and paper-free.
        </p>
    </div>

    <div class="emca-solution-stats row g-3 wow fadeInUp" data-wow-delay=".35s">
        <div class="col-6 col-md-3">
            <div class="emca-stat-pill">
                <i class="fas fa-school"></i>
                <strong>Pre to Secondary</strong>
                <span>All school levels</span>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="emca-stat-pill">
                <i class="fas fa-mobile-alt"></i>
                <strong>Web & Mobile</strong>
                <span>Android & iOS apps</span>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="emca-stat-pill">
                <i class="fas fa-cloud"></i>
                <strong>Cloud Ready</strong>
                <span>Real-time sync</span>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="emca-stat-pill">
                <i class="fas fa-fingerprint"></i>
                <strong>Biometric Access</strong>
                <span>Secure authentication</span>
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
                ['icon' => 'fa-id-card', 'accent' => 'blue', 'title' => 'Student Registration', 'text' => 'Student registration and academic record management'],
                ['icon' => 'fa-calendar-check', 'accent' => 'green', 'title' => 'Attendance & Timetable', 'text' => 'Timetable and attendance tracking'],
                ['icon' => 'fa-clipboard-list', 'accent' => 'orange', 'title' => 'Assessments', 'text' => 'Continuous Assessment and report card generation'],
                ['icon' => 'fa-receipt', 'accent' => 'red', 'title' => 'Fees & Invoicing', 'text' => 'Fee collection, invoicing, and expense tracking'],
                ['icon' => 'fa-comments', 'accent' => 'purple', 'title' => 'Communication Portal', 'text' => 'Parent and teacher communication portal'],
                ['icon' => 'fa-users', 'accent' => 'navy', 'title' => 'Staff Management', 'text' => 'Staff management with payroll and leave tracking'],
                ['icon' => 'fa-book-open', 'accent' => 'blue', 'title' => 'Library & Assets', 'text' => 'Library and asset management tools'],
                ['icon' => 'fa-wifi', 'accent' => 'green', 'title' => 'Real-Time Access', 'text' => 'Cloud-ready and mobile friendly for real-time access'],
                ['icon' => 'fa-mobile-alt', 'accent' => 'orange', 'title' => 'Mobile Apps', 'text' => 'Mobile app for Android and iOS platforms'],
                ['icon' => 'fa-fingerprint', 'accent' => 'red', 'title' => 'Biometric Security', 'text' => 'Biometric device authentication for secure access'],
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
                Digital tools that simplify operations, enhance performance, and promote accountability for administrators, teachers, parents, and students.
            </p>
        </div>
        <div class="row g-4">
            @foreach ([
                ['icon' => 'fa-user-graduate', 'accent' => 'blue', 'title' => 'Student Management', 'text' => 'Manage student enrollment, profiles, class allocation, performance, and disciplinary records in one central system.'],
                ['icon' => 'fa-clock', 'accent' => 'green', 'title' => 'Attendance & Timetable', 'text' => 'Track student and staff attendance digitally and generate automated timetables for classes and exams.'],
                ['icon' => 'fa-file-alt', 'accent' => 'orange', 'title' => 'Academic & Examination', 'text' => 'Record continuous assessments, exams, and grades with instant report card generation and performance analytics.'],
                ['icon' => 'fa-coins', 'accent' => 'red', 'title' => 'Fees & Finance', 'text' => 'Automate fee billing, payments, and receipts. Monitor expenses and generate financial statements easily.'],
                ['icon' => 'fa-chalkboard-teacher', 'accent' => 'purple', 'title' => 'Staff & HR Management', 'text' => 'Manage teacher profiles, attendance, leave, and payroll while evaluating performance and workload distribution.'],
                ['icon' => 'fa-bullhorn', 'accent' => 'navy', 'title' => 'Parent-Teacher Communication', 'text' => 'Keep parents informed with student progress updates, fee reminders, and announcements through SMS and portal access.'],
                ['icon' => 'fa-book', 'accent' => 'blue', 'title' => 'Library & Asset Management', 'text' => 'Track books, equipment, and learning materials with digital borrowing, inventory control, and return reminders.'],
                ['icon' => 'fa-chart-line', 'accent' => 'green', 'title' => 'Reporting & Analytics', 'text' => 'Generate academic, financial, and administrative reports for management and education authorities instantly.'],
                ['icon' => 'fa-shield-alt', 'accent' => 'red', 'title' => 'Cloud & Data Security', 'text' => 'Securely store and back up school data with role-based access and real-time data synchronization.'],
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
                <img src="{{ asset('visaland-html/assets/img/coaching/details-2.jpg') }}" alt="ShuleXpert dashboard">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="emca-highlight-content">
                <span class="highlight-label">Why Schools Choose ShuleXpert</span>
                <h3>Paper-Free Operations, Real Results</h3>
                <p>From enrollment to report cards, fee collection to parent communication — every workflow lives in one connected platform built for Tanzanian schools.</p>
                <ul class="emca-check-list">
                    <li><i class="fas fa-check-circle"></i>Role-based access for admins, teachers, parents & students</li>
                    <li><i class="fas fa-check-circle"></i>SMS alerts and portal notifications</li>
                    <li><i class="fas fa-check-circle"></i>Instant academic and financial reporting</li>
                    <li><i class="fas fa-check-circle"></i>Works on low-bandwidth connections</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="emca-solution-block emca-benefits-block">
        <div class="section-title">
            <span class="wow fadeInUp">Advantages</span>
            <h2 class="title-anim wow fadeInUp" data-wow-delay=".1s">Key Benefits of ShuleXpert</h2>
            <p class="emca-block-intro wow fadeInUp" data-wow-delay=".2s">
                Enhanced transparency, performance, and collaboration — creating a smarter learning environment for every school.
            </p>
        </div>
        <div class="row g-4">
            @foreach ([
                ['icon' => 'fa-cogs', 'accent' => 'blue', 'title' => 'Automation & Efficiency', 'text' => 'Digitize daily school operations — saving time, reducing paperwork, and improving accuracy across all departments.'],
                ['icon' => 'fa-handshake', 'accent' => 'green', 'title' => 'Enhanced Collaboration', 'text' => 'Connect teachers, parents, and students through a shared communication and performance platform.'],
                ['icon' => 'fa-chart-pie', 'accent' => 'orange', 'title' => 'Data-Driven Decisions', 'text' => 'Real-time analytics and dashboards enable informed decisions on academics, finances, and staff performance.'],
                ['icon' => 'fa-eye', 'accent' => 'red', 'title' => 'Transparency & Accountability', 'text' => 'Ensure accurate fee tracking, grading, and attendance management for parents and administrators alike.'],
                ['icon' => 'fa-globe-africa', 'accent' => 'purple', 'title' => 'Accessibility', 'text' => 'Access ShuleXpert anytime, anywhere — on web browsers or mobile devices, even with low internet connectivity.'],
                ['icon' => 'fa-headset', 'accent' => 'navy', 'title' => 'Support & Training', 'text' => 'Full system setup, user training, and ongoing support from ' . config('company.legal_name') . ' experts.'],
                ['icon' => 'fa-sliders-h', 'accent' => 'blue', 'title' => 'Customizable for Every School', 'text' => 'Designed to fit the structure and reporting standards of Pre, Primary, and Secondary Schools in Tanzania.'],
                ['icon' => 'fa-server', 'accent' => 'green', 'title' => 'Cloud or On-Premise', 'text' => 'Flexible hosting options for schools with different infrastructure capabilities — secure and scalable.'],
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
