<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>Laravel</title>


    </head>
    <body style="font-family: 'Comfortaa', cursive;">
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
                    @auth
                        <a class="navbar-item" href="{{ url('/home') }}">Home</a>
                    @else
                        <a class="navbar-item" href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a class="navbar-item" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            
        </div>
        </nav>
        <div class="columns is-centered" style="margin-top: 235px;">
            <div class="column is-half">
              
                        <p class="title" style="text-align: center;">
                            Welcome to the future home of <span style="color: green;">mealspring</span>
                        </p>
                        <p class="subtitle" style="text-align: center;">
                            <strong>A free, community-driven app for planning and sharing meals.</strong><br>
                        </p>
           
            </div>
        </div>
        
    <script>
        const burger = document.querySelector('#burger');
        const navbarMenu = document.querySelector('#nav-links'); 
        burger.addEventListener('click', ()=>{
            navbarMenu.classList.toggle('is-active');
        })
    </script>
  </body>
</html>
