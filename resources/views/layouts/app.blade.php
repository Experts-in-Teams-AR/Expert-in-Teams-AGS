<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <!--<link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet"> -->

        <style>
        @font-face {
            font-family: 'Poppins';
            src: url('/fonts/Poppins-Regular.ttf') format('truetype');
            font-weight: 400;
            font-style: normal;
        }

        @font-face {
            font-family: 'Poppins';
            src: url('/fonts/Poppins-Medium.ttf') format('truetype');
            font-weight: 500;
            font-style: normal;
        }

        @font-face {
            font-family: 'Poppins';
            src: url('/fonts/Poppins-Semibold.ttf') format('truetype');
            font-weight: 600;
            font-style: normal;
        }

        @font-face {
            font-family: 'Poppins';
            src: url('/fonts/Poppins-Bold.ttf') format('truetype');
            font-weight: 700;
            font-style: normal;
        }
</style>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://cdn.tailwindcss.com"></script>
    </head>

    <body class="font-sans antialiased bg-white">
        <div class="min-h-screen">
            @auth
                <livewire:layout.navigation />
            @endauth

            @guest
                <livewire:welcome.navigation />
            @endguest

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="mx-auto py-1 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            @isset($slot)
                <main>
                    {{ $slot }}
                </main>
            @endisset
        </div>
    </body>
</html>
