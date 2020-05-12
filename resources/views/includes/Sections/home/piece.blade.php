<div class="accordion ripple">Stück-Angaben</div>
<div class="accordion-panel">

    <div class="accordion-grid ripple-light">
        <p class="accordion-item">
            Mindest-Bestand</p>
        <p class="accordion-item">
            {{ $article->piece_min_stock }} Stk</p>
    </div>

    <div class="accordion-grid ripple-light">
        <p class="accordion-item">
            Bestell- Bestand</p>
        <p class="accordion-item">
            {{ $article->piece_order_stock }} Stk</p>
    </div>

    <div class="accordion-grid ripple-light">
        <p class="accordion-item">
            Höchst- Bestand</p>
        <p class="accordion-item">
            {{ $article->piece_max_stock }} Stk</p>
    </div>

    <div class="accordion-grid ripple-light">
        <p class="accordion-item">
            Gebinde- Größe</p>
        <p class="accordion-item">
            {{ $article->unit_size }} Stk</p>
    </div>

    <div class="accordion-grid ripple-light">
        <p class="accordion-item">
            Gewicht</p>
        <p class="accordion-item">
            {{ $article->piece_weight }} Kg</p>
    </div>

</div>