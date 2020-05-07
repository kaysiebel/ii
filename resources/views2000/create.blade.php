@extends('layouts.app')

@section('content')
<section class="main-container">
    <div class="flex flex-wrap center">

        <div class="card margin-16 border-radius shadow">

            <form class="" action="">
                <label class="create-label">Upload Image</label>
                <img class="border-bottom-fat" src="https://openclipart.org/image/800px/svg_to_png/320195/tropicalhouse-1831.png" />
                <input class="ripple" type="file" name="image">
            </form>

            <div class="grid center">
                <form class="create-content" action="">
                    @include('includes/sections/create/articledata')
                    <!-- has toggled active accordion header! -->

                    @include('includes/sections/create/piecedata')
                    @include('includes/sections/create/unitdata')

                    @include('includes/sections/accbottom')
                    <input class="ripple" type="submit" value="Submit">
                </form>
            </div>

        </div>

    </div>
</section>

@endsection