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
        <div class="content" style="min-height: calc(110vh - 120px)" >
            @if (Route::has('login'))
               @auth
                    <div><navbar-component  :user="{{ auth()->user() }}"></navbar-component></div>
                @else
                    <div><navbar-welcome-component></navbar-welcome-component></div>
                
        <!-- <div class="col-md-12">
        <div class="row justify-content-center" style="display: flex align-items: center height: 200px">
                                                       
        <div ><logo-component></logo-component> </div>
        </div>
        </div> -->
              @endif
          @endif
       
        
       
         <div class="col-md-12" style="height:50px"></div>
      
        @yield('content')
            <div class="d-flex end"></div>
        </div>  
        
        <!-- <div><footer-component></footer-component></div> -->
        <footer><footer-component></footer-component></footer>
    
    </div>
</body>
</html>
