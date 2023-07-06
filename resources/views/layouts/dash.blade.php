<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard | @yield('title')</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex flex-col sm:flex-row">
        <x-sidebar />

        <div class="flex flex-col w-full h-screen sm:w-5/6 px-4 pr-4">
            <x-dash-nav />
            @yield('content')
        </div>
    </div>
</body>

</html>
