@extends('layouts.app')

@section('content')

@foreach($article as $article)

<div class="bar-container">
    <div class="bar-grid ripple">
        <img class="bar-img" src="{{ $article->image }} " alt="...">
        <div class="bar-header">
            <p class="bar-title">{{ $article->name }}</p>
            <p class="bar-text">IST- Bestand: {{ $article->piece_start_stock }}</p>
        </div>
        <div class="dot-container">
            <div class="bar-dot">&nbsp;</div>
        </div>
    </div>

    <div class="bar-full ripple">
        <div class="bar-header">
            <p class="bar-title">Verbräuche</p>
        </div>
    </div>

    <div class="panel">

        <div class="mininav">
            <div class="margin-8">
                <a href="javascript:history.back()">
                    <img class="link-item" src="https://image.flaticon.com/icons/png/512/318/318276.png"></a>
            </div>

            <form action="/consumptions" method="POST">
                @csrf
                <input type="text" placeholder="Stück" name="amount_consumption" autocomplete="off">
                <input type="hidden" name="article_id" value="{{ $article->id }}">
                <button class="btn margin-4">Verbrauch buchen</button>
            </form>
        </div>

        <table class="table table-large">

            <tr>
                <th class="table-header">Datum</th>
                <th class="table-header text-align-right">Menge</th>
            </tr>

            @foreach($article->consumptions as $consumption)

            <tr>
                <td class="col">{{ $consumption->created_at }}</td>
                <td class="col col2"><a href="/consumptions/{{ $consumption->id }}/edit">{{ $consumption->amount_consumption }}</a></td>
            </tr>

            @endforeach

        </table>
    </div>

</div>

@endforeach

@endsection