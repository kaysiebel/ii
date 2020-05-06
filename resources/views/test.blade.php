@extends('layouts.app')

@section('content')
<section class="main-container">
    <div class="flex flex-wrap center">
        <div class="card margin-16 border-radius shadow">

            <div class="grid center">
                <div class="info info-large border-radius padding-8">+ Eingänge +
                </div>

                <table class="table table-large">
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
</section>

<style>
    .table-large {
        width: 300px;
    }

    .info-large {
        color: var(--light);
        background: var(--dark);
        width: 100%;
        margin: 6px 6px 4px 6px;
        text-align: center;
    }
</style>
@endsection