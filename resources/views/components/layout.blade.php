<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Jesper Beisner">

    <link rel="icon" type="image/vnd.microsoft.icon" href="{{ asset('favicon.ico') }}">

    <link type="text/css" rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/main.css') }}">

    <script src="{{ asset('js/htmx.js') }}"></script>

    <title>{{ isset($title) ? $title . ' - Wedly.love' : 'Wedly.love' }}️</title>
</head>
<body>
    <x-header/>

    <main>
        {{ $slot }}
    </main>

    <x-footer/>

    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
