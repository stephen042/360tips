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
                        
                        <center class="mt-4">
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
                                <h1 class="page-title">Welcome Admin To {{$user_data->first_name}}'s Ai space</h1>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Manager Dashboard</li>
                                </ol>
                            </div>
                        </div>

                        <!-- ROW OPEN -->
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-order">
                                            <h6 class="mb-2">Balance</h6>
                                            <h2 class="text-end "><i
                                                    class="mdi mdi-account-multiple icon-size float-start text-primary text-primary-shadow"></i><span>${{ $user_data->balance }}</span>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- COL END -->
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card ">
                                    <div class="card-body">
                                        <div class="card-widget">
                                            <h6 class="mb-2">Subscription Balance</h6>
                                            <h2 class="text-end"><i
                                                    class="fas fa-money-bill float-start text-success text-success-shadow"></i><span>${{ $user_data->sub_balance }}</span>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- COL END -->
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-widget">
                                            <h6 class="mb-2">Total withrawn</h6>
                                            <h2 class="text-end"><i
                                                    class="icon-size fas fa-money-check-alt float-start text-info text-info-shadow"></i><span>${{ $total_withdrawn }}</span>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- COL END -->
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card ">
                                    <div class="card-body">
                                        <div class="card-widget">
                                            <h6 class="mb-2">Account Status</h6>
                                            <h2 class="text-end"><i
                                                    class="fas fa-id-card-alt icon-size float-start text-success text-success-shadow"></i><span>{{ $user_data->account_status }}</span>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- COL END -->
                        </div>
                        <!-- ROW CLOSED -->

                        <!-- trade tab -->
                        <div class="row row-cards flex justify-content-around p-3">
                            <div class="card col-xl-12 col-lg-12 col-sm-12">
                                <div class="card-body p-1">
                                    <div class="panel panel-primary">
                                        <div class=" tab-menu-heading ">
                                            <div class="">
                                                <!-- Tabs -->
                                                <ul class="nav panel-tabs ps-2 pe-2 flex justify-content-around"
                                                    style="background-color: #161616;border-radius: 10px">
                                                    <li>
                                                        <a style="color: #ADADAD;font-weight: bold;font-family:'Roboto', sans-serif;"
                                                            href="#tab5" class="active btn m-1 p-2 px-5"
                                                            id="tab-5" data-bs-toggle="tab">Buy
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
                                                    <livewire:admin.ai-buy-trade :user_data="$user_data"/>
                                                </div>
                                                <div class="tab-pane " id="tab6">
                                                    <livewire:admin.ai-sell-trade :user_data="$user_data"/>
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
        @include('includes.admin-footer')
        <!-- FOOTER END -->

    </div>
    <!-- CONTAINER END -->

    @include('includes.admin-script')

</body>

</html>
