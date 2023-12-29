<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-gray-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('scripts')
</head>
<body class="font-sans antialiased">
<div {{ $attributes->merge(['class' => 'min-h-screen flex flex-col justify-between bg-gray-100 dark:bg-gray-900']) }}>
    <!-- Page Content -->
    <main class="mb-16 flex-grow">
        {{ $slot }}
    </main>
    <x-website.footer></x-website.footer>
</div>
</body>
</html>
