@extends('layouts.app')

@section('content')

<section class="page-container">
    <div class="bar-container">

        <div class="bar-full acc ripple active">
            <div class="bar-header">
                <p class="bar-title">Artikel- Suche</p>
            </div>
        </div>

        <div class="accordion-panel" style=" display: block;">
            <form class="btn-container" action="" method="get">
                <input type="text" class="create-input" placeholder="Artikel Name" name="search">
                <button class="search-btn ripple" type="submit"><i class="">los</i></button>
            </form>
        </div>

    </div>
</section>

@endsection