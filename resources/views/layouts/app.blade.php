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
    <link href="{{ URL::to('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com//font-awesome/4.6.1/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="{{ URL::to('css/custom.css') }}" rel="stylesheet">

</head>
<body>
<div id="page">
    @include('partials.header')
    <div id="app">
        <div class="row">
            <div class="column" id="column-left">
                <div class="w3-sidebar w3-bar-block">
                    <a href="{{route('segelyachts')}}" class="w3-bar-item w3-button">Segel Yachten</a>
                    <a href="#" class="w3-bar-item w3-button">Link 2</a>
                    <a href="#" class="w3-bar-item w3-button">Link 3</a>
                </div>
            </div>
            <div class="column" id="column-middle">
                @yield('content')
            </div>
            <div class="column" id="column-right">
                <h3>Kontakt</h3>
            </div>

            <!-- Scripts -->
            <script src="{{ asset('js/app.js') }}"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"
                    integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4"
                    crossorigin="anonymous"></script>
        </div>
    </div>
</body>
</html>
