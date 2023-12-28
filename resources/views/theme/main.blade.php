<!DOCTYPE html>
<html lang="en">
@include('theme.head')
<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">
    @auth 
    @include('theme.header')
    @endauth
    {{ $slot }}
    @include('theme.js')
</body>
</html>