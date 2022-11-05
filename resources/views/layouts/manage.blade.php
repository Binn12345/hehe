<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BCP</title>
    <link rel="icon" href="https://bcpedu.elearningcommons.com/images/favicon-16x16.png" type="image/x-icon">
    @include('supportUser.link')
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        @include('supportUser.subModal')
        @include('supportUser.navbar')
        @include('supportUser.sidebar')
        @yield('content')
        
        {{-- @include('supportUser.footer') --}}
        @include('supportUser.sublink')
        
    </div>
{{-- <div class = "wrapper">
    @include('supportUser.outModal')
    @include('supportUser.navbar')
    @include('supportUser.sidebar')
    
    @yield('content')

    
    @include('supportUser.footer')
    @include('supportUser.cb')
    @include('inc.link2')


</div> --}}

    
</body>
</html>