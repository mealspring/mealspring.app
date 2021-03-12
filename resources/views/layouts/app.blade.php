<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body style="font-family: 'Comfortaa', cursive;">
    <div id="app">
        <nav class="navbar has-shadow is-white">
            <div class="navbar-brand">
                <a class="navbar-item" href="{{ url('/home') }}">mealspring</a>
                <a class="navbar-burger" id="burger">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>
            <div class="navbar-menu" id="nav-links">
            @if (Route::has('login'))
                <div class="navbar-end">
                    @guest
                        <a class="navbar-item" href="{{ route('login') }}">{{ __('Login') }}</a>

                        @if (Route::has('register'))
                            <a class="navbar-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                        <a class="navbar-item"> {{ Auth::user()->name }}</a>
                        <a class="navbar-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         {{ __('Logout') }}</a>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>

                    @endguest
                </div>
            @endif
            
        </div>
        </nav>


            <main>
                @yield('content')
            </main>     
    </div>
</body>
</html>
