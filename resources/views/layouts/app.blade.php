<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title', 'Kampus Melayu')
    </title>

    {{-- Tailwind via Vite --}}
    @vite('resources/css/app.css')

    {{-- Alpine JS --}}
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- Anti flicker Alpine --}}
    <style>[x-cloak]{display:none!important}</style>

    @livewireStyles
</head>

<body class="bg-white text-gray-800 overflow-x-hidden">

    {{-- Navbar --}}
    <x-navbar />

    {{-- Main Content --}}
    <main class="min-h-screen">
        @yield('content')
    </main>

    {{-- Footer --}}
    <x-footer />

    @livewireScripts
</body>
</html>
