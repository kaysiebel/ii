@extends('layouts.app')

@section('content')

<div class="bar-container bar-container-create">
    <div class="bar-grid-create acc ripple">
        <img class="bar-img" src="https://openclipart.org/image/800px/svg_to_png/320195/tropicalhouse-1831.png" alt="...">
        <div class="bar-header">
            <p class="bar-title">Hier können neue Artikel angelegt werden</p>
        </div>
    </div>

    <form action="/articles" method="post" enctype="multipart/form-data">
        <div class="main-accordion panel" style="display: block;">
            @include('includes/sections/create/articledata')
            @include('includes/sections/create/piecedata')
            @include('includes/sections/create/unitdata')
            <button class="btn">new article</button>
            @csrf
        </div>
    </form>
</div>

@endsection