<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
<title>{{ config('app.name', 'MHM') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app-font.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/private-home.css') }}">
    <!-- local style -->

    <!-- template CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vuexy/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vuexy/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vuexy/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vuexy/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vuexy/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vuexy/css/themes/bordered-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vuexy/css/core/menu/menu-types/horizontal-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vuexy/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">

    <!-- /Other -->
    <link rel="stylesheet" href="{{ asset('/css/app-font.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vuexy/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vuexy/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vuexy/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vuexy/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vuexy/css/components.css') }}">
    
    <link rel="stylesheet" type="text/css" href="{{ asset('vuexy/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vuexy/css/plugins/forms/form-validation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vuexy/css/plugins/forms/form-wizard.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('vuexy/style.css') }}">
</head>



<body class="bg-white vertical-layout vertical-menu-modern  navbar-floating footer-static   menu-collapsed" data-open="click" data-menu="vertical-menu-modern" data-col="">
    @guest
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'MHM') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item d-flex">
                                <div>
                                    <a id="navbarDropdown" class="nav-link " href="#" role="button" >
                                        {{ Auth::user()->name }}
                                    </a>
                                </div>

                                <div class="" >
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                          <i class="fa fa-power-off"></i> 
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

        <main class="pt-5">
            @yield('content')
        </main>

    @else
    <div class="" id="app">
        <div>
            @include('layouts.navbar')
        </div>
        <div>
            @include('layouts.main-menu')
        </div>
        <div class="app-content content pt-15 pr-0">
            <div class="mt-8">
                <router-view ></router-view>
            </div>
                <!-- <vue-progress-bar></vue-progress-bar> -->
                <footer id="app-footer" class="main-footer ml-0 fixed">
                    <div class="float-right d-none d-sm-block">
                    <input type="hidden" id="app_version">
                    <b>Version</b> {{ config('app.version') }}
                    </div>
                    <strong>Copyright &copy; 2023 <a>MHM</a>.</strong> All rights reserved.
                </footer> 
            </div>
        </div>

      <button id="scroll_top" class="btn btn-primary btn-icon scroll-top mb-2-0 hidden" type="button"><i data-feather="arrow-up"></i></button>
    </div>
    
@endguest
    <script src="{{ asset('js/app.js?v=1.2.4') }} "></script>
    <script src="{{ asset('js/treatMenu.js') }} "></script>
    <script src="{{ asset('vuexy/vendors/js/vendors.min.js') }}"></script>
    <script src="{{ asset('vuexy/js/core/app.js') }}"></script>
    <script src="{{ asset('vuexy/js/core/app-menu.js') }}"></script>
</body>
@if (Auth::check())
    <script>
        window.auth = {!!json_encode([
                'isLoggedin' => true,
                'user' => Auth::user()
            ])!!}
    </script>
@else
    <script>
        window.auth = {!!json_encode([
                'isLoggedin' => false
            ])!!}
    </script>
@endif
</html>