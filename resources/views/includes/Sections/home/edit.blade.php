<div class="accordion ripple">Verwaltung</div>
<div class="accordion-panel">

    <div class="accordion-grid ripple-light">
        <div class="accordion-item">
            <a href="/articles/{{ $article->id }}/edit">
                <button>edit</button>
            </a>
        </div>
        <div class="accordion-item">
            <form action="/articles/{{ $article->id }}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit">Delete</button>
            </form>
        </div>
    </div>

</div>