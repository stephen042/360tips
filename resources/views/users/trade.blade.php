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

                        <div class="row row-card">
                            <div class="card-body col-xl-10 col-lg-10 col-sm-12 p-2">
                                <!-- Earnings & Balance -->
                                <div class="text-muted">
                                    <div class="row mb-3">
                                        <div class="col-6 col-lg-4 fs-6 text-dark">Earning:</div>
                                        <div class="col-6 col-lg-8 text-end fs-6 text-dark">
                                            ${{ number_format(auth()->user()->balance, 2) }}
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-6 col-lg-4 fs-6 text-dark">Balance:</div>
                                        <div class="col-6 col-lg-8 text-end fs-6 text-dark">
                                            ${{ number_format(auth()->user()->sub_balance, 2) }}
                                        </div>
                                    </div>
                                    <a href="{{ route('user_withdraw') }}">
                                        <div class="row mb-4">
                                            <div class="col-6 col-lg-4 fs-6 text-dark">Withdrawal:</div>
                                            <div class="col-6 col-lg-8 text-end fs-6 text-dark">
                                                ${{ number_format($sum_withdrawal, 2) }}
                                            </div>
                                        </div>
                                    </a>

                                    <hr>
                                    <!-- Trading Progress (text on top) -->
                                    <div class="mb-1">
                                        <p class="mb-2 fs-6 text-dark">Trading Progress: {{
                                            auth()->user()->progress_bar_status }}%</p>
                                        <div class="progress" style="height: 20px;">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-info"
                                                style="width: {{ auth()->user()->progress_bar_status }}%;">
                                                {{ auth()->user()->progress_bar_status }}%
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <!-- Signal Strength Progress (text on top) -->
                                    <div class="mb-1">
                                        <p class="mb-2 fs-6 fw-semibold text-dark">Signal Strength: {{
                                            auth()->user()->signal_strength }}%</p>
                                        <div class="progress" style="height: 20px;">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                                                style="width: {{ auth()->user()->signal_strength }}%;">
                                                {{ auth()->user()->signal_strength }}%
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <!-- trade tab -->
                        <div class="row row-cards flex justify-content-around p-3">
                            <div class="card col-xl-10 col-lg-10 col-sm-12">
                                <div class="card-body p-1">
                                    <div class="panel panel-primary">
                                        <div class=" tab-menu-heading ">
                                            <div class="">
                                                <!-- Tabs -->
                                                <ul class="nav panel-tabs ps-2 pe-2 flex justify-content-around"
                                                    style="background-color: #161616;border-radius: 10px">
                                                    <li>
                                                        <a style="color: #ADADAD;font-weight: bold;font-family:'Roboto', sans-serif;"
                                                            href="#tab5" class="active btn m-1 p-2 px-5" id="tab-5"
                                                            data-bs-toggle="tab">Buy
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a style="color: #ADADAD;font-weight: bold;font-family:'Roboto', sans-serif;"
                                                            href="#tab6" class="btn m-1 p-2 px-5"
                                                            data-bs-toggle="tab">Sell

                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="panel-body tabs-menu-body">
                                            <div class="tab-content">
                                                <div class="tab-pane active " id="tab5">
                                                    <livewire:user.buy-trade />
                                                </div>
                                                <div class="tab-pane " id="tab6">
                                                    <livewire:user.sell-trade />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

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