@extends('layouts.app')

@section('content')

@foreach($articles as $article)

<div class="bar-container">
    <div class="bar-grid acc ripple">
        <img class="bar-img" src="{{ $article->image }} " alt="...">
        <div class="bar-header">
            <p class="bar-title">{{ $article->name }}</p>
            <p class="bar-text">IST- Bestand: {{ $article->piece_start_stock }}</p>
        </div>
        <div class="dot-container">
            <div class="bar-dot">&nbsp;</div>
        </div>
    </div>

    <div class="main-accordion panel" style="display: none;">
        @include('includes/sections/home/overview')
        @include('includes/sections/home/piece')
        @include('includes/sections/home/unit')
        @include('includes/sections/home/entry')
        @include('includes/sections/home/statistic')
        @include('includes/sections/home/magic')
        @include('includes/sections/home/location')
        @include('includes/sections/home/edit')
        {{ $article->entries->first->amount_entry }}
        {{ $article->entries->first->id->amount_entry }}
        {{ $article->entries->first->id }}

    </div>

</div>

@endforeach

@endsection