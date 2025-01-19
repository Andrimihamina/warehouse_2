<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include Vuexy CSS -->
    <link href="{{ asset('vuexy/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('vuexy/vendors/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Ajoute les autres fichiers CSS nécessaires -->
</head>
<body>
    @yield('content')

    <!-- Include Vuexy JS -->
    <script src="{{ asset('vuexy/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vuexy/js/scripts.js') }}"></script>
    <!-- Ajoute les autres fichiers JS nécessaires -->
</body>
</html>
