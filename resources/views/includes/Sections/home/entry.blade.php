<div class="accordion ripple">Materialbewegungen</div>
<div class="accordion-panel">

    <div class="table-grid">

        <div class="table-container">
            <div class="link ripple">
                <a class="info" href="{{ url("/articles/{$article->id}/entries") }}">
                    + Eingänge +
                </a>
            </div>

            <table class="table">

                <tr>
                    <th class="table-header">Datum</th>
                    <th class="table-header">Menge</th>
                </tr>

                @foreach($article->entries as $entry)
                @if($entry->amount_entry > 0)

                <tr>
                    <td class="col">{{ $entry->created_at }}</td>
                    <td class="col col2">{{ $entry->amount_entry }}</td>
                </tr>

                @endif
                @endforeach

            </table>
        </div>

        <div class="table-container">
            <div class="link ripple">
                <a class="info ripple" href="{{ url("/articles/{$article->id}/consumptions") }}">
                    - Verbrauch -
                </a>
            </div>

            <table class="table">

                <tr>
                    <th class="table-header">Datum</th>
                    <th class="table-header">Menge</th>
                </tr>

                @foreach($article->consumptions as $consumption)
                @if($consumption->amount_consumption > 0)

                <tr>
                    <td class="col">{{ $consumption->created_at }}</td>
                    <td class="col col2">{{ $consumption->amount_consumption }}</td>
                </tr>

                @endif
                @endforeach

            </table>
        </div>

    </div>

    <div class="accordion-grid-center">

        <div class="accordion-item">
            <form action="{{ route('entry.store') }}" method="POST">
                @csrf
                <input class="" type="text" placeholder="Stück" name="amount_entry" autocomplete="off">
                <button class="btn margin-4">Eingang buchen</button>
                <input type="hidden" name="article_id" value="{{ $article->id }}">
            </form>
        </div>

        <div class="accordion-item">
            <form action="{{ route('consumption.store') }}" method="POST">
                @csrf
                <input class="" type="text" placeholder="Stück" name="amount_consumption" autocomplete="off">
                <button class="btn margin-4">Verbrauch buchen</button>
                <input type="hidden" name="article_id" value="{{ $article->id }}">
            </form>
        </div>

    </div>

</div>