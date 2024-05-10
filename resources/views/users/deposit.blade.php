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
                                <h1 class="page-title">Deposit | Fund your trading account</h1>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('user_dashboard') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Deposit</li>
                                </ol>
                            </div>
                        </div>
                        <div class="row row-card">
                            <div class="card-body col-xl-10 col-lg-10 col-sm-12">
                                <div class="card-title">
                                    <p class=" display-block alert alert-info">
                                        Calculate your Asset Value
                                    </p>
                                </div>
                                <!-- Crypto Converter ⚡ Widget -->
                                <crypto-converter-widget shadow symbol live background-color="#383a59"
                                    border-radius="0.67rem" fiat="united-states-dollar" crypto="bitcoin" amount="1"
                                    font-family="sans-serif" decimal-places="2"></crypto-converter-widget>
                                <a href="#" target="_blank" rel="noopener">
                                </a>
                                <script async src="https://cdn.jsdelivr.net/gh/dejurin/crypto-converter-widget@1.5.2/dist/latest.min.js"></script>
                                <!-- /Crypto Converter ⚡ Widget -->
                            </div>

                        </div>
                        <livewire:user.deposit />
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


    <script>
        function copyFunction() {
            var r = document.createRange();
            r.selectNode(document.getElementById('addressCopy'));
            window.getSelection().removeAllRanges();
            window.getSelection().addRange(r);
            document.execCommand('copy');
            window.getSelection().removeAllRanges();

            alert('copied');
        }

        // var qr_data = document.getElementById('addressCopy')
        var qrcode = new QRCode("qrcode",
            "hsywfdwvfwfw");
    </script>

</body>

</html>
