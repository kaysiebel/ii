<div class="accordion ripple">Materialbewegungen</div>
<div class="accordion-panel">

    <div class="table-grid">

        <div class="table-container">
            <div class="link ripple">
                <a class="info" href="/entries">
                    + Eingänge +
                </a>
            </div>

            <table class="table">
                <tr>
                    <th class="table-header">Datum</th>
                    <th class="table-header">Menge</th>
                </tr>
                <tr>
                    <td class="col">01.05.2020</td>
                    <td class="col col2">{{ $article->entries->first->entry_id }}</td>
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

        <div class="table-container">
            <div class="link ripple">
                <a class="info ripple" href="/consumption">
                    - Verbrauch -
                </a>
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

    <div class="accordion-grid">
        <div class="accordion-item">
            <form action="/entries" method="POST">
                @csrf
                <input type="text" placeholder="Stück" name="amount_entry" autocomplete="off">
                <button class="btn">Eingang buchen</button>
                <input type="hidden" name="article_id" value="{{ $article->id }}">
            </form>
        </div>
        <div class="accordion-item">
            <form action="/consumptions" method="POST">
                @csrf
                <input type="text" placeholder="Stück" name="amount_consumption" autocomplete="off">
                <button class="btn">Verbrauch buchen</button>
                <input type="hidden" name="article_id" value="{{ $article->id }}">
            </form>
        </div>
    </div>

</div>