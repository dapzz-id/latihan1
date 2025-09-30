<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Infinia | Aetherion</title>
    <link rel="icon" href="{{ asset('ikonn.webp') }}" type="image/png">
    @vite('resources/css/app.css')

    <style>
        body {
            background: linear-gradient(135deg, #1D4ED8 0%, #488EF8 50%, #255DE0 100%);
            position: relative;
        }

        main {
            position: relative;
            z-index: 2;
        }

        /* Tambahan grid kotak putih transparan */
        body::before {
            content: "";
            position: fixed;
            inset: 0;
            background-image:
                linear-gradient(90deg, rgba(255, 255, 255, 0.15) 1px, transparent 1px),
                linear-gradient(rgba(255, 255, 255, 0.15) 1px, transparent 1px);
            background-size: 60px 60px; /* ukuran kotaknya */
            pointer-events: none;
            z-index: 0;
        }
    </style>
</head>

<body class="min-h-screen text-white font-sans overflow-hidden">

    <!-- Main Content -->
    <main class="mt-6 px-12 flex justify-center items-center h-screen">
        @include('auth.register')
    </main>

</body>
</html>
