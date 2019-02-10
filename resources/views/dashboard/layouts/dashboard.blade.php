<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'OnionEngine - Dashboard') }} - Dashboard</title>

        @include('OnionEngineDashboard::includes.loader')
        @include('OnionEngineDashboard::includes.fonts')
        @include('OnionEngineDashboard::includes.styles')

    </head>
    <body class="app">
        @include('OnionEngineDashboard::includes.spinner')
        @include('OnionEngineDashboard::components.sidebar')

        <div class="page-container">
            @include('OnionEngineDashboard::components.topbar')

            <main class='main-content bgc-grey-100'>
                <div id='mainContent'>
                    @yield('content')
                </div>
            </main>

            @include('OnionEngineDashboard::components.footer')
        </div>

        @include('OnionEngineDashboard::includes.scripts')
    </body>
</html>
