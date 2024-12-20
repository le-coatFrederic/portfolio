<div>
    <h1>Creer une compétence</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('skill.edit', ['skill' => $skill]) }}" method="post">
                @csrf

                <div class="form-group">
                    <label for="intitule">
                        Intitule
                    </label>
                    <input type="text" id="intitule" name="intitule" value="{{ old('intitule', $skill->intitule) }}">
                    @error("intitule")
                    {{ $message }}
                    @enderror
                </div>

                <div class="form-group">
                    <label for="description">
                        Description
                    </label>
                    <textarea id="description" name="description">{{ old('description', $skill->description) }}</textarea>
                    @error("description")
                    {{ $message }}
                    @enderror
                </div>

                <div class="form-group">
                    <label for="priorite">
                        Priorité
                    </label>
                    <input type="number" name="priorite" id="priorite" value="{{ old('priorite', $skill->priorite) }}">
                    @error("priorite")
                    {{ $message }}
                    @enderror
                </div>

                <button type="submit">Enregistrer</button>
            </form>
        </div>
    </div>

</div>
