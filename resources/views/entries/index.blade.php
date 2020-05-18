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

        <table class="table table-large">

            <tr>
                <th class="table-header">Datum</th>
                <th class="table-header text-align-right">Menge</th>
            </tr>

            @foreach($entries as $entry)

            <tr>
                <td class="col">{{ $entry->article_id }}: {{ $entry->created_at }}</td>
                <td class="col col2">
                    <a href="/entries/{{ $entry->id }}/edit">
                        {{ $entry->amount_entry }}</a>
                </td>
            </tr>

            @endforeach

        </table>

    </div>
</div>

@endsection