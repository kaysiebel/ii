<?php /*

    USER INPUT DATA

{{ $article->name }}
{{ $article->id }} 

{{ $article->piece_start_stock }}
{{ $article->piece_min_stock }}
{{ $article->piece_max_stock }}
{{ $article->piece_order_stock }}
{{ $article->piece_weight }}

{{ $article->unit_start_stock }}
{{ $article->unit_min_stock }}
{{ $article->unit_max_stock }}
{{ $article->unit_order_stock }}
{{ $article->unit_weight }}
{{ $article->unit_size }}

{{ $article->location }}
{{ $article->location_maxweight }}

--- ngrok

    <!-- <link rel="stylesheet" href="http://ii.test/css/app.css">
    <link rel="stylesheet" href="/css/app.css"> -->

--- home

    @for($i = 1; $i < 16; $i++)
    <div class="bar-container">
        <div class="bar-grid acc ripple">
            <img class="bar-img" src="https://source.unsplash.com/random/600x300 " alt="...">
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

            @include('includes/sections/home/magic')
            @include('includes/sections/home/location')
            @include('includes/sections/home/edit')
        </div>
    </div>

    @endfor


--- edit

<!-- <div class="accordion ripple"><a href="/create">Edit</a></div> -->
<!-- <div class="accordion ripple" href="/create">Edit</div> -->

--- 

    */
