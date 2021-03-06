<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Weibo App') - 一个非同凡响的网站</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="/js/app.js"></script>
</head>
<body>

@include('layouts._header')

<div class="container">
    <div class="offset-md-1 col-md-10">
        @include('shared._message')
        @yield('content')
        @include('layouts._footer')
    </div>
</div>
</body>
</html>