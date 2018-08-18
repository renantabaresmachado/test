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
        <link href="{{ asset('materialize/css/materialize.css') }}" rel="stylesheet">
        <link href="{{ asset('materialize/css/style.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <nav class="white" role="navigation">
                <div class="nav-wrapper container">
                    <a id="logo-container" href="#" class="brand-logo"><p>TestTovs</p></a>
                    <ul class="right hide-on-med-and-down">
                         @guest
                        <li><a href="{{route('login')}}">Login</a></li>
                        @else
                        <li><a>{{ Auth::user()->name }}</a></li>
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Logout</a></li>
                        <li><a href="{{route('pedidos')}}">Pedidos</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">

                        </form>
                        @endguest
                    </ul>

                    <ul id="nav-mobile" class="side-nav">
                        <li><a style="color: black" href="{{route('home')}}"><i class="material-icons">TestTovs</i></a></li>                        
                        @guest
                        <li><a href="{{route('login')}}">Login</a></li>
                        @else
                        <li><a>{{ Auth::user()->name }}</a></li>
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Logout</a></li>
                        <li><a href="{{route('pedidos')}}">Pedidos</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">

                        </form>
                        @endguest
                    </ul>
                    <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
                </div>
            </nav>
            
                        @yield('content')
                        
        </div>
        <footer class="card-panel2">
        <div class="card-panel">
            <div class="container">
            Desenvolvido por Renan Tabares Machado - renantabares@hotmail.com - 51998900507
            </div>
          </div>
        </footer>
        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="{{ asset('materialize/js/materialize.js') }}"></script>
        <script src="{{ asset('materialize/js/init.js') }}"></script>
    </body>
</html>
