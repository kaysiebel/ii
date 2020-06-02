<div class="accordion ripple">Gebinde-Angaben</div>
<div class="accordion-panel">

    <div class="create-grid-small ripple-light margin-top-16">
        <div class="accordion-item">
            <label class="create-label" for="unit_size">Gebinde- Größe</label>
        </div>
        <div class="accordion-item">
            <input class="create-input width-xsmall" type="text" placeholder="Einheiten" name="unit_size" autocomplete="off" value="{{ old('unit_size') ?? $article->unit_size }}">
        </div>
    </div>

    <div class="create-container">
        @error('unit_size') <p class="red">{{ $message }}</p> @enderror
    </div>

    <div class="create-grid-small ripple-light">
        <div class="accordion-item">
            <label class="create-label" for="unit_start_stock">Ist-Bestand</label>
        </div>
        <div class="accordion-item">
            <input class="create-input width-small" type="text" placeholder="Menge" name="unit_start_stock" autocomplete="off" value="{{ old('unit_start_stock') ?? $article->unit_start_stock }}">
        </div>
    </div>

    <div class="create-container">
        @error('unit_start_stock') <p class="red">{{ $message }}</p> @enderror
    </div>

    <div class="create-grid-small ripple-light">
        <div class="accordion-item">
            <label class="create-label" for="unit_weight">Gewicht</label>
        </div>
        <div class="accordion-item">
            <input class="create-input width-xsmall" type="text" placeholder="Kg" name="unit_weight" autocomplete="off" value="{{ old('unit_weight')?? $article->unit_weight }}">
        </div>
    </div>

    <div class="create-container">
        @error('unit_weight') <p class="red">{{ $message }}</p> @enderror
    </div>

    <div class="create-grid-small ripple-light">
        <div class="accordion-item">
            <label class="create-label" for="unit_min_stock">Mindest- Bestand</label>
        </div>
        <div class="accordion-item">
            <input class="create-input width-small" type="text" placeholder="Menge" name="unit_min_stock" autocomplete="off" value="{{ old('unit_min_stock')?? $article->unit_min_stock }}">
        </div>
    </div>

    <div class="create-container">
        @error('unit_min_stock') <p class="red">{{ $message }}</p> @enderror
    </div>

    <div class="create-grid-small ripple-light">
        <div class="accordion-item">
            <label class="create-label" for="unit_order_stock">Bestell- Bestand</label>
        </div>
        <div class="accordion-item">
            <input class="create-input width-small" type="text" placeholder="Menge" name="unit_order_stock" autocomplete="off" value="{{ old('unit_order_stock')?? $article->unit_order_stock }}">
        </div>
    </div>

    <div class="create-container">
        @error('unit_order_stock') <p class="red">{{ $message }}</p> @enderror
    </div>

    <div class="create-grid-small ripple-light">
        <div class="accordion-item">
            <label class="create-label" for="unit_max_stock">Höchst- Bestand</label>
        </div>
        <div class="accordion-item">
            <input class="create-input width-small" type="text" placeholder="Menge" name="unit_max_stock" autocomplete="off" value="{{ old('unit_max_stock')?? $article->unit_max_stock }}">
        </div>
    </div>

    <div class="create-container">
        @error('unit_max_stock') <p class="red">{{ $message }}</p> @enderror
    </div>

</div>