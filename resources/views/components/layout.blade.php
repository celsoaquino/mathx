<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MathX</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-800">
<x-nav/>
<main>
    <div class="mx-auto max-w-7xl">
        {{ $slot }}
    </div>
</main>
<footer class="mt-8">
    <div>
        <p class="text-center text-white">MathX &copy; <span class="text-green-500">{{ date('Y') }}</span></p>
    </div>
</footer>
</body>
</html>
