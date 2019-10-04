<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MoMo</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

    <!-- Styles -->
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    <link href="{{ asset('css/test.css') }}" rel="stylesheet">
</head>
<body>


        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm"> --}}
        <button class="toggle-nav">
          <i class="fas fa-bars"></i>
        </button>
        <div class="contenedor-principal">
        <header class="cabecera-principal">

          <a href="{{ url('/') }}"><h1 class="logo">MOMO</h1></a>
          <ul class="login-navbar">

            <li>
              <div class="container-search">
                  <form action="/sfsdfsdf" method="get" class="search-form">
                      <div class="search-form-wrapper">
                    		<input type="text" name="search" placeholder="search" >
                        {{-- <input<i class="fas fa-search"></i> --}}
                      </div>

                  </form>
              </div>
            </li>


            <!-- Authentication Links -->
            @guest
              <li><a href="/login">Login</a></li>
              @if (Route::has('register'))
              <li><a href="/register">Registro</a></li>
              @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <li class="cart">
                          <a href="{{ url ('/carrito') }}" class="fas fa-cart-plus"></a>
                        </li>
                      </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                        </form>

            @endguest

          </ul>

        </header>
        </div>
              </ul>
            </div>
          </div>
        </nav>

        <ul class="main-nav">
          <li> <a href="/productos">Todos productos</a> </li>
          <li> <a href="/camperas">Camperas</a> </li>
          <li> <a href="/remeras">Remeras</a> </li>
          <li> <a href="/joggers">Joggers</a> </li>
          <li> <a href="/buzos">Buzos</a> </li>
          <li> <a href="/jeans">Jeans</a> </li>
          <li> <a href="/accesorios">Accesorios</a> </li>
        </ul>

        <main class="py-4">
            @yield('content')
        </main>
</body>
</html>
