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

@endsection