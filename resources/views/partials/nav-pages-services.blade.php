                                                <li class="has-dropdown">
                                                    <a href="{{ route('service') }}">
                                                        Services
                                                        <i class="fas fa-angle-down"></i>
                                                    </a>
                                                    <ul class="submenu">
                                                        @foreach (config('emca-services') as $slug => $service)
                                                            <li>
                                                                <a href="{{ route('services.show', $slug) }}">{{ $service['name'] }}</a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </li>
