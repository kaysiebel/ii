@extends('layouts.app')

@section('content')


<div class="bar-container">
    <div class="bar-grid-create acc ripple">
        <img class="bar-img" src="{{ $article->image }}" alt="...">
        <div class="bar-header">
            <p class="bar-title">EDIT {{ $article->name }}</p>
        </div>
    </div>

    <form action="/articles/{{ $article->id }}" method="post" enctype="multipart/form-data">
        <div class="main-accordion panel" style="display: block;">
            @include('includes/sections/edit/articledataedit')
            @include('includes/sections/create/piecedata')
            @include('includes/sections/create/unitdata')
            @method('PATCH')
            @csrf
        </div>
        <button>save article</button>
    </form>
</div>

@endsection