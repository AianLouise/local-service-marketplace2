<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

    <!-- flatpickr styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite(['resources/css/style2.css'])
    <!-- In your Blade view or layout -->
    <link href="{{ asset('css/chatify/style.css') }}" rel="stylesheet" />


</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @if (Auth::check())
            @if (Auth::user()->role === 'admin')
                <!-- Include Admin Sidebar for admin role -->
                @include('layouts.admin-sidebar')
            @elseif(Auth::user()->role === 'worker')
                @include('layouts.tasco-navbar')
            @elseif (Auth::user()->role === 'user')
                @include('layouts.tasco-navbar')
            @endif
        @endif

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    <!-- External Scripts -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    @vite(['resources/js/script.js'])
    <!-- Add this in your HTML or Blade file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/list.js/2.3.1/list.min.js"></script>
    <!-- Add this in your HTML or Blade file -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js"
        integrity="sha256-Z2DGFn+s0NAOrgHvU5DBxToLyg2enKxjZ8m12jPOpmQ=" crossorigin="anonymous"></script>

     <!-- flatpickr scripts -->
     <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

</body>

</html>
