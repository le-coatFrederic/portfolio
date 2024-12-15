<div>
    <h1>
        @if($sujet->id)
            Editer ce sujet
        @else
            Créer un sujet
        @endif
    </h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('sujets.create') }}" method="post">
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