@php
    $math = app(\App\Services\ContactFormGuard::class)->makeMathChallenge();
@endphp

{{-- Honeypot: must stay empty. Hidden from people. --}}
<div class="emca-hp" aria-hidden="true" style="position:absolute!important;left:-10000px!important;top:auto!important;width:1px!important;height:1px!important;overflow:hidden!important;opacity:0!important;pointer-events:none!important;">
    <label for="company_website">Company website</label>
    <input
        type="text"
        name="company_website"
        id="company_website"
        value=""
        tabindex="-1"
        autocomplete="off"
    >
</div>

<input type="hidden" name="form_started_at" value="{{ time() }}">
<input type="hidden" name="human_check_token" value="{{ $math['token'] }}">

<div class="emca-antispam">
    <label class="emca-math-check" for="human_check_answer">
        <span class="emca-math-check-label">Anti-spam check *</span>
        <span class="emca-math-check-row">
            <span class="emca-math-check-q">What is {{ $math['left'] }} + {{ $math['right'] }}?</span>
            <input
                type="text"
                inputmode="numeric"
                pattern="[0-9]*"
                name="human_check_answer"
                id="human_check_answer"
                class="emca-math-check-input"
                value=""
                placeholder="Your answer"
                autocomplete="off"
                required
            >
        </span>
    </label>
    @error('human_check_answer')
        <div class="emca-antispam-error">{{ $message }}</div>
    @enderror
</div>
