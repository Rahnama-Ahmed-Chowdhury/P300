<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BloodBank') }}</title>

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
        <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search" style="background-color:#000000;">
        <div class="container"><a class="navbar-brand" href="/">Blood Bank</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/">Home<br></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/donor_list">Donar</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/manuel">Manuel</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/about-us">About Us</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/contact-us">Contact Us</a></li>
                </ul>
            </div>
           <div class="row text-right" >
               @guest
          
                           @if (Route::has('login'))
                                
                                    <a align="text-right" class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                              
                            @endif
                            
                            @if (Route::has('register'))
                             
                                    <a align="text-right" class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                             
                            @endif
                        </div>
                       
                        @else
                             <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
           
        </div>
    </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
