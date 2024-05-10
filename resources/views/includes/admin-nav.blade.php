<div class="app-header header sticky">
    <div class="container-fluid main-container">
        <div class="d-flex align-items-center">
            <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar"
                href="javascript:void(0);"></a>
            <div class="responsive-logo">
                <a href="{{ route('admin_dashboard') }}" class="header-logo">
                    <img src="{{ URL('home-assets/assets/img/logo-funding-traders.svg') }}" class="mobile-logo logo-1"
                        style="filter: brightness(0.5);" alt="logo">

                    <img src="{{ URL('home-assets/assets/img/logo-funding-traders.svg') }}"
                        class="mobile-logo dark-logo-1" alt="logo">
                </a>
            </div>
            <!-- sidebar-toggle-->
            <a class="logo-horizontal " href="{{ route('admin_dashboard') }}">
                <img src="{{ URL('home-assets/assets/img/logo-funding-traders.svg') }}" class="mobile-logo dark-logo-1"
                    alt="logo">
                <img src="{{ URL('home-assets/assets/img/logo-funding-traders.svg') }}" class="mobile-logo logo-1"
                    style="filter: brightness(0.5);" alt="logo">
            </a>
            <!-- LOGO -->
            <div class="d-flex order-lg-2 ms-auto header-right-icons">

                <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                    aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fe fe-more-vertical text-dark"></span>
                </button>
                <div class="navbar navbar-collapse responsive-navbar p-0">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                        <div class="d-flex order-lg-2">
                            <div class="dropdown d-md-flex">
                                <a class="nav-link icon theme-layout nav-link-bg layout-setting">
                                    <span class="dark-layout"><i class="fe fe-moon"></i></span>
                                    <span class="light-layout"><i class="fe fe-sun"></i></span>
                                </a>
                            </div>
                            <!-- FULL-SCREEN -->
                            <div class="dropdown d-md-flex">
                                <a class="nav-link icon full-screen-link nav-link-bg">
                                    <i class="fe fe-minimize fullscreen-button"></i>
                                </a>
                            </div>
                            <!-- FULL-SCREEN END -->
                            <div class="dropdown d-md-flex profile-1">
                                <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                    class="nav-link leading-none d-flex px-1">
                                    <span>
                                        @if ($admin_data->profile_pic)
                                            <img src="{{ asset('storage/' . $admin_data->profile_pic) }}"
                                                alt="profile-user" class="avatar profile-user brround cover-image">
                                        @else
                                            <img src="{{ asset('assets/images/profile.png') }}" alt="User Avatar"
                                                class="rounded-circle avatar-lg me-2">
                                        @endif
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <div class="drop-heading">
                                        <div class="text-center">
                                            <h5 class="text-dark mb-0">
                                                {{ $admin_data->first_name . ' ' . $admin_data->last_name }}
                                            </h5>
                                            <small class="text-muted">Admin</small>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider m-0"></div>
                                    <a class="dropdown-item" href="">
                                        <i class="dropdown-icon fe fe-user"></i> Profile Settings
                                    </a>
                                    <a class="dropdown-item" href="">
                                        <i class="dropdown-icon fe fe-settings"></i> Security Settings
                                    </a>
                                    <livewire:admin.logout />
                                </div>
                            </div>
                            <!-- SIDE-MENU -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
