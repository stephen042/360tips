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
                        <center>
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

                        <div class="page-header">
                            <div>
                                <h1 class="page-title">Welcome Admin | {{ auth()->user()->first_name }}</h1>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Manager Dashboard</li>
                                </ol>
                                <p>
                                    Here's a summary of the current status of your <strong
                                        class="text-primary">{{ env('APP_NAME') }}</strong> manager account.
                                </p>
                            </div>
                        </div>
                        <!-- ROW OPEN -->
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-order">
                                            <h6 class="mb-2">All Customers</h6>
                                            <h2 class="text-end "><i
                                                    class="mdi mdi-account-multiple icon-size float-start text-primary text-primary-shadow"></i><span>{{ $total_users }}</span>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- COL END -->
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card ">
                                    <div class="card-body">
                                        <div class="card-widget">
                                            <h6 class="mb-2">Total Balance</h6>
                                            <h2 class="text-end"><i
                                                    class="fas fa-money-bill float-start text-success text-success-shadow"></i><span>${{ $total_balance }}</span>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- COL END -->
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-widget">
                                            <h6 class="mb-2">Total Sub Balance</h6>
                                            <h2 class="text-end"><i
                                                    class="icon-size fas fa-money-check-alt float-start text-info text-info-shadow"></i><span>${{ $total_sub_balance }}</span>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- COL END -->
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card ">
                                    <div class="card-body">
                                        <div class="card-widget">
                                            <h6 class="mb-2">Total Withdrawn</h6>
                                            <h2 class="text-end"><i
                                                    class="fas fa-outdent icon-size float-start text-danger text-danger-shadow"></i><span>${{ $total_withdrawal }}</span>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- COL END -->
                        </div>
                        <!-- ROW CLOSED -->
                        <div class="row">
                            <div class="col-12 col-sm-12">
                                <div class="card ">
                                    <div class="card-header">
                                        <h3 class="card-title mb-0">All Customers</h3>
                                        
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="data-table" class="table table-bordered text-nowrap mb-0">
                                                <thead class="border-top">
                                                    <tr>
                                                        <th class="bg-transparent border-bottom-0 w-5">S.no</th>
                                                        <th class="bg-transparent border-bottom-0">Name</th>
                                                        <th class="bg-transparent border-bottom-0">Country</th>
                                                        <th class="bg-transparent border-bottom-0">Registered on</th>
                                                        <th class="bg-transparent border-bottom-0">Balance</th>
                                                        <th class="bg-transparent border-bottom-0">Subscription Balance
                                                        </th>
                                                        <th class="bg-transparent border-bottom-0">Ai Trade</th>
                                                        <th class="bg-transparent border-bottom-0">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($users_data as $counter => $user)
                                                        <livewire:admin.all-users wire:key="{{$user->id}}"  :user="$user" :counter="$counter + 1"/>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!-- ROW-4 END -->
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
