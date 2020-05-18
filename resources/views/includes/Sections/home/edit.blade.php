<div class="accordion ripple">Verwaltung</div>
<div class="accordion-panel">
    <div class="accordion-grid ripple-light">

        <div class="accordion-item">
            <!-- <p>Artikel bearbeiten</p> -->
            <a href="/articles/{{ $article->id }}/edit">
                <button class="btn">edit</button>
            </a>
        </div>

        <div class="accordion-item">
            <!-- <p>Artikel Löschen</p> -->
            <form action="/articles/{{ $article->id }}" method="POST">
                @method('DELETE')
                @csrf
                <button class="btn margin-top-16" type="submit">Delete</button>
            </form>
        </div>

    </div>
</div>