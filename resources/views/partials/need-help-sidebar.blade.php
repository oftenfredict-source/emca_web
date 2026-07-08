<div class="visa-sidebar-widget">
    <div class="contact-bg text-center bg-cover emca-need-help-widget" style="background-image: url('{{ asset('images/customercare.png') }}');">
        <div class="emca-need-help-content">
            <h4>Need Help With <br> {{ $title }}?</h4>
            <h3><a href="tel:{{ preg_replace('/\s+/', '', config('company.phone')) }}">{{ config('company.phone') }}</a></h3>
            <p>{{ $description }}</p>
            <a href="{{ route('contact') }}" class="theme-btn bg-white">
                <span>
                    contact us
                    <i class="fas fa-chevron-right"></i>
                </span>
            </a>
        </div>
    </div>
</div>
