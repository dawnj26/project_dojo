<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
        <script src="https://kit.fontawesome.com/331539da09.js" crossorigin="anonymous"></script>
    <title>@yield('title', 'No title')</title>
    @livewireStyles()
    @vite('resources/css/app.css')
    @yield('head')
</head>

<body>
    @yield('content')
    @livewireScripts()
    @yield('scripts')
</body>

</html>
