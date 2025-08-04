<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="x9iC5cdNsSS9KbmHcUao9bDJ5pjO6M0wgGeMt42c">
    <title>Home - {{ config('app.name') }}</title>

    <link rel="icon" href="{{ asset('home-assets/images/favicon.png') }}" sizes="any">
    <!-- <link rel="apple-touch-icon" href="apple-touch-icon.html"> -->

    <link rel="stylesheet" href="{{ asset('home-assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('home-assets/css/welcome.css') }}">


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        /* Style for the preloader */
        #preloader {
            background-color: white;
            height: 100vh;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 9999;
        }

        /* Hide the preloader when page is loaded */
        body.loaded #preloader {
            display: none;
        }
    </style>


</head>