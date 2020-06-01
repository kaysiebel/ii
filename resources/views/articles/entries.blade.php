@extends('layouts.app')

@section('content')

<div class="bar-container">

    <div class="bar-grid ripple">
        <img class="bar-img" src="{{ $article->imageUrl() }} " alt="...">
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
            <p class="bar-title">Eingänge</p>
        </div>
    </div>

    <div class="panel">

        <form action="{{ route('entry.store') }}" method="POST">
            @csrf

            <div class="mininav margin-8">
                <a href="javascript:history.back()">
                    <img class="link-item" src="https://image.flaticon.com/icons/png/512/318/318276.png"></a>

                <input class="create-input width-small" type="text" placeholder="Stück" name="amount_entry" autocomplete="off">
                <input type="hidden" name="article_id" value="{{ $article->id }}">
                <button class="btn margin-4">Eingang buchen</button>
            </div>

        </form>

        <table class="table table-large">

            <tr>
                <th class="table-header">Datum</th>
                <th class="table-header text-align-right">Menge</th>
            </tr>

            @foreach($article->entries as $entry)
            @if($entry->amount_entry > 0)

            <tr>
                <td class="col">{{ $entry->created_at }}</td>
                <td class="col col2"><a href="{{ url("/entries/{$entry->id}/edit") }}">{{ $entry->amount_entry }}</a></td>
            </tr>

            @endif
            @endforeach

        </table>

    </div>

</div>

@endsection