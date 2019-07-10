<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel</title>
</head>
<body>
    <div id="app"></div>
    <script src="/js/app.js" type="text/javascript" charset="utf-8" async defer></script>
</body>
</html>
