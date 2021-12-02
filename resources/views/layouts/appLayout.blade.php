<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>Dharamraj</title>
</head>
<body class="bg-gray-200">
    <x-navbar />

    @yield('content')

    <x-footer />
</body>
</html>
