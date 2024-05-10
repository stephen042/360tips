    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="{{ config('app.name')}} – We are the most outstanding digital assets trading broker.">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta http-equiv="refresh" content="{{ config('session.lifetime') * 60 }}">
    <meta name="keywords"
        content="crypto, We are the most outstanding digital assets trading broker.">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon"
        href="{{ asset('home-assets/assets/fav/favicon.png') }}">

    <!-- TITLE -->
    <title>{{ config('app.name') }} - {{ $title ?? '' }}</title>
    <title></title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{ URL('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- STYLE CSS -->
    <link href="{{ URL('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ URL('assets/css/plugins.css') }}" rel="stylesheet">

    <!--- FONT-ICONS CSS -->
    <link href="{{ URL('assets/css/icons.css') }}" rel="stylesheet">

    <!-- INTERNAL SWITCHER CSS -->
    <link href="{{ URL('assets/switcher/css/switcher.css') }}" rel="stylesheet">
    <link href="{{ URL('assets/switcher/demo.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
        option {
            color: rgb(48, 46, 46);
        }
    </style>