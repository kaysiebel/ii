@extends('layouts.app')

@section('content')

<section class="page-container">

    <div class="bar-container">
        <div class="bar-grid acc ripple">
            <img class="bar-img" src="https://picsum.photos/200/200 " alt="...">
            <div class="bar-header">
                <p class="bar-title">Name des Artikels</p>
                <p class="bar-text">Soll- Bestand: 20.000 Stück</p>
            </div>
            <div class="dot-container">
                <div class="bar-dot">&nbsp;</div>
            </div>
        </div>

        <!-- <div class="accordion-panel acc"> -->
        <div id='main-accordion' class='main-accordion'>
            <div class="accordion ripple">Test1</div>
            <div class="accordion-panel">
                <p class="accordion-item">
                    Max Gewicht</p>
                <p class="accordion-item">
                    5000 Kg</p>
            </div>
            <div class="accordion ripple">Test1</div>
            <div class="accordion-panel">
                <p class="accordion-item">
                    Max Gewicht</p>
                <p class="accordion-item">
                    5000 Kg</p>
            </div>
            <div class="accordion ripple">Test1</div>
            <div class="accordion-panel">
                <p class="accordion-item">
                    Max Gewicht</p>
                <p class="accordion-item">
                    5000 Kg</p>
            </div>
            <div class="accordion ripple">Test1</div>
            <div class="accordion-panel">
                <p class="accordion-item">
                    Max Gewicht</p>
                <p class="accordion-item">
                    5000 Kg</p>
            </div>

        </div>
        <!-- </div> -->

</section>

@endsection







<script src='https://code.jquery.com/jquery-3.1.1.min.js'></script>
<script src='https://code.jquery.com/ui/1.12.1/jquery-ui.min.js'></script>
<!-- <link href='https://code.jquery.com/ui/1.12.1/themes/cupertino/jquery-ui.css' rel='stylesheet'> -->

<script>
    $(document).ready(function() {

        $('#main-accordion').accordion({
            active: false,
            collapsible: true
        });

    })
</script>

<!-- APP  -->
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