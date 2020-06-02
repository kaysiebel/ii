<table class="table table-large">

    <tr>
        <th class="table-header">Artikel</th>
        <th class="table-header text-align-right">Soll- Bestand</th>
    </tr>

    @foreach($articles as $article)

    <tr>
        <td class="col">
            <a href="{{ url("/articles/{$article->id}") }}">
                {{ $article->name }}
            </a>
        </td>
        <td class="col col2">{{ $article->piece_start_stock }}</td>
    </tr>

    @endforeach

</table>