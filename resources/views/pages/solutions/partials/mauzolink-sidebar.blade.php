<div class="emca-solution-topbar row g-4 wow fadeInUp" data-wow-delay=".2s">
    <div class="col-lg-4">
        <div class="emca-topbar-card emca-topbar-product">
            <div class="product-icon">
                <i class="fas fa-cash-register"></i>
            </div>
            <div>
                <h3>MauzoLink</h3>
                <p>Modern POS and inventory management for retail, restaurants, pharmacies & SMEs.</p>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="emca-topbar-card emca-topbar-highlights">
            <h4>At a Glance</h4>
            <ul>
                <li><i class="fas fa-check"></i> Sales & POS processing</li>
                <li><i class="fas fa-check"></i> Inventory & supplier tracking</li>
                <li><i class="fas fa-check"></i> Multi-branch dashboards</li>
            </ul>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="emca-topbar-card emca-topbar-contact">
            <h4>Talk to Us</h4>
            <ul>
                <li>
                    <i class="fas fa-phone-alt"></i>
                    <a href="tel:{{ preg_replace('/\s+/', '', config('company.phone')) }}">{{ config('company.phone') }}</a>
                </li>
                <li>
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:{{ config('company.email') }}">{{ config('company.email') }}</a>
                </li>
            </ul>
            <a href="{{ route('contact') }}" class="theme-btn w-100 text-center mt-3">
                <span><i class="fas fa-play-circle me-2"></i> request a demo</span>
            </a>
        </div>
    </div>
</div>
