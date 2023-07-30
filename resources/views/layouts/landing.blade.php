<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/x-icon" href="images/logo-polimedia.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')

    {{-- Alphine JS --}}
    <script src="//unpkg.com/alpinejs" defer></script>


</head>

<body>
    {{-- Navbar --}}
    <x-navbar-landing />

    @yield('content')

    <x-footer-landing />

    {{-- Icons --}}
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    {{-- Swiper.js --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>
</body>

</html>
