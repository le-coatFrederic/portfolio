<div>
    <h1>
        @if($project->id)
            Editer ce projet
        @else
            Créer un projet
        @endif
    </h1>

    <div class="card">
        <div class="card-body">
            <form action="" method="post">
                @csrf

                <div class="form-group">
                    <label for="intitule">
                        Intitule
                    </label>
                    <input type="text" id="intitule" name="intitule" value="{{ old('intitule', $project->intitule) }}">
                    @error("intitule")
                    {{ $message }}
                    @enderror
                </div>

                <div class="form-group">
                    <label for="description">
                        Description
                    </label>
                    <textarea id="description" name="description">{{ old('description', $project->description) }}</textarea>
                    @error("description")
                    {{ $message }}
                    @enderror
                </div>

                <div class="form-group">
                    <label for="date_debut">
                        Date de début
                    </label>
                    <input id="date_debut" name="date_debut" type="date" value="{{ old('date_debut', $project->date_debut) }}"/>
                    @error("date_debut")
                    {{ $message }}
                    @enderror
                </div>

                <div class="form-group">
                    <label for="date_fin">
                        Date de fin
                    </label>
                    <input id="date_fin" name="date_fin" type="date" value="{{ old('date_fin', $project->date_fin) }}"/>
                    @error("date_fin")
                    {{ $message }}
                    @enderror
                </div>

                <div class="form-group">
                    <label for="sujet_id">
                        Sujet
                    </label>
                    <input id="sujet_id" name="sujet_id" type="number" value="{{ old('sujet_id', $project->sujet()->intitule }}"/>
                    @error("sujet_id")
                    {{ $message }}
                    @enderror
                </div>

                <div class="form-group">
                    <label for="etat_id">
                        Etat
                    </label>
                    <textarea id="etat_id" name="etat_id">{{ old('etat_id', $project->etat_id) }}</textarea>
                    @error("etat_id")
                    {{ $message }}
                    @enderror
                </div>

                <button class="btn" type="submit">
                    @if($project->id)
                        Enregistrer
                    @else
                        Créer
                    @endif
                </button>

            </form>
        </div>
    </div>

</div>