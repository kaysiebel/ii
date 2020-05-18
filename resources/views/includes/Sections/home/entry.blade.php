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

                @foreach($article->entries as $entry)

                <tr>
                    <td class="col">{{ $entry->created_at }}</td>
                    <td class="col col2">{{ $entry->amount_entry }}</td>
                </tr>

                @endforeach

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

                @foreach($article->consumptions as $consumption)

                <tr>
                    <td class="col">{{ $consumption->created_at }}</td>
                    <td class="col col2">{{ $consumption->amount_consumption }}</td>
                </tr>

                @endforeach

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