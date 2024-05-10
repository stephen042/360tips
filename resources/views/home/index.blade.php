<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" data-wf-page="647ae04ed1e08695681f7e9c"
    data-wf-site="647ae04ed1e08695681f7e4e">

{{-- heead tag start --}}
@include('includes.home-head')
{{-- heead tag end --}}

<body>
    <div class="page-wrapper">
        <div data-animation="default" class="navbar w-nav" data-easing2="ease" data-easing="ease" data-collapse="small"
            data-w-id="54f4eddd-9c06-6454-1245-b303e07fb54b" role="banner" data-duration="400" id="Navbar">
            @include('includes.home-nav')
            <div class="bg-nav"></div>
        </div>
        <main data-w-id="3f1e8c66-dc14-e31c-04fc-9dd7679fff7a" class="main-wrapper">
            <div class="a-header-section">
                <div class="a-container-regular">
                    <div id="w-node-fab80dea-51a8-a168-d12e-462c3706cdf7-681f7e9c" class="a-header-block">
                        <div class="a-header-content-2">
                            <div class="a-margin-bottom-49">
                                <div class="a-detail-small a-text-color-primary">{{ env('APP_NAME') }} </div>
                            </div>
                            <div class="a-margin-bottom-48">
                                <h1 class="a-h1-heading">Trade bigger and <br>get paid <span
                                        class="a-span-underline">faster.</span></h1>
                            </div>
                            <div class="one-box-line header"><img
                                    src="{{ asset('home-assets/assets/img/icon-blue-checkmark.svg') }}"
                                    loading="lazy" alt="Blue Checkmark Icon" class="one-small_icon">
                                <div class="text-block-19">No Time Limits</div>
                            </div>
                            <div class="one-box-line header"><img
                                    src="{{ asset('home-assets/assets/img/icon-blue-checkmark.svg') }}"
                                    loading="lazy" alt="Blue Checkmark Icon" class="one-small_icon">
                                <div class="text-block-19">100% Profit Split</div>
                            </div>
                            <div class="one-box-line header"><img
                                    src="{{ asset('home-assets/assets/img/icon-blue-checkmark.svg') }}"
                                    loading="lazy" alt="Blue Checkmark Icon" class="one-small_icon">
                                <div class="text-block-19">7 Day Payouts</div>
                            </div>
                            <div class="a-header-button-wrapper"><a href="{{ route('register')}}" target="_blank"
                                    class="a-button-primary-2 w-button">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="a-header-image-block">
                    <div class="w-layout-grid a-header-image-grid"><img
                            src="{{ asset('home-assets/assets/img/image-mockup-iphone-blue.png') }}" loading="lazy"
                            sizes="(max-width: 991px) 90vw, 38vw" alt=""
                            id="w-node-fab80dea-51a8-a168-d12e-462c3706ce1b-681f7e9c" class="a-header-grid-image">
                    </div>
                </div>
            </div>
            <div class="spacer-medium"></div>
            <section class="how-works_section">
                <div class="padding-global">
                    <section class="trading-features_section">
                        <div class="padding-global">
                            <div class="spacer-xlarge"></div>
                            <div class="container-large tradingtable">
                                <div class="h2-wrap">
                                    <h2>Our Evaluations</h2>
                                </div>
                                <div class="new_table">
                                    <div data-current="Tab 1" data-easing="ease" data-duration-in="300"
                                        data-duration-out="100" class="outer_table w-tabs">
                                        <div class="outer_table_menu_wraper w-tab-menu">
                                            <a data-w-tab="Tab 1"
                                                class="tab-link-tab-2 w-inline-block w-tab-link w--current">
                                                <div>2-Step</div>
                                            </a>
                                            <a data-w-tab="Tab 2" class="tab-link-tab-2 w-inline-block w-tab-link">
                                                <div>1-Step</div>
                                            </a>
                                        </div>
                                        <div class="outer_table_content w-tab-content">
                                            <div data-w-tab="Tab 1" class="w-tab-pane w--tab-active">
                                                <div data-current="Tab 5" data-easing="ease" data-duration-in="300"
                                                    data-duration-out="100" class="w-tabs">
                                                    <div class="tabs-menu-4 w-tab-menu">
                                                        <a data-w-tab="Tab 2"
                                                            class="tab-link-tab-2-2 w-inline-block w-tab-link">
                                                            <div class="text-block-32 table">$10k</div>
                                                        </a>
                                                        <a data-w-tab="Tab 3"
                                                            class="tab-link-tab-2-2 w-inline-block w-tab-link">
                                                            <div class="text-block-32 table">$25k</div>
                                                        </a>
                                                        <a data-w-tab="Tab 4"
                                                            class="tab-link-tab-2-2 w-inline-block w-tab-link">
                                                            <div class="text-block-32 table">$50k</div>
                                                        </a>
                                                        <a data-w-tab="Tab 5"
                                                            class="tab-link-tab-2-2 w-inline-block w-tab-link w--current">
                                                            <div class="text-block-32 table">$100k</div>
                                                        </a>
                                                        <a data-w-tab="Tab 6"
                                                            id="w-node-e3bac403-3b81-54a4-e903-ddb0af1033e2-681f7e9c"
                                                            class="tab-link-tab-2-2 w-inline-block w-tab-link">
                                                            <div class="text-block-32 table">$200k</div>
                                                        </a>
                                                    </div>
                                                    <div class="tabs-content-2 w-tab-content">
                                                        <div data-w-tab="Tab 2" class="w-tab-pane">
                                                            <div class="columns w-row">
                                                                <div class="w-col w-col-4 w-col-stack">
                                                                    <div class="div-block-13">
                                                                        <div class="div-block-12">
                                                                            <div class="text-block-27">Profit Target
                                                                                <span class="text-span-8">(10% /
                                                                                    5%)</span>
                                                                            </div>
                                                                            <div class="text-block-29">$1,000/$500
                                                                            </div>
                                                                        </div>
                                                                        <div class="div-block-12">
                                                                            <div class="text-block-27">Daily Drawdown
                                                                                <span class="text-span-8">(5%)</span>
                                                                            </div>
                                                                            <div class="text-block-29">$500</div>
                                                                        </div>
                                                                        <div class="div-block-12">
                                                                            <div class="text-block-27">Max Drawdown
                                                                                <span class="text-span-8">(10%)</span>
                                                                            </div>
                                                                            <div class="text-block-29">$1,000 <span
                                                                                    class="text-span-9">(static)</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item_wrapper"><a href="{{ route('register') }}"
                                                                                target="_blank"
                                                                                class="button is-fill small w-button">Get
                                                                                Started</a><a href="{{ route('register')}}"
                                                                                target="_blank"
                                                                                class="button small w-button">Fee
                                                                                $100</a></div>
                                                                    </div>
                                                                </div>
                                                                <div class="w-col w-col-8 w-col-stack">
                                                                    <h4>What’s included?</h4>
                                                                    <div class="w-layout-grid list_wrapper">
                                                                        <div id="w-node-_2b3285a3-6921-d05e-0746-436a0ffc858f-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">Up-to 100% profit split*
                                                                            </p>
                                                                        </div>
                                                                        <div id="w-node-_2b3285a3-6921-d05e-0746-436a0ffc8593-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">14-Day or 7-Day Payouts
                                                                            </p>
                                                                        </div>
                                                                        <div id="w-node-_2b3285a3-6921-d05e-0746-436a0ffc8597-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">Unlimited Trading Days
                                                                            </p>
                                                                        </div>
                                                                        <div id="w-node-_2b3285a3-6921-d05e-0746-436a0ffc859b-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">News trading allowed</p>
                                                                        </div>
                                                                        <div id="w-node-_2b3285a3-6921-d05e-0746-436a0ffc859f-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">Zero commissions*</p>
                                                                        </div>
                                                                        <div id="w-node-_2b3285a3-6921-d05e-0746-436a0ffc85a3-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">Max 2% loss per trade
                                                                                idea</p>
                                                                        </div>
                                                                        <div id="w-node-_2b3285a3-6921-d05e-0746-436a0ffc85a7-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">Minimum trading days: 0
                                                                            </p>
                                                                        </div>
                                                                        <div id="w-node-_2b3285a3-6921-d05e-0746-436a0ffc85ab-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">Weekend/overnight holding
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="div-block-14"><a
                                                                            href="{{ route('contact')}}"
                                                                            target="_blank"
                                                                            class="button w-button">Help Center</a>
                                                                        <div>
                                                                            <div class="text-block-31">*Default profit
                                                                                split is 80%; with the addon, it&#x27;s
                                                                                either 90% or 100%</div>
                                                                            <div class="text-block-31">*Zero
                                                                                commissions only apply to challenge
                                                                                accounts</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div data-w-tab="Tab 3" class="w-tab-pane">
                                                            <div class="columns w-row">
                                                                <div class="w-col w-col-4 w-col-stack">
                                                                    <div class="div-block-13">
                                                                        <div class="div-block-12">
                                                                            <div class="text-block-27">Profit Target
                                                                                <span class="text-span-8">(10% /
                                                                                    5%)</span>
                                                                            </div>
                                                                            <div class="text-block-29">$2,500/$1,250
                                                                            </div>
                                                                        </div>
                                                                        <div class="div-block-12">
                                                                            <div class="text-block-27">Daily Drawdown
                                                                                <span class="text-span-8">(5%)</span>
                                                                            </div>
                                                                            <div class="text-block-29">$1,250</div>
                                                                        </div>
                                                                        <div class="div-block-12">
                                                                            <div class="text-block-27">Max Drawdown
                                                                                <span class="text-span-8">(10%)</span>
                                                                            </div>
                                                                            <div class="text-block-29">$2,500 <span
                                                                                    class="text-span-9">(static)</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item_wrapper"><a
                                                                                href="{{ route('register')}}"
                                                                                target="_blank"
                                                                                class="button is-fill small w-button">Get
                                                                                Started</a><a
                                                                                href="{{ route('register')}}"
                                                                                target="_blank"
                                                                                class="button small w-button">Fee
                                                                                $200</a></div>
                                                                    </div>
                                                                </div>
                                                                <div class="w-col w-col-8 w-col-stack">
                                                                    <h4>What’s included?</h4>
                                                                    <div class="w-layout-grid list_wrapper">
                                                                        <div id="w-node-_9f946f70-b6a9-c077-b8a4-edbe5dea52a3-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">Up-to 100% profit split*
                                                                            </p>
                                                                        </div>
                                                                        <div id="w-node-_9f946f70-b6a9-c077-b8a4-edbe5dea52a7-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">14-Day or 7-Day Payouts
                                                                            </p>
                                                                        </div>
                                                                        <div id="w-node-_9f946f70-b6a9-c077-b8a4-edbe5dea52ab-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">Unlimited Trading Days
                                                                            </p>
                                                                        </div>
                                                                        <div id="w-node-_9f946f70-b6a9-c077-b8a4-edbe5dea52af-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">News trading allowed</p>
                                                                        </div>
                                                                        <div id="w-node-_9f946f70-b6a9-c077-b8a4-edbe5dea52b3-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">Zero commissions*</p>
                                                                        </div>
                                                                        <div id="w-node-_9f946f70-b6a9-c077-b8a4-edbe5dea52b7-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">Max 2% loss per trade
                                                                                idea</p>
                                                                        </div>
                                                                        <div id="w-node-_9f946f70-b6a9-c077-b8a4-edbe5dea52bb-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">Minimum trading days: 0
                                                                            </p>
                                                                        </div>
                                                                        <div id="w-node-_9f946f70-b6a9-c077-b8a4-edbe5dea52bf-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">Weekend/Overnight holding
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="div-block-14"><a
                                                                            href="{{ route('contact')}}"
                                                                            target="_blank"
                                                                            class="button w-button">Help Center</a>
                                                                        <div>
                                                                            <div class="text-block-31">*Default profit
                                                                                split is 80%; with the addon, it&#x27;s
                                                                                either 90% or 100%</div>
                                                                            <div class="text-block-31">*Zero
                                                                                commissions only apply to challenge
                                                                                accounts</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div data-w-tab="Tab 4" class="w-tab-pane">
                                                            <div class="columns w-row">
                                                                <div class="w-col w-col-4 w-col-stack">
                                                                    <div class="div-block-13">
                                                                        <div class="div-block-12">
                                                                            <div class="text-block-27">Profit Target
                                                                                <span class="text-span-8">(10% /
                                                                                    5%)</span>
                                                                            </div>
                                                                            <div class="text-block-29">$5,000/$2,500
                                                                            </div>
                                                                        </div>
                                                                        <div class="div-block-12">
                                                                            <div class="text-block-27">Daily Drawdown
                                                                                <span class="text-span-8">(5%)</span>
                                                                            </div>
                                                                            <div class="text-block-29">$2,500</div>
                                                                        </div>
                                                                        <div class="div-block-12">
                                                                            <div class="text-block-27">Max Drawdown
                                                                                <span class="text-span-8">(10%)</span>
                                                                            </div>
                                                                            <div class="text-block-29">$5,000 <span
                                                                                    class="text-span-9">(static)</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item_wrapper"><a
                                                                                href="{{ route('register')}}"
                                                                                target="_blank"
                                                                                class="button is-fill small w-button">Get
                                                                                Started</a><a
                                                                                href="{{ route('register')}}"
                                                                                target="_blank"
                                                                                class="button small w-button">Fee
                                                                                $300</a></div>
                                                                    </div>
                                                                </div>
                                                                <div class="w-col w-col-8 w-col-stack">
                                                                    <h4>What’s included?</h4>
                                                                    <div class="w-layout-grid list_wrapper">
                                                                        <div id="w-node-_9dec606e-6bba-acb3-7cdf-d70874ba2bd3-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">Up-to 100% profit split*
                                                                            </p>
                                                                        </div>
                                                                        <div id="w-node-_9dec606e-6bba-acb3-7cdf-d70874ba2bd7-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">14-Day or 7-Day Payouts
                                                                            </p>
                                                                        </div>
                                                                        <div id="w-node-_9dec606e-6bba-acb3-7cdf-d70874ba2bdb-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">Unlimited Trading Days
                                                                            </p>
                                                                        </div>
                                                                        <div id="w-node-_9dec606e-6bba-acb3-7cdf-d70874ba2bdf-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">News trading allowed</p>
                                                                        </div>
                                                                        <div id="w-node-_9dec606e-6bba-acb3-7cdf-d70874ba2be3-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">Zero commissions*</p>
                                                                        </div>
                                                                        <div id="w-node-_9dec606e-6bba-acb3-7cdf-d70874ba2be7-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">Max 2% loss per trade
                                                                                idea</p>
                                                                        </div>
                                                                        <div id="w-node-_9dec606e-6bba-acb3-7cdf-d70874ba2beb-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">Minimum trading days: 0
                                                                            </p>
                                                                        </div>
                                                                        <div id="w-node-_9dec606e-6bba-acb3-7cdf-d70874ba2bef-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">Weekend/Overnight holding
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="div-block-14"><a
                                                                            href="{{ route('contact')}}"
                                                                            target="_blank"
                                                                            class="button w-button">Help Center</a>
                                                                        <div>
                                                                            <div class="text-block-31">*Default profit
                                                                                split is 80%; with the addon, it&#x27;s
                                                                                either 90% or 100%</div>
                                                                            <div class="text-block-31">*Zero
                                                                                commissions only apply to challenge
                                                                                accounts</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div data-w-tab="Tab 5" class="w-tab-pane w--tab-active">
                                                            <div class="columns w-row">
                                                                <div class="column w-col w-col-4 w-col-stack">
                                                                    <div class="div-block-13">
                                                                        <div class="div-block-12">
                                                                            <div class="text-block-27">Profit Target
                                                                                <span class="text-span-8">(10% /
                                                                                    5%)</span>
                                                                            </div>
                                                                            <div class="text-block-29">$10,000/$5,000
                                                                            </div>
                                                                        </div>
                                                                        <div class="div-block-12">
                                                                            <div class="text-block-27">Daily Drawdown
                                                                                <span class="text-span-8">(5%)</span>
                                                                            </div>
                                                                            <div class="text-block-29">$5,000</div>
                                                                        </div>
                                                                        <div class="div-block-12">
                                                                            <div class="text-block-27">Max Drawdown
                                                                                <span class="text-span-8">(10%)</span>
                                                                            </div>
                                                                            <div class="text-block-29">$10,000 <span
                                                                                    class="text-span-9">(static)</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item_wrapper vertical"><a
                                                                                href="{{ route('register')}}"
                                                                                target="_blank"
                                                                                class="button is-fill width w-button">Get
                                                                                Started</a><a
                                                                                href="{{ route('register')}}"
                                                                                target="_blank"
                                                                                class="button width w-button">Fee
                                                                                $550</a></div>
                                                                    </div>
                                                                </div>
                                                                <div class="w-col w-col-8 w-col-stack">
                                                                    <h4>What’s included?</h4>
                                                                    <div class="w-layout-grid list_wrapper">
                                                                        <div id="w-node-a7097486-eefc-21dd-8425-883848401f4a-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">Up-to 100% profit split*
                                                                            </p>
                                                                        </div>
                                                                        <div id="w-node-a7097486-eefc-21dd-8425-883848401f4e-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">14-Day or 7-Day Payouts
                                                                            </p>
                                                                        </div>
                                                                        <div id="w-node-a7097486-eefc-21dd-8425-883848401f52-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">Unlimited Trading Days
                                                                            </p>
                                                                        </div>
                                                                        <div id="w-node-a7097486-eefc-21dd-8425-883848401f56-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">News trading allowed</p>
                                                                        </div>
                                                                        <div id="w-node-a7097486-eefc-21dd-8425-883848401f5a-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">Zero commissions*</p>
                                                                        </div>
                                                                        <div id="w-node-a7097486-eefc-21dd-8425-883848401f5e-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">Max 2% loss per trade
                                                                                idea</p>
                                                                        </div>
                                                                        <div id="w-node-a7097486-eefc-21dd-8425-883848401f62-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">Minimum trading days: 0
                                                                            </p>
                                                                        </div>
                                                                        <div id="w-node-a7097486-eefc-21dd-8425-883848401f66-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">Weekend/Overnight holding
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="div-block-14"><a
                                                                            href="{{ route('contact')}}"
                                                                            target="_blank"
                                                                            class="button width w-button">Help
                                                                            Center</a>
                                                                        <div>
                                                                            <div class="text-block-31">*Default profit
                                                                                split is 80%; with the addon, it&#x27;s
                                                                                either 90% or 100%</div>
                                                                            <div class="text-block-31">*Zero
                                                                                commissions only apply to challenge
                                                                                accounts</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div data-w-tab="Tab 6" class="w-tab-pane">
                                                            <div class="columns w-row">
                                                                <div class="w-col w-col-4 w-col-stack">
                                                                    <div class="div-block-13">
                                                                        <div class="div-block-12">
                                                                            <div class="text-block-27">Profit Target
                                                                                <span class="text-span-8">(10% /
                                                                                    5%)</span>
                                                                            </div>
                                                                            <div class="text-block-29">$20,000/$10,000
                                                                            </div>
                                                                        </div>
                                                                        <div class="div-block-12">
                                                                            <div class="text-block-27">Daily Drawdown
                                                                                <span class="text-span-8">(5%)</span>
                                                                            </div>
                                                                            <div class="text-block-29">$10,000</div>
                                                                        </div>
                                                                        <div class="div-block-12">
                                                                            <div class="text-block-27">Max Drawdown
                                                                                <span class="text-span-8">(10%)</span>
                                                                            </div>
                                                                            <div class="text-block-29">$20,000 <span
                                                                                    class="text-span-9">(static)</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item_wrapper"><a
                                                                                href="{{ route('register')}}"
                                                                                target="_blank"
                                                                                class="button is-fill small w-button">Get
                                                                                Started</a><a
                                                                                href="{{ route('register')}}"
                                                                                target="_blank"
                                                                                class="button small w-button">Fee
                                                                                $1,000</a></div>
                                                                    </div>
                                                                </div>
                                                                <div class="w-col w-col-8 w-col-stack">
                                                                    <h4>What’s included?</h4>
                                                                    <div class="w-layout-grid list_wrapper">
                                                                        <div id="w-node-_48934ea7-e3df-b270-eb95-810b345e5230-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">Up-to 100% profit split*
                                                                            </p>
                                                                        </div>
                                                                        <div id="w-node-_48934ea7-e3df-b270-eb95-810b345e5234-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">14-Day or 7-Day Payouts
                                                                            </p>
                                                                        </div>
                                                                        <div id="w-node-_48934ea7-e3df-b270-eb95-810b345e5238-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">Unlimited Trading Days
                                                                            </p>
                                                                        </div>
                                                                        <div id="w-node-_48934ea7-e3df-b270-eb95-810b345e523c-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">News trading allowed</p>
                                                                        </div>
                                                                        <div id="w-node-_48934ea7-e3df-b270-eb95-810b345e5240-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">Zero commissions*</p>
                                                                        </div>
                                                                        <div id="w-node-_48934ea7-e3df-b270-eb95-810b345e5244-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">Max 2% loss per trade
                                                                                idea</p>
                                                                        </div>
                                                                        <div id="w-node-_48934ea7-e3df-b270-eb95-810b345e5248-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">Minimum trading days: 7
                                                                            </p>
                                                                        </div>
                                                                        <div id="w-node-_48934ea7-e3df-b270-eb95-810b345e524c-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">Weekend/Overnight holding
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="div-block-14"><a
                                                                            href="{{ route('contact')}}"
                                                                            target="_blank"
                                                                            class="button w-button">Help Center</a>
                                                                        <div>
                                                                            <div class="text-block-31">*Default profit
                                                                                split is 80%; with the addon, it&#x27;s
                                                                                either 90% or 100%</div>
                                                                            <div class="text-block-31">*Zero
                                                                                commissions only apply to challenge
                                                                                accounts</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-w-tab="Tab 2" class="w-tab-pane">
                                                <div data-current="Tab 5" data-easing="ease" data-duration-in="300"
                                                    data-duration-out="100" class="w-tabs">
                                                    <div class="tabs-menu-4 w-tab-menu">
                                                        <a data-w-tab="Tab 2"
                                                            class="tab-link-tab-2-2 w-inline-block w-tab-link">
                                                            <div class="text-block-32">$10k</div>
                                                        </a>
                                                        <a data-w-tab="Tab 3"
                                                            class="tab-link-tab-2-2 w-inline-block w-tab-link">
                                                            <div class="text-block-32">$25k</div>
                                                        </a>
                                                        <a data-w-tab="Tab 4"
                                                            class="tab-link-tab-2-2 w-inline-block w-tab-link">
                                                            <div class="text-block-32">$50k</div>
                                                        </a>
                                                        <a data-w-tab="Tab 5"
                                                            class="tab-link-tab-2-2 w-inline-block w-tab-link w--current">
                                                            <div class="text-block-32">$100k</div>
                                                        </a>
                                                        <a data-w-tab="Tab 6"
                                                            class="tab-link-tab-2-2 w-inline-block w-tab-link">
                                                            <div class="text-block-32">$200k</div>
                                                        </a>
                                                    </div>
                                                    <div class="tabs-content-2 w-tab-content">
                                                        <div data-w-tab="Tab 2" class="w-tab-pane">
                                                            <div class="columns w-row">
                                                                <div class="w-col w-col-4 w-col-stack">
                                                                    <div class="div-block-13">
                                                                        <div class="div-block-12">
                                                                            <div class="text-block-27">Profit Target
                                                                                <span class="text-span-8">(10%)</span>
                                                                            </div>
                                                                            <div class="text-block-29">$1,000</div>
                                                                        </div>
                                                                        <div class="div-block-12">
                                                                            <div class="text-block-27">Daily Drawdown
                                                                                <span class="text-span-8">(4%)</span>
                                                                            </div>
                                                                            <div class="text-block-29">$400</div>
                                                                        </div>
                                                                        <div class="div-block-12">
                                                                            <div class="text-block-27">Max Drawdown
                                                                                <span class="text-span-8">(5%)</span>
                                                                            </div>
                                                                            <div class="text-block-29">$500 <span
                                                                                    class="text-span-9">(trailing)</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item_wrapper"><a
                                                                                href="{{ route('register')}}"
                                                                                target="_blank"
                                                                                class="button is-fill small w-button">Get
                                                                                Started</a><a
                                                                                href="{{ route('register')}}"
                                                                                target="_blank"
                                                                                class="button small w-button">Fee
                                                                                $100</a></div>
                                                                    </div>
                                                                </div>
                                                                <div class="w-col w-col-8 w-col-stack">
                                                                    <h4>What’s included?</h4>
                                                                    <div class="w-layout-grid list_wrapper">
                                                                        <div id="w-node-_09c9d1ab-edfb-768c-591f-57ca38d984a9-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">Up-to 100% profit split*
                                                                            </p>
                                                                        </div>
                                                                        <div id="w-node-_09c9d1ab-edfb-768c-591f-57ca38d984ad-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">14-Day or 7-Day Payouts
                                                                            </p>
                                                                        </div>
                                                                        <div id="w-node-_09c9d1ab-edfb-768c-591f-57ca38d984b1-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">Unlimited Trading Days
                                                                            </p>
                                                                        </div>
                                                                        <div id="w-node-_09c9d1ab-edfb-768c-591f-57ca38d984b5-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">News trading allowed</p>
                                                                        </div>
                                                                        <div id="w-node-_09c9d1ab-edfb-768c-591f-57ca38d984b9-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">Zero commissions*</p>
                                                                        </div>
                                                                        <div id="w-node-_09c9d1ab-edfb-768c-591f-57ca38d984bd-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">Max 2% loss per trade
                                                                                idea</p>
                                                                        </div>
                                                                        <div id="w-node-_09c9d1ab-edfb-768c-591f-57ca38d984c1-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">Minimum trading days: 0
                                                                            </p>
                                                                        </div>
                                                                        <div id="w-node-_09c9d1ab-edfb-768c-591f-57ca38d984c5-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">Weekend/Overnight holding
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="div-block-14"><a
                                                                            href="{{ route('contact')}}"
                                                                            target="_blank"
                                                                            class="button w-button">Help Center</a>
                                                                        <div>
                                                                            <div class="text-block-31">*Default profit
                                                                                split is 80%; with the addon, it&#x27;s
                                                                                either 90% or 100%</div>
                                                                            <div class="text-block-31">*Zero
                                                                                commissions only apply to challenge
                                                                                accounts</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div data-w-tab="Tab 3" class="w-tab-pane">
                                                            <div class="columns w-row">
                                                                <div class="w-col w-col-4 w-col-stack">
                                                                    <div class="div-block-13">
                                                                        <div class="div-block-12">
                                                                            <div class="text-block-27">Profit Target
                                                                                <span class="text-span-8">(10%)</span>
                                                                            </div>
                                                                            <div class="text-block-29">$2,500</div>
                                                                        </div>
                                                                        <div class="div-block-12">
                                                                            <div class="text-block-27">Daily Drawdown
                                                                                <span class="text-span-8">(4%)</span>
                                                                            </div>
                                                                            <div class="text-block-29">$1,000</div>
                                                                        </div>
                                                                        <div class="div-block-12">
                                                                            <div class="text-block-27">Max Drawdown
                                                                                <span class="text-span-8">(5%)</span>
                                                                            </div>
                                                                            <div class="text-block-29">$1,250 <span
                                                                                    class="text-span-9">(trailing)</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item_wrapper"><a
                                                                                href="{{ route('register')}}"
                                                                                target="_blank"
                                                                                class="button is-fill small w-button">Get
                                                                                Started</a><a
                                                                                href="{{ route('register')}}"
                                                                                target="_blank"
                                                                                class="button small w-button">Fee
                                                                                $200</a></div>
                                                                    </div>
                                                                </div>
                                                                <div class="w-col w-col-8 w-col-stack">
                                                                    <h4>What’s included?</h4>
                                                                    <div class="w-layout-grid list_wrapper">
                                                                        <div id="w-node-_5f711595-dbee-a8d2-7717-284a863546a0-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">Up-to 100% profit split*
                                                                            </p>
                                                                        </div>
                                                                        <div id="w-node-_5f711595-dbee-a8d2-7717-284a863546a4-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">14-Day or 7-Day Payouts
                                                                            </p>
                                                                        </div>
                                                                        <div id="w-node-_5f711595-dbee-a8d2-7717-284a863546a8-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">Unlimited Trading Days
                                                                            </p>
                                                                        </div>
                                                                        <div id="w-node-_5f711595-dbee-a8d2-7717-284a863546ac-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">News trading allowed</p>
                                                                        </div>
                                                                        <div id="w-node-_5f711595-dbee-a8d2-7717-284a863546b0-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">Zero commissions*</p>
                                                                        </div>
                                                                        <div id="w-node-_5f711595-dbee-a8d2-7717-284a863546b4-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">Max 2% loss per trade
                                                                                idea</p>
                                                                        </div>
                                                                        <div id="w-node-_5f711595-dbee-a8d2-7717-284a863546b8-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">Minimum trading days: 0
                                                                            </p>
                                                                        </div>
                                                                        <div id="w-node-_5f711595-dbee-a8d2-7717-284a863546bc-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">Weekend/Overnight holding
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="div-block-14"><a
                                                                            href="{{ route('contact')}}"
                                                                            target="_blank"
                                                                            class="button w-button">Help Center</a>
                                                                        <div>
                                                                            <div class="text-block-31">*Default profit
                                                                                split is 80%; with the addon, it&#x27;s
                                                                                either 90% or 100%</div>
                                                                            <div class="text-block-31">*Zero
                                                                                commissions only apply to challenge
                                                                                accounts</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div data-w-tab="Tab 4" class="w-tab-pane">
                                                            <div class="columns w-row">
                                                                <div class="w-col w-col-4 w-col-stack">
                                                                    <div class="div-block-13">
                                                                        <div class="div-block-12">
                                                                            <div class="text-block-27">Profit Target
                                                                                <span class="text-span-8">(10%)</span>
                                                                            </div>
                                                                            <div class="text-block-29">$5,000</div>
                                                                        </div>
                                                                        <div class="div-block-12">
                                                                            <div class="text-block-27">Daily Drawdown
                                                                                <span class="text-span-8">(4%)</span>
                                                                            </div>
                                                                            <div class="text-block-29">$2,000</div>
                                                                        </div>
                                                                        <div class="div-block-12">
                                                                            <div class="text-block-27">Max Drawdown
                                                                                <span class="text-span-8">(5%)</span>
                                                                            </div>
                                                                            <div class="text-block-29">$2,500 <span
                                                                                    class="text-span-9">(trailing)</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item_wrapper"><a
                                                                                href="{{ route('register')}}"
                                                                                target="_blank"
                                                                                class="button is-fill small w-button">Get
                                                                                Started</a><a
                                                                                href="{{ route('register')}}"
                                                                                target="_blank"
                                                                                class="button small w-button">Fee
                                                                                $300</a></div>
                                                                    </div>
                                                                </div>
                                                                <div class="w-col w-col-8 w-col-stack">
                                                                    <h4>What’s included?</h4>
                                                                    <div class="w-layout-grid list_wrapper">
                                                                        <div id="w-node-_2c533984-9fe7-f3df-e017-683767d3f0c8-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">Up-to 100% profit split*
                                                                            </p>
                                                                        </div>
                                                                        <div id="w-node-_2c533984-9fe7-f3df-e017-683767d3f0cc-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">14-Day or 7-Day Payouts
                                                                            </p>
                                                                        </div>
                                                                        <div id="w-node-_2c533984-9fe7-f3df-e017-683767d3f0d0-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">Unlimited Trading Days
                                                                            </p>
                                                                        </div>
                                                                        <div id="w-node-_2c533984-9fe7-f3df-e017-683767d3f0d4-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">News trading allowed</p>
                                                                        </div>
                                                                        <div id="w-node-_2c533984-9fe7-f3df-e017-683767d3f0d8-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">Zero commissions*</p>
                                                                        </div>
                                                                        <div id="w-node-_2c533984-9fe7-f3df-e017-683767d3f0dc-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">Max 2% loss per trade
                                                                                idea</p>
                                                                        </div>
                                                                        <div id="w-node-_2c533984-9fe7-f3df-e017-683767d3f0e0-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">Minimum trading days: 0
                                                                            </p>
                                                                        </div>
                                                                        <div id="w-node-_2c533984-9fe7-f3df-e017-683767d3f0e4-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">Weekend/Overnight
                                                                                holding</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="div-block-14"><a
                                                                            href="{{ route('contact')}}"
                                                                            target="_blank"
                                                                            class="button w-button">Help Center</a>
                                                                        <div>
                                                                            <div class="text-block-31">*Default profit
                                                                                split is 80%; with the addon, it&#x27;s
                                                                                either 90% or 100%</div>
                                                                            <div class="text-block-31">*Zero
                                                                                commissions only apply to challenge
                                                                                accounts</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div data-w-tab="Tab 5" class="w-tab-pane w--tab-active">
                                                            <div class="columns w-row">
                                                                <div class="w-col w-col-4 w-col-stack">
                                                                    <div class="div-block-13">
                                                                        <div class="div-block-12">
                                                                            <div class="text-block-27">Profit Target
                                                                                <span class="text-span-8">(10%)</span>
                                                                            </div>
                                                                            <div class="text-block-29">$10,000</div>
                                                                        </div>
                                                                        <div class="div-block-12">
                                                                            <div class="text-block-27">Daily Drawdown
                                                                                <span class="text-span-8">(4%)</span>
                                                                            </div>
                                                                            <div class="text-block-29">$4,000</div>
                                                                        </div>
                                                                        <div class="div-block-12">
                                                                            <div class="text-block-27">Max Drawdown
                                                                                <span class="text-span-8">(5%)</span>
                                                                            </div>
                                                                            <div class="text-block-29">$5,000 <span
                                                                                    class="text-span-9">(trailing)</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item_wrapper"><a
                                                                                href="{{ route('register')}}"
                                                                                target="_blank"
                                                                                class="button is-fill small w-button">Get
                                                                                Started</a><a
                                                                                href="{{ route('register')}}"
                                                                                target="_blank"
                                                                                class="button small w-button">Fee
                                                                                $550</a></div>
                                                                    </div>
                                                                </div>
                                                                <div class="w-col w-col-8 w-col-stack">
                                                                    <h4>What’s included?</h4>
                                                                    <div class="w-layout-grid list_wrapper">
                                                                        <div id="w-node-f2062058-fab2-7942-273d-9c97358e7c2a-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">Up-to 100% profit split*
                                                                            </p>
                                                                        </div>
                                                                        <div id="w-node-f2062058-fab2-7942-273d-9c97358e7c2e-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">14-Day or 7-Day Payouts
                                                                            </p>
                                                                        </div>
                                                                        <div id="w-node-f2062058-fab2-7942-273d-9c97358e7c32-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">Unlimited Trading Days
                                                                            </p>
                                                                        </div>
                                                                        <div id="w-node-f2062058-fab2-7942-273d-9c97358e7c36-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">News trading allowed</p>
                                                                        </div>
                                                                        <div id="w-node-f2062058-fab2-7942-273d-9c97358e7c3a-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">Zero commissions*</p>
                                                                        </div>
                                                                        <div id="w-node-f2062058-fab2-7942-273d-9c97358e7c3e-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">Max 2% loss per trade
                                                                                idea</p>
                                                                        </div>
                                                                        <div id="w-node-f2062058-fab2-7942-273d-9c97358e7c42-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">Minimum trading days: 0
                                                                            </p>
                                                                        </div>
                                                                        <div id="w-node-f2062058-fab2-7942-273d-9c97358e7c46-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">Weekend/Overnight
                                                                                holding</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="div-block-14"><a
                                                                            href="{{ route('contact')}}"
                                                                            target="_blank"
                                                                            class="button w-button">Help Center</a>
                                                                        <div>
                                                                            <div class="text-block-31">*Default profit
                                                                                split is 80%; with the addon, it&#x27;s
                                                                                either 90% or 100%</div>
                                                                            <div class="text-block-31">*Zero
                                                                                commissions only apply to challenge
                                                                                accounts</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div data-w-tab="Tab 6" class="w-tab-pane">
                                                            <div class="columns w-row">
                                                                <div class="w-col w-col-4 w-col-stack">
                                                                    <div class="div-block-13">
                                                                        <div class="div-block-12">
                                                                            <div class="text-block-27">Profit Target
                                                                                <span class="text-span-8">(10%)</span>
                                                                            </div>
                                                                            <div class="text-block-29">$20,000</div>
                                                                        </div>
                                                                        <div class="div-block-12">
                                                                            <div class="text-block-27">Daily Drawdown
                                                                                <span class="text-span-8">(4%)</span>
                                                                            </div>
                                                                            <div class="text-block-29">$8,000</div>
                                                                        </div>
                                                                        <div class="div-block-12">
                                                                            <div class="text-block-27">Max Drawdown
                                                                                <span class="text-span-8">(5%)</span>
                                                                            </div>
                                                                            <div class="text-block-29">$10,000 <span
                                                                                    class="text-span-9">(trailing)</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item_wrapper"><a
                                                                                href="{{ route('register')}}"
                                                                                target="_blank"
                                                                                class="button is-fill small w-button">Get
                                                                                Started</a><a
                                                                                href="{{ route('register')}}"
                                                                                target="_blank"
                                                                                class="button small w-button">Fee
                                                                                $1,000</a></div>
                                                                    </div>
                                                                </div>
                                                                <div class="w-col w-col-8 w-col-stack">
                                                                    <h4>What’s included?</h4>
                                                                    <div class="w-layout-grid list_wrapper">
                                                                        <div id="w-node-_1c1562be-26e2-316e-2686-79f43fb5d642-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">Up-to 100% profit split*
                                                                            </p>
                                                                        </div>
                                                                        <div id="w-node-_1c1562be-26e2-316e-2686-79f43fb5d646-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">14-Day or 7-Day Payouts
                                                                            </p>
                                                                        </div>
                                                                        <div id="w-node-_1c1562be-26e2-316e-2686-79f43fb5d64a-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">Unlimited Trading Days
                                                                            </p>
                                                                        </div>
                                                                        <div id="w-node-_1c1562be-26e2-316e-2686-79f43fb5d64e-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">News trading allowed</p>
                                                                        </div>
                                                                        <div id="w-node-_1c1562be-26e2-316e-2686-79f43fb5d652-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">Zero commissions*</p>
                                                                        </div>
                                                                        <div id="w-node-_1c1562be-26e2-316e-2686-79f43fb5d656-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">Max 2% loss per trade
                                                                                idea</p>
                                                                        </div>
                                                                        <div id="w-node-_1c1562be-26e2-316e-2686-79f43fb5d65a-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">Minimum trading days: 7
                                                                            </p>
                                                                        </div>
                                                                        <div id="w-node-_1c1562be-26e2-316e-2686-79f43fb5d65e-681f7e9c"
                                                                            class="item_wrapper"><img loading="lazy"
                                                                                src="{{ asset('home-assets/assets/img/icon-checkbox.svg') }}"
                                                                                alt="" class="bullet_icon">
                                                                            <p class="item">Weekend/Overnight
                                                                                holding</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="div-block-14"><a
                                                                            href="{{ route('contact')}}"
                                                                            target="_blank"
                                                                            class="button w-button">Help Center</a>
                                                                        <div>
                                                                            <div class="text-block-31">*Default profit
                                                                                split is 80%; with the addon, it&#x27;s
                                                                                either 90% or 100%</div>
                                                                            <div class="text-block-31">*Zero
                                                                                commissions only apply to challenge
                                                                                accounts</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="container-large">
                        <div class="spacer-medium hidden"></div>
                        <div class="spacer-xxlarge mobile"></div>
                        <div id="How-It-works" data-w-id="0651f840-f515-4fe9-ebf7-f2e0492c688a"
                            class="section-2 black">
                            <div class="container-3">
                                <div class="center-div max-720w margin-xl">
                                    <h2 class="heading-2-small text-white">The Funding Process</h2>
                                    <p class="paragraph-m text-white light-grey">The simple process of getting funded
                                        with {{ env('APP_NAME') }} </p>
                                </div>
                                <div class="w-layout-grid container-3 small flex">
                                    <div data-w-id="0651f840-f515-4fe9-ebf7-f2e0492c6892" class="timeline-wrapper">
                                        <div class="grey-line">
                                            <div class="white-line"></div>
                                        </div>
                                    </div>
                                    <div id="w-node-_0651f840-f515-4fe9-ebf7-f2e0492c6895-681f7e9c"
                                        class="process-wrapper">
                                        <div class="step-wrapper margin-l">
                                            <div class="step"><img
                                                    src="{{ asset('home-assets/assets/img/icon-process-step-1.svg') }}"
                                                    loading="lazy" alt="" class="step-1-number">
                                                <div class="black-line"></div>
                                            </div>
                                            <div class="step-1-info-wrapper">
                                                <div class="process-image"><img
                                                        src="{{ asset('home-assets/assets/img/image-process-step-1.png') }}"
                                                        loading="lazy" alt="" class="image-12"></div>
                                                <div class="step-info">
                                                    <h4 class="step-heading margin-xs">Challenge Phase</h4>
                                                    <p class="paragraph-m text-white margin-m">Your trading put to the
                                                        test.</p>
                                                    <p class="text-light-grey"><strong class="text-light-grey">Get
                                                            any account size and pass our challenge by profiting 10%
                                                            without going below 5-10% of your account size. <br><br>In
                                                            this phase, your trading skills will be tested. Achieve the
                                                            trading objectives while following the trading rules to
                                                            complete the phase.</strong></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="step-wrapper margin-l">
                                            <div class="step"><img
                                                    src="{{ asset('home-assets/assets/img/icon-process-step-2.svg') }}"
                                                    loading="lazy" alt="" class="step-2-number">
                                                <div class="black-line"></div>
                                            </div>
                                            <div class="step-2-info-wrapper">
                                                <div class="process-image"><img
                                                        src="{{ asset('home-assets/assets/img/image-process-step-2.png') }}"
                                                        loading="lazy" alt="" class="image-13"></div>
                                                <div class="step-info">
                                                    <h4 class="step-heading margin-xs">Funded Phase</h4>
                                                    <p class="paragraph-m text-white margin-m">Start earning as our
                                                        trader.</p>
                                                    <p class="text-light-grey"><strong class="bold-text-2">After
                                                            passing the challenge, you now become a funded trader. Earn
                                                            up-to 100% of the profits you make.<br><br>Remain
                                                            consistently profitable and scale your account up to <br>$2
                                                            million by following our scaling plan.<br></strong></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="step-wrapper margin-l">
                                            <div class="step"><img
                                                    src="{{ asset('home-assets/assets/img/icon-process-step-3.svg') }}"
                                                    loading="lazy" alt="" class="step-3-number">
                                                <div class="black-line"></div>
                                            </div>
                                            <div class="step-3-info-wrapper">
                                                <div class="process-image"><img
                                                        src="{{ asset('home-assets/assets/img/image-process-step-3.png') }}"
                                                        loading="lazy" alt="" class="image-14"></div>
                                                <div class="step-info">
                                                    <h4 class="step-heading margin-xs">Payout</h4>
                                                    <p class="paragraph-m text-white margin-m">Enjoy your profits.</p>
                                                    <p class="text-light-grey">Receive your payouts in as fast as 7
                                                        days after your first live trade on your funded account, plus a
                                                        full refund of your evaluation fee.<br><br>Choose to receive
                                                        your earnings either directly in your
                                                        bank account or instantly to your preferred cryptocurrency
                                                        wallet.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="spacer-xmedium"></div>
                        <div class="w-layout-grid f-header-grid">
                            <div id="w-node-_8f114939-8986-b6cc-59b5-454c9f3e7056-681f7e9c"
                                class="f-header-image-wrapper-tall"><img
                                    src="{{ asset('home-assets/assets/img/image-payout-methods.png') }}"
                                    loading="lazy"
                                    sizes="(max-width: 479px) 92vw, (max-width: 767px) 95vw, (max-width: 991px) 92vw, (max-width: 1919px) 42vw, 490px"
                                    alt="" class="f-image-cover"></div>
                            <div class="div-block-10">
                                <div class="div-block-9">
                                    <div>
                                        <div class="f-margin-bottom-24">
                                            <h2 class="f-h1-heading">Payout System</h2>
                                        </div>
                                        <div class="f-margin-bottom-32">
                                            <p class="f-paragraph-large"><strong class="bold-text-2">At
                                                    {{ env('APP_NAME') }} , we focus on rewarding our traders the best
                                                    way
                                                    possible. Not only do we offer 7-day payouts, but also the most
                                                    versatile payment options that best fit traders around the
                                                    world.<br><strong
                                                    class="bold-text-2"><br> Crypto: Binance, Coinbase</strong><br>
                                            </p>
                                        </div><a href="{{ route('register')}}" target="_blank"
                                            class="button is-fill w-button">Get Started Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="trading-partnership">
                            <div class="h2-wrap is-big">
                                <h2>Why we&#x27;re the leading firm</h2>
                                <div class="subtitle-h2 is-big">The benefits of trading with {{ env('APP_NAME') }}
                                </div>
                            </div>
                            <div class="spacer-xmedium"></div>
                            <div class="futured-grid">
                                <div id="w-node-b86b2bd0-5e47-eb1a-7a81-9f241f4dd6a1-681f7e9c"
                                    class="one-futured is-big">
                                    <div>
                                        <h3 class="futured-title">100% Profit Split</h3>
                                        <div class="big-futured-text">Unlike other firms, with us you keep the
                                            ENTIRE profit. How do we make money then? By adopting a system that allows
                                            us to copy successful traders, ensuring a win-win situation for all.</div>
                                    </div>
                                    <div class="futured-lottie_wrap is-big">
                                        <div class="futured_lottie-animation"
                                            data-w-id="7aaac3dc-c9af-3c00-0929-45deb3df94b9"
                                            data-animation-type="lottie"
                                            data-src="{{ asset('home-assets/assets/js/frame-3.json') }}"
                                            data-loop="1" data-direction="1" data-autoplay="1"
                                            data-is-ix2-target="0" data-renderer="svg"
                                            data-default-duration="5.033333333333333" data-duration="0"></div><img
                                            src="{{ asset('home-assets/assets/img/bg-frame-3.svg') }}"
                                            loading="lazy" alt="Background Overlay" class="lottie_bg-img">
                                    </div>
                                </div>
                                <div id="w-node-fb9278ae-8da9-91a7-81cf-83953dc54b47-681f7e9c" class="one-futured">
                                    <div class="futured-lottie_wrap">
                                        <div class="futured_lottie-animation is-one"
                                            data-w-id="fb9278ae-8da9-91a7-81cf-83953dc54b49"
                                            data-animation-type="lottie"
                                            data-src="{{ asset('home-assets/assets/js/frame-1.json') }}"
                                            data-loop="1" data-direction="1" data-autoplay="1"
                                            data-is-ix2-target="0" data-renderer="svg"
                                            data-default-duration="5.033333333333333" data-duration="0"></div><img
                                            src="{{ asset('home-assets/assets/img/bg-frame-1.svg') }}"
                                            loading="lazy" alt="Dollars icon" class="lottie_bg-img">
                                    </div>
                                    <h3 class="futured-title">Zero Commissions</h3>
                                    <div>Trade freely without worrying about fees. While most firms take $3/lot, we
                                        don&#x27;t take a single penny from you.<br>Available for challenge accounts
                                        only.</div>
                                </div>
                                <div id="w-node-_82cbb304-701f-1fd6-328e-947242d2c7b5-681f7e9c" class="one-futured">
                                    <div class="futured-lottie_wrap">
                                        <div class="futured_lottie-animation"
                                            data-w-id="82cbb304-701f-1fd6-328e-947242d2c7b7"
                                            data-animation-type="lottie"
                                            data-src="{{ asset('home-assets/assets/js/frame-2.json') }}"
                                            data-loop="1" data-direction="1" data-autoplay="1"
                                            data-is-ix2-target="0" data-renderer="svg"
                                            data-default-duration="7.033333333333333" data-duration="0"></div><img
                                            src="{{ asset('home-assets/assets/img/bg-frame-2.svg') }}"
                                            loading="lazy" alt="Liquidity Icon" class="lottie_bg-img">
                                    </div>
                                    <h3 class="futured-title">Fast 7-Day Payouts</h3>
                                    <div>With our lightning-fast payout system, you&#x27;ll receive your earnings after
                                        only 7 days of successful trades.<br>Fast payouts, stress free.</div>
                                </div>
                            </div>
                        </div>
                        <div class="spacer-xhuge"></div>
                    </div>
                </div><img src="{{ asset('home-assets/assets/img/bg-3.svg') }}" loading="eager"
                    alt="Background overlay lines two" class="bg-3">
            </section>
            <section class="steps_section">
                <div class="padding-global is-off">
                    <div class="steps-bg">
                        <div class="container-large">
                            <div class="steps-block">
                                <div class="h2-wrap">
                                    <h2>Steps To Get Started</h2>
                                    <div class="subtitle-h2">Choose between a 1 or 2 step challenge and pass them to
                                        get funding</div>
                                </div>
                                <div class="spacer-xmedium"></div>
                                <div class="switch-wrap">
                                    <p style="opacity:0.6" class="p-stepone">1-Step</p>
                                    <div data-w-id="eda9b879-f8b2-3d1a-794e-bceb930c09a5" class="switch">
                                        <div style="-webkit-transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                                            class="switcher"></div>
                                    </div>
                                    <p class="p-steptwo">2-Step</p>
                                </div>
                                <div class="spacer-xmedium"></div>
                                <div data-current="Tab 1" data-easing="ease" data-duration-in="300"
                                    data-duration-out="100" class="tabs w-tabs">
                                    <div class="tabs-menu w-tab-menu">
                                        <a data-w-tab="Tab 1" class="w-inline-block w-tab-link w--current">
                                            <div>Tab 1</div>
                                        </a>
                                        <a data-w-tab="Tab 2" class="w-inline-block w-tab-link">
                                            <div>Tab 2</div>
                                        </a>
                                    </div>
                                    <div class="tabs-content w-tab-content">
                                        <div data-w-tab="Tab 1" class="stepone w-tab-pane w--tab-active">
                                            <div class="all-steps_grid">
                                                <div id="w-node-_71700aae-9119-6a48-aa21-4d55184e0ecb-681f7e9c"
                                                    class="one-step">
                                                    <div class="one-step_title-wrap">
                                                        <div class="one-step_nubmer">
                                                            <div class="text-block-23">1</div>
                                                        </div>
                                                        <h3 class="one-step-headline">Trading Challenge</h3>
                                                    </div>
                                                    <div class="gradient-divider"></div>
                                                    <div class="one-step_line">
                                                        <div class="one-step_col-with-icon"><img alt="Profit icon"
                                                                loading="lazy"
                                                                src="{{ asset('home-assets/assets/img/icon-profit-target.svg') }}"
                                                                class="one-small_icon">
                                                            <div>Profit Target</div>
                                                        </div>
                                                        <div class="profit-text">10%</div>
                                                    </div>
                                                    <div class="one-step_line is-no-mb">
                                                        <div class="one-step_col-with-icon"><img alt="Trading icon"
                                                                loading="lazy"
                                                                src="{{ asset('home-assets/assets/img/icon-trading-period.svg') }}"
                                                                class="one-small_icon">
                                                            <div>Trading Period</div>
                                                        </div>
                                                        <div class="text-color-white">Unlimited</div>
                                                    </div>
                                                    <div class="gradient-divider"></div>
                                                    <div class="one-step_line">
                                                        <div>Min.Trading Days</div>
                                                        <div class="text-color-white">1</div>
                                                    </div>
                                                    <div class="one-step_line">
                                                        <div>Max.Account Balance Loss</div>
                                                        <div class="text-color-white">10%</div>
                                                    </div>
                                                    <div class="one-step_line">
                                                        <div>Maximum Daily Loss</div>
                                                        <div class="text-color-white">5%</div>
                                                    </div>
                                                    <div class="one-step_line is-no-mb">
                                                        <div>Max Loss per Trade Idea</div>
                                                        <div class="text-color-white">2%</div>
                                                    </div>
                                                </div>
                                                <div id="w-node-_71700aae-9119-6a48-aa21-4d55184e0ef1-681f7e9c"
                                                    class="one-step">
                                                    <div class="one-step_title-wrap">
                                                        <div class="one-step_nubmer">
                                                            <div class="text-block-21">2</div>
                                                        </div>
                                                        <h3 class="one-step-headline">Verification</h3>
                                                    </div>
                                                    <div class="gradient-divider"></div>
                                                    <div class="one-step_line">
                                                        <div class="one-step_col-with-icon"><img alt="Profit icon"
                                                                loading="lazy"
                                                                src="{{ asset('home-assets/assets/img/icon-profit-target.svg') }}"
                                                                class="one-small_icon">
                                                            <div>Profit Target</div>
                                                        </div>
                                                        <div class="profit-text">5%</div>
                                                    </div>
                                                    <div class="one-step_line is-no-mb">
                                                        <div class="one-step_col-with-icon"><img alt="Trading icon"
                                                                loading="lazy"
                                                                src="{{ asset('home-assets/assets/img/icon-trading-period.svg') }}"
                                                                class="one-small_icon">
                                                            <div>Trading Period</div>
                                                        </div>
                                                        <div class="text-color-white">Unlimited</div>
                                                    </div>
                                                    <div class="gradient-divider"></div>
                                                    <div class="one-step_line">
                                                        <div>Min.Trading Days</div>
                                                        <div class="text-color-white">1</div>
                                                    </div>
                                                    <div class="one-step_line">
                                                        <div>Max.Account Balance Loss</div>
                                                        <div class="text-color-white">10%</div>
                                                    </div>
                                                    <div class="one-step_line">
                                                        <div>Maximum Daily Loss</div>
                                                        <div class="text-color-white">5%</div>
                                                    </div>
                                                    <div class="one-step_line is-no-mb">
                                                        <div>Max Loss per Trade Idea</div>
                                                        <div class="text-color-white">2%</div>
                                                    </div>
                                                </div>
                                                <div id="w-node-_71700aae-9119-6a48-aa21-4d55184e0f17-681f7e9c"
                                                    class="one-step funded">
                                                    <div class="one-step_title-wrap">
                                                        <div class="one-step_nubmer nobg">
                                                            <div class="text-block-22">3</div>
                                                        </div>
                                                        <h3 class="one-step-headline">Funded</h3>
                                                    </div>
                                                    <div class="gradient-divider"></div>
                                                    <div class="one-step_line">
                                                        <div class="one-step_col-with-icon"><img alt="Profit icon"
                                                                loading="lazy"
                                                                src="{{ asset('home-assets/assets/img/icon-profit-target.sv') }}g"
                                                                class="one-small_icon">
                                                            <div>Profit Split</div>
                                                        </div>
                                                        <div class="profit-text">100%*</div>
                                                    </div>
                                                    <div class="one-step_line is-no-mb">
                                                        <div class="one-step_col-with-icon"><img alt="Trading icon"
                                                                loading="lazy"
                                                                src="{{ asset('home-assets/assets/img/icon-trading-period.svg') }}"
                                                                class="one-small_icon">
                                                            <div>Trading Period</div>
                                                        </div>
                                                        <div class="text-color-white">Unlimited</div>
                                                    </div>
                                                    <div class="gradient-divider"></div>
                                                    <div class="one-step_line">
                                                        <div>Min.Trading days</div>
                                                        <div class="text-color-white">1</div>
                                                    </div>
                                                    <div class="one-step_line">
                                                        <div>Max.Account Balance Loss</div>
                                                        <div class="text-color-white">10%</div>
                                                    </div>
                                                    <div class="one-step_line">
                                                        <div>Maximum Daily Loss</div>
                                                        <div class="text-color-white">5%</div>
                                                    </div>
                                                    <div class="one-step_line is-no-mb">
                                                        <div>Max Loss per Trade Idea</div>
                                                        <div class="text-color-white">2%</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-w-tab="Tab 2" class="steptwo w-tab-pane">
                                            <div class="all-steps_grid is-two">
                                                <div id="w-node-c6af9c48-6734-ede6-e84c-4b6776874940-681f7e9c"
                                                    class="one-step">
                                                    <div class="one-step_title-wrap">
                                                        <div class="one-step_nubmer">
                                                            <div class="text-block-24">1</div>
                                                        </div>
                                                        <h3 class="one-step-headline">Trading Challenge</h3>
                                                    </div>
                                                    <div class="gradient-divider"></div>
                                                    <div class="one-step_line">
                                                        <div class="one-step_col-with-icon"><img alt="Profit icon"
                                                                loading="lazy"
                                                                src="{{ asset('home-assets/assets/img/icon-profit-target.svg') }}"
                                                                class="one-small_icon">
                                                            <div>Profit Target</div>
                                                        </div>
                                                        <div class="profit-text">10%</div>
                                                    </div>
                                                    <div class="one-step_line is-no-mb">
                                                        <div class="one-step_col-with-icon"><img alt="Trading icon"
                                                                loading="lazy"
                                                                src="{{ asset('home-assets/assets/img/icon-trading-period.svg') }}"
                                                                class="one-small_icon">
                                                            <div>Trading Period</div>
                                                        </div>
                                                        <div class="text-color-white">Unlimited</div>
                                                    </div>
                                                    <div class="gradient-divider"></div>
                                                    <div class="one-step_line">
                                                        <div>Min.Trading days</div>
                                                        <div class="text-color-white">1</div>
                                                    </div>
                                                    <div class="one-step_line">
                                                        <div>Max.Account Balance Loss</div>
                                                        <div class="text-color-white">5%</div>
                                                    </div>
                                                    <div class="one-step_line">
                                                        <div>Maximum Daily Loss</div>
                                                        <div class="text-color-white">4%</div>
                                                    </div>
                                                    <div class="one-step_line is-no-mb">
                                                        <div>Max Loss per Trade Idea</div>
                                                        <div class="text-color-white">2%</div>
                                                    </div>
                                                </div>
                                                <div id="w-node-c6af9c48-6734-ede6-e84c-4b6776874966-681f7e9c"
                                                    class="one-step funded">
                                                    <div class="one-step_title-wrap">
                                                        <div class="one-step_nubmer">
                                                            <div class="text-block-25">2</div>
                                                        </div>
                                                        <h3 class="one-step-headline">Funded</h3>
                                                    </div>
                                                    <div class="gradient-divider"></div>
                                                    <div class="one-step_line">
                                                        <div class="one-step_col-with-icon"><img alt="Profit icon"
                                                                loading="lazy"
                                                                src="{{ asset('home-assets/assets/img/icon-profit-target.svg') }}"
                                                                class="one-small_icon">
                                                            <div>Profit Split</div>
                                                        </div>
                                                        <div class="profit-text">100%*</div>
                                                    </div>
                                                    <div class="one-step_line is-no-mb">
                                                        <div class="one-step_col-with-icon"><img alt="Trading icon"
                                                                loading="lazy"
                                                                src="{{ asset('home-assets/assets/img/icon-trading-period.svg') }}"
                                                                class="one-small_icon">
                                                            <div>Trading Period</div>
                                                        </div>
                                                        <div class="text-color-white">Unlimited</div>
                                                    </div>
                                                    <div class="gradient-divider"></div>
                                                    <div class="one-step_line">
                                                        <div>Min.Trading days</div>
                                                        <div class="text-color-white">1</div>
                                                    </div>
                                                    <div class="one-step_line">
                                                        <div>Max.Account Balance Loss</div>
                                                        <div class="text-color-white">5%</div>
                                                    </div>
                                                    <div class="one-step_line">
                                                        <div>Maximum Daily Loss</div>
                                                        <div class="text-color-white">4%</div>
                                                    </div>
                                                    <div class="one-step_line is-no-mb">
                                                        <div>Max Loss per Trade Idea</div>
                                                        <div class="text-color-white">2%</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="h2-wrap _90split">
                                    <div class="subtitle-h2 is-big _90split">*100% profit split is included as an
                                        add-on, the default profit split is 80%.</div>
                                </div>
                                <div class="one-btn_wrap"><a href="{{ route('register')}}" class="button is-fill w-button">Get
                                        Started Now</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="accaunts_section">
                <div class="padding-global">
                    <div class="spacer-xhuge"></div>
                    <div class="container-large">
                        <div class="discover-block">
                            <div class="h2-wrap">
                                <h2>Choose Account Size</h2>
                            </div>
                            <div class="spacer-xlarge"></div>
                            <div id="cards" class="fierst-part-acc">
                                <div class="one-line_accs">
                                    <div class="one-acc_wrap">
                                        <div class="liner-border"></div>
                                        <div class="liner-border is-right"></div>
                                        <div class="one-acc_content">
                                            <h3 class="acc-headline">Beginner</h3>
                                            <div class="one-acc_price-wrap">
                                                <div class="one-acc_price">$5,000</div>
                                                <a href="" class="button w-button">Pay $50</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="one-acc_space">
                                        <div class="liner-border is-top-rev"></div>
                                    </div>
                                </div>
                                <div class="one-line_accs">
                                    <div class="one-acc_wrap is-mini">
                                        <div class="liner-border"></div>
                                        <div class="liner-border is-bottom"></div>
                                        <div class="liner-border is-right"></div>
                                        <div class="one-acc_content">
                                            <h3 class="acc-headline">Mini</h3>
                                            <div class="one-acc_price-wrap">
                                                <div class="one-acc_price">$10,000</div>
                                                <a href="" class="button w-button">Pay $100</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="one-acc_wrap is-starter">
                                        <div class="liner-border is-top-rev"></div>
                                        <div class="liner-border is-bottom-rev"></div>
                                        <div class="one-acc_content">
                                            <h3 class="acc-headline">Starter</h3>
                                            <div class="one-acc_price-wrap">
                                                <div class="one-acc_price">$25,000</div>
                                                <a href="" class="button w-button">Pay $200</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="one-line_accs">
                                    <div class="one-acc_wrap is-basic">
                                        <div class="liner-border is-bottom"></div>
                                        <div class="liner-border is-right"></div>
                                        <div class="one-acc_content">
                                            <h3 class="acc-headline">Basic</h3>
                                            <div class="one-acc_price-wrap">
                                                <div class="one-acc_price">$50,000</div>
                                                <a href="{{ route('register')}}"
                                                    class="button w-button">Pay $300</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="one-acc_wrap is-starter">
                                        <div class="liner-border is-bottom-rev"></div>
                                        <div class="one-acc_content">
                                            <h3 class="acc-headline">Advanced</h3>
                                            <div class="one-acc_price-wrap">
                                                <div class="one-acc_price">$100,000</div>
                                                <a href="{{ route('register')}}"
                                                    class="button w-button">Pay $550</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="one-acc_wrap is-starter">
                                        <div class="liner-border is-bottom-rev"></div>
                                        <div class="one-acc_content">
                                            <h3 class="acc-headline">Superior</h3>
                                            <div class="one-acc_price-wrap">
                                                <div class="one-acc_price">$200,000</div>
                                                <a href="{{ route('register')}}"
                                                    class="button w-button">Pay $1,000</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="spacer-large"></div>
                        </div>
                        <div class="spacer-xlarge"></div>
                    </div>
                </div>
            </section>
            <section class="accaunts-mobile_section">
                <div class="padding-global is-large">
                    <div class="container-xlarge">
                        <div class="discover-block">
                            <div id="dashboard" class="spacer-xhuge"></div>
                            <div class="h2-wrap is-small">
                                <h2>Choose Account Size</h2>
                                <div class="subtitle-h2">Pick an account size that fits your budget and trading style
                                </div>
                            </div>
                            <div class="spacer-xmedium"></div>
                            <div class="one-acc-box">
                                <div class="one-box-acc_title-small">
                                    <div class="left-side-box">
                                        <div class="one-box-acc_tagline">Beginner</div>
                                        <h3 class="one-box-acc-headline">$10,000</h3>
                                    </div>
                                    <div class="right-side-box is-t-small">
                                        <a href="{{ route('register')}}"
                                            class="button is-price-small w-button">Pay $100</a>
                                    </div>
                                </div>
                            </div>
                            <div class="one-acc-box">
                                <div class="one-box-acc_title-small">
                                    <div class="left-side-box">
                                        <div class="one-box-acc_tagline">Starter</div>
                                        <h3 class="one-box-acc-headline">$25,000</h3>
                                    </div>
                                    <div class="right-side-box is-t-small">
                                        <a href="{{ route('register')}}"
                                            class="button is-price-small w-button">Pay $200</a>
                                    </div>
                                </div>
                            </div>
                            <div class="one-acc-box">
                                <div class="one-box-acc_title-small">
                                    <div class="left-side-box">
                                        <div class="one-box-acc_tagline">Basic</div>
                                        <h3 class="one-box-acc-headline">$50,000</h3>
                                    </div>
                                    <div class="right-side-box is-t-small">
                                        <a href="{{ route('register')}}"
                                            class="button is-price-small w-button">Pay $350</a>
                                    </div>
                                </div>
                            </div>
                            <div class="one-acc-box">
                                <div class="one-box-acc_title">
                                    <div class="left-side-box">
                                        <div class="one-box-acc_tagline">Advanced</div>
                                        <h3 class="one-box-acc-headline">$100,000</h3>
                                    </div>
                                    <div class="right-side-box">
                                        <a href="{{ route('register')}}"
                                            class="button is-price-small w-button">Pay $550</a>
                                    </div>
                                </div>
                            </div>
                            <div class="one-acc-box">
                                <div class="one-box-acc_title">
                                    <div class="left-side-box">
                                        <div class="one-box-acc_tagline">Expert</div>
                                        <h3 class="one-box-acc-headline">$200,000</h3>
                                    </div>
                                    <div class="right-side-box">
                                        <a href="{{ route('register')}}"
                                            class="button is-price-small w-button">Pay $1,000</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section data-w-id="fa69723f-4e6c-578e-f8af-787ea9d13215" class="feedback_section">
                <div class="padding-global">
                    <div class="container-xlarge">
                        <div class="bg-planet_wrap">
                            <div class="planet-here">
                                <div class="full-video w-embed w-script"><video
                                        style="object-fit: cover; background-size: cover; width: 100%; height: 100%;"
                                        preload="auto" playsinline="" autoplay="" loop=""
                                        muted="">
                                        <source src="{{ asset('home-assets/assets/vid/bg-sphere.mp4?dl=0')}}" type="video/mp4">
                                    </video>
                                    <script>
                                        $(document).ready(() => {
                                            let width = $(window).width();
                                            let height = $(window).height();
                                            $("#videoBackground")
                                                .width(width)
                                                .height(height);
                                        });
                                        $(window).resize(() => {
                                            let width = $(window).width();
                                            let height = $(window).height();
                                            $("#videoBackground")
                                                .width(width)
                                                .height(height);
                                        });
                                    </script>
                                </div>
                            </div>
                            <div class="spacer-xxhuge"></div>
                            <div class="spacer-large"></div>
                            <div class="feedback-block">
                                <div class="h2-wrap">
                                    <h2>Hear From Our Traders</h2>
                                    <div class="subtitle-h2 is-big">See the results you can achieve with the best
                                        trading firm</div>
                                </div>
                                <div class="spacer-medium"></div>
                                <div class="feedback_block-desctop">
                                    <div class="feedback-row_wrapper w-dyn-list">
                                        <div role="list" class="feedback_row w-dyn-items">
                                            <div role="listitem" class="w-dyn-item">
                                                <div class="one-feedback">
                                                    <div class="feedback_main-part">
                                                        <div class="one-feed_title-wrap">
                                                            <div class="one-step_col-with-icon">
                                                                <div class="feedback_name">Adrien K</div>
                                                            </div>
                                                            <div class="feedback-price">$500.000</div>
                                                        </div>
                                                        <div class="feed_gradient-divider"></div>
                                                        <p>What sets Stan and his team apart is their focus on building
                                                            a community of successful traders who support each other.
                                                            It&#x27;s not just about making profits, but about working
                                                            together to achieve
                                                            shared goals</p>
                                                    </div>
                                                    <div class="feedback-btn_wrap w-condition-invisible">
                                                        <a href="#"
                                                            data-w-id="d1cf1956-5a82-d4ae-bd19-c7a7f7989000"
                                                            class="review-button w-inline-block w-dyn-bind-empty w-lightbox">
                                                            <div>Watch video review</div>
                                                            <div class="feed-icon-code w-embed"><svg width="22"
                                                                    height="22" viewbox="0 0 22 22"
                                                                    fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M11 22C17.0751 22 22 17.0751 22 11C22 4.92487 17.0751 0 11 0C4.92487 0 0 4.92487 0 11C0 17.0751 4.92487 22 11 22ZM9.51343 7.67865L14.3445 10.7067C14.4394 10.7666 14.4985 10.8783 14.4985 11.0001C14.4985 11.1219 14.4394 11.2336 14.3445 11.2935L9.51343 14.3216C9.46753 14.3505 9.4162 14.3646 9.36547 14.3646C9.31294 14.3646 9.2604 14.3491 9.21329 14.3189C9.12029 14.2583 9.06353 14.1479 9.06353 14.0282V7.97203C9.06353 7.85226 9.12029 7.7419 9.21329 7.68134C9.30569 7.62145 9.41982 7.6201 9.51343 7.67865Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                            <script type="application/json" class="w-json">
                                                                {
                                                                    "items": [],
                                                                    "group": ""
                                                                }
                                                            </script>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div role="listitem" class="w-dyn-item">
                                                <div class="one-feedback">
                                                    <div class="feedback_main-part">
                                                        <div class="one-feed_title-wrap">
                                                            <div class="one-step_col-with-icon">
                                                                <div class="feedback_name">Benjamin B</div>
                                                            </div>
                                                            <div class="feedback-price">$100.000</div>
                                                        </div>
                                                        <div class="feed_gradient-divider"></div>
                                                        <p>It&#x27;s rare to find a trading firm that feels like a
                                                            real community, but that&#x27;s exactly what you get with
                                                            {{ env('APP_NAME') }} . They care about their traders and
                                                            are dedicated to helping
                                                            them succeed, and that&#x27;s why I&#x27;ve been with them
                                                            for so long.</p>
                                                    </div>
                                                    <div class="feedback-btn_wrap w-condition-invisible">
                                                        <a href="#"
                                                            data-w-id="d1cf1956-5a82-d4ae-bd19-c7a7f7989000"
                                                            class="review-button w-inline-block w-dyn-bind-empty w-lightbox">
                                                            <div>Watch video review</div>
                                                            <div class="feed-icon-code w-embed"><svg width="22"
                                                                    height="22" viewbox="0 0 22 22"
                                                                    fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M11 22C17.0751 22 22 17.0751 22 11C22 4.92487 17.0751 0 11 0C4.92487 0 0 4.92487 0 11C0 17.0751 4.92487 22 11 22ZM9.51343 7.67865L14.3445 10.7067C14.4394 10.7666 14.4985 10.8783 14.4985 11.0001C14.4985 11.1219 14.4394 11.2336 14.3445 11.2935L9.51343 14.3216C9.46753 14.3505 9.4162 14.3646 9.36547 14.3646C9.31294 14.3646 9.2604 14.3491 9.21329 14.3189C9.12029 14.2583 9.06353 14.1479 9.06353 14.0282V7.97203C9.06353 7.85226 9.12029 7.7419 9.21329 7.68134C9.30569 7.62145 9.41982 7.6201 9.51343 7.67865Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                            <script type="application/json" class="w-json">
                                                                {
                                                                    "items": [],
                                                                    "group": ""
                                                                }
                                                            </script>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div role="listitem" class="w-dyn-item">
                                                <div class="one-feedback">
                                                    <div class="feedback_main-part">
                                                        <div class="one-feed_title-wrap">
                                                            <div class="one-step_col-with-icon">
                                                                <div class="feedback_name">Fredrik W</div>
                                                            </div>
                                                            <div class="feedback-price">$500.000</div>
                                                        </div>
                                                        <div class="feed_gradient-divider"></div>
                                                        <p>Working with Stan and his team is a unique experience that
                                                            you won&#x27;t find with any other trading firm. It
                                                            feels like being part of a family, with a real person behind
                                                            the brand who truly
                                                            cares about your success as a trader.</p>
                                                    </div>
                                                    <div class="feedback-btn_wrap w-condition-invisible">
                                                        <a href="#"
                                                            data-w-id="d1cf1956-5a82-d4ae-bd19-c7a7f7989000"
                                                            class="review-button w-inline-block w-dyn-bind-empty w-lightbox">
                                                            <div>Watch video review</div>
                                                            <div class="feed-icon-code w-embed"><svg width="22"
                                                                    height="22" viewbox="0 0 22 22"
                                                                    fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M11 22C17.0751 22 22 17.0751 22 11C22 4.92487 17.0751 0 11 0C4.92487 0 0 4.92487 0 11C0 17.0751 4.92487 22 11 22ZM9.51343 7.67865L14.3445 10.7067C14.4394 10.7666 14.4985 10.8783 14.4985 11.0001C14.4985 11.1219 14.4394 11.2336 14.3445 11.2935L9.51343 14.3216C9.46753 14.3505 9.4162 14.3646 9.36547 14.3646C9.31294 14.3646 9.2604 14.3491 9.21329 14.3189C9.12029 14.2583 9.06353 14.1479 9.06353 14.0282V7.97203C9.06353 7.85226 9.12029 7.7419 9.21329 7.68134C9.30569 7.62145 9.41982 7.6201 9.51343 7.67865Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                            <script type="application/json" class="w-json">
                                                                {
                                                                    "items": [],
                                                                    "group": ""
                                                                }
                                                            </script>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div role="listitem" class="w-dyn-item">
                                                <div class="one-feedback">
                                                    <div class="feedback_main-part">
                                                        <div class="one-feed_title-wrap">
                                                            <div class="one-step_col-with-icon">
                                                                <div class="feedback_name">Hans D</div>
                                                            </div>
                                                            <div class="feedback-price">$200.000</div>
                                                        </div>
                                                        <div class="feed_gradient-divider"></div>
                                                        <p>Working with {{ env('APP_NAME') }} is a breath of fresh air
                                                            in the trading world. It&#x27;s not just about profits
                                                            - it&#x27;s about being part of a community of traders who
                                                            are passionate about what
                                                            they do and who support each other. </p>
                                                    </div>
                                                    <div class="feedback-btn_wrap w-condition-invisible">
                                                        <a href="#"
                                                            data-w-id="d1cf1956-5a82-d4ae-bd19-c7a7f7989000"
                                                            class="review-button w-inline-block w-dyn-bind-empty w-lightbox">
                                                            <div>Watch video review</div>
                                                            <div class="feed-icon-code w-embed"><svg width="22"
                                                                    height="22" viewbox="0 0 22 22"
                                                                    fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M11 22C17.0751 22 22 17.0751 22 11C22 4.92487 17.0751 0 11 0C4.92487 0 0 4.92487 0 11C0 17.0751 4.92487 22 11 22ZM9.51343 7.67865L14.3445 10.7067C14.4394 10.7666 14.4985 10.8783 14.4985 11.0001C14.4985 11.1219 14.4394 11.2336 14.3445 11.2935L9.51343 14.3216C9.46753 14.3505 9.4162 14.3646 9.36547 14.3646C9.31294 14.3646 9.2604 14.3491 9.21329 14.3189C9.12029 14.2583 9.06353 14.1479 9.06353 14.0282V7.97203C9.06353 7.85226 9.12029 7.7419 9.21329 7.68134C9.30569 7.62145 9.41982 7.6201 9.51343 7.67865Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                            <script type="application/json" class="w-json">
                                                            {
                                                                "items": [],
                                                                "group": ""
                                                            }
                                                        </script>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div role="listitem" class="w-dyn-item">
                                                <div class="one-feedback">
                                                    <div class="feedback_main-part">
                                                        <div class="one-feed_title-wrap">
                                                            <div class="one-step_col-with-icon">
                                                                <div class="feedback_name">Marc R</div>
                                                            </div>
                                                            <div class="feedback-price">$100.000</div>
                                                        </div>
                                                        <div class="feed_gradient-divider"></div>
                                                        <p>I&#x27;ve been trading with {{ env('APP_NAME') }} for a
                                                            while now, and I couldn&#x27;t be happier with the level of
                                                            support and guidance I&#x27;ve received. The team is
                                                            knowledgeable, responsive, and truly
                                                            cares about helping their traders succeed.</p>
                                                    </div>
                                                    <div class="feedback-btn_wrap w-condition-invisible">
                                                        <a href="#"
                                                            data-w-id="d1cf1956-5a82-d4ae-bd19-c7a7f7989000"
                                                            class="review-button w-inline-block w-dyn-bind-empty w-lightbox">
                                                            <div>Watch video review</div>
                                                            <div class="feed-icon-code w-embed"><svg width="22"
                                                                    height="22" viewbox="0 0 22 22"
                                                                    fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M11 22C17.0751 22 22 17.0751 22 11C22 4.92487 17.0751 0 11 0C4.92487 0 0 4.92487 0 11C0 17.0751 4.92487 22 11 22ZM9.51343 7.67865L14.3445 10.7067C14.4394 10.7666 14.4985 10.8783 14.4985 11.0001C14.4985 11.1219 14.4394 11.2336 14.3445 11.2935L9.51343 14.3216C9.46753 14.3505 9.4162 14.3646 9.36547 14.3646C9.31294 14.3646 9.2604 14.3491 9.21329 14.3189C9.12029 14.2583 9.06353 14.1479 9.06353 14.0282V7.97203C9.06353 7.85226 9.12029 7.7419 9.21329 7.68134C9.30569 7.62145 9.41982 7.6201 9.51343 7.67865Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                            <script type="application/json" class="w-json">
                                                            {
                                                                "items": [],
                                                                "group": ""
                                                            }
                                                        </script>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div role="listitem" class="w-dyn-item">
                                                <div class="one-feedback">
                                                    <div class="feedback_main-part">
                                                        <div class="one-feed_title-wrap">
                                                            <div class="one-step_col-with-icon">
                                                                <div class="feedback_name">William S</div>
                                                            </div>
                                                            <div class="feedback-price">$200.000</div>
                                                        </div>
                                                        <div class="feed_gradient-divider"></div>
                                                        <p>I&#x27;ve been a trader with Stan&#x27;s firm for a long time
                                                            now, and I can honestly say that it feels like being part of
                                                            a real team. Stan is always available to talk and provide
                                                            guidance, and his
                                                            team is made up of traders who are dedicated to helping each
                                                            other succeed.</p>
                                                    </div>
                                                    <div class="feedback-btn_wrap w-condition-invisible">
                                                        <a href="#"
                                                            data-w-id="d1cf1956-5a82-d4ae-bd19-c7a7f7989000"
                                                            class="review-button w-inline-block w-dyn-bind-empty w-lightbox">
                                                            <div>Watch video review</div>
                                                            <div class="feed-icon-code w-embed"><svg width="22"
                                                                    height="22" viewbox="0 0 22 22"
                                                                    fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M11 22C17.0751 22 22 17.0751 22 11C22 4.92487 17.0751 0 11 0C4.92487 0 0 4.92487 0 11C0 17.0751 4.92487 22 11 22ZM9.51343 7.67865L14.3445 10.7067C14.4394 10.7666 14.4985 10.8783 14.4985 11.0001C14.4985 11.1219 14.4394 11.2336 14.3445 11.2935L9.51343 14.3216C9.46753 14.3505 9.4162 14.3646 9.36547 14.3646C9.31294 14.3646 9.2604 14.3491 9.21329 14.3189C9.12029 14.2583 9.06353 14.1479 9.06353 14.0282V7.97203C9.06353 7.85226 9.12029 7.7419 9.21329 7.68134C9.30569 7.62145 9.41982 7.6201 9.51343 7.67865Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                            <script type="application/json" class="w-json">
                                                            {
                                                                "items": [],
                                                                "group": ""
                                                            }
                                                        </script>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feedback-row_wrapper is-rev w-dyn-list">
                                        <div role="list" class="feedback_row-rev w-dyn-items">
                                            <div role="listitem" class="w-dyn-item">
                                                <div class="one-feedback">
                                                    <div class="feedback_main-part">
                                                        <div class="one-feed_title-wrap">
                                                            <div class="one-step_col-with-icon">
                                                                <div class="feedback_name">William S</div>
                                                            </div>
                                                            <div class="feedback-price">$200.000</div>
                                                        </div>
                                                        <div class="feed_gradient-divider"></div>
                                                        <p>I&#x27;ve been a trader with Stan&#x27;s firm for a long time
                                                            now, and I can honestly say that it feels like being part of
                                                            a real team. Stan is always available to talk and provide
                                                            guidance, and his
                                                            team is made up of traders who are dedicated to helping each
                                                            other succeed.</p>
                                                    </div>
                                                    <div class="feedback-btn_wrap w-condition-invisible">
                                                        <a href="#"
                                                            data-w-id="63f05754-05c1-c057-552d-3f84c19a9921"
                                                            class="review-button w-inline-block w-dyn-bind-empty w-lightbox">
                                                            <div>Watch video review</div>
                                                            <div class="feed-icon-code w-embed"><svg width="22"
                                                                    height="22" viewbox="0 0 22 22"
                                                                    fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M11 22C17.0751 22 22 17.0751 22 11C22 4.92487 17.0751 0 11 0C4.92487 0 0 4.92487 0 11C0 17.0751 4.92487 22 11 22ZM9.51343 7.67865L14.3445 10.7067C14.4394 10.7666 14.4985 10.8783 14.4985 11.0001C14.4985 11.1219 14.4394 11.2336 14.3445 11.2935L9.51343 14.3216C9.46753 14.3505 9.4162 14.3646 9.36547 14.3646C9.31294 14.3646 9.2604 14.3491 9.21329 14.3189C9.12029 14.2583 9.06353 14.1479 9.06353 14.0282V7.97203C9.06353 7.85226 9.12029 7.7419 9.21329 7.68134C9.30569 7.62145 9.41982 7.6201 9.51343 7.67865Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                            <script type="application/json" class="w-json">
                                                            {
                                                                "items": [],
                                                                "group": ""
                                                            }
                                                        </script>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div role="listitem" class="w-dyn-item">
                                                <div class="one-feedback">
                                                    <div class="feedback_main-part">
                                                        <div class="one-feed_title-wrap">
                                                            <div class="one-step_col-with-icon">
                                                                <div class="feedback_name">Marc R</div>
                                                            </div>
                                                            <div class="feedback-price">$100.000</div>
                                                        </div>
                                                        <div class="feed_gradient-divider"></div>
                                                        <p>I&#x27;ve been trading with {{ env('APP_NAME') }} for a
                                                            while now, and I couldn&#x27;t be happier with the level of
                                                            support and guidance I&#x27;ve received. The team is
                                                            knowledgeable, responsive, and truly
                                                            cares about helping their traders succeed.</p>
                                                    </div>
                                                    <div class="feedback-btn_wrap w-condition-invisible">
                                                        <a href="#"
                                                            data-w-id="63f05754-05c1-c057-552d-3f84c19a9921"
                                                            class="review-button w-inline-block w-dyn-bind-empty w-lightbox">
                                                            <div>Watch video review</div>
                                                            <div class="feed-icon-code w-embed"><svg width="22"
                                                                    height="22" viewbox="0 0 22 22"
                                                                    fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M11 22C17.0751 22 22 17.0751 22 11C22 4.92487 17.0751 0 11 0C4.92487 0 0 4.92487 0 11C0 17.0751 4.92487 22 11 22ZM9.51343 7.67865L14.3445 10.7067C14.4394 10.7666 14.4985 10.8783 14.4985 11.0001C14.4985 11.1219 14.4394 11.2336 14.3445 11.2935L9.51343 14.3216C9.46753 14.3505 9.4162 14.3646 9.36547 14.3646C9.31294 14.3646 9.2604 14.3491 9.21329 14.3189C9.12029 14.2583 9.06353 14.1479 9.06353 14.0282V7.97203C9.06353 7.85226 9.12029 7.7419 9.21329 7.68134C9.30569 7.62145 9.41982 7.6201 9.51343 7.67865Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                            <script type="application/json" class="w-json">
                                                            {
                                                                "items": [],
                                                                "group": ""
                                                            }
                                                        </script>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div role="listitem" class="w-dyn-item">
                                                <div class="one-feedback">
                                                    <div class="feedback_main-part">
                                                        <div class="one-feed_title-wrap">
                                                            <div class="one-step_col-with-icon">
                                                                <div class="feedback_name">Hans D</div>
                                                            </div>
                                                            <div class="feedback-price">$200.000</div>
                                                        </div>
                                                        <div class="feed_gradient-divider"></div>
                                                        <p>Working with {{ env('APP_NAME') }} is a breath of fresh air
                                                            in the trading world. It&#x27;s not just about profits
                                                            - it&#x27;s about being part of a community of traders who
                                                            are passionate about what
                                                            they do and who support each other. </p>
                                                    </div>
                                                    <div class="feedback-btn_wrap w-condition-invisible">
                                                        <a href="#"
                                                            data-w-id="63f05754-05c1-c057-552d-3f84c19a9921"
                                                            class="review-button w-inline-block w-dyn-bind-empty w-lightbox">
                                                            <div>Watch video review</div>
                                                            <div class="feed-icon-code w-embed"><svg width="22"
                                                                    height="22" viewbox="0 0 22 22"
                                                                    fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M11 22C17.0751 22 22 17.0751 22 11C22 4.92487 17.0751 0 11 0C4.92487 0 0 4.92487 0 11C0 17.0751 4.92487 22 11 22ZM9.51343 7.67865L14.3445 10.7067C14.4394 10.7666 14.4985 10.8783 14.4985 11.0001C14.4985 11.1219 14.4394 11.2336 14.3445 11.2935L9.51343 14.3216C9.46753 14.3505 9.4162 14.3646 9.36547 14.3646C9.31294 14.3646 9.2604 14.3491 9.21329 14.3189C9.12029 14.2583 9.06353 14.1479 9.06353 14.0282V7.97203C9.06353 7.85226 9.12029 7.7419 9.21329 7.68134C9.30569 7.62145 9.41982 7.6201 9.51343 7.67865Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                            <script type="application/json" class="w-json">
                                                            {
                                                                "items": [],
                                                                "group": ""
                                                            }
                                                        </script>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div role="listitem" class="w-dyn-item">
                                                <div class="one-feedback">
                                                    <div class="feedback_main-part">
                                                        <div class="one-feed_title-wrap">
                                                            <div class="one-step_col-with-icon">
                                                                <div class="feedback_name">Fredrik W</div>
                                                            </div>
                                                            <div class="feedback-price">$500.000</div>
                                                        </div>
                                                        <div class="feed_gradient-divider"></div>
                                                        <p>Working with Stan and his team is a unique experience that
                                                            you won&#x27;t find with any other trading firm. It
                                                            feels like being part of a family, with a real person behind
                                                            the brand who truly cares
                                                            about your success as a trader.</p>
                                                    </div>
                                                    <div class="feedback-btn_wrap w-condition-invisible">
                                                        <a href="#"
                                                            data-w-id="63f05754-05c1-c057-552d-3f84c19a9921"
                                                            class="review-button w-inline-block w-dyn-bind-empty w-lightbox">
                                                            <div>Watch video review</div>
                                                            <div class="feed-icon-code w-embed"><svg width="22"
                                                                    height="22" viewbox="0 0 22 22"
                                                                    fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M11 22C17.0751 22 22 17.0751 22 11C22 4.92487 17.0751 0 11 0C4.92487 0 0 4.92487 0 11C0 17.0751 4.92487 22 11 22ZM9.51343 7.67865L14.3445 10.7067C14.4394 10.7666 14.4985 10.8783 14.4985 11.0001C14.4985 11.1219 14.4394 11.2336 14.3445 11.2935L9.51343 14.3216C9.46753 14.3505 9.4162 14.3646 9.36547 14.3646C9.31294 14.3646 9.2604 14.3491 9.21329 14.3189C9.12029 14.2583 9.06353 14.1479 9.06353 14.0282V7.97203C9.06353 7.85226 9.12029 7.7419 9.21329 7.68134C9.30569 7.62145 9.41982 7.6201 9.51343 7.67865Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                            <script type="application/json" class="w-json">
                                                            {
                                                                "items": [],
                                                                "group": ""
                                                            }
                                                        </script>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div role="listitem" class="w-dyn-item">
                                                <div class="one-feedback">
                                                    <div class="feedback_main-part">
                                                        <div class="one-feed_title-wrap">
                                                            <div class="one-step_col-with-icon">
                                                                <div class="feedback_name">Benjamin B</div>
                                                            </div>
                                                            <div class="feedback-price">$100.000</div>
                                                        </div>
                                                        <div class="feed_gradient-divider"></div>
                                                        <p>It&#x27;s rare to find a trading firm that feels like a
                                                            real community, but that&#x27;s exactly what you get with
                                                            {{ env('APP_NAME') }} . They care about their traders and
                                                            are dedicated to helping them
                                                            succeed, and that&#x27;s why I&#x27;ve been with them for so
                                                            long.</p>
                                                    </div>
                                                    <div class="feedback-btn_wrap w-condition-invisible">
                                                        <a href="#"
                                                            data-w-id="63f05754-05c1-c057-552d-3f84c19a9921"
                                                            class="review-button w-inline-block w-dyn-bind-empty w-lightbox">
                                                            <div>Watch video review</div>
                                                            <div class="feed-icon-code w-embed"><svg width="22"
                                                                    height="22" viewbox="0 0 22 22"
                                                                    fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M11 22C17.0751 22 22 17.0751 22 11C22 4.92487 17.0751 0 11 0C4.92487 0 0 4.92487 0 11C0 17.0751 4.92487 22 11 22ZM9.51343 7.67865L14.3445 10.7067C14.4394 10.7666 14.4985 10.8783 14.4985 11.0001C14.4985 11.1219 14.4394 11.2336 14.3445 11.2935L9.51343 14.3216C9.46753 14.3505 9.4162 14.3646 9.36547 14.3646C9.31294 14.3646 9.2604 14.3491 9.21329 14.3189C9.12029 14.2583 9.06353 14.1479 9.06353 14.0282V7.97203C9.06353 7.85226 9.12029 7.7419 9.21329 7.68134C9.30569 7.62145 9.41982 7.6201 9.51343 7.67865Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                            <script type="application/json" class="w-json">
                                                            {
                                                                "items": [],
                                                                "group": ""
                                                            }
                                                        </script>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div role="listitem" class="w-dyn-item">
                                                <div class="one-feedback">
                                                    <div class="feedback_main-part">
                                                        <div class="one-feed_title-wrap">
                                                            <div class="one-step_col-with-icon">
                                                                <div class="feedback_name">Adrien K</div>
                                                            </div>
                                                            <div class="feedback-price">$500.000</div>
                                                        </div>
                                                        <div class="feed_gradient-divider"></div>
                                                        <p>What sets Stan and his team apart is their focus on building
                                                            a community of successful traders who support each other.
                                                            It&#x27;s not just about making profits, but about working
                                                            together to achieve shared
                                                            goals</p>
                                                    </div>
                                                    <div class="feedback-btn_wrap w-condition-invisible">
                                                        <a href="#"
                                                            data-w-id="63f05754-05c1-c057-552d-3f84c19a9921"
                                                            class="review-button w-inline-block w-dyn-bind-empty w-lightbox">
                                                            <div>Watch video review</div>
                                                            <div class="feed-icon-code w-embed"><svg width="22"
                                                                    height="22" viewbox="0 0 22 22"
                                                                    fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M11 22C17.0751 22 22 17.0751 22 11C22 4.92487 17.0751 0 11 0C4.92487 0 0 4.92487 0 11C0 17.0751 4.92487 22 11 22ZM9.51343 7.67865L14.3445 10.7067C14.4394 10.7666 14.4985 10.8783 14.4985 11.0001C14.4985 11.1219 14.4394 11.2336 14.3445 11.2935L9.51343 14.3216C9.46753 14.3505 9.4162 14.3646 9.36547 14.3646C9.31294 14.3646 9.2604 14.3491 9.21329 14.3189C9.12029 14.2583 9.06353 14.1479 9.06353 14.0282V7.97203C9.06353 7.85226 9.12029 7.7419 9.21329 7.68134C9.30569 7.62145 9.41982 7.6201 9.51343 7.67865Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                            <script type="application/json" class="w-json">
                                                            {
                                                                "items": [],
                                                                "group": ""
                                                            }
                                                        </script>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-feed pointer-events-off"></div>
                                    <div class="bg-feed is-right pointer-events-off"></div>
                                </div>
                                <div class="feedback_block-mobile">
                                    <div class="feedback-row_wrapper w-dyn-list">
                                        <div fs-cmsslider-element="list" role="list"
                                            class="feedback_row w-dyn-items">
                                            <div role="listitem" class="collection-item w-dyn-item">
                                                <div class="one-feedback">
                                                    <div class="feedback_main-part">
                                                        <div class="one-feed_title-wrap">
                                                            <div class="one-step_col-with-icon">
                                                                <div class="feedback_name">Adrien K</div>
                                                            </div>
                                                            <div class="feedback-price">$500.000</div>
                                                        </div>
                                                        <div class="feed_gradient-divider"></div>
                                                        <p>What sets Stan and his team apart is their focus on building
                                                            a community of successful traders who support each other.
                                                            It&#x27;s not just about making profits, but about working
                                                            together to achieve shared
                                                            goals</p>
                                                    </div>
                                                    <div class="feedback-btn_wrap w-condition-invisible">
                                                        <a href="#"
                                                            data-w-id="df153db0-a659-3608-7baa-14272b147245"
                                                            class="review-button w-inline-block w-dyn-bind-empty w-lightbox">
                                                            <div>Watch video review</div>
                                                            <div class="feed-icon-code w-embed"><svg width="22"
                                                                    height="22" viewbox="0 0 22 22"
                                                                    fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M11 22C17.0751 22 22 17.0751 22 11C22 4.92487 17.0751 0 11 0C4.92487 0 0 4.92487 0 11C0 17.0751 4.92487 22 11 22ZM9.51343 7.67865L14.3445 10.7067C14.4394 10.7666 14.4985 10.8783 14.4985 11.0001C14.4985 11.1219 14.4394 11.2336 14.3445 11.2935L9.51343 14.3216C9.46753 14.3505 9.4162 14.3646 9.36547 14.3646C9.31294 14.3646 9.2604 14.3491 9.21329 14.3189C9.12029 14.2583 9.06353 14.1479 9.06353 14.0282V7.97203C9.06353 7.85226 9.12029 7.7419 9.21329 7.68134C9.30569 7.62145 9.41982 7.6201 9.51343 7.67865Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                            <script type="application/json" class="w-json">
                                                            {
                                                                "items": [],
                                                                "group": ""
                                                            }
                                                        </script>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div role="listitem" class="collection-item w-dyn-item">
                                                <div class="one-feedback">
                                                    <div class="feedback_main-part">
                                                        <div class="one-feed_title-wrap">
                                                            <div class="one-step_col-with-icon">
                                                                <div class="feedback_name">Benjamin B</div>
                                                            </div>
                                                            <div class="feedback-price">$100.000</div>
                                                        </div>
                                                        <div class="feed_gradient-divider"></div>
                                                        <p>It&#x27;s rare to find a trading firm that feels like a
                                                            real community, but that&#x27;s exactly what you get with
                                                            {{ env('APP_NAME') }} . They care about their traders and
                                                            are dedicated to helping them
                                                            succeed, and that&#x27;s why I&#x27;ve been with them for so
                                                            long.</p>
                                                    </div>
                                                    <div class="feedback-btn_wrap w-condition-invisible">
                                                        <a href="#"
                                                            data-w-id="df153db0-a659-3608-7baa-14272b147245"
                                                            class="review-button w-inline-block w-dyn-bind-empty w-lightbox">
                                                            <div>Watch video review</div>
                                                            <div class="feed-icon-code w-embed"><svg width="22"
                                                                    height="22" viewbox="0 0 22 22"
                                                                    fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M11 22C17.0751 22 22 17.0751 22 11C22 4.92487 17.0751 0 11 0C4.92487 0 0 4.92487 0 11C0 17.0751 4.92487 22 11 22ZM9.51343 7.67865L14.3445 10.7067C14.4394 10.7666 14.4985 10.8783 14.4985 11.0001C14.4985 11.1219 14.4394 11.2336 14.3445 11.2935L9.51343 14.3216C9.46753 14.3505 9.4162 14.3646 9.36547 14.3646C9.31294 14.3646 9.2604 14.3491 9.21329 14.3189C9.12029 14.2583 9.06353 14.1479 9.06353 14.0282V7.97203C9.06353 7.85226 9.12029 7.7419 9.21329 7.68134C9.30569 7.62145 9.41982 7.6201 9.51343 7.67865Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                            <script type="application/json" class="w-json">
                                                            {
                                                                "items": [],
                                                                "group": ""
                                                            }
                                                        </script>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div role="listitem" class="collection-item w-dyn-item">
                                                <div class="one-feedback">
                                                    <div class="feedback_main-part">
                                                        <div class="one-feed_title-wrap">
                                                            <div class="one-step_col-with-icon">
                                                                <div class="feedback_name">Fredrik W</div>
                                                            </div>
                                                            <div class="feedback-price">$500.000</div>
                                                        </div>
                                                        <div class="feed_gradient-divider"></div>
                                                        <p>Working with Stan and his team is a unique experience that
                                                            you won&#x27;t find with any other trading firm. It
                                                            feels like being part of a family, with a real person behind
                                                            the brand who truly cares
                                                            about your success as a trader.</p>
                                                    </div>
                                                    <div class="feedback-btn_wrap w-condition-invisible">
                                                        <a href="#"
                                                            data-w-id="df153db0-a659-3608-7baa-14272b147245"
                                                            class="review-button w-inline-block w-dyn-bind-empty w-lightbox">
                                                            <div>Watch video review</div>
                                                            <div class="feed-icon-code w-embed"><svg width="22"
                                                                    height="22" viewbox="0 0 22 22"
                                                                    fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M11 22C17.0751 22 22 17.0751 22 11C22 4.92487 17.0751 0 11 0C4.92487 0 0 4.92487 0 11C0 17.0751 4.92487 22 11 22ZM9.51343 7.67865L14.3445 10.7067C14.4394 10.7666 14.4985 10.8783 14.4985 11.0001C14.4985 11.1219 14.4394 11.2336 14.3445 11.2935L9.51343 14.3216C9.46753 14.3505 9.4162 14.3646 9.36547 14.3646C9.31294 14.3646 9.2604 14.3491 9.21329 14.3189C9.12029 14.2583 9.06353 14.1479 9.06353 14.0282V7.97203C9.06353 7.85226 9.12029 7.7419 9.21329 7.68134C9.30569 7.62145 9.41982 7.6201 9.51343 7.67865Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                            <script type="application/json" class="w-json">
                                                            {
                                                                "items": [],
                                                                "group": ""
                                                            }
                                                        </script>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div role="listitem" class="collection-item w-dyn-item">
                                                <div class="one-feedback">
                                                    <div class="feedback_main-part">
                                                        <div class="one-feed_title-wrap">
                                                            <div class="one-step_col-with-icon">
                                                                <div class="feedback_name">Hans D</div>
                                                            </div>
                                                            <div class="feedback-price">$200.000</div>
                                                        </div>
                                                        <div class="feed_gradient-divider"></div>
                                                        <p>Working with {{ env('APP_NAME') }} is a breath of fresh air
                                                            in the trading world. It&#x27;s not just about profits
                                                            - it&#x27;s about being part of a community of traders who
                                                            are passionate about what
                                                            they do and who support each other. </p>
                                                    </div>
                                                    <div class="feedback-btn_wrap w-condition-invisible">
                                                        <a href="#"
                                                            data-w-id="df153db0-a659-3608-7baa-14272b147245"
                                                            class="review-button w-inline-block w-dyn-bind-empty w-lightbox">
                                                            <div>Watch video review</div>
                                                            <div class="feed-icon-code w-embed"><svg width="22"
                                                                    height="22" viewbox="0 0 22 22"
                                                                    fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M11 22C17.0751 22 22 17.0751 22 11C22 4.92487 17.0751 0 11 0C4.92487 0 0 4.92487 0 11C0 17.0751 4.92487 22 11 22ZM9.51343 7.67865L14.3445 10.7067C14.4394 10.7666 14.4985 10.8783 14.4985 11.0001C14.4985 11.1219 14.4394 11.2336 14.3445 11.2935L9.51343 14.3216C9.46753 14.3505 9.4162 14.3646 9.36547 14.3646C9.31294 14.3646 9.2604 14.3491 9.21329 14.3189C9.12029 14.2583 9.06353 14.1479 9.06353 14.0282V7.97203C9.06353 7.85226 9.12029 7.7419 9.21329 7.68134C9.30569 7.62145 9.41982 7.6201 9.51343 7.67865Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                            <script type="application/json" class="w-json">
                                                            {
                                                                "items": [],
                                                                "group": ""
                                                            }
                                                        </script>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div role="listitem" class="collection-item w-dyn-item">
                                                <div class="one-feedback">
                                                    <div class="feedback_main-part">
                                                        <div class="one-feed_title-wrap">
                                                            <div class="one-step_col-with-icon">
                                                                <div class="feedback_name">Marc R</div>
                                                            </div>
                                                            <div class="feedback-price">$100.000</div>
                                                        </div>
                                                        <div class="feed_gradient-divider"></div>
                                                        <p>I&#x27;ve been trading with {{ env('APP_NAME') }} for a
                                                            while now, and I couldn&#x27;t be happier with the level of
                                                            support and guidance I&#x27;ve received. The team is
                                                            knowledgeable, responsive, and truly
                                                            cares about helping their traders succeed.</p>
                                                    </div>
                                                    <div class="feedback-btn_wrap w-condition-invisible">
                                                        <a href="#"
                                                            data-w-id="df153db0-a659-3608-7baa-14272b147245"
                                                            class="review-button w-inline-block w-dyn-bind-empty w-lightbox">
                                                            <div>Watch video review</div>
                                                            <div class="feed-icon-code w-embed"><svg width="22"
                                                                    height="22" viewbox="0 0 22 22"
                                                                    fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M11 22C17.0751 22 22 17.0751 22 11C22 4.92487 17.0751 0 11 0C4.92487 0 0 4.92487 0 11C0 17.0751 4.92487 22 11 22ZM9.51343 7.67865L14.3445 10.7067C14.4394 10.7666 14.4985 10.8783 14.4985 11.0001C14.4985 11.1219 14.4394 11.2336 14.3445 11.2935L9.51343 14.3216C9.46753 14.3505 9.4162 14.3646 9.36547 14.3646C9.31294 14.3646 9.2604 14.3491 9.21329 14.3189C9.12029 14.2583 9.06353 14.1479 9.06353 14.0282V7.97203C9.06353 7.85226 9.12029 7.7419 9.21329 7.68134C9.30569 7.62145 9.41982 7.6201 9.51343 7.67865Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                            <script type="application/json" class="w-json">
                                                            {
                                                                "items": [],
                                                                "group": ""
                                                            }
                                                        </script>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div role="listitem" class="collection-item w-dyn-item">
                                                <div class="one-feedback">
                                                    <div class="feedback_main-part">
                                                        <div class="one-feed_title-wrap">
                                                            <div class="one-step_col-with-icon">
                                                                <div class="feedback_name">William S</div>
                                                            </div>
                                                            <div class="feedback-price">$200.000</div>
                                                        </div>
                                                        <div class="feed_gradient-divider"></div>
                                                        <p>I&#x27;ve been a trader with Stan&#x27;s firm for a long time
                                                            now, and I can honestly say that it feels like being part of
                                                            a real team. Stan is always available to talk and provide
                                                            guidance, and his
                                                            team is made up of traders who are dedicated to helping each
                                                            other succeed.</p>
                                                    </div>
                                                    <div class="feedback-btn_wrap w-condition-invisible">
                                                        <a href="#"
                                                            data-w-id="df153db0-a659-3608-7baa-14272b147245"
                                                            class="review-button w-inline-block w-dyn-bind-empty w-lightbox">
                                                            <div>Watch video review</div>
                                                            <div class="feed-icon-code w-embed"><svg width="22"
                                                                    height="22" viewbox="0 0 22 22"
                                                                    fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M11 22C17.0751 22 22 17.0751 22 11C22 4.92487 17.0751 0 11 0C4.92487 0 0 4.92487 0 11C0 17.0751 4.92487 22 11 22ZM9.51343 7.67865L14.3445 10.7067C14.4394 10.7666 14.4985 10.8783 14.4985 11.0001C14.4985 11.1219 14.4394 11.2336 14.3445 11.2935L9.51343 14.3216C9.46753 14.3505 9.4162 14.3646 9.36547 14.3646C9.31294 14.3646 9.2604 14.3491 9.21329 14.3189C9.12029 14.2583 9.06353 14.1479 9.06353 14.0282V7.97203C9.06353 7.85226 9.12029 7.7419 9.21329 7.68134C9.30569 7.62145 9.41982 7.6201 9.51343 7.67865Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                            <script type="application/json" class="w-json">
                                                            {
                                                                "items": [],
                                                                "group": ""
                                                            }
                                                        </script>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-delay="4000" data-animation="slide" class="feedback-slider w-slider"
                                        data-autoplay="false" data-easing="ease" data-hide-arrows="false"
                                        data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3"
                                        data-duration="500" data-infinite="true" fs-cmsslider-element="slider">
                                        <div class="w-slider-mask">
                                            <div class="one-hero-slide w-slide"></div>
                                        </div>
                                        <div class="hide-arr w-slider-arrow-left">
                                            <div class="w-icon-slider-left"></div>
                                        </div>
                                        <div class="hide-arr w-slider-arrow-right">
                                            <div class="w-icon-slider-right"></div>
                                        </div>
                                        <div class="slide-nav w-slider-nav w-round"></div>
                                    </div>
                                </div>
                            </div><img src="{{ asset('home-assets/assets/img/bg-blur.svg')}}" loading="eager"
                                alt="Background blur overlay blue" class="blur-in-bg">
                        </div>
                    </div>
                </div>
            </section>
            <section class="faq_section">
                <div class="padding-global">
                    <div class="container-large">
                        <div id="faq" class="spacer-xhuge"></div>
                        <div class="faq-block">
                            <div class="h2-wrap">
                                <h2>Frequently Asked Questions</h2>
                                <div class="subtitle-h2 is-big">Still got more questions? Read our FAQ</div>
                            </div>
                            <div class="spacer-xmedium"></div>
                            <div class="all-items-faq">
                                <div class="faq-item">
                                    <div class="faq-question">
                                        <h3 class="faq-title">Who are we?</h3>
                                        <div class="p-m-wrap">
                                            <div class="minus"></div>
                                            <div class="plus"></div>
                                        </div>
                                    </div>
                                    <div class="faq-answer">
                                        <div class="faq-answer-inner">
                                            <p class="paragraph">We are a company dedicated to providing traders with
                                                the necessary resources, support, and capital to succeed in the
                                                competitive FX market. Our goal is to help traders reach their full
                                                potential by offering
                                                a range of services, including mentorship, educational materials, and
                                                advanced trading tools.<br></p>
                                        </div>
                                    </div>
                                    <div class="faq-horizontal-divider"></div>
                                </div>
                                <div class="faq-item">
                                    <div class="faq-question">
                                        <h3 class="faq-title">How much money can you make?</h3>
                                        <div class="p-m-wrap">
                                            <div class="minus"></div>
                                            <div class="plus"></div>
                                        </div>
                                    </div>
                                    <div class="faq-answer">
                                        <div class="faq-answer-inner">
                                            <p class="paragraph">The amount of money you can make with our program is
                                                truly unlimited and entirely up to you. We have seen traders who
                                                consistently earn $2,000 per month, while others are making well over
                                                $20,000 per month.
                                                The sky&#x27;s the limit! Your earning potential will depend on a
                                                variety of factors, such as your experience level, risk tolerance, and
                                                trading strategy. However, we provide you with all the tools and
                                                resources
                                                necessary to succeed and reach your financial goals. We encourage you to
                                                take advantage of our training and mentorship programs, as well as our
                                                community of traders who can offer support and guidance along
                                                the way. With dedication, discipline, and a commitment to learning, you
                                                have the potential to achieve financial freedom with our
                                                program.&quot;<br></p>
                                        </div>
                                    </div>
                                    <div class="faq-horizontal-divider"></div>
                                </div>
                                <div class="faq-item">
                                    <div class="faq-question">
                                        <h3 class="faq-title">1 Step Rules</h3>
                                        <div class="p-m-wrap">
                                            <div class="minus"></div>
                                            <div class="plus"></div>
                                        </div>
                                    </div>
                                    <div class="faq-answer">
                                        <div class="faq-answer-inner">
                                            <p class="paragraph">Phase 1: 10% Target<br>Phase 2: None<br>4% Daily
                                                Drawdown<br>Max 2% Loss per Trade Idea<br>5% Overall Drawdown (Trailing
                                                on highest balance)<br><br>7-14 Day Withdrawals<br></p>
                                        </div>
                                    </div>
                                    <div class="faq-horizontal-divider"></div>
                                </div>
                                <div class="faq-item">
                                    <div class="faq-question">
                                        <h3 class="faq-title">2 Step Rules</h3>
                                        <div class="p-m-wrap">
                                            <div class="minus"></div>
                                            <div class="plus"></div>
                                        </div>
                                    </div>
                                    <div class="faq-answer">
                                        <div class="faq-answer-inner">
                                            <p class="paragraph">Phase 1: 10% Target <br>Phase 2: 5% Target <br>5%
                                                Daily Drawdown<br>10% Overall Drawdown (static on balance)<br>Max 2%
                                                Loss per Trade Idea<br>Drawdown reset end of day<br>‍<br>7-14 Day
                                                Withdrawals<br></p>
                                        </div>
                                    </div>
                                    <div class="faq-horizontal-divider"></div>
                                </div>
                                <div class="faq-item">
                                    <div class="faq-question">
                                        <h3 class="faq-title">What leverage is available?</h3>
                                        <div class="p-m-wrap">
                                            <div class="minus"></div>
                                            <div class="plus"></div>
                                        </div>
                                    </div>
                                    <div class="faq-answer">
                                        <div class="faq-answer-inner">
                                            <p class="paragraph">FX 1:100<br>Indices/Gold 1:50<br>Coins: 1:5<br></p>
                                        </div>
                                    </div>
                                    <div class="faq-horizontal-divider"></div>
                                </div>
                                <div class="faq-item">
                                    <div class="faq-question">
                                        <h3 class="faq-title">Max allocation &amp; scaling</h3>
                                        <div class="p-m-wrap">
                                            <div class="minus"></div>
                                            <div class="plus"></div>
                                        </div>
                                    </div>
                                    <div class="faq-answer">
                                        <div class="faq-answer-inner">
                                            <p class="paragraph">We offer scaling plan of 25% growth for every 3
                                                months you&#x27;re profitable 10% at the end of the 3 month period.
                                                <br><br>Current max allocation is set to $750,000 per customer.
                                                <br><br>For the bigger
                                                plans, maximum account merging is $2m (ex. $1m x 2)<br>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="faq-horizontal-divider"></div>
                                </div>
                                <div class="faq-item">
                                    <div class="faq-question">
                                        <h3 class="faq-title">Can I merge accounts?</h3>
                                        <div class="p-m-wrap">
                                            <div class="minus"></div>
                                            <div class="plus"></div>
                                        </div>
                                    </div>
                                    <div class="faq-answer">
                                        <div class="faq-answer-inner">
                                            <p class="paragraph">Yes we allow account merging, simply just send us an
                                                email with the account Id’s you’d like to merge.<br></p>
                                        </div>
                                    </div>
                                    <div class="faq-horizontal-divider"></div>
                                </div>
                                <div class="faq-item">
                                    <div class="faq-question">
                                        <h3 class="faq-title">Profit split and payout times</h3>
                                        <div class="p-m-wrap">
                                            <div class="minus"></div>
                                            <div class="plus"></div>
                                        </div>
                                    </div>
                                    <div class="faq-answer">
                                        <div class="faq-answer-inner">
                                            <p class="paragraph">The first payout is available after 7-14 days since
                                                the first trade placed on a funded account. Subsequent payouts will be
                                                available to you every 7-14 days. <br><br>Unlike other firms, we
                                                want to make
                                                sure that you have regular access to the hard earned profits you have
                                                made. <br><br>Payout is only valid if the trader does not violate any
                                                trading rule or go against the signed terms of use agreement.
                                                Any suspicious activities upon review of the account can delay this
                                                process. Please cooperate with us in order to receive your profit split
                                                quicker if it is a false alert.<br><br>Our default profit split
                                                is capped at 80% for the trader and 20% to us. The good news is, you may
                                                upgrade your profit split to 90% or 100% when you purchase the add-on
                                                through our checkout. If you’re willing to have more skin in
                                                the game, we give you the opportunity to earn more.<br></p>
                                        </div>
                                    </div>
                                    <div class="faq-horizontal-divider"></div>
                                </div>
                                <div class="faq-item">
                                    <div class="faq-question">
                                        <h3 class="faq-title">Key Rules</h3>
                                        <div class="p-m-wrap">
                                            <div class="minus"></div>
                                            <div class="plus"></div>
                                        </div>
                                    </div>
                                    <div class="faq-answer">
                                        <div class="faq-answer-inner">
                                            <p class="paragraph">We believe that success in trading requires not only
                                                skill and knowledge, but also discipline and adherence to rules.
                                                <br><br>Therefore, we require all traders to follow the basic rules set
                                                out in our plan,
                                                which includes daily and total drawdown limits. We believe that this
                                                helps to manage risk and prevent large losses that could wipe out your
                                                account.<br><br>In addition, we prohibit any attempts to cheat
                                                the system through glitches or high-frequency trading, as we believe in
                                                fair and ethical trading practices.<br><br>That being said, we do allow
                                                traders to trade news events and to hold positions overnight
                                                or over weekends. <br><br>We believe that these opportunities can lead
                                                to profitable trades and increased earnings potential. It&#x27;s
                                                important to note that we are looking for profitable traders who
                                                can make us both money. <br><br>Therefore, traders who consistently
                                                violate our rules or fail to generate profits may not be a good fit for
                                                our challenge. <br><br>We want to work with traders who are
                                                dedicated, disciplined, and committed to achieving success in the
                                                markets. <br><br>If you&#x27;re ready to take your trading to the next
                                                level and generate consistent profits, we invite you to join our
                                                community and start your journey to financial freedom.<br>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="faq-horizontal-divider"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="{{ asset('home-assets/assets/img/bg-2.svg')}}" loading="eager" alt="Background overlay lines four"
                    class="bg-2">
                <img src="{{ asset('home-assets/assets/img/bg-5.svg')}}" loading="eager" alt="Background overlay lines five"
                    class="bg-5">
            </section>
            <section class="cta_section">
                <div class="padding-global is-off">
                    <div class="container-xlarge">
                        <div id="cta" class="cta-block">
                            <div class="spacer-xlarge"></div>
                            <div class="h2-wrap">
                                <h2>Trade with more capital today.</h2>
                                <div class="subtitle-h2">Start trading with confidence today</div>
                            </div>
                            <div class="spacer-medium"></div><a href="{{ route('register')}}"
                                class="button is-fill w-button">Get Started</a>
                        </div>
                    </div>
                </div>
            </section>
            @include('includes.home-footer')
        </main>
    </div>
</body>

@include('includes.home-script')

</html>
