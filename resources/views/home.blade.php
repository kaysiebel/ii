@extends('layouts.app')

@section('content')

<div class="bar-container">
    <div class="bar-grid acc ripple">
        <img class="bar-img" src="https://picsum.photos/200/200 " alt="...">
        <div class="bar-header">
            <p class="bar-title">Schraube i3</p>
            <p class="bar-text">Soll- Bestand: 12.000 Stück</p>
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
    </div>
</div>

@for($i = 1; $i < 2; $i++) <div class="bar-container">
    <div class="bar-grid acc ripple">
        <img class="bar-img" src="https://source.unsplash.com/random/600x300 " alt="...">
        <div class="bar-header">
            <p class="bar-title">Kabel 0815</p>
            <p class="bar-text">Soll- Bestand: 8.000 Stück</p>
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

        @include('includes/sections/home/magic')
        @include('includes/sections/home/location')
        @include('includes/sections/home/edit')
    </div>
    </div>

    @endfor

    @endsection