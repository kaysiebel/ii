@extends('layouts.app')

@section('content')


<section class="page-container">

    <div class="bar-container">
        <div class="bar-grid acc ripple">
            <img class="bar-img" src="https://openclipart.org/image/800px/svg_to_png/320195/tropicalhouse-1831.png" alt="...">
            <div class="bar-header">
                <p class="bar-title">Name des Artikels</p>
                <p class="bar-text">Soll- Bestand: 20.000 Stück</p>
            </div>
            <div class="dot-container">
                <div class="bar-dot">&nbsp;</div>
            </div>
        </div>

        <div class="accordion-panel">
            <form action="">
                <label class="create-label">Upload Image</label>
                <img src="" />
                <input class="ripple" type="file" name="image">
            </form>
            @include('includes/sections/create/articledata')
            @include('includes/sections/create/piecedata')
            @include('includes/sections/create/unitdata')
        </div>
    </div>

</section>

@endsection