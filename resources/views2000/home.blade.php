@extends('layouts.app')

@section('content')
<section class="main-container">
    <div class="flex flex-wrap center">

        <div class="card margin-16 border-radius shadow">
            <img class="border-bottom-fat" src="https://openclipart.org/image/800px/svg_to_png/320195/tropicalhouse-1831.png" alt="...">
            <div class="card-content grid center">

                <p class="card-text padding-8 margin-8">
                    "Artikel-Name"</p>

                @include('includes/sections/acctop')

                @include('includes/sections/home/overview')
                @include('includes/sections/home/piece')
                @include('includes/sections/home/unit')
                @include('includes/sections/home/location')
                @include('includes/sections/home/entry')
                @include('includes/sections/home/magic')

                @include('includes/sections/accbottom')

            </div>
        </div>

        @include('includes/sections/placeholder')

        <div class="card margin-16 border-radius shadow">
            <img class="border-bottom-fat" src="https://openclipart.org/image/800px/svg_to_png/320195/tropicalhouse-1831.png" alt="...">
            <div class="card-content grid center">

                <p class="card-text padding-8 margin-8">
                    "Artikel-Name"</p>

                @include('includes/sections/acctop')

                @include('includes/sections/home/overview')
                @include('includes/sections/home/piece')
                @include('includes/sections/home/unit')
                @include('includes/sections/home/location')
                @include('includes/sections/home/entry')
                @include('includes/sections/home/magic')

                @include('includes/sections/accbottom')

            </div>
        </div>

    </div>
</section>

@endsection