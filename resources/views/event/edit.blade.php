<div>
    <h1>Creer un évènement</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('event.edit', ['event' => $event]) }}" method="post">
                @csrf

                <div class="form-group">
                    <label for="intitule">
                        Intitule
                    </label>
                    <input type="text" id="intitule" name="intitule" value="{{ old('intitule', $event->intitule) }}">
                    @error("intitule")
                    {{ $message }}
                    @enderror
                </div>

                <div class="form-group">
                    <label for="etablissement">
                        Etablissement
                    </label>
                    <input type="text" id="etablissement" name="etablissement" value="{{ old('etablissement', $event->etablissement) }}">
                    @error("etablissement")
                    {{ $message }}
                    @enderror
                </div>

                <div class="form-group">
                    <label for="lieu">
                        Lieu
                    </label>
                    <input type="text" id="lieu" name="lieu" value="{{ old('lieu', $event->lieu) }}">
                    @error("lieu")
                    {{ $message }}
                    @enderror
                </div>

                <div class="form-group">
                    <label for="description">
                        Description
                    </label>
                    <textarea id="description" name="description">{{ old('description', $event->description) }}</textarea>
                    @error("description")
                    {{ $message }}
                    @enderror
                </div>

                <div class="form-group">
                    <label for="date_debut">
                        Date de début
                    </label>
                    <input type="date" id="date_debut" name="date_debut" value="{{ old('date_debut', $event->date_debut) }}">
                    @error("date_debut")
                    {{ $message }}
                    @enderror
                </div>

                <div class="form-group">
                    <label for="date_fin">
                        Date de fin
                    </label>
                    <input type="date" id="date_fin" name="date_fin" value="{{ old('date_fin', $event->date_fin) }}">
                    @error("date_fin")
                    {{ $message }}
                    @enderror
                </div>

                <div class="form-group">
                    <label for="type_evenement">
                        Type d'évènement
                    </label>
                    <input type="number" name="type_evenement" id="type_evenement" value="{{ old('type_evenement') }}">
                    @error("type_evenement")
                    {{ $message }}
                    @enderror
                </div>

                <button type="submit">Enregistrer</button>
            </form>
        </div>
    </div>

</div>
