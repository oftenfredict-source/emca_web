                                                <li class="has-dropdown">
                                                    <a href="{{ route('news') }}">
                                                        Pages
                                                        <i class="fas fa-angle-down"></i>
                                                    </a>
                                                    <ul class="submenu">
                                                        <li class="has-dropdown">
                                                            <a href="{{ route('coaching.details') }}">
                                                                Coaching
                                                            <i class="fas fa-angle-down"></i>
                                                            </a>
                                                            <ul class="submenu">
                                                                 <li><a href="{{ route('coaching') }}">Coaching </a></li>
                                                                 <li><a href="{{ route('coaching.details') }}">Coaching Details</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="has-dropdown">
                                                            <a href="{{ route('country.details') }}">
                                                                Countries
                                                            <i class="fas fa-angle-down"></i>
                                                            </a>
                                                            <ul class="submenu">
                                                                 <li><a href="{{ route('country') }}">Countries </a></li>
                                                                 <li><a href="{{ route('country.details') }}">Country Details</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="has-dropdown">
                                                            <a href="{{ route('team') }}">
                                                            Team
                                                            <i class="fas fa-angle-down"></i>
                                                            </a>
                                                            <ul class="submenu">
                                                                <li><a href="{{ route('team') }}">Team</a></li>
                                                                <li><a href="{{ route('team.details') }}">Team Details</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="{{ route('faq') }}">Faq's</a></li>
                                                        <li><a href="{{ url('/preview-404') }}">404 Page</a></li>
                                                    </ul>
                                                </li>
                                                <li class="has-dropdown">
                                                    <a href="{{ route('solutions') }}">
                                                        Solutions
                                                        <i class="fas fa-angle-down"></i>
                                                    </a>
                                                    <ul class="submenu">
                                                        @foreach (config('solutions') as $slug => $solution)
                                                            <li>
                                                                <a href="{{ route('solutions.show', $slug) }}">{{ $solution['name'] }}</a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </li>
