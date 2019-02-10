<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'OnionEngine - Login') }} - Login</title>

        @include('OnionEngineAdmin::includes.loader')
        @include('OnionEngineAdmin::includes.fonts')
        @include('OnionEngineAdmin::includes.styles')

    </head>
    <body class="app">
        @include('OnionEngineAdmin::includes.spinner')
        @yield('content')
        @include('OnionEngineAdmin::includes.scripts')
    </body>
</html>
