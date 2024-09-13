<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/sample-logo.jpg') }}">
    @yield('head-links')
    <title>{{ config('app.name') }}</title>
</head>
<body>
    @include('layouts.components.home-nav')
    @yield('content')
</body>
</html>
