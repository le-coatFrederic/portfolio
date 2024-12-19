<div>
    <h1>
        @if($category->id)
            Editer cette catégorie
        @else
            Créer une catégorie
        @endif
    </h1>

    <div class="card">
        <div class="card-body">
            <form action="" method="post">
                @csrf

                <div class="form-group">
                    <label for="intitule">
                        intitule
                    </label>
                    <input type="text" id="intitule" name="intitule" value="{{ old('intitule', $category->intitule) }}">
                    @error("intitule")
                    {{ $message }}
                    @enderror
                </div>

                <div class="form-group">
                    <label for="description">
                        description
                    </label>
                    <input type="text" id="description" name="description" value="{{ old('description', $category->description) }}">
                    @error("description")
                    {{ $message }}
                    @enderror
                </div>

                <button class="btn" type="submit">
                    @if($category->id)
                        Enregistrer
                    @else
                        Créer
                    @endif
                </button>

            </form>
        </div>
    </div>

</div>