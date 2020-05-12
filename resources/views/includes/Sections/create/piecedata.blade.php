<div class="accordion ripple">Stück- Angaben</div>
<div class="accordion-panel">

    <div class="create-grid-small ripple-light">
        <div class="accordion-item">
            <label class="create-label" for="piece_min_stock">Mindest- Bestand</label>
        </div>
        <div class="accordion-item">
            <input class="create-input width-small" type="text" placeholder="Stück" name="piece_min_stock" autocomplete="off" value="{{ old('piece_min_stock') }}">
        </div>
    </div>

    <div class="create-container">
        @error('piece_min_stock') <p class="red">{{ $message }}</p> @enderror
    </div>

    <div class="create-grid-small ripple-light">
        <div class="accordion-item">
            <label class="create-label" for="piece_order_stock">Bestell- Bestand</label>
        </div>
        <div class="accordion-item">
            <input class="create-input width-small" type="text" placeholder="Stück" name="piece_order_stock" autocomplete="off" value="{{ old('piece_order_stock') }}">
        </div>
    </div>

    <div class="create-container">
        @error('piece_order_stock') <p class="red">{{ $message }}</p> @enderror
    </div>

    <div class="create-grid-small ripple-light">
        <div class="accordion-item">
            <label class="create-label" for="piece_max_stock">Höchst- Bestand</label>
        </div>
        <div class="accordion-item">
            <input class="create-input width-small" type="text" placeholder="Stück" name="piece_max_stock" autocomplete="off" value="{{ old('piece_max_stock') }}">
        </div>
    </div>

    <div class="create-container">
        @error('piece_max_stock') <p class="red">{{ $message }}</p> @enderror
    </div>

    <div class="create-grid-small ripple-light">
        <div class="accordion-item">
            <label class="create-label" for="piece_weight">Gewicht</label>
        </div>
        <div class="accordion-item">
            <input class="create-input width-xsmall" type="text" placeholder="Kg" name="piece_weight" autocomplete="off" value="{{ old('piece_weight') }}">
        </div>
    </div>

    <div class="create-container">
        @error('piece_weight') <p class="red">{{ $message }}</p> @enderror
    </div>

</div>