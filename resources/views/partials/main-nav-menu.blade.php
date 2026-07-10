                                                <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
                                                    <a href="{{ route('home') }}">Home</a>
                                                </li>
                                                <li class="{{ request()->routeIs('about') ? 'active' : '' }}">
                                                    <a href="{{ route('about') }}">About</a>
                                                </li>
                                                @include('partials.nav-pages-services')

                                                @include('partials.nav-pages-solutions')
                                                @include('partials.nav-blog')
                                                <li class="{{ request()->routeIs('contact') ? 'active' : '' }}">
                                                    <a href="{{ route('contact') }}">Contact</a>
                                                </li>
