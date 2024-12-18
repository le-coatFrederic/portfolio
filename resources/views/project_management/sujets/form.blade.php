<div>
    <h1>
        @if($sujet->id)
            Editer ce sujet
        @else
            Créer un sujet
        @endif
    </h1>

@php
    $categoriesId = $sujet->categories()->pluck('id');
@endphp

    <div class="card">
        <div class="card-body">
            <form action="" method="post">
                @csrf

                <div class="form-group">
                    <label for="intitule">
                        Intitule
                    </label>
                    <input type="text" id="intitule" name="intitule" value="{{ old('intitule', $sujet->intitule) }}">
                    @error("intitule")
                    {{ $message }}
                    @enderror
                </div>

                <div class="form-group">
                    <label for="description">
                        Description
                    </label>
                    <textarea id="description" name="description">{{ old('description', $sujet->description) }}</textarea>
                    @error("description")
                    {{ $message }}
                    @enderror
                </div>

                <div class="form-group">
                    <label for="etat_id">
                        Etat
                    </label>
                    <select id="etat_id" name="etat_id">
                        <option value="">Sélectionner un état</option>
                        @foreach($etats as $etat)
                            <option @selected(old('etat_id', $sujet->etat_id)) value="{{ $etat->id }}">{{ $etat->intitule }}</option>
                        @endforeach
                    </select>
                    @error("etat_id")
                    {{ $message }}
                    @enderror

                    <div class="form-group">
                        <label for="categories">
                            Catégories
                        </label>
                        <select id="categories" name="categories" multiple>
                            @foreach($categories as $category)
                                <option @selected($categoriesId->contains($category->id)) value="{{ $category->id }}">{{ $category->intitule }}</option>
                            @endforeach
                        </select>
                        @error("categories")
                        {{ $message }}
                        @enderror
                    </div>
                </div>

                <button class="btn" type="submit">
                    @if($sujet->id)
                        Enregistrer
                    @else
                        Créer
                    @endif
                </button>

            </form>
        </div>
    </div>

</div>