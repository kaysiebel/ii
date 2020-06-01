<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script src='https://code.jquery.com/jquery-3.1.1.min.js'></script>
    <script src='https://code.jquery.com/ui/1.12.1/jquery-ui.min.js'></script>

    <title>i!</title>
</head>

<body>

    @include('includes/header')

    <main>

        @yield('content')

    </main>

    @include('includes/footer')

</body>

<script src="{{ asset('js/app.js') }}"></script>

</html>