<div class="sticky">
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <aside class="app-sidebar">
        <div class="side-header">
            <a class="header-brand1" href="{{ route('user_dashboard')}}">
                <img src="{{ asset('home-assets/assets/img/logo.png') }}"
                    class="header-brand-img desktop-logo" alt="logo-dark mode">
                <img src="{{ asset('home-assets/assets/img/favicon.png') }}"
                    class="header-brand-img toggle-logo" alt="logo toggle-dark">
                <img src="{{ asset('home-assets/assets/img/favicon-dark.png') }}"
                    class="header-brand-img light-logo" alt="logo toggle-light">
                <img src="{{ asset('home-assets/assets/img/logo-dark.png') }}"
                    class="header-brand-img light-logo1" style="filter: brightness(0.5);" alt="logo-light mode">
            </a>
            <!-- LOGO -->
        </div>
        <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left">

            </div>
            <ul class="side-menu">
                <li class="sub-category">
                    <h3>Main</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="{{ route('user_dashboard') }}"><i
                            class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Trade
                            Market</span></a>
                </li>
                {{-- <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="{{ route('user_crypto_wallets') }}"><i
                            class="side-menu__icon fas fa-coins"></i><span class="side-menu__label">Crypto
                            Wallets</span></a>
                </li> --}}
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="{{ route('user_deposit') }}"><i
                            class="side-menu__icon fe fe-credit-card"></i><span
                            class="side-menu__label">Deposit</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="{{ route('user_sub_deposit') }}"><i
                            class="side-menu__icon fe fe-credit-card"></i><span class="side-menu__label">Subscription
                            Deposit</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="{{ route('user_trade') }}"><i
                            class="side-menu__icon fas fa-chart-line"></i><span
                            class="side-menu__label">Trade</span></a>
                </li>
                {{-- <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="{{ route('user_swap') }}"><i
                            class="side-menu__icon fas fa-sync-alt"></i><span
                            class="side-menu__label">Swap</span></a>
                </li> --}}
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i
                            class="side-menu__icon fe fe-database"></i><span class="side-menu__label">Plans</span><i
                            class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">PLANS</a></li>
                        <li><a href="{{ route('user_ai_plans') }}" class="slide-item">AI- Plans</a></li>
                        <li><a href="{{ route('user_status') }}" class="slide-item">Status Plans</a></li>
                        <li><a href="{{ route('user_signal_plans') }}" class="slide-item">Signal Plans</a></li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i
                            class="side-menu__icon fe fe-link"></i><span class="side-menu__label">Transactions
                            History</span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">PLANS</a></li>
                        <li><a href="{{ route('user_trade_history') }}" class="slide-item">Trade History</a></li>
                        <li><a href="{{ route('user_deposit_history') }}" class="slide-item">Deposit History</a></li>
                        <li><a href="{{ route('user_withdraw_history') }}" class="slide-item">Withdrawal History</a>
                        </li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="{{ route('user_stake') }}"><i
                            class="side-menu__icon fe fe-cast"></i><span class="side-menu__label">Stake</span></a>
                </li>
                {{-- <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="{{ route('user_realEstate') }}"><i
                            class="side-menu__icon mdi mdi-unity"></i><span class="side-menu__label">Real
                            Estate</span></a>
                </li> --}}
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="{{route('user_withdraw')}}"><i
                            class="side-menu__icon fe fe-credit-card"></i><span class="side-menu__label">-
                            Withdrawal</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i
                            class="side-menu__icon fe fe-user-check"></i><span class="side-menu__label">Profile
                            Settings</span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li><a href="{{ route('account_settings') }}" class="slide-item">Account Settings</a></li>
                        <li><a href="{{ route('security_settings') }}" class="slide-item">Security Settings</a></li>
                    </ul>
                </li>
        </div>
    </aside>
</div>