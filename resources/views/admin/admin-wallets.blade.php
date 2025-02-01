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

                        <!-- ROW -->
                        <div class="row row-sm mt-5">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Deposit Wallets</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered text-nowrap border-bottom w-100 "
                                                id="responsive-datatable">
                                                <thead>
                                                    <tr>
                                                        <th class="wd-15p border-bottom-0">#</th>
                                                        <th class="wd-15p border-bottom-0">Bitcoin BTC</th>
                                                        <th class="wd-15p border-bottom-0">Ethereum Eth</th>
                                                        <th class="wd-15p border-bottom-0">USDT Trc20</th>
                                                        <th class="wd-15p border-bottom-0">Cash App</th>
                                                        <th class="wd-15p border-bottom-0">PayPal</th>
                                                        <th class="wd-15p border-bottom-0">Zelle</th>
                                                        <th class="wd-15p border-bottom-0">BNB Smart Chain (BEP20)</th>
                                                        <th class="wd-15p border-bottom-0">Bitcoin chash BCH</th>
                                                        <th class="wd-15p border-bottom-0">Litecoin LTC</th>
                                                        <th class="wd-15p border-bottom-0">Ripple XRP</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>{{ $admin_wallets->id }}</td>
                                                        <td>{{ $admin_wallets->btc }}</td>
                                                        <td>{{ $admin_wallets->eth }}</td>
                                                        <td>{{ $admin_wallets->usdt }}</td>
                                                        <td>{{ $admin_wallets->cash_app }}</td>
                                                        <td>{{ $admin_wallets->paypal }}</td>
                                                        <td>{{ $admin_wallets->zelle }}</td>
                                                        <td>{{ $admin_wallets->bnb }}</td>
                                                        <td>{{ $admin_wallets->bch }}</td>
                                                        <td>{{ $admin_wallets->ltc }}</td>
                                                        <td>{{ $admin_wallets->xrp }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END ROW -->

                        <div class="col-xl-12 col-md-12 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Manage Your Deposit Wallets</h3>
                                </div>
                                <form action="{{ route('admin_wallets_post') }}" method="POST">
                                    @csrf
                                    <div class="card-body">
                                        @foreach(['btc' => 'Bitcoin BTC','eth' => 'Ethereum', 'usdt' => 'USDT Trc20', 'cash_app' => 'Cash
                                        App', 'paypal' => 'PayPal', 'zelle' => 'Zelle', 'bnb' => 'BNB Smart Chain
                                        (BEP20)', 'bch' => 'Bitcoin Cash BCH', 'ltc' => 'Litecoin LTC', 'xrp' => 'Ripple
                                        XRP'] as $field => $label)
                                        <div class="form-group">
                                            <label for="{{ $field }}">{{ $label }}</label>
                                            <input type="text" class="form-control" name="{{ $field }}"
                                                value="{{ $admin_wallets->$field }}"
                                                placeholder="put your new address or tag and press update wallets">
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="card-footer text-end">
                                        <button class="btn btn-success please-wait-btn" type="submit">
                                            Update Wallets
                                        </button>
                                        <button type="reset" class="btn btn-danger">Undo</button>
                                    </div>
                                </form>
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