@extends('layouts.app')

@section('content')

<div class="bar-container">

    <div class="bar-grid-create ripple">
        <img class="bar-img" src="https://openclipart.org/image/800px/svg_to_png/320195/tropicalhouse-1831.png" alt="...">
        <div class="bar-header">
            <p class="bar-title">Hier können neue Artikel angelegt werden</p>
        </div>
    </div>

    <form action="/articles" method="POST" enctype="multipart/form-data">
        <div class="main-accordion panel block">
            @include('includes/sections/create/articledata')
            @include('includes/sections/create/piecedata')
            @include('includes/sections/create/unitdata')
            @csrf
        </div>
        <div class="mininav">
            <button class="btn create-btn">neuen Artikel anlegen</button>
        </div>
    </form>

</div>

@endsection