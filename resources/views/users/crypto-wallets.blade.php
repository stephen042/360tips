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
                                <h1 class="page-title">Crypto Wallets | View your balances in Crypto</h1>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('user_dashboard') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Crypto Wallets</li>
                                </ol>
                            </div>
                        </div>
                        <div class="container my-4">
                            <hr>
                            <div class="row gy-1 gx-3">
                                <!-- Solana -->
                                <div class="col-md-6 m-0">
                                    <div class="card shadow-sm m-1 m-0">
                                        <div class="card-body d-flex justify-content-between align-items-center py-1"
                                            style="min-height: 55px;">
                                            <div class="d-flex align-items-center gap-2">
                                                <img src="{{ asset('assets/images/crypto/solana.jpg') }}" alt="Solana"
                                                    class="rounded-circle" width="36" height="36">
                                                <div>
                                                    <div class="fw-semibold text-dark mb-0">Solana</div>
                                                    <small class="text-muted"><b>SOL</b></small>
                                                </div>
                                            </div>
                                            <div class="text-end">
                                                <div class="fw-bold text-dark mb-0">${{ number_format((float)
                                                    ($crypto_accounts->solana_balance ?? 0), 2) }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Ethereum -->
                                <div class="col-md-6 m-0">
                                    <div class="card shadow-sm m-1">
                                        <div class="card-body d-flex justify-content-between align-items-center py-1"
                                            style="min-height: 55px;">
                                            <div class="d-flex align-items-center gap-2">
                                                <img src="{{ asset('assets/images/crypto/ethereum.png') }}"
                                                    alt="Ethereum" class="rounded-circle" width="36" height="36">
                                                <div>
                                                    <div class="fw-semibold text-dark mb-0">Ethereum</div>
                                                    <small class="text-muted"><b>ETH</b></small>
                                                </div>
                                            </div>
                                            <div class="text-end">
                                                <div class="fw-bold text-dark mb-0">${{ number_format((float)
                                                    ($crypto_accounts->ethereum_balance ?? 0), 2) }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- USDT -->
                                <div class="col-md-6 m-0">
                                    <div class="card shadow-sm m-1">
                                        <div class="card-body d-flex justify-content-between align-items-center py-1"
                                            style="min-height: 55px;">
                                            <div class="d-flex align-items-center gap-2">
                                                <img src="{{ asset('assets/images/crypto/tether-usdt.jpg') }}"
                                                    alt="USDT" class="rounded-circle" width="36" height="36">
                                                <div>
                                                    <div class="fw-semibold text-dark mb-0">USDT Tether</div>
                                                    <small class="text-muted"><b>USDT</b></small>
                                                </div>
                                            </div>
                                            <div class="text-end">
                                                <div class="fw-bold text-dark mb-0">${{ number_format((float)
                                                    ($crypto_accounts->usdt_balance ?? 0), 2) }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Bitcoin -->
                                <div class="col-md-6 m-0">
                                    <div class="card shadow-sm m-1">
                                        <div class="card-body d-flex justify-content-between align-items-center py-1"
                                            style="min-height: 55px;">
                                            <div class="d-flex align-items-center gap-2">
                                                <img src="{{ asset('assets/images/crypto/bitcoin.jpg') }}" alt="Bitcoin"
                                                    class="rounded-circle" width="36" height="36">
                                                <div>
                                                    <div class="fw-semibold text-dark mb-0">Bitcoin</div>
                                                    <small class="text-muted"><b>BTC</b></small>
                                                </div>
                                            </div>
                                            <div class="text-end">
                                                <div class="fw-bold text-dark mb-0">${{ number_format((float)
                                                    ($crypto_accounts->bitcoin_balance ?? 0), 2) }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Polygon -->
                                <div class="col-md-6 m-0">
                                    <div class="card shadow-sm m-1">
                                        <div class="card-body d-flex justify-content-between align-items-center py-1"
                                            style="min-height: 55px;">
                                            <div class="d-flex align-items-center gap-2">
                                                <img src="{{ asset('assets/images/crypto/polygon.png') }}" alt="Polygon"
                                                    class="rounded-circle" width="36" height="36">
                                                <div>
                                                    <div class="fw-semibold text-dark mb-0">Polygon</div>
                                                    <small class="text-muted"><b>POL</b></small>
                                                </div>
                                            </div>
                                            <div class="text-end">
                                                <div class="fw-bold text-dark mb-0">${{ number_format((float)
                                                    ($crypto_accounts->polygon_balance ?? 0), 2) }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Ripple / XRP -->
                                <div class="col-md-6 m-0">
                                    <div class="card shadow-sm m-1">
                                        <div class="card-body d-flex justify-content-between align-items-center py-1"
                                            style="min-height: 55px;">
                                            <div class="d-flex align-items-center gap-2">
                                                <img src="{{ asset('assets/images/crypto/xrp-logo.png') }}" alt="XRP"
                                                    class="rounded-circle" width="36" height="36">
                                                <div>
                                                    <div class="fw-semibold text-dark mb-0">Ripple</div>
                                                    <small class="text-muted"><b>XRP</b></small>
                                                </div>
                                            </div>
                                            <div class="text-end">
                                                <div class="fw-bold text-dark mb-0">${{ number_format((float)
                                                    ($crypto_accounts->ripple_balance ?? 0), 2) }}</div>
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