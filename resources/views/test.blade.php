@extends('layouts.app')

@section('content')
<section class="main-container">
    <div class="flex flex-wrap center">

        <div class="card margin-16 border-radius shadow">
            <img class="border-bottom-fat" src="https://openclipart.org/image/800px/svg_to_png/320195/tropicalhouse-1831.png" alt="...">
            <div class="grid center">

                <form class="create-content" action="">

                    <div class="accordion-styling accordion-top border-bottom padding-4 active"></div>

                    <div class="accordion accordion-styling ripple border-bottom padding-4">Artikel-Daten</div>
                    <div class="accordion-panel border-bottom" style="display: block;">

                        <div class="input-large grid-2 center">
                            <label class="create-label" for="Artikel-Name">Name</label>
                            <input class="create-input" type="text" name="Artikel-Name" placeholder="erforderlich">
                        </div>

                        <div class="input-large grid-2 center">
                            <label class="create-label" for="Anfangs-Bestand">Anfangs- Bestand</label>
                            <input class="create-input width-small" type="text" name="Anfangs-Bestand" placeholder="erforderlich">
                        </div>

                        <div class="input-large grid-2 center">
                            <label class="create-label" for="Lagerplatz">Lagerplatz</label>
                            <input class="create-input" type="text" name="Lagerplatz" placeholder="verzichtbar">
                        </div>
                    </div>

                    <div class="accordion accordion-styling ripple border-bottom padding-4">Stück- Angaben</div>
                    <div class="accordion-panel border-bottom">

                        <div class="input-large grid-2 center">
                            <label class="create-label" for="Mindest-Bestand">Mindest- Bestand</label>
                            <input class="create-input width-small" type="text" name="Mindest-Bestand" placeholder="verzichtbar">
                        </div>

                        <div class="input-large grid-2 center">
                            <label class="create-label" for="Bestell-Bestand">Bestell- Bestand</label>
                            <input class="create-input width-small" type="text" name="Bestell-Bestand" placeholder="verzichtbar">
                        </div>

                        <div class="input-large grid-2 center">
                            <label class="create-label" for="Höchst-Bestand">Höchst- Bestand</label>
                            <input class="create-input width-small" type="text" name="Höchst-Bestand" placeholder="verzichtbar">
                        </div>

                        <div class="input-large grid-2 center">
                            <label class="create-label" for="Gebinde-Größe">Gebinde- Größe</label>
                            <input class="create-input width-xsmall" type="text" name="Gebinde-Größe" placeholder="verzichtbar">
                        </div>

                        <div class="input-large grid-2 center">
                            <label class="create-label" for="Gewicht">Gewicht</label>
                            <input class="create-input width-xsmall" type="text" name="Gewicht" placeholder="verzichtbar">
                        </div>

                    </div>

                    <div class="accordion accordion-styling ripple border-bottom padding-4">Gebinde-Angaben</div>
                    <div class="accordion-panel border-bottom">

                        <div class="input-large grid-2 center">
                            <label class="create-label" for="Gebinde-Einheit">Gebinde- Einheit</label>
                            <input class="create-input width-xsmall" type="text" name="Gebinde-Einheit" placeholder="verzichtbar">
                        </div>

                        <div class="input-large grid-2 center">
                            <label class="create-label" for="Bestand">Bestand</label>
                            <input class="create-input width-small" type="text" name="Bestand" placeholder="verzichtbar">
                        </div>

                        <div class="input-large grid-2 center">
                            <label class="create-label" for="Gewicht">Gewicht</label>
                            <input class="create-input width-xsmall" type="text" name="Gewicht" placeholder="verzichtbar">
                        </div>
                        <div class="input-large grid-2 center">
                            <label class="create-label" for="Mindest-Bestand">Mindest- Bestand</label>
                            <input class="create-input width-small" type="text" name="Mindest-Bestand" placeholder="verzichtbar">
                        </div>
                        <div class="input-large grid-2 center">
                            <label class="create-label" for="Bestell-Bestand">Bestell- Bestand</label>
                            <input class="create-input width-small" type="text" name="Bestell-Bestand" placeholder="verzichtbar">
                        </div>
                        <div class="input-large grid-2 center">
                            <label class="create-label" for="Höchst-Bestand">Höchst- Bestand</label>
                            <input class="create-input width-small" type="text" name="Höchst-Bestand" placeholder="verzichtbar">
                        </div>

                    </div>

                    <div class="accordion-styling accordion-bottom border-bottom padding-4"></div>
                    <input type="submit" value="Submit">

                </form>

            </div>
        </div>

    </div>
</section>

<style>
    .card-create {
        min-height: 500px;
        background: var(--light);
        color: var(--dark);
        font-family: 'roboto', sans-serif;
    }

    .create-head {
        font-size: rem;
    }

    .create-content {
        padding: 12px 12px 0 12px;
    }

    .create-label {
        font-size: 18px;
        text-align: right;
        margin-right: 20px;
        /* padding-left: 20px; */
    }

    .create-input {
        height: 28px;
        border: 2px solid var(--dark);
    }


    .input-large {
        /* text-align: left; */
        padding: 12px;
        border: 1px solid var(--lightest);
    }

    .grid-2 {
        display: grid;
        grid-template-columns: 100px 1fr;
        grid-auto-rows: 32px;
    }

    .width-small {
        width: 100px;
    }

    .width-xsmall {
        width: 40px;
    }

    .left {
        justify-content: left;
    }
</style>
@endsection