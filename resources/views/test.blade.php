@extends('layouts.app')

@section('content')

<section class="page-container">
    <div class="bar-container">

        <div class="bar-grid">
            <img class="bar-img" src="https://www.887theriver.ca/wp-content/uploads/2017/07/placeholder.jpg" alt="...">
            <div class="bar-header">
                <p class="bar-title">"Artikel-Name"</p>
                <p class="bar-text">"Artikel-Name"</p>
            </div>
        </div>

        <div class="bar-grid">
            <img class="bar-img" src="https://www.887theriver.ca/wp-content/uploads/2017/07/placeholder.jpg" alt="...">
            <div class="bar-header">
                <p class="bar-title">"ajkfbkahbfjhaefjhfbj-Name"</p>
                <p class="bar-text">"Artikel-Name"</p>
            </div>
        </div>

    </div>
</section>

<style>
    .bar-container {
        width: 100%
    }

    .page-container {
        display: flex;
        flex-wrap: wrap;
        margin: 44px 4px;
    }

    /* .header-img {
        width: 140px;
        height: 100%;
    } */

    .bar-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-auto-rows: 80px;
        gap: 8px;
        padding: 4px;
        align-items: center;
        margin: 8px 0;
        /* background: var(--dark); */
    }

    .bar-header {
        position: relative;
        left: -50px;
        border-radius: 4px;
        width: 308px;
        height: 100%;
        background: var(--light);
        border: 2px solid var(--lightest);
    }

    .bar-img {
        z-index: 1;
        object-fit: cover;
        width: 72px;
        height: 72px;
        border-radius: 90px;
        border: 4px solid var(--darkest);
        background: var(--light);
    }
</style>

@endsection