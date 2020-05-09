@extends('layouts.app')

@section('content')

<section class="page-container">

    <div class="bar-container">
        <div class="bar-full">
            <div class="bar-header">
                <p class="bar-title">Bestands- Übersicht</p>
            </div>
        </div>

        <div class="accordion-panel" style=" display: block;">
            @include('includes/sections/stocktable')
        </div>
    </div>

</section>

@endsection