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
    let acc = document.getElementsByClassName("acc");
    let i;

    for (i = 0; i < acc.length; i++) {

        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            let panel = this.nextElementSibling;

            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }
</script>

<script src='https://code.jquery.com/jquery-3.1.1.min.js'></script>
<script src='https://code.jquery.com/ui/1.12.1/jquery-ui.min.js'></script>

<script>
    $(document).ready(function() {

        $('#main-accordion').accordion({
            active: false,
            collapsible: true,
            heightStyle: "content",
            active: 0

        });

    })
</script>

</html>