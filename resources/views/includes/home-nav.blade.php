
<div class="z-index700">
    <div class="padding-global is-large">
        <div class="container-xlarge">
            <div class="spacer-top"></div>
            <div class="spacer-top-mob"></div>
            <div class="nav-component">
                <div class="_25">
                    <a href="{{ route('home')}}" aria-current="page" class="logo_wrap w-nav-brand w--current">
                        <img src="{{ asset('home-assets/assets/img/logo-funding-traders.svg') }}"
                            alt="{{ env('APP_NAME') }}  Logo" class="logo-desctop">
                        <img src="{{ asset('home-assets/assets/img/logo-funding-traders-mobile.svg') }}"
                            alt="Logo Mobile" class="logo-mobile">
                    </a>
                </div>
                <div class="nav-menu_wrap">
                    <nav role="navigation" class="nav-menu w-nav-menu">
                        <div class="nav-m">
                            <div class="middle-part">
                                <a title="Learn more about Prop Funding" href="{{ route('funding')}}"
                                    class="link-with-line w-inline-block">
                                    <div class="link-text is-header">Funding</div>
                                    <div class="horizontal-link-line"></div>
                                </a>
                                <a href="{{ route('faq')}}" title="FAQ"
                                    class="link-with-line w-inline-block">
                                    <div class="link-text is-header">FAQ</div>
                                    <div class="horizontal-link-line"></div>
                                </a>
                                <a href="{{ route('contact')}}" title="Contact us and get support"
                                    class="link-with-line w-inline-block">
                                    <div class="link-text is-header">Contact</div>
                                    <div class="horizontal-link-line"></div>
                                </a>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="nuv-btn_wrap">
                    <a href="{{ route('register')}}" class="button is-header w-button">Get
                        Started</a>
                    <div class="menu-button w-nav-button">
                        <div class="burger-1">
                            <div class="b2-bar1"></div>
                            <div class="b2-middle-wrap">
                                <div class="b2-middle-bar-left"></div>
                                <div class="b2-middle-bar-right"></div>
                            </div>
                            <div class="b2-bar3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>