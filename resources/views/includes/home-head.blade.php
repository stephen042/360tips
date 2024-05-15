<head>

    <link rel="preconnect" href="https://ajax.googleapis.com">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index,follow">
    <title>{{ env('APP_NAME') }} - Home</title>
    <meta name="description"
        content="Unlock your trading potential with our comprehensive solutions designed to support traders. Explore our expert guidance and lucrative opportunities to propel your trading career.">
    <meta name="keywords" content="{{ env('APP_NAME') }} ">
    <meta property="og:title" content="{{ env('APP_NAME') }}   Forex Trading">
    <meta property="og:description"
        content="Unlock your trading potential with our comprehensive solutions designed to support traders. Explore our expert guidance and lucrative opportunities to propel your trading career.">
    <meta property="og:type" content="website">
    <link href="{{ URL('home-assets/assets/fav/favicon.png') }}" rel="shortcut icon" type="image/x-icon">
    <link href="{{ URL('home-assets/assets/fav/favicon-apple-touch.png') }}" rel="apple-touch-icon">
    <link type="text/css" href="{{ URL('home-assets/assets/css/styles.css?ver=1') }}" rel="stylesheet">
    <script src="{{ URL('home-assets/ajax/libs/webfont/1.6.26/webfont.js') }}"></script>
    <script async="" src="{{ URL('home-assets/gtag/js?id=G-H20B6QYEP7') }}"></script>
    <script src="{{ URL('home-assets/assets/js/jquery-3.7.1.min.js') }}" rel="preload"></script>
    <script async="" src="{{ URL('home-assets/assets/js/Fundingtraders.js?ver=1715243159') }}" rel="preload"></script>
    <script async="" src="{{ URL('home-assets/assets/js/cmsslider.min.js') }}"></script>
    <script type="text/javascript">
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('set', 'developer_id.dZGVlNj', true);
        gtag('config', 'G-H20B6QYEP7');
    </script>
    <script type="text/javascript">
        WebFont.load({
            google: {
                families: ["Poppins:regular,500,600,700,800", "Manrope:200,300,regular,500,600,700,800"]
            }
        });
    </script>

    <noscript><img height="1" width="1" style="display:none"
            src="{{ URL('home-assets/tr?id=3616614748582193&ev=PageView&noscript=1') }}"></noscript>

    <script src="{{ URL('home-assets/tapfiliate.js') }}" type="text/javascript" async=""></script>

    <style>
        :root {
            --bg-color: rgb(20, 20, 20);
            --card-color: rgb(23, 23, 23);
        }

        html {
            font-size: 1rem;
        }

        body {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            font-smoothing: antialiased;
            text-rendering: optimizeLegibility;
        }

        *[tabindex]:focus-visible,
        input[type="file"]:focus-visible {
            outline: 0.125rem solid #4d65ff;
            outline-offset: 0.125rem;
        }

        .Discover-block {
            background: radial-gradient(33.81% 35.55% at 50.81% 45.47%, rgba(160, 179, 231, 0.6) 0%, rgba(72, 128, 243, 0.6) 22.93%, rgba(33, 59, 126, 0.6) 47.91%, rgba(12, 12, 21, 0) 95.34%);
        }

        #one-acc_wrap:hover>.one-acc_wrap::after {
            opacity: 1;
        }

        .one-acc_wrap:hover::before {
            opacity: 1;
        }

        .one-acc_wrap::before,
        .one-acc_wrap::after {
            border-radius: inherit;
            content: "";
            height: 100%;
            left: 0px;
            opacity: 0;
            position: absolute;
            top: 0px;
            transition: opacity 500ms;
            width: 100%;
        }

        .one-acc_wrap::before {
            background: radial-gradient(500px circle at var(--mouse-x) var(--mouse-y), rgba(104, 148, 248, 0.55), transparent 40%);
            z-index: 3;
        }

        .one-acc_wrap::after {
            background: radial-gradient(300px circle at var(--mouse-x) var(--mouse-y), rgba(25, 92, 255, 0.7), transparent 40%);
            z-index: 1;
            filter: blur(15px);
        }

        .one-acc_wrap>.card-content {
            background-color: var(--card-color);
            border-radius: inherit;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
            inset: 1px;
            padding: 10px;
            position: absolute;
            z-index: 2;
        }

        .w-richtext> :not(div):first-child,
        .w-richtext>div:first-child> :first-child {
            margin-top: 0 !important;
        }

        .w-richtext>:last-child,
        .w-richtext ol li:last-child,
        .w-richtext ul li:last-child {
            margin-bottom: 0 !important;
        }

        .pointer-events-off {
            pointer-events: none;
        }

        .pointer-events-on {
            pointer-events: auto;
        }

        .div-square::after {
            content: "";
            display: block;
            padding-bottom: 100%;
        }

        .container-medium,
        .container-small,
        .container-large {
            margin-right: auto !important;
            margin-left: auto !important;
        }

        .text-style-3lines {
            display: -webkit-box;
            overflow: hidden;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
        }

        .text-style-2lines {
            display: -webkit-box;
            overflow: hidden;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
        }

        .display-inlineflex {
            display: inline-flex;
        }

        .hide {
            display: none !important;
        }

        .margin-0 {
            margin: 0rem !important;
        }

        .padding-0 {
            padding: 0rem !important;
        }

        .spacing-clean {
            padding: 0rem !important;
            margin: 0rem !important;
        }

        .margin-top {
            margin-right: 0rem !important;
            margin-bottom: 0rem !important;
            margin-left: 0rem !important;
        }

        .padding-top {
            padding-right: 0rem !important;
            padding-bottom: 0rem !important;
            padding-left: 0rem !important;
        }

        .margin-right {
            margin-top: 0rem !important;
            margin-bottom: 0rem !important;
            margin-left: 0rem !important;
        }

        .padding-right {
            padding-top: 0rem !important;
            padding-bottom: 0rem !important;
            padding-left: 0rem !important;
        }

        .margin-bottom {
            margin-top: 0rem !important;
            margin-right: 0rem !important;
            margin-left: 0rem !important;
        }

        .padding-bottom {
            padding-top: 0rem !important;
            padding-right: 0rem !important;
            padding-left: 0rem !important;
        }

        .margin-left {
            margin-top: 0rem !important;
            margin-right: 0rem !important;
            margin-bottom: 0rem !important;
        }

        .padding-left {
            padding-top: 0rem !important;
            padding-right: 0rem !important;
            padding-bottom: 0rem !important;
        }

        .margin-horizontal {
            margin-top: 0rem !important;
            margin-bottom: 0rem !important;
        }

        .padding-horizontal {
            padding-top: 0rem !important;
            padding-bottom: 0rem !important;
        }

        .margin-vertical {
            margin-right: 0rem !important;
            margin-left: 0rem !important;
        }

        .padding-vertical {
            padding-right: 0rem !important;
            padding-left: 0rem !important;
        }

        .switch {
            -webkit-tap-highlight-color: transparent;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .switch:focus {
            outline: none !important;
        }

        .w-slider-dot {
            width: 0.5rem;
            height: 0.5rem;
            background-color: rgba(255, 255, 255, .2);
        }

        .faq-horizontal-divider {
            pointer-events: none;
        }

        @media screen and (max-width:1280px) {
            html {
                font-size: calc(0.37621832358674473rem + 0.779727095516569vw);
            }
        }

        @media screen and (max-width:767px) {
            html {
                font-size: 1rem;
            }
        }

        @media screen and (max-width: 991px) {

            .hide,
            .hide-tablet {
                display: none !important;
            }
        }

        @media screen and (max-width: 767px) {
            .hide-mobile-landscape {
                display: none !important;
            }
        }

        @media screen and (max-width: 479px) {
            .hide-mobile {
                display: none !important;
            }
        }
    </style>
</head>