@extends('layouts.app')

@section('content')

<section class="page-container">

    <div class="bar-container">
        <div class="bar-full">
            <div class="bar-header">
                <p class="bar-title">+ Eingang +</p>
            </div>
        </div>

        <div class="accordion-panel" style=" display: block;">
            <div class="mininav margin-8">
                <a href="javascript:history.back()">
                    <img class="link-item" src="https://image.flaticon.com/icons/png/512/318/318276.png"></a>

                <a href="new-entry">
                    <img class="link-item" src="https://image.flaticon.com/icons/svg/189/189689.svg"></a>

                <a href="new-consumption">
                    <img class="link-item" src="https://image.flaticon.com/icons/svg/334/334047.svg"></a>
            </div>

            <table class="table table-large">
                <tr>
                    <th class="table-header">Datum</th>
                    <th class="table-header text-align-right">Menge</th>
                </tr>
                <tr>
                    <td class="col">17.05.2020</td>
                    <td class="col col2">4000</td>
                </tr>
                <tr>
                    <td class="col">15.05.2020</td>
                    <td class="col col2">2000</td>
                </tr>
                <tr>
                    <td class="col">13.05.2020</td>
                    <td class="col col2">4000</td>
                </tr>
                <tr>
                    <td class="col">10.05.2020</td>
                    <td class="col col2">1000</td>
                </tr>
                <tr>
                    <td class="col">09.05.2020</td>
                    <td class="col col2">4000</td>
                </tr>
                <tr>
                    <td class="col">08.05.2020</td>
                    <td class="col col2">2000</td>
                </tr>

                <tr>
                    <td class="col">04.05.2020</td>
                    <td class="col col2">3000</td>
                </tr>

                <tr>
                    <td class="col">03.05.2020</td>
                    <td class="col col2">1000</td>
                </tr>

                <tr>
                    <td class="col">01.05.2020</td>
                    <td class="col col2">4000</td>
                </tr>
            </table>

        </div>
    </div>

</section>

@endsection