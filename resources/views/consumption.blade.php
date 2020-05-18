@extends('layouts.app')

@section('content')

<div class="bar-container">
    <div class="bar-full">
        <div class="bar-header">
            <p class="bar-title">- Verbrauch -</p>
        </div>
    </div>

    <div class="accordion-panel" style=" display: block;">

        @include('includes/mininav')

        <table class="table table-large">

            <tr>
                <th class="table-header">Datum</th>
                <th class="table-header text-align-right">Menge</th>
            </tr>

            @foreach($article->consumptions as $consumption)

            <tr>
                <td class="col">{{ $consumption->created_at }}</td>
                <td class="col col2">{{ $consumption->amount_consumption }}</td>
            </tr>

            @endforeach

        </table>

    </div>
</div>

@endsection