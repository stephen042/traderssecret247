<header class="header-wrap style2">
    <div class="header-bottom">
        <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img class="logo-light"  width="200px" src="{{ asset('home-assets/assets/img/logo-dark.png') }}" alt="Logo Light">
                <img class="logo-dark"   width="200px" src="{{ asset('home-assets/assets/img/logo.png') }}"      alt="Logo Dark">
            </a>

            <!-- Google‑Translate -->
            <div id="google_translate_element"></div>
            <script>
                function googleTranslateElementInit () {
                    new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
                }
            </script>
            <!-- /Google‑Translate -->

            <div class="collapse navbar-collapse main-menu-wrap" id="navbarSupportedContent">
                <div class="menu-close d-lg-none">
                    <a href="javascript:void(0)"><i class="ri-close-line"></i></a>
                </div>

                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="{{ route('home') }}"
                           class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                            Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('about') }}"
                           class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">
                            About
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('faq') }}"
                           class="nav-link {{ request()->routeIs('faq') ? 'active' : '' }}">
                            Faqs
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('contact') }}"
                           class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">
                            Contact Us
                        </a>
                    </li>

                    <!-- Mobile‑only Login button -->
                    <li class="nav-item d-lg-none">
                        <a href="{{ route('login') }}"
                           class="nav-link btn style1 {{ request()->routeIs('login') ? 'active' : '' }}">
                            LOGIN ACCOUNT <i class="ri-arrow-right-s-line"></i>
                        </a>
                    </li>
                </ul>

                <!-- Desktop extras -->
                <div class="other-options md-none">
                    <div class="option-item">
                        <div class="user-login">
                            <span><i class="ri-user-add-line"></i></span>
                            <ul class="list-style">
                                <li><a href="{{ route('login') }}">Sign In</a></li>
                                <li><a href="{{ route('register') }}">Sign Up</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="option-item">
                        <a href="{{ route('login') }}"
                           class="btn style1 {{ request()->routeIs('login') ? 'active' : '' }}">
                            LOGIN ACCOUNT
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Mobile bar -->
        <div class="container">
            <div class="mobile-bar-wrap">
                <div class="user-login d-lg-none">
                    <span><i class="ri-user-add-line"></i></span>
                    <ul class="list-style">
                        <li><a href="{{ route('login') }}">Sign In</a></li>
                        <li><a href="{{ route('register') }}">Sign Up</a></li>
                    </ul>
                </div>
                <div class="mobile-menu d-lg-none">
                    <a href="javascript:void(0)"><i class="ri-menu-line"></i></a>
                </div>
            </div>
        </div>
    </div>
</header>
