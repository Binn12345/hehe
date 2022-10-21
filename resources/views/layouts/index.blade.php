<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BCP</title>
    <link rel="icon" href="https://bcpedu.elearningcommons.com/images/favicon-16x16.png" type="image/x-icon">
    @include('inc3.link')
</head>

<body class="hold-transition skin-blue sidebar-mini">
    
<div class = "wrapper" >
    @include('layouts.outModal')
    @include('inc3.navbar')
    @include('inc3.sidebar')
    
    @yield('content')
    @include('inc3.footer')
    @include('inc3.cb')
    @include('inc.link2')


</div>
  
    
</body>
</html>