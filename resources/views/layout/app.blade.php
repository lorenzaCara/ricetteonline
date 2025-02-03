<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class=" bg-gray-100">
        @include('includes.header')
        
        @yield('content')

        @include('includes.footer')
    </body>
</html>
