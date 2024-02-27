<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')

    <title>Laravel Probando</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


</head>

<body>
    <nav>
        <a href="/">Home</a>
        <a href="/tienda">Tienda</a>
        <a href="/nosotros">Nosotros</a>
    </nav>
    <h1 class="text-4xl font-extrabold">@yield('titulo')</h1>
    <hr>
</body>

</html>
