<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="https://kit.fontawesome.com/3a5cec123c.js" crossorigin="anonymous"></script>
        @yield('title')
    </head>
    <body class="flex justify-center items-center p-20 bg-gradient-to-r from-violet-500 to-violet-900">
        @yield('LayoutBody')
    </body>
</html>


