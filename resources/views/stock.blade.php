@extends('layouts.app')

@section('content')

<div class="bar-container">
    <div class="bar-full">
        <div class="bar-header">
            <p class="bar-title">Bestands- Kontrolle</p>
        </div>
    </div>

    <div class="accordion-panel" style=" display: block;">
        @include('includes/sections/stocktable')
    </div>
</div>

@endsection