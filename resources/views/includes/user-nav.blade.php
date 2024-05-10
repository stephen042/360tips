<div class="app-header header sticky">
    <div class="container-fluid main-container">
        <div class="d-flex align-items-center">
            <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar"
                href="javascript:void(0);"></a>
            <div class="responsive-logo">
                <a href="{{ route('user_dashboard') }}" class="header-logo">
                    {{-- <img src="{{ asset('home-assets/assets/img/logo-funding-traders.svg') }}" class="mobile-logo logo-1" alt="logo"> --}}
                    <span class="mobile-logo logo-1 h1">360𝖝𝖙𝖎𝖕𝖘</span>
                    <span class="mobile-logo dark-logo-1 h1">360𝖝𝖙𝖎𝖕𝖘</span>
                    {{-- <img src="{{ asset('home-assets/assets/img/logo-funding-traders.svg') }}" class="mobile-logo dark-logo-1" alt="logo"> --}}
                </a>
            </div>
            <!-- sidebar-toggle-->
            <a class="logo-horizontal " href="{{ route('user_dashboard') }}">
                <img src="{{ asset('home-assets/assets/fav/favicon-apple-touch.png') }}" class="header-brand-img desktop-logo"
                    alt="logo">
                <img src="{{ asset('home-assets/assets/fav/favicon-apple-touch.png') }}" class="header-brand-img light-logo1"
                    alt="logo">
            </a>
            <!-- LOGO -->
            <div class="d-flex order-lg-2 ms-auto header-right-icons">
                
                <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                    aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fe fe-more-vertical text-dark"></span>
                </button>
                <livewire:user.user-nav />
            </div>
        </div>
    </div>
</div>
<!-- <div class="app-header header sticky"> -->
<div class="container-fluid main-container">
    <div class="d-flex align-items-center">
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <div class="tradingview-widget-copyright"></div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                {
                    "symbols": [{
                            "proName": "FOREXCOM:SPXUSD",
                            "title": "S&P 500"
                        },
                        {
                            "proName": "FOREXCOM:NSXUSD",
                            "title": "US 100"
                        },
                        {
                            "proName": "FX_IDC:EURUSD",
                            "title": "EUR/USD"
                        },
                        {
                            "proName": "BITSTAMP:BTCUSD",
                            "title": "Bitcoin"
                        },
                        {
                            "proName": "BITSTAMP:ETHUSD",
                            "title": "Ethereum"
                        }
                    ],
                    "showSymbolLogo": true,
                    "colorTheme": "dark",
                    "isTransparent": false,
                    "displayMode": "adaptive",
                    "locale": "en"
                }
            </script>
        </div>
        <!-- TradingView Widget END -->
    </div>
</div>
<!-- </div> -->
