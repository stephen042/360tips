<!doctype html>
<html lang="en" dir="ltr">

<head>

    @include('includes.user-head')

</head>

<body class="app sidebar-mini ltr light-mode">

    <!-- GLOBAL-LOADER -->
    {{-- @include('includes.loader') --}}
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
                                <h1 class="page-title">Welcome | {{ auth()->user()->first_name }}</h1>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ol>
                            </div>
                            <div class="ms-auto pageheader-btn">
                                <a href="{{ route('user_deposit') }}"
                                    class="btn btn-primary btn-xm btn-icon text-white">
                                    <span>
                                        <i class="fa fa-plus"></i>
                                    </span> Add Fund
                                </a>

                                @if (auth()->user()->verify_status == 0)
                                    <div class="alert alert-danger btn m-2">
                                        UNVERIFIED
                                    </div>
                                @else
                                    <div class="alert alert-success btn m-2">
                                        VERIFIED
                                    </div>
                                @endif

                                @if (auth()->user()->account_status == 'None')
                                    <div class="alert alert-danger btn">
                                        Status: {{ auth()->user()->account_status }}
                                    </div>
                                @else
                                    <div class="alert alert-success btn">
                                        Status: {{ auth()->user()->account_status }}
                                    </div>
                                @endif

                            </div>
                        </div>
                        <livewire:user.account-summary />
                        <!-- PAGE-HEADER END -->
                        <div class="row row-cards">
                            <div class="col-lg-12 col-sm-12" style="overflow-x:scroll;">
                                <!-- TradingView Widget BEGIN -->
                                <div class="tradingview-widget-container" style="height:100%" ;width:100%>
                                    <div id="analytics-platform-chart-demo"
                                        style="height:calc(100% - 32px);width:100%;"></div>
                                    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/"
                                            rel="noopener nofollow" target="_blank"><span class="blue-text"></span></a>
                                    </div>
                                    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                                    <script type="text/javascript">
                                        new TradingView.widget({
                                            "container_id": "analytics-platform-chart-demo",
                                            "width": "100%",
                                            "height": "600",
                                            "autosize": false,
                                            "symbol": "FX:EURUSD",
                                            "interval": "D",
                                            "timezone": "exchange",
                                            "theme": "dark",
                                            "style": "0",
                                            "withdateranges": true,
                                            "allow_symbol_change": true,
                                            "save_image": false,
                                            "details": true,
                                            "hotlist": true,
                                            "calendar": true,
                                            "locale": "en"
                                        });
                                    </script>
                                </div>
                                <!-- TradingView Widget END -->
                            </div>
                        </div>
                        <hr>
                        <!-- <br> -->
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
                                                    <li>
                                                        <a style="color: #ADADAD;font-weight: bold;font-family:'Roboto', sans-serif;"
                                                            href="#tab7" class="btn m-1 p-2 px-2"
                                                            data-bs-toggle="tab">Convert
                                                        </a>
                                                    </li>
                                                    <!-- <li><a href="#tab8" data-bs-toggle="tab">Tab 4</a></li> -->
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
                                                <div class="tab-pane " id="tab7">
                                                    <!-- Crypto Converter ⚡ Widget -->
                                                    <crypto-converter-widget shadow symbol live
                                                        background-color="#383a59" border-radius="0.87rem"
                                                        fiat="united-states-dollar" crypto="bitcoin" amount="1"
                                                        font-family="sans-serif"
                                                        decimal-places="2"></crypto-converter-widget>
                                                    <a href="#" target="_blank" rel="noopener">
                                                    </a>
                                                    <script async src="https://cdn.jsdelivr.net/gh/dejurin/crypto-converter-widget@1.5.2/dist/latest.min.js"></script>
                                                    <!-- /Crypto Converter ⚡ Widget -->
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
