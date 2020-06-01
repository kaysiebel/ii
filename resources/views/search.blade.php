@extends('layouts.app')

@section('content')

<div class="bar-container">

    <div class="bar-full ripple active">
        <div class="bar-header">
            <p class="bar-title">Artikel- Suche</p>

        </div>
    </div>

    <div class="accordion-panel block">
        <form class="mininav margin-8" method="GET" action="{{ url('/searchresult') }}">
            @csrf
            <input type="text" class="create-input" placeholder="Artikel Name" name="q">
            <button class="search-btn ripple" type="submit"><i class="">los</i></button>
        </form>
    </div>

</div>

@foreach($articles as $article)

<div class="bar-container">

    <div class="bar-grid acc ripple">
        <div>
            <a href="{{ url("/articles/{$article->id}") }}">
                <img class="bar-img" src="{{ $article->imageUrl() }}" alt="...">
            </a>
        </div>
        <div class="bar-header">
            <p class="bar-title">{{ $article->name }}</p>
            <p class="bar-text">Ist- Bestand: {{ $article->piece_start_stock }} Stk</p>
        </div>

        <div class="dot-container">
            <div class="bar-dot">&nbsp;</div>
        </div>

    </div>

    <div class="main-accordion none">
        @include('includes/sections/home/overview')
        @include('includes/sections/home/entry')
    </div>

</div>

@endforeach

@endsection