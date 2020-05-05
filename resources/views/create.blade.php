@extends('layouts.app')

@section('content')
<section class="main-container">
    <div class="flex flex-wrap center">

        <div class="card margin-16 border-radius shadow">

            <form class="" action="">
                <label class="create-label">Upload Image</label>
                <img class="border-bottom-fat" src="https://openclipart.org/image/800px/svg_to_png/320195/tropicalhouse-1831.png" />
                <input class="ripple" type="file" name="image">
            </form>

            <div class="grid center">
                <form class="create-content" action="">

                    <div class="accordion-styling accordion-top border-bottom padding-4 active"></div>

                    <div class="accordion accordion-styling ripple border-bottom">Artikel-Daten</div>
                    <div class="accordion-panel border-bottom" style="display: block;">

                        <div class="input grid-2 center">
                            <label class="create-label" for="Artikel-Name">Name</label>
                            <input class="create-input" type="text" name="Artikel-Name" placeholder="erforderlich">
                        </div>

                        <div class="input grid-2 center">
                            <label class="create-label" for="Anfangs-Bestand">Anfangs- Bestand</label>
                            <input class="create-input width-small" type="text" name="Anfangs-Bestand" placeholder="erforderlich">
                        </div>

                        <div class="input grid-2 center">
                            <label class="create-label" for="Lagerplatz">Lagerplatz</label>
                            <input class="create-input" type="text" name="Lagerplatz" placeholder="verzichtbar">
                        </div>
                    </div>

                    <div class="accordion accordion-styling ripple border-bottom">Stück- Angaben</div>
                    <div class="accordion-panel border-bottom">

                        <div class="input grid-2 center">
                            <label class="create-label" for="Mindest-Bestand">Mindest- Bestand</label>
                            <input class="create-input width-small" type="text" name="Mindest-Bestand" placeholder="verzichtbar">
                        </div>

                        <div class="input grid-2 center">
                            <label class="create-label" for="Bestell-Bestand">Bestell- Bestand</label>
                            <input class="create-input width-small" type="text" name="Bestell-Bestand" placeholder="verzichtbar">
                        </div>

                        <div class="input grid-2 center">
                            <label class="create-label" for="Höchst-Bestand">Höchst- Bestand</label>
                            <input class="create-input width-small" type="text" name="Höchst-Bestand" placeholder="verzichtbar">
                        </div>

                        <div class="input grid-2 center">
                            <label class="create-label" for="Gebinde-Größe">Gebinde- Größe</label>
                            <input class="create-input width-xsmall" type="text" name="Gebinde-Größe" placeholder="verzichtbar">
                        </div>

                        <div class="input grid-2 center">
                            <label class="create-label" for="Gewicht">Gewicht</label>
                            <input class="create-input width-xsmall" type="text" name="Gewicht" placeholder="verzichtbar">
                        </div>

                    </div>

                    <div class="accordion accordion-styling ripple border-bottom">Gebinde-Angaben</div>
                    <div class="accordion-panel border-bottom">

                        <div class="input grid-2 center">
                            <label class="create-label" for="Gebinde-Einheit">Gebinde- Einheit</label>
                            <input class="create-input width-xsmall" type="text" name="Gebinde-Einheit" placeholder="verzichtbar">
                        </div>

                        <div class="input grid-2 center">
                            <label class="create-label" for="Bestand">Bestand</label>
                            <input class="create-input width-small" type="text" name="Bestand" placeholder="verzichtbar">
                        </div>

                        <div class="input grid-2 center">
                            <label class="create-label" for="Gewicht">Gewicht</label>
                            <input class="create-input width-xsmall" type="text" name="Gewicht" placeholder="verzichtbar">
                        </div>
                        <div class="input grid-2 center">
                            <label class="create-label" for="Mindest-Bestand">Mindest- Bestand</label>
                            <input class="create-input width-small" type="text" name="Mindest-Bestand" placeholder="verzichtbar">
                        </div>
                        <div class="input grid-2 center">
                            <label class="create-label" for="Bestell-Bestand">Bestell- Bestand</label>
                            <input class="create-input width-small" type="text" name="Bestell-Bestand" placeholder="verzichtbar">
                        </div>
                        <div class="input grid-2 center">
                            <label class="create-label" for="Höchst-Bestand">Höchst- Bestand</label>
                            <input class="create-input width-small" type="text" name="Höchst-Bestand" placeholder="verzichtbar">
                        </div>

                    </div>

                    <div class="accordion-styling accordion-bottom border-bottom padding-4"></div>
                    <input class="ripple" type="submit" value="Submit">

                </form>

            </div>
        </div>

    </div>
</section>

@endsection