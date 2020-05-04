<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </link>
    <title>i!</title>
</head>

<body>
    @include('includes/header')
    @yield('content')
    @include('includes/footer')
</body>

</html>