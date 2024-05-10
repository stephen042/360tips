<div class="sticky">
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <aside class="app-sidebar">
        <div class="side-header">
            <a class="header-brand1" href="{{ route('user_dashboard') }}">
                <img src="{{ URL('assets/images/brand/logo.png') }}" class="header-brand-img desktop-logo" alt="logo">
                <img src="{{ URL('assets/images/brand/logo-1.png') }}" class="header-brand-img toggle-logo"
                    alt="logo">
                <img src="{{ URL('assets/images/brand/logo-2.png') }}" class="header-brand-img light-logo"
                    alt="logo">
                <img src="{{ URL('assets/images/brand/logo-3.png') }}" class="header-brand-img light-logo1"
                    alt="logo">
            </a>
            <!-- LOGO -->
        </div>
        <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left">

            </div>
            <ul class="side-menu">
                <li class="sub-category">
                    <h3>Admin</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="{{ route('admin_dashboard') }}"><i
                            class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Dashboard</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="{{ route('admin_wallets') }}"><i
                            class="side-menu__icon fe fe-credit-card"></i><span class="side-menu__label">Admin Wallet
                            Addresses </span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i
                            class="side-menu__icon fe fe-database"></i><span class="side-menu__label">Create
                            Plans</span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">PLANS</a></li>
                        <li><a href="{{ route('create_ai_plan') }}" class="slide-item">Create AI- Plans</a></li>
                        <li><a href="{{ route('create_status_plan') }}" class="slide-item">Create Status Plans</a></li>
                        <li><a href="{{ route('create_signal_plan') }}" class="slide-item">Create Signal
                                Plans</a></li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="{{ route('profile_settings') }}">
                        <i class="side-menu__icon fe fe-user-check"></i>
                        <span class="side-menu__label"> Profile Settings</span>
                    </a>
                </li>
        </div>
    </aside>
</div>
