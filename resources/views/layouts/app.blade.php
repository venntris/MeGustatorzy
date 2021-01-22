<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Me') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @if (Route::has('login'))
            @auth
                <div><navbar-component  :user="{{ auth()->user() }}"></navbar-component></div>
            @else
                <div><navbar-welcome-component></navbar-welcome-component></div>
                <div class="row justify-content-center" >
        <div class="col-md-8">
        <div><logo-component></logo-component> </div>
        </div>
        </div>
            @endif
        @endif
       
        
       
         
        
        @yield('content')
        <div class="d-flex end"></div>
        <div><footer-component></footer-component></div>
    </div>
</body>
</html>
