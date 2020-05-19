@extends('layouts.app')

@section('content')

<div class="bar-container">
    <div class="bar-full">
        <div class="bar-header">
            <p class="bar-title">Eingang bearbeiten</p>
        </div>
    </div>
    <div class="panel">

        <div class="mininav margin-8">
            <a href="javascript:history.back()">
                <img class="link-item" src="https://image.flaticon.com/icons/png/512/318/318276.png"></a>
        </div>

        <table class="table table-large">

            <tr>
                <th class="table-header">Datum</th>
                <th class="table-header text-align-right">Menge</th>
            </tr>

            <tr>
                <td class="col">{{$entry->created_at}}</td>
                <td class="col col2">{{ $entry->amount_entry }}</td>
            </tr>

        </table>

        <form action="/entries/{{ $entry->id }}" class="mininav" method="post" enctype="multipart/form-data">
            @method('PATCH')
            @csrf
            <input type="hidden" name="article_id" value="{{ $entry->article_id }}">
            <button class="btn">Daten ändern</button>
            <input class="create-input" type="text" name="name" placeholder="erforderlich" autocomplete="off" value="{{ old('$entry->amount_entry') ?? $entry->amount_entry }}">
        </form>

        <form action="/entries/{{ $entry->id }}" class="mininav" method="post" enctype="multipart/form-data">
            @method('DELETE')
            @csrf
            <input type="hidden" name="article_id" value="{{ $entry->article_id }}">
            <button class="btn">Eingang löschen</button>
        </form>

    </div>
</div>

@endsection