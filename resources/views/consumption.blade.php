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
            <tr>
                <td class="col">09.05.2020</td>
                <td class="col col2">1000</td>
            </tr>
            <tr>
                <td class="col">08.05.2020</td>
                <td class="col col2">1200</td>
            </tr>
            <tr>
                <td class="col">07.05.2020</td>
                <td class="col col2">1800</td>
            </tr>
            <tr>
                <td class="col">06.05.2020</td>
                <td class="col col2">700</td>
            </tr>
            <tr>
                <td class="col">05.05.2020</td>
                <td class="col col2">1200</td>
            </tr>
            <tr>
                <td class="col">04.05.2020</td>
                <td class="col col2">2000</td>
            </tr>
            <tr>
                <td class="col">03.05.2020</td>
                <td class="col col2">1400</td>
            </tr>
            <tr>
                <td class="col">02.05.2020</td>
                <td class="col col2">900</td>
            </tr>
            <tr>
                <td class="col">01.05.2020</td>
                <td class="col col2">4000</td>
            </tr>
        </table>

    </div>
</div>

@endsection