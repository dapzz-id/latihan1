<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pisang keju</title>
    @vite('resources/css/app.css')
</head>
<body>
    @include('utils.header')

    <main class="min-h-screen max-w-screen">
        @yield('content')
    </main>

    @include('utils.footer')
</body>
</html>