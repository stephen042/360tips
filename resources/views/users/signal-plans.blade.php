<!doctype html>
<html lang="en" dir="ltr">

<head>

    @include('includes.user-head')

</head>

<body class="app sidebar-mini ltr light-mode">

    <!-- GLOBAL-LOADER -->
    @include('includes.loader')
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!-- APP-NAv -->
            @include('includes.user-nav')
            <!-- /APP-NAv -->

            <!--APP-SIDEBAR-->
            @include('includes.user-sidebar')
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
                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <div>
                                <h1 class="page-title">Signal Plans</h1>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('user_dashboard') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Signal Plans</li>
                                </ol>
                            </div>
                            <div class="ms-auto pageheader-btn">
                                <span><i class="bi bi-cash-stack h4"></i></span>
                                Total Subscription Bal: <span class="h4 text-bold">$
                                    {{ number_format($user_data->sub_balance, 2) }}</span>
                                </a>
                            </div>
                            <div class="ms-auto pageheader-btn">
                                <i class="fa fa-question-circle" data-bs-placement="bottom" data-bs-toggle="tooltip"
                                    title="Deposits to your subscription wallet are for all purchases of plans in the Website E.g Ai Plans, signals, etc"></i>
                                <a href="{{ route('user_sub_deposit') }}"
                                    class="btn btn-primary btn-xm btn-icon text-white">
                                    <span>
                                        <i class="fa fa-plus"></i>
                                    </span> Add Subscription Fund
                                </a>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->
                        <div class="row row-cards">
                            <div class="col">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Signal Plans</h3>
                                    </div>
                                    <livewire:user.signal-plans />
                                </div>
                            </div>
                        </div>

                        <!-- ROW -->
                        <div class="row row-sm">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">ALL Signal Plans request</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered text-nowrap border-bottom w-100 "
                                                id="responsive-datatable">
                                                <thead>
                                                    <tr>
                                                        <th class="wd-15p border-bottom-0">#</th>
                                                        <th class="wd-15p border-bottom-0">plan</th>
                                                        <th class="wd-20p border-bottom-0">Amount </th>
                                                        <th class="wd-20p border-bottom-0">Duration </th>
                                                        <th class="wd-15p border-bottom-0">Signal strength</th>
                                                        <th class="wd-15p border-bottom-0">Status</th>
                                                        <th class="wd-10p border-bottom-0">Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($plans_transactions as $count => $plans_transaction)
                                                        <tr>
                                                            <td>{{ $count + 1 }}</td>
                                                            <td>{{ $plans_transaction->plan_name }}</td>
                                                            <td>${{ $plans_transaction->plan_amount }}</td>
                                                            <td>{{ $plans_transaction->plan_duration }}</td>
                                                            <td>{{ $plans_transaction->plan_signal_strength }}%</td>
                                                            <td>
                                                                @if ($plans_transaction->Plan_transaction_status == 1)
                                                                    <span class="text-primary fs-15 fw-semibold">
                                                                        {{ config('app.Plan_transaction_status')[$plans_transaction->Plan_transaction_status] }}
                                                                    </span>
                                                                @else
                                                                    <span class="text-success fs-15 fw-semibold">
                                                                        {{ config('app.plan_transaction_status')[$plans_transaction->plan_transaction_status] }}
                                                                    </span>
                                                                @endif
                                                            </td>
                                                            <td>{{ date('Y-M-d h:i a', strtotime($plans_transaction->created_at)) }}
                                                            </td>
                                                        </tr>
                                                    @empty
                                                        <tr></tr>
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END ROW -->
                    </div>
                    <!-- CONTAINER END -->
                </div>
            </div>
            <!-- APP-CONTENT END -->
        </div>

        <!-- FOOTER -->
        @include('includes.user-footer')
        <!-- FOOTER END -->
        <!-- APP-NAv -->
        @include('includes.user-nav-down')
        <!-- /APP-NAv -->

    </div>
    <!-- CONTAINER END -->

    @include('includes.user-scripts')

</body>

</html>
