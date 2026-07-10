@php
    $cvClass = trim('theme-btn emca-team-cv-btn ' . ($class ?? ''));
@endphp
<a href="{{ $url }}" class="{{ $cvClass }}" download target="_blank" rel="noopener noreferrer">
    <span>
        Download CV
        <i class="far fa-file-alt"></i>
    </span>
</a>
