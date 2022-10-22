<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="https://bcpedu.elearningcommons.com/images/favicon-16x16.png" type="image/x-icon">
    <title>BCP</title>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap.min.css">

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script>  --}}

    
    <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link hre="https://cdn.usebootstrap.com/bootstrap/3.3.7/js/bootstrap.min.js" rel="stylesheet">
    <link href="https://cdn.usebootstrap.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"> -->
     @include('inc.link')
    <!-- Styles -->
     {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    
</head>

<body class="hold-transition skin-blue sidebar-mini">
    
    



         @include('inc.navbar')
        @include('inc.sidebar')
        @include('layouts.outModal')
        {{-- @include('lib.createModal') --}}
       
        
        
        @yield('content')
        @include('inc.cb')
        @include('inc.footer')
        @include('inc.link2')
    
  
       
        

{{-- 

<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap.min.js"></script> --}}

</body>
</html>


      {{-- <nav class="navbar navbar-expand-md navbar-black bg-white shadow-sm" style="color: black;">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravela') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

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
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
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
    </nav> --}}
        

       