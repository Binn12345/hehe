<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="https://bcpedu.elearningcommons.com/images/favicon-16x16.png" type="image/x-icon">
      


    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script>  --}}

    
    <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link hre="https://cdn.usebootstrap.com/bootstrap/3.3.7/js/bootstrap.min.js" rel="stylesheet">
    <link href="https://cdn.usebootstrap.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"> -->
     @include('inc2.link')
    <!-- Styles -->
     {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    
</head>
<body class="hold-transition skin-blue sidebar-mini">

    @include('inc2.navbar')
        @include('inc2.sidebar')
        @include('layouts.outModal')



    @yield('content')
    @include('inc.link2')
    <script>
        $(document).ready( function () {
            $('#audit_unique').DataTable();
        } );
    </script>
 
</body>
</html>
