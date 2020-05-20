<div class="accordion accordion-bottom ripple">Verwaltung</div>
<div class="accordion-panel">
    <div class="accordion-grid ripple-light">

        <div class="accordion-item">
            <a href="/articles/{{ $article->id }}/edit">
                <button class="btn">editieren</button>
            </a>
        </div>

        <div class="accordion-item">
            <form action="/articles/{{ $article->id }}" method="POST">
                @method('DELETE')
                @csrf
                <button class="btn margin-top-16" type="submit">löschen</button>
            </form>
        </div>

    </div>
</div>