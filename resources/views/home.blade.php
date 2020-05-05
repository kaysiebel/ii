@extends('layouts.app')

@section('content')
<section class="main-container">
    <div class="flex flex-wrap center">

        <div class="card margin-16 border-radius shadow">
            <img class="border-bottom-fat" src="https://www.citizencider.com/wp-content/uploads/2019/01/placeholder.jpg" alt="...">
            <div class="card-content">
                <p class="card-text padding-8 margin-8">
                    Lorem
                </p>
            </div>
        </div>

        <div class="card margin-16 border-radius shadow">
            <img class="border-bottom-fat" src="https://openclipart.org/image/800px/svg_to_png/320195/tropicalhouse-1831.png" alt="...">
            <div class="card-content grid center">

                <p class="card-text padding-8 margin-8">
                    "Artikel-Name"</p>

                <div class="accordion-styling accordion-top border-bottom padding-4 active"></div>

                <div class="accordion accordion-styling ripple border-bottom padding-4">Überblick</div>
                <div class="accordion-panel border-bottom">
                    <p class="">
                        Bestand: 1000 Stück</p>
                    <p class="">
                        Lager-Ort: Halle 3</p>
                </div>

                <div class="accordion accordion-styling ripple border-bottom padding-4">Stück-Angaben</div>
                <div class="accordion-panel border-bottom">
                    <p class="">
                        Gewicht</p>
                    <p class="">
                        Mindest-Bestand</p>
                    <p class="">
                        Bestell-Bestand</p>
                    <p class="">
                        Höchst-Bestand</p>
                    <p class="">
                        Gebinde-Größe</p>
                </div>

                <div class="accordion accordion-styling ripple border-bottom padding-4">Gebinde-Angaben</div>
                <div class="accordion-panel border-bottom">
                    <p class="">
                        Einheiten/Stück</p>
                    <p class="">
                        Bestand</p>
                    <p class="">
                        Gewicht</p>
                    <p class="">
                        Mindest-Bestand</p>
                    <p class="">
                        Bestell-Bestand</p>
                    <p class="">
                        Höchst-Bestand</p>
                </div>

                <div class="accordion accordion-styling ripple border-bottom padding-4">Lagerort</div>
                <div class="accordion-panel border-bottom">
                    <p class="">
                        Max-Gewicht</p>
                </div>

                <div class="accordion accordion-styling ripple border-bottom padding-4">i!</div>
                <div class="accordion-panel border-bottom">
                    <p class="">
                        Gesamt-Gewicht/Stück</p>
                    <p class="">
                        Gesamt-Gewicht/Gebinde</p>
                    <p class="">
                        aktuelles Gewicht/Lagerort</p>
                    <p class="">
                        Letzter Zugang</p>
                    <p class="">
                        Letzter Abgang</p>
                    <p class="">
                        Durchschnittsbestand</p>
                </div>

                <div class="accordion-styling accordion-bottom border-bottom padding-4"></div>

            </div>
        </div>

    </div>
</section>
@endsection