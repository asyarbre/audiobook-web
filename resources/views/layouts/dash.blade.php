<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('images/logo-audiobook.png')}}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard | @yield('title')</title>
    @vite('resources/css/app.css')
</head>

<body data-theme="emerald">
    <div class="flex flex-col sm:flex-row">
        <x-sidebar />

        <div class="flex flex-col w-full max-h-screen sm:w-5/6 px-4 pr-4">
            <x-dash-nav />
            @include('components.toast')
            @yield('content')
        </div>
    </div>



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(function() {
                var toast = document.getElementById('myToast');
                toast.classList.add(
                'hidden');
            },
            3000);
        });
    </script>


</body>

</html>
