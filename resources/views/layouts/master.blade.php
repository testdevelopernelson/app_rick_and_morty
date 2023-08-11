<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App Morty</title>
</head>
<body class="m-10">
    @if(auth()->check())
        @include('_partials.navbar')
    @endif
    @yield('content')

    @vite('resources/css/app.css')
</body>
</html>