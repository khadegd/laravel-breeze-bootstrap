<!DOCTYPE html>
<html class="h-100" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="d-flex flex-column h-100">
        @include('layouts.navigation')

        <div class="px-3 py-2 border-bottom mb-3">
            <div class="container d-flex flex-wrap justify-content-center">
                <div class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto">
                    {{ $header }}
                </div>
            </div>
        </div>

        <main class="flex-shrink-0">
            <div class="container">
                {{ $slot }}
            </div>
        </main>

        <footer class="footer mt-auto py-3 bg-light">
            <div class="container">
                <p class="col-md-4 mb-0 text-muted">&copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}</p>
            </div>
        </footer>
    </body>
</html>
