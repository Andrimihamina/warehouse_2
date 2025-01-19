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
    
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"> --}}

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
     <link rel="stylesheet" type="text/css" href="{{ asset('vuexy/css/plugins/forms/form-validation.css') }}">
     <link rel="stylesheet" type="text/css" href="{{ asset('vuexy/css/plugins/forms/form-wizard.css') }}">
 
     <link rel="stylesheet" type="text/css" href="{{ asset('vuexy/style.css') }}">
</head>

<body class="bg-white vertical-layout vertical-menu-modern  navbar-floating footer-static   menu-collapsed" data-open="click" data-menu="vertical-menu-modern" data-col="">

    {{-- MAIN --}}
    <main class="pt-0">
        @yield('content')
    </main>

    {{-- NAV BAR --}}
    <div class="" id="app">
        <div>
            @include('layouts.navbar')
        </div>

        <div>
            @include('layouts.main-menu')
        </div>

        <div class="app-content content pt-15 pr-0">
            <div class="mt-5">
                <router-view ></router-view>
            </div>
                <!-- <vue-progress-bar></vue-progress-bar> -->
                <footer id="app-footer" class="main-footer ml-0 fixed">
                    <div class="float-right d-none d-sm-block">
                    <input type="hidden" id="app_version">
                    <b>Version</b> {{ config('app.version') }}
                    </div>
                    <strong>Copyright &copy; 2025 <a>MHM</a>.</strong> All rights reserved.
                </footer> 
        </div>
    
      <button id="scroll_top" class="btn btn-primary btn-icon scroll-top mb-2-0 hidden" type="button"><i data-feather="arrow-up"></i></button>
    </div>
            
    <script src="{{ asset('vuexy/vendors/js/vendors.min.js') }}"></script>
    <script src="{{ asset('vuexy/js/core/app.js') }}"></script>
    <script src="{{ asset('vuexy/js/core/app-menu.js') }}"></script>
    <script src="{{ mix('js/app.js') }}"></script>
          
</body>

</html>