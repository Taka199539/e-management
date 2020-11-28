<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- CSRF Token -->
        <meta name="csrf-Token" content="{{ csrf-Token }}">
        
        <title>@yield('title')</title>
        
        <!-- Scripts -->
        <script src="{{ secure_asset('js/app.js') }}" defer></script>
        
        <!-- Fonts -->
        <link rel="dns-prefetch" href="/fonts.gstatic.com">
        <link href="https:/fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        
        <!-- Styles -->
        <link href="{{ asset('css.app.js') }}" rel="stylesheet">
        <style>body{background-color: tomato;}</style>
    </head>
    
    <body>
        
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name','e-management') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" 
            aria-controls="navbarSupportedContent" aria-expand="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                </ul>
            <ul class = "navbar-nav ml-auto">
                
             </ul>       
             
           </div>
        </nav>
        
        <main class="py-4">
            @yield('content')
        </main>
    </body>
</html>

