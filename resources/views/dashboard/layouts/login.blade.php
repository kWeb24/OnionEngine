<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'OnionEngine - Login') }} - Login</title>

        @include('OnionEngineDashboard::includes.loader')
        @include('OnionEngineDashboard::includes.fonts')
        @include('OnionEngineDashboard::includes.styles')

    </head>
    <body class="app">
        @include('OnionEngineDashboard::includes.spinner')
        @yield('content')
        @include('OnionEngineDashboard::includes.scripts')
    </body>
</html>
