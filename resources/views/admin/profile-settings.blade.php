<!doctype html>
<html lang="en" dir="ltr">

<head>

    @include('includes.admin-head')

</head>

<body class="app sidebar-mini ltr light-mode">

    <!-- GLOBAL-LOADER -->
    @include('includes.loader')
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!-- APP-NAv -->
            @include('includes.admin-nav')
            <!-- <div class="app-header header sticky"> -->
            <!-- /APP-NAv -->

            <!--APP-SIDEBAR-->
            @include('includes.admin-sidebar')
            <!--/APP-SIDEBAR-->

            <!-- APP-CONTENT OPEN -->
            <div class="main-content app-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <center class="mt-5">
                            @if (session()->has('error'))
                                <div class="alert alert-danger alert-dismissible fade show w-80" role="alert">
                                    <span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
                                    <span class="alert-inner--text"><strong>error!</strong>
                                        {{ session('error') }}
                                    </span>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                            @endif
                            @if (session()->has('success'))
                                <div class="alert alert-success alert-dismissible fade show w-80" role="alert">
                                    <span class="alert-inner--icon"><i class="fe fe-thumbs-up"></i></span>
                                    <span class="alert-inner--text"><strong>Success!</strong>
                                        {{ session('success') }}
                                    </span>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                            @endif
                        </center>


                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <div>
                                <h1 class="page-title">Welcome | {{ auth()->user()->first_name }}</h1>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/users">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Profile Settings</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <div class="row">
                            <livewire:admin.profile-settings :user_data="$admin_data" />
                            <div class="col-xl-8 col-md-12 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Edit Profile</h3>
                                    </div>
                                    <form action="{{ route('profile_settings_update') }}" method="POST">
                                        @csrf
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <label for="exampleInputname">First Name</label>
                                                        <input type="text" class="form-control" id="exampleInputname"
                                                            required placeholder="First Name" name="first_name"
                                                            value="{{ $admin_data->first_name }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <label for="exampleInputname1">Last Name</label>
                                                        <input type="text" class="form-control" name="last_name"
                                                            required placeholder="Enter Last Name"
                                                            value="{{ $admin_data->last_name }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control" name="email" required
                                                    placeholder="email address" value="{{ $admin_data->email }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputnumber">Conatct Number</label>
                                                <input type="number" class="form-control" name="phone" required
                                                    placeholder="phone number" value="{{ $admin_data->phone }}">
                                            </div>
                                        </div>
                                        <div class="card-footer text-end">
                                            <button class="btn btn-success" type="submit">
                                                Save
                                            </button>
                                            <button type="reset" class="btn btn-danger">Undo</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        {{-- content here --}}
                    </div>
                    <!-- CONTAINER END -->
                </div>
            </div>
            <!-- APP-CONTENT END -->
        </div>

        <!-- FOOTER -->
        @include('includes.admin-footer')
        <!-- FOOTER END -->

    </div>
    <!-- CONTAINER END -->

    @include('includes.admin-script')

</body>

</html>
