<div class="accordion ripple">Artikel- Angaben</div>
<div class="accordion-panel">

    <div class="create-grid ripple-light margin-top-16">
        <div class="accordion-item">
            <label class="file-lable">Artikel- Bild</label>
        </div>
        <div class="accordion-item">
            <input class="file-btn ripple" type="file" name="image">
        </div>
    </div>

    <div class="create-grid ripple-light">
        <div class="accordion-item">
            <label class="create-label" for="name">Artikel- Name</label>
        </div>
        <div class="accordion-item">
            <input class="create-input" type="text" name="name" placeholder="erforderlich" autocomplete="off" value="{{ old('name') ?? $article->name }}">
        </div>
    </div>

    <div class="create-container">
        @error('name') <p class="red">{{ $message }}</p> @enderror
    </div>

    <div class="create-grid ripple-light">
        <div class="accordion-item">
            <label class="create-label" for="piece_start_stock">Anfangs- Bestand</label>
        </div>
        <div class="accordion-item">
            <input class="create-input width-small" type="text" placeholder="erforderlich" name="piece_start_stock" autocomplete="off" value="{{ old('piece_start_stock') ?? $article->piece_start_stock }}">
        </div>
    </div>

    <div class="create-container">
        @error('piece_start_stock') <p class="red">{{ $message }}</p> @enderror
    </div>

    <div class="create-grid ripple-light">
        <div class="accordion-item">
            <label class="create-label" for="location">Lagerplatz</label>
        </div>
        <div class="accordion-item">
            <input class="create-input" type="text" placeholder="optional" name="location" autocomplete="off" value="{{ old('location') ?? $article->location }}">
        </div>
    </div>

    <div class="create-container">
        @error('location') <p class="red">{{ $message }}</p> @enderror
    </div>

</div>