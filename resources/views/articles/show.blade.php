@extends('layouts.app')

@section('content')



<div class="bar-container">

    <div class="bar-grid ripple">
        <img class="bar-img" src="{{ $article->imageUrl() }} " alt="...">
        <div class="bar-header">
            <p class="bar-title">{{ $article->name }}</p>
            <p class="bar-text">Ist- Bestand: {{ $article->piece_start_stock }} Stk</p>
        </div>

        <div class="dot-container">
            <div class="bar-dot">&nbsp;</div>
        </div>

    </div>

    <div class="main-accordion block">
        @include('includes/sections/home/statistic')
        @include('includes/sections/home/piece')
        @include('includes/sections/home/unit')
        @include('includes/sections/home/entry')
        @include('includes/sections/home/location')
        @include('includes/sections/home/edit')
    </div>

</div>



@endsection