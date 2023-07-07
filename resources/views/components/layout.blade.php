<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Jesper Beisner">

    <title>{{ isset($title) ? $title . ' - Wedly.love' : 'Wedly.love' }}️</title>

    <link rel="icon" type="image/vnd.microsoft.icon" href="{{ asset('favicon.ico') }}">
    <script src="https://unpkg.com/htmx.org@1.9.2/dist/htmx.min.js"></script>

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="bg-rose-50">
    <x-header/>

    {{ $slot }}
</body>
</html>
