@extends('layouts.app')

@section('content')
<section class="main-container">
    <div class="flex flex-wrap center">
        <div class="card margin-16 border-radius shadow">
            <img class="border-bottom-fat" src="https://openclipart.org/image/800px/svg_to_png/320195/tropicalhouse-1831.png" alt="...">

            <div class="grid center">
                <div class="info info-large border-radius padding-8">+ Eingänge +
                </div>
                <table class="table table-large">
                    <tr>
                        <th class="table-header">Datum</th>
                        <th class="table-header text-align-right">Menge</th>
                    </tr>
                    <tr>
                        <td class="col">01.05.2020</td>
                        <td class="col col2">4000</td>
                    </tr>
                    <tr>
                        <td class="col">02.05.2020</td>
                        <td class="col col2">2000</td>
                    </tr>
                    <tr>
                        <td class="col">04.05.2020</td>
                        <td class="col col2">4000</td>
                    </tr>
                    <tr>
                        <td class="col">05.05.2020</td>
                        <td class="col col2">1000</td>
                    </tr>
                    <tr>
                        <td class="col">08.05.2020</td>
                        <td class="col col2">4000</td>
                    </tr>
                    <tr>
                        <td class="col">10.05.2020</td>
                        <td class="col col2">2000</td>
                    </tr>

                    <tr>
                        <td class="col">12.05.2020</td>
                        <td class="col col2">3000</td>
                    </tr>

                    <tr>
                        <td class="col">13.05.2020</td>
                        <td class="col col2">1000</td>
                    </tr>

                    <tr>
                        <td class="col">16.05.2020</td>
                        <td class="col col2">4000</td>
                    </tr>

                </table>
            </div>

        </div>
    </div>
</section>

<style>
    .table-large {
        width: 300px;
    }

    .info-large {
        color: var(--light);
        background: var(--dark);
        width: auto;
        margin: 16px 6px 4px 6px;
        text-align: center;
    }

    .text-align-right {
        text-align: right;
    }
</style>
@endsection