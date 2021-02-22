<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- CSRF Token -->
        <meta name="csrf_token" content="{{ csrf_token() }}">
        
        <title>E-Management</title>
        
        <!-- Scripts -->
        <script src="{{ secure_asset('js/app.js') }}" defer></script>
        <script src="{{ secure_asset('js/main.js') }}" defer></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
        
       
        
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href0="https://fonts.googleapis.com/css?family=Raleway:300,400,600"
        rel="stylesheet" type="text_css">
        
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/user.css') }}" rel="stylesheet">
    </head>
    <body>
        
       <div id="app">
            <nav class="navbar navbar-expand-md navbar-dark navbar-e-management">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}"> 
                    {{ config('app.name','e-management')}} 
                    </a>
                    <button class="navbar-toggler" type="button" 
                    data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
                            </ul>
                        
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            
                            @guest
                           <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }} </a></li>
                
                            @else
                            
                           <li class="nav-item dropdown">
                               <a id="navbarDropdown" class="nav-link dropdown-toggle" 
                               href="#"role="button" data-toggle="dropdown" 
                               aria-haspopup="true" aria-expanded="false" v-pre>
                                   
                                   {{ Auth::user()->name }} <span class="caret"></span>
                               </a>
                               
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                   <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); 
                                   document.getElementById('logout-form').submit();">
                                       
                                       {{ __('Logout') }}
                                   </a>
                                   
                                   <form id="logout-form" action="{{ route('logout') }}" method="POST" 
                                   style="display: none;">
                                       
                                       @csrf
                                   </form>
                               </div>
                           </li>
                           @endguest
                        </ul>
                    </div>
                </div>
            </nav>
            
            <!-- フラッシュメッセージがある場合のみ表示 -->
            
            
            <!-- Scripts -->
            
            <script type="text/javascript">
            @if (session('msg_success'))
                $(function(){
                        ('{{ session('msg_success') }}');
                });
            @endif
            </script>

            @if (session('flash_message'))
            <div class="flash_message bg-success text-center py-3 my-0">
                {{ session('flash_message') }}
            </div>
            @endif
    
            
            <main class="mt-4">
                @yield('content') 
            </main>
        </div>
    </body>
</html>








