@extends('layouts.app')

@section('content')
<section class="main-container">
    <div class="flex flex-wrap center">
        <div class="card margin-16 border-radius shadow">
            <img class="border-bottom-fat" src="https://openclipart.org/image/800px/svg_to_png/320195/tropicalhouse-1831.png" alt="...">

            <div class="grid center">
                <div class="info-large accordion-top padding-8 margin-8">Bestandsübersicht
                </div>

                <table class="table table-large">
                    <tr>
                        <th class="table-header">Artikel</th>
                        <th class="table-header text-align-right">Soll- Bestand</th>
                    </tr>
                    <tr>
                        <td class="col">Artikel 1</td>
                        <td class="col col2">19854</td>
                    </tr>
                    <tr>
                        <td class="col">Artikel 2</td>
                        <td class="col col2">200</td>
                    </tr>
                    <tr>
                        <td class="col">Artikel 3</td>
                        <td class="col col2">156947</td>
                    </tr>
                </table>

                <div class="info-large accordion-bottom padding-8 margin-8">&nbsp;
                </div>

            </div>
        </div>
    </div>
</section>

@endsection