<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BCP</title>
    {{-- <link rel="icon" href="https://bcpedu.elearningcommons.com/images/favicon-16x16.png" type="image/x-icon"> --}}
    @include('inc3.link')
</head>
<body class="hold-transition skin-blue sidebar-mini">
    @include('inc3.navbar')
    @include('inc3.sidebar')
    @include('layouts.outModal')
    @yield('content')

    @include('inc.link2')
</body>
</html>