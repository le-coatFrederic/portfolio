<div>
    <h1>
        @if($action->id)
            Editer cette action
        @else
            Créer une action
        @endif
    </h1>

    <div class="card">
        <div class="card-body">
            <form action="" method="post">
                @csrf

                <div class="form-group">
                    <label for="type">
                        type
                    </label>
                    <input type="text" id="type" name="type" value="{{ old('type', $action->type) }}">
                    @error("type")
                    {{ $message }}
                    @enderror
                </div>

                <div class="form-group">
                    <label for="description">
                        description
                    </label>
                    <input type="text" id="description" name="description" value="{{ old('description', $action->description) }}">
                    @error("description")
                    {{ $message }}
                    @enderror
                </div>

                <input type="text" value="{{ $actionable->id }}" disabled>

                <div class="form-group">
                    <label for="date">
                        date
                    </label>
                    <input type="date" id="date" name="date" value="{{ old('date', $action->date) }}">
                    @error("date")
                    {{ $message }}
                    @enderror
                </div>
                </div>

                <button class="btn" type="submit">
                    @if($action->id)
                        Enregistrer
                    @else
                        Créer
                    @endif
                </button>

            </form>
        </div>
    </div>

</div>