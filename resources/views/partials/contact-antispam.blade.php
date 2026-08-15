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

<div class="emca-antispam">
    <label class="emca-not-robot" for="not_robot">
        <input
            type="checkbox"
            name="not_robot"
            id="not_robot"
            value="1"
            @checked(old('not_robot') === '1' || old('not_robot') === true || old('not_robot') === 1)
            required
        >
        <span class="emca-not-robot-text">
            <strong>I’m not a robot</strong>
            <small>Tick this box before sending</small>
        </span>
    </label>
    @error('not_robot')
        <div class="emca-antispam-error">{{ $message }}</div>
    @enderror
</div>
