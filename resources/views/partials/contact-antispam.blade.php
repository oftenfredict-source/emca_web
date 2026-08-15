@php
    $recaptchaEnabled = filled(config('services.recaptcha.site_key'))
        && filled(config('services.recaptcha.secret_key'));
@endphp

{{-- Honeypot: leave empty. Hidden from people, filled by many bots. --}}
<div class="emca-hp" aria-hidden="true">
    <label for="website_url">Website</label>
    <input
        type="text"
        name="website_url"
        id="website_url"
        value=""
        tabindex="-1"
        autocomplete="off"
    >
</div>

<input type="hidden" name="form_started_at" value="{{ time() }}">

@if ($recaptchaEnabled)
    <div class="emca-antispam">
        <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.site_key') }}"></div>
        @error('g-recaptcha-response')
            <div class="emca-antispam-error">{{ $message }}</div>
        @enderror
    </div>
@else
    <div class="emca-antispam">
        <label class="emca-not-robot">
            <input
                type="checkbox"
                name="not_robot"
                value="1"
                @checked(old('not_robot'))
                required
            >
            <span>I’m not a robot</span>
        </label>
        @error('not_robot')
            <div class="emca-antispam-error">{{ $message }}</div>
        @enderror
    </div>
@endif
