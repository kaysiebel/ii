@extends('layouts.app')

@section('content')

@foreach($articles as $article)

<p class="bar-text">Ist- Bestand: {{ $article->piece_start_stock }}</p>

@endforeach

@endsection