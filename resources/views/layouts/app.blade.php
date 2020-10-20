<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Pear') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Pear') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('producto.index') }}">{{ __('Productos') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('marca.index') }}">{{ __('Marcas') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('categoria.index') }}">{{ __('Categorias') }}</a>
                        </li>

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <!--BANNER-->
        <section id="banner">
            <div id="carousel" class="carousel slide" data-ride="carousel" data-pause="false">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-interval="10000">
                        <img class="d-block w-100" src="{{asset('storage/banner1.jpg')}}" alt="NBA 1">
                    </div>
                    <div class="carousel-item" data-interval="2000">
                        <img class="d-block w-100" src="{{asset('storage/banner2.jpg')}}" alt="NBA 2">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('storage/banner3.jpg')}}" alt="NBA 3">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('storage/nuevobanner.jpg')}}" alt="NBA 3">
                    </div>
                    <div class="overlay">
                        <div class="container">
                            <div class="row align-items-center pt-3">
                                <div class="col-md-6 offset-md-6 text-center text-md-right">
                                    <h2>Ven y Conocenos</h2>
                                    <p class="d-block">
                                        calle 15 #3-69
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/BANNER-->


        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>