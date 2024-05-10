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

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <div>
                                <h1 class="page-title">Trade History</h1>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('user_dashboard') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Trade History</li>
                                </ol>
                            </div>
                            <div class="ms-auto pageheader-btn">
                                <i class="fa fa-question-circle" data-bs-placement="bottom" data-bs-toggle="tooltip"
                                    title="Deposits to your subscription wallet are for all purchases of plans in the Website E.g Ai Plans, signals, etc"></i>
                                <a href="{{ route('user_deposit') }}"
                                    class="btn btn-primary btn-xm btn-icon text-white">
                                    <span>
                                        <i class="fa fa-plus"></i>
                                    </span> Add Funds
                                </a>
                            </div>
                        </div>

                        <!-- ROW -->
                        <div class="row row-sm">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">ALL Trade History </h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered text-nowrap border-bottom w-100 "
                                                id="responsive-datatable">
                                                <thead>
                                                    <tr>
                                                        <td class="wd-15p border-bottom-0">#</td>
                                                        <td class="wd-15p border-bottom-0">Time</td>
                                                        <td class="wd-15p border-bottom-0">Trade By</td>
                                                        <td class="wd-15p border-bottom-0">Type</td>
                                                        <td class="wd-15p border-bottom-0">Asset</td>
                                                        <td class="wd-15p border-bottom-0">Cost</td>
                                                        <td class="wd-15p border-bottom-0">Duration</td>
                                                        <td class="wd-15p border-bottom-0">Profit/Loss</td>
                                                        <td class="wd-15p border-bottom-0">Status</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($trades as $counter => $trade)
                                                        <tr>
                                                            <td> {{ $counter + 1 }}</td>
                                                            <td>{{ date('Y/m/d h:i a', strtotime($trade->trade_time)) }}
                                                            </td>
                                                            <td>{{ $trade->trade_by }}</td>
                                                            <td>{{ $trade->trade_type }}</td>
                                                            <td>{{ $trade->trade_asset }}</td>
                                                            <td>${{ number_format($trade->trade_stake_amount, 2) }}</td>
                                                            <td>{{ $trade->trade_duration }}</td>
                                                            @if ($trade->trade_status == 3)
                                                                <td class="text-success fs-15 fw-semibold">
                                                                    + ${{ $trade->trade_profit_loss_amount }}
                                                                </td>
                                                            @elseif ($trade->trade_status == 2)
                                                                <td class="text-danger fs-15 fw-semibold">-
                                                                    ${{ $trade->trade_profit_loss_amount }}</td>
                                                            @else
                                                                <td class="text-info fs-15 fw-semibold">
                                                                    --/--
                                                                </td>
                                                            @endif

                                                            @if ($trade->trade_status == 3)
                                                                <td class="text-success fs-15 fw-semibold">
                                                                    {{ config('app.trade_status')[$trade->trade_status] }}
                                                                </td>
                                                            @elseif ($trade->trade_status == 2)
                                                                <td class="text-danger fs-15 fw-semibold">
                                                                    {{ config('app.trade_status')[$trade->trade_status] }}
                                                                </td>
                                                            @else
                                                                <td class="text-info fs-15 fw-semibold">
                                                                    {{ config('app.trade_status')[$trade->trade_status] }}
                                                                </td>
                                                            @endif
                                                        </tr>
                                                    @empty
                                                        <tr>
                                                        </tr>
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
