  <!-- META DATA -->
  <meta charset="UTF-8">
  <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description"
      content="{{ config('app.name') }} – crypto, We are the most outstanding digital assets trading broker.">
  <meta name="author" content="Spruko Technologies Private Limited">
  <meta http-equiv="refresh" content="{{ config('session.lifetime') * 60 }}">
  <meta name="keywords"
      content="crypto, We are the most outstanding digital assets trading broker.">

  <!-- FAVICON -->
  <link rel="shortcut
      icon" type="image/x-icon" href="{{ asset('home-assets/assets/fav/favicon-apple-touch.png') }}">

  <!-- TITLE -->
  <title>{{ config('app.name') }}  {{ $title ?? '' }}</title>
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

      /* Styling for the bottom navigation bar */
      .bottom-navbar {
          display: none;
          /* Initially hide the bottom navigation bar */
      }

      @media (max-width: 768px) {
          .bottom-navbar {
              display: block;
              /* Show the bottom navigation bar on screens up to 768px width (typically mobile devices) */
              position: fixed;
              bottom: 0;
              left: 0;
              width: 100%;
              background-color: #30304D;
              padding: 15px 0;
              overflow-x: auto;
              /* Enable horizontal scrolling if needed */
              white-space: nowrap;
              /* Prevent line breaks */
          }

          .bottom-navbar ul {
              list-style-type: none;
              margin: 0;
              padding: 0;
              text-align: center;
          }

          .bottom-navbar li {
              display: inline-block;
              margin-right: 20px;
          }

          .bottom-navbar li:last-child {
              margin-right: 0;
          }

          .bottom-navbar a {
              color: white;
              text-decoration: none;
              display: block;
              /* Ensure the entire block is clickable */
          }

          .bottom-navbar a:active {
              text-decoration: underline;
          }

          .bottom-navbar a i {
              display: block;
              /* Ensure the icon and text are on separate lines */
              /* margin: 0px; */
              /* Add some space between the icon and text */
          }
      }
  </style>
