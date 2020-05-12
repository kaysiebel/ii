<div class="accordion ripple">Gebinde-Angaben</div>
<div class="accordion-panel">

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
            {{ $article->unit_weight }} Kg</p>
    </div>

    <div class="accordion-grid ripple-light">
        <p class="accordion-item">
            Soll- Bestand</p>
        <p class="accordion-item">
            {{ $article->unit_start_stock }}</p>
    </div>

    <div class="accordion-grid ripple-light">
        <p class="accordion-item">
            Mindest- Bestand</p>
        <p class="accordion-item">
            {{ $article->unit_min_stock }}</p>
    </div>

    <div class="accordion-grid ripple-light">
        <p class="accordion-item">
            Bestell- Bestand</p>
        <p class="accordion-item">
            {{ $article->unit_order_stock }}</p>
    </div>

    <div class="accordion-grid ripple-light">
        <p class="accordion-item">
            Höchst- Bestand</p>
        <p class="accordion-item">
            {{ $article->unit_max_stock }}</p>
    </div>

</div>