@extends('layouts.app')

@section('content')

<div class="bar-container">
    <div class="bar-full">
        <div class="bar-header">
            <p class="bar-title">+ Eingang +</p>
        </div>
    </div>
    <div class="accordion-panel" style=" display: block;">
        @include('includes/mininav')

        <p>Entry ID: {{$entry->id}}</p>
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

        <form action="/entries/{{ $entry->id }}" method="post" enctype="multipart/form-data">
            @method('PATCH')
            @csrf
            <button class="btn">Daten ändern</button>
            <input class="create-input width-small" type="text" name="name" placeholder="erforderlich" autocomplete="off" value="{{ old('$entry->amount_entry') ?? $entry->amount_entry }}">
            <input type="hidden" name="article_id" value="{{ $entry->article_id }}">
        </form>

    </div>
</div>

@endsection