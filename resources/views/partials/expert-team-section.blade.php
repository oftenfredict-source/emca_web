@php
    use App\Models\TeamMember;

    $isTeamPage = ($layout ?? '') === 'team-page';
    $contentClass = 'team-content text-center'.($isTeamPage ? ' box-shadow' : '');
    $membersPerRow = 4;

    $teamCollection = isset($members) && $members->isNotEmpty()
        ? $members
        : TeamMember::active()->get();

    if ($teamCollection->isNotEmpty() && ! $isTeamPage) {
        $teamCollection = $teamCollection->take($membersPerRow);
    }

    if ($teamCollection->isEmpty()) {
        $configMembers = config('team.members');
        if (! $isTeamPage) {
            $configMembers = array_slice($configMembers, 0, $membersPerRow, true);
        }
    }
@endphp

<!--<< Team Section Start >>-->
<section class="team-section section-padding">
    <div class="container">
        <div class="section-title text-center">
            <span class="wow fadeInUp">Our Expert Team</span>
            <h2 class="title-anim">
                Meet our Creative architecture team <br> for your dream home
            </h2>
        </div>
        <div class="row{{ $isTeamPage ? ' g-4' : '' }}">
            @if($teamCollection->isNotEmpty())
                @foreach ($teamCollection as $member)
                    @php
                        $slug = $member->slug;
                        $isSystemDeveloper = stripos($member->role, 'developer') !== false;
                    @endphp
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="{{ $member->delay }}">
                        <div class="team-box-items{{ ! empty($member->style) ? ' ' . $member->style : '' }}">
                            <div class="team-image">
                                <img src="{{ $member->imageUrl() }}" alt="{{ $member->name }}">
                                <ul class="social-icon d-grid justify-content-center align-items-center">
                                    <li><a href="mailto:{{ $member->resolvedEmail() }}" aria-label="Email"><i class="fas fa-envelope"></i></a></li>
                                    <li><a href="{{ $member->social['instagram'] ?? '#' }}" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="{{ $member->social['facebook'] ?? '#' }}" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    @if ($isSystemDeveloper)
                                        <li><a href="{{ $member->social['github'] ?? '#' }}" aria-label="GitHub"><i class="fab fa-github"></i></a></li>
                                    @else
                                        <li><a href="{{ $member->social['linkedin'] ?? '#' }}" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a></li>
                                    @endif
                                </ul>
                            </div>
                            <div class="{{ $contentClass }}">
                                @if ($isTeamPage)
                                    <h5><a href="{{ route('team.details', $slug) }}">{{ $member->name }}</a></h5>
                                @else
                                    <h3><a href="{{ route('team.details', $slug) }}">{{ $member->name }}</a></h3>
                                @endif
                                <p>{{ $member->role }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                @foreach ($configMembers as $slug => $member)
                    @php
                        $isSystemDeveloper = stripos($member['role'], 'developer') !== false;
                    @endphp
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="{{ $member['delay'] }}">
                        <div class="team-box-items{{ ! empty($member['style']) ? ' ' . $member['style'] : '' }}">
                            <div class="team-image">
                                <img src="{{ asset($member['image']) }}" alt="{{ $member['name'] }}">
                                <ul class="social-icon d-grid justify-content-center align-items-center">
                                    <li><a href="mailto:{{ $member['email'] }}" aria-label="Email"><i class="fas fa-envelope"></i></a></li>
                                    <li><a href="{{ $member['social']['instagram'] ?? '#' }}" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="{{ $member['social']['facebook'] ?? '#' }}" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    @if ($isSystemDeveloper)
                                        <li><a href="{{ $member['social']['github'] ?? '#' }}" aria-label="GitHub"><i class="fab fa-github"></i></a></li>
                                    @else
                                        <li><a href="{{ $member['social']['linkedin'] ?? '#' }}" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a></li>
                                    @endif
                                </ul>
                            </div>
                            <div class="{{ $contentClass }}">
                                @if ($isTeamPage)
                                    <h5><a href="{{ route('team.details', $slug) }}">{{ $member['name'] }}</a></h5>
                                @else
                                    <h3><a href="{{ route('team.details', $slug) }}">{{ $member['name'] }}</a></h3>
                                @endif
                                <p>{{ $member['role'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
        @if (! $isTeamPage)
            <div class="text-center wow fadeInUp" data-wow-delay=".5s">
                <a href="{{ route('team') }}" class="theme-btn mt-5">
                    <span>
                        View More
                        <i class="fas fa-chevron-right"></i>
                    </span>
                </a>
            </div>
        @endif
    </div>
</section>
