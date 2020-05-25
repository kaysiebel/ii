@extends('layouts.app')

@section('content')

<div class="bar-container">

    <div class="bar-grid-create ripple">
        <img class="bar-img" src="{{ $article->imageUrl() }}" alt="...">
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