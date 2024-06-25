<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<<<<<<< HEAD
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=bakbak-one:400|braah-one:400|carattere:400" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/4f61daaf70.js" crossorigin="anonymous"></script>
=======
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=bakbak-one:400|braah-one:400|carattere:400" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/4f61daaf70.js" crossorigin="anonymous"></script>

>>>>>>> upstream/main
    <title>{{ config('app.name', 'TravelGo') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.0.6/dist/cdn.min.js" defer></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles') 
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        @include('layouts.navigation')
        <main>
            {{ $slot }}
        </main>
        @include('layouts.footer')
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
