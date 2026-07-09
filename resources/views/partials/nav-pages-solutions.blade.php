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
                                                <li>
                                                    <a href="{{ route('team') }}">Team</a>
                                                </li>
