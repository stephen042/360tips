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
            <div class="dropdown d-md-flex notifications">
                <a class="nav-link icon" data-bs-toggle="dropdown">
                    <i class="fe fe-bell"></i>
                    @if (!empty($user_notifications_count))
                        <span class=" pulse"></span>
                    @endif
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow"
                    style="max-height:80vh; overflow-y:auto;">
                    <div class="drop-heading border-bottom">
                        <div class="d-flex">
                            <h6 class="mt-1 mb-0 fs-16 fw-semibold">You have Notification</h6>
                            <div class="ms-auto">
                                <span class="badge bg-success rounded-pill">{{ $user_notifications_count }}</span>
                            </div>
                        </div>
                        <hr>
                        @if (!empty($user_notifications_count))
                            <a class="badge bg-danger" href="javascript:void(0);" wire:click="clear_notifications">
                                clear all
                            </a>
                        @endif

                    </div>
                    <div class="notifications-menu">
                        {{-- use popup to display messages if possible --}}
                        @forelse ($user_notifications as $item)
                            <div class="dropdown-item d-flex" href="chat.html">
                                <div class="me-3 notifyimg  bg-primary-gradient brround box-shadow-primary">
                                    <i class="fe fe-message-square"></i>
                                </div>
                                <div class="mt-1 wd-80p">
                                    <h5 class="notification-label mb-1">{{ $item->notifications_category }}</h5>
                                    <span class="notification-subtext">{{ $item->notifications_message }}</span>
                                </div>
                            </div>
                        @empty
                        @endforelse
                    </div>
                </div>
            </div>
            <!-- NOTIFICATIONS -->
            <div class="dropdown d-md-flex profile-1">
                <a href="javascript:void(0);" data-bs-toggle="dropdown" class="nav-link leading-none d-flex px-1">
                    <span>
                        @if ($user_data->profile_pic)
                            <img src="{{ asset('storage/' . $user_data->profile_pic) }}" alt="profile-user"
                                class="avatar profile-user brround cover-image">
                        @else
                            <img src="{{asset('assets/images/profile.png')}}" alt="User Avatar"
                                class="rounded-circle avatar-lg me-2">
                        @endif
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <div class="drop-heading">
                        <div class="text-center">
                            <h5 class="text-dark mb-0">{{ $user_data->first_name . ' ' . $user_data->last_name }}</h5>
                            <small class="text-muted">User</small>
                        </div>
                    </div>
                    <div class="dropdown-divider m-0"></div>
                    <a class="dropdown-item" href="{{ route('account_settings') }}">
                        <i class="dropdown-icon fe fe-user"></i> Account Settings
                    </a>
                    <a class="dropdown-item" href="{{ route('security_settings') }}">
                        <i class="dropdown-icon fe fe-settings"></i> Security Settings
                    </a>
                    <a class="dropdown-item text-danger" wire:click="logout"
                        wire:confirm="Are you sure you want to logout ?" href="javascript:void(0);">
                        <i class="dropdown-icon fe fe-alert-circle text-danger"></i>
                        <em>Sign out</em>
                    </a>
                </div>
            </div>
            <!-- SIDE-MENU -->
        </div>
    </div>
</div>
