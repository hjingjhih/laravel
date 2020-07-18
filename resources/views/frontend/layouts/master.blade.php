<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <title>Coffee Shop-@yield('title')</title>
</head>
<body>
    @include('frontend.layouts.header')
    @include('frontend.layouts.navbar')
    @yield('content')
    @include('frontend.layouts.footer')
</body>
</html>