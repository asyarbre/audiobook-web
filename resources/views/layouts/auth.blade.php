<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('images/logo-audiobook.png')}}">
    <title>Authentication | @yield('title')</title>
    @vite('resources/css/app.css')
</head>

<body data-theme="emerald">
    <div class="min-h-screen px-5 sm:px-0 bg-base-300 flex items-center">
        @include('components.toast')
        @yield('content')
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
