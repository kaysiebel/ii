@extends('layouts.app')

@section('content')

<div class="bar-container">

    <div class="bar-grid-create ripple">
        <img class="bar-img" src="{{ $article->imageUrl() }} " alt="...">
        <div class="bar-header">
            <p class="bar-title">Artikeldaten ändern für "{{ $article->name }}"</p>
        </div>
    </div>

    <form action="{{ url("/articles/{$article->id}") }}" method="post" enctype="multipart/form-data">
        <div class="main-accordion panel block">
            @include('includes/sections/edit/articledataedit')
            @include('includes/sections/create/piecedata')
            @include('includes/sections/create/unitdata')
            @method('PATCH')
            @csrf
        </div>
        <div class="mininav">
            <button class="btn create-btn">Artikeldaten speichern</button>
        </div>
    </form>

</div>

@endsection