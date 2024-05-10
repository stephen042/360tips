<!doctype html>
<html lang="en" dir="ltr">

<head>

    @include('includes.user-head')

</head>

<body class="app sidebar-mini ltr light-mode">

    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="https://php.spruko.com/zanex/zanex/assets/images/loader.svg" class="loader-img" alt="Loader">
    </div>
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
                                <h1 class="page-title">Stake | Stock Staking</h1>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('user_dashboard') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">stake</li>
                                </ol>
                            </div>
                            <div class="ms-auto pageheader-btn">
                                <span><i class="bi bi-cash-stack h4"></i></span>
                                Total Bal: <span class="h4 text-bold">
                                    ${{ number_format($user_data->balance, 2) }}</span>
                                </a>
                            </div>
                            <div class="ms-auto pageheader-btn">
                                <a href="deposit" class="btn btn-primary btn-icon text-white me-2">
                                    <span>
                                        <i class="fe fe-plus"></i>
                                    </span> Add Account
                                </a>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->
                        <!-- ROW-2 OPEN -->
                        <div class="row">

                            <div class="col-md-12 col-xl-4">
                                <div class="card">
                                    <div class="card-body d-flex">
                                        <div class="mx-2">
                                            <img class="img-fluid" src="{{ URL('assets/images/stake/BTC.svg') }}"
                                                width="70" height="70">
                                        </div>
                                        <div>
                                            <h6>Bitcoin BTC</h6>
                                            <span class="d-block text-success">$50,000 - $100,000</span>
                                            <button id="BTC" class="d-block">
                                                <a class="modal-effect text-white btn btn-info btn-sm px-5 my-2"
                                                    data-bs-effect="effect-flip-horizontal" data-bs-toggle="modal"
                                                    href="#modaldemostakeBTC"> STAKE</a>

                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-xl-4">
                                <div class="card">
                                    <div class="card-body d-flex">
                                        <div class="mx-2">
                                            <img class="img-fluid" src="{{ URL('assets/images/stake/AVAX.svg') }}"
                                                width="70" height="70">
                                        </div>
                                        <div>
                                            <h6>Avalanche AVAX</h6>
                                            <span class="d-block text-success">$50,000 - $100,000</span>
                                            <button id="AVAX" class="d-block">
                                                <a class="modal-effect text-white btn btn-info btn-sm px-5 my-2"
                                                    data-bs-effect="effect-flip-horizontal" data-bs-toggle="modal"
                                                    href="#modaldemostakeAVAX"> STAKE</a>

                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-xl-4">
                                <div class="card">
                                    <div class="card-body d-flex">
                                        <div class="mx-2">
                                            <img class="img-fluid" src="{{ URL('assets/images/stake/USDT.svg') }}"
                                                width="70" height="70">
                                        </div>
                                        <div>
                                            <h6>Tether USDT</h6>
                                            <span class="d-block text-success">$50,000 - $100,000</span>
                                            <button id="USDT" class="d-block">
                                                <a class="modal-effect text-white btn btn-info btn-sm px-5 my-2"
                                                    data-bs-effect="effect-flip-horizontal" data-bs-toggle="modal"
                                                    href="#modaldemostakeUSDT"> STAKE</a>

                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-xl-4">
                                <div class="card">
                                    <div class="card-body d-flex">
                                        <div class="mx-2">
                                            <img class="img-fluid" src="{{ URL('assets/images/stake/ETH.svg') }}"
                                                width="70" height="70">
                                        </div>
                                        <div>
                                            <h6>Ethereum ETH</h6>
                                            <span class="d-block text-success">$50,000 - $100,000</span>
                                            <button id="ETH" class="d-block">
                                                <a class="modal-effect text-white btn btn-info btn-sm px-5 my-2"
                                                    data-bs-effect="effect-flip-horizontal" data-bs-toggle="modal"
                                                    href="#modaldemostakeETH"> STAKE</a>

                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-xl-4">
                                <div class="card">
                                    <div class="card-body d-flex">
                                        <div class="mx-2">
                                            <img class="img-fluid" src="{{ URL('assets/images/stake/MATIC.svg') }}"
                                                width="70" height="70">
                                        </div>
                                        <div>
                                            <h6>Polygon MATIC</h6>
                                            <span class="d-block text-success">$50,000 - $100,000</span>
                                            <button id="MATIC" class="d-block">
                                                <a class="modal-effect text-white btn btn-info btn-sm px-5 my-2"
                                                    data-bs-effect="effect-flip-horizontal" data-bs-toggle="modal"
                                                    href="#modaldemostakeMATIC"> STAKE</a>

                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-xl-4">
                                <div class="card">
                                    <div class="card-body d-flex">
                                        <div class="mx-2">
                                            <img class="img-fluid" src="{{ URL('assets/images/stake/SOL.svg') }}"
                                                width="70" height="70">
                                        </div>
                                        <div>
                                            <h6>Solana SOL</h6>
                                            <span class="d-block text-success">$50,000 - $100,000</span>
                                            <button id="SOL" class="d-block">
                                                <a class="modal-effect text-white btn btn-info btn-sm px-5 my-2"
                                                    data-bs-effect="effect-flip-horizontal" data-bs-toggle="modal"
                                                    href="#modaldemostakeSOL"> STAKE</a>

                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-2 CLOSED -->
                        <!-- ROW -->
                        <div class="row row-sm">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">ALL Stakings</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered text-nowrap border-bottom w-100 "
                                                id="responsive-datatable">
                                                <thead>
                                                    <tr>
                                                        <th class="wd-15p border-bottom-0">#</th>
                                                        <th class="wd-15p border-bottom-0">Asset</th>
                                                        <th class="wd-20p border-bottom-0">Amount</th>
                                                        <th class="wd-15p border-bottom-0">Duration</th>
                                                        <th class="wd-15p border-bottom-0">Profit / Loss</th>
                                                        <th class="wd-15p border-bottom-0">status</th>
                                                        <th class="wd-10p border-bottom-0">Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($stakes as $counter => $stake)
                                                        <tr>
                                                            <td> {{ $counter + 1 }}</td>
                                                            <td>{{ date('Y/m/d h:i a', strtotime($stake->stock_stakes_id)) }}
                                                            </td>
                                                            <td>{{ $stake->stock_stakes_asset }}</td>
                                                            <td>${{ number_format($stake->stock_stakes_amount, 2) }}
                                                            </td>
                                                            <td>{{ $stake->stock_stakes_duration }}</td>
                                                            @if ($stake->stock_stakes_status == 3)
                                                                <td class="text-success fs-15 fw-semibold">
                                                                    + ${{ $stake->stock_stakes_profit_loss_amount }}
                                                                </td>
                                                            @elseif ($stake->stock_stakes_status == 2)
                                                                <td class="text-danger fs-15 fw-semibold">
                                                                    - ${{ $stake->stock_stakes_profit_loss_amount }}
                                                                </td>
                                                            @else
                                                                <td class="text-info fs-15 fw-semibold">
                                                                    --/--
                                                                </td>
                                                            @endif

                                                            @if ($stake->stock_stakes_status == 3)
                                                                <td class="text-success fs-15 fw-semibold">
                                                                    {{ config('app.stock_stakes_status')[$stake->stock_stakes_status] }}
                                                                </td>
                                                            @elseif ($stake->stock_stakes_status == 2)
                                                                <td class="text-danger fs-15 fw-semibold">
                                                                    {{ config('app.stock_stakes_status')[$stake->stock_stakes_status] }}
                                                                </td>
                                                            @else
                                                                <td class="text-info fs-15 fw-semibold">
                                                                    {{ config('app.stock_stakes_status')[$stake->stock_stakes_status] }}
                                                                </td>
                                                            @endif
                                                        </tr>
                                                    @empty
                                                    @endforelse
                                                    <tr> </tr>
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

        <livewire:user.stake />

        <!-- FOOTER -->
        @include('includes.user-footer')
        <!-- FOOTER END -->
        <!-- APP-NAv -->
        @include('includes.user-nav-down')
        <!-- /APP-NAv -->

    </div>
    <!-- CONTAINER END -->

    @include('includes.user-scripts')

    {{-- <script>
        $(document).on("click", "#BTC", function() {
            $('#asset').val('Bitcoin BTC');
        })
        $(document).on("click", "#USDT", function() {
            $('#asset').val('Tether USDT');
        })
        $(document).on("click", "#AVAX", function() {
            $('#asset').val('Avalanche AVAX');
        })
        $(document).on("click", "#MATIC", function() {
            $('#asset').val('Polygon MATIC');
        })
        $(document).on("click", "#SOL", function() {
            $('#asset').val('Solana SOL');
        })
        $(document).on("click", "#ETH", function() {
            $('#asset').val('Ethereum ETH');
        })

    </script> --}}

</body>

</html>
