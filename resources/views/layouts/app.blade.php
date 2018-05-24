<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/bulma.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
        crossorigin="anonymous">
    <style>
    .navbar{
        margin-bottom: 20px;
    }
    </style>
</head>

<body>
    <div id="app">
        @include('layouts.navbar')
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/components.js') }}"></script>
    <script>
        $(".navbar-burger").click(function () {
            $(this).toggleClass("is-active");
            $(".navbar-menu").toggleClass("is-active");
        });
        $(".has-dropdown").click(function(){
            event.preventDefault()
        })
    </script>
</body>

</html>