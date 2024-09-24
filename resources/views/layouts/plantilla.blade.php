
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="//unpkg.com/alpinejs" defer></script>

    <style>
        .active a {
            color: red;
            text-decoration: none;
        }
    </style>
</head>

<body>
    @include('layouts/navigation')
    @include('partials.session-status')

    @yield('content')
</body>

</html>
