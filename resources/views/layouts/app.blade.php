<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>{{ config('app.name', 'Laravel') }}</title>
        
        <!-- VITE -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" />
    </head>
    <body>
        @include('layouts.nav')

        <div class="container">
            <main class="py-4">
                @yield('content')
            </main>
        </div>

        @yield('script')
    </body>
</html>
