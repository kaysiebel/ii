@extends('layouts.app')

@section('content')
<section class="main-container">
    <div class="flex flex-wrap center">
        <div class="card margin-16 border-radius shadow">
            <div class="grid-table">

                <div class="grid center">
                    <div class="info border-radius padding-8">+ Eingänge +
                    </div>

                    <table class=" table">
                        <tr>
                            <th class="table-header">Datum</th>
                            <th class="table-header">Menge</th>
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

                    </table>
                </div>

                <div class="grid center">
                    <div class="info border-radius padding-8">- Ausgänge -
                    </div>

                    <table class="table">
                        <tr>
                            <th class="table-header">Datum</th>
                            <th class="table-header">Menge</th>
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

                    </table>
                </div>

            </div>
        </div>
    </div>
</section>

<style>
    .grid-table {
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-auto-rows: auto;
    }

    .col {
        /* background: var(--dark);
        color: var(--light); */
        background: var(--light);
        color: var(--darker);
        border: 2px solid var(--light);
        border-radius: 2px;
    }


    .col2 {
        text-align: right;
    }

    .table {
        background: var(--dark);
        border-radius: 4px;
    }

    .table-header {
        color: var(--light);
        background: var(--dark);
        font-size: 16px;
        text-align: left;
        padding: 6px 2px;
    }

    .info {
        font-size: 20px;
        text-align: center;
        color: var(--light);
        background: var(--dark);
        width: 90%;
        margin: 12px 0 4px 0;
    }
</style>
@endsection