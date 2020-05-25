@extends('layouts.app')

@section('content')

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
            <p class="bar-text">Ist- Bestand: {{ $article->piece_start_stock }}</p>
        </div>

        <div class="dot-container">
            <div class="bar-dot">&nbsp;</div>
        </div>

    </div>

    <div class="main-accordion none">
        @include('includes/sections/home/overview')
        @include('includes/sections/home/entry')
        @include('includes/sections/home/magic')
    </div>

</div>

@endforeach

@endsection