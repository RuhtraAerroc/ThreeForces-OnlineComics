<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="theme-color" content="#ffffff">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="icon" type="image/png" sizes="16x16"  href="storage\favicons\favicon-16x16.png">
        <script src="https://kit.fontawesome.com/3a5cec123c.js" crossorigin="anonymous"></script>
        @yield('title')
    </head>
    <body>
        @include('layout.LayoutHeader')
        @yield('LayoutBody')
        @include('layout.LayoutFooter')
    </body>
</html>


