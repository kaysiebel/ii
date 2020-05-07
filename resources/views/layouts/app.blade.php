<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>i!</title>
</head>

<body>

    @include('includes/header')

    <main>

        @yield('content')

    </main>

    @include('includes/footer')

</body>

<script>
    var accordion = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < accordion.length; i++) {

        accordion[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;

            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }
</script>

</html>