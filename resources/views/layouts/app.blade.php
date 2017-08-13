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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <link href="{{ asset('css/bootstrap-tagsinput.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.tablesorter.pager.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{-- {{ config('app.name', 'Laravel') }} - {{ Auth::user()->name }} --}}
                      {{-- @if (Route::currentRouteName() == 'admin.dashboard')
                        {{ config('app.name', 'Laravel') }} - Admin
                      @endif
                      @if (Route::currentRouteName() == 'home')
                        {{ config('app.name', 'Laravel') }} - Korisnik (uloga)
                      @endif --}}

                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav" id="hidden-nav">
                      @include('inc.admin.mod-links')
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            {{-- <li><a href="{{ route('login') }}">Login</a></li> --}}
                            {{-- <li><a href="{{ route('register') }}">Register</a></li> --}}
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content-wrapper">
          <div class="container-fluid">

            <div class="col-sm-3 no-padd">
              <div class="collapse navbar-collapse no-padd">
                <div class="navbar sidebar">
                  <ul class="nav navbar-nav">
                      @yield('mod-links')
                  </ul>
                </div>
              </div>
            </div>
              <div class="col-sm-9 content">
                @yield('content')
              </div>
          </div>

        </div>
    </div>

    <!-- Scripts -->
    <script src="{{asset('js/jquery.js')}}"></script>
    {{-- <script src="{{ asset('js/moment.js') }}"></script> --}}
    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
