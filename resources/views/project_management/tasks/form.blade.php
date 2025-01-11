<div>
    <h1>
        @if($task->id)
            Editer cette tâche
        @else
            Créer une tâche
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
                    <input type="text" id="intitule" name="intitule" value="{{ old('intitule', $task->intitule) }}">
                    @error("intitule")
                    {{ $message }}
                    @enderror
                </div>

                <div class="form-group">
                    <label for="description">
                        description
                    </label>
                    <input type="text" id="description" name="description" value="{{ old('description', $task->description) }}">
                    @error("description")
                    {{ $message }}
                    @enderror
                </div>

                <div class="form-group">
                    <label for="deadline">
                        deadline
                    </label>
                    <input type="date" id="deadline" name="deadline" value="{{ old('deadline', $task->deadline) }}">
                    @error("deadline")
                    {{ $message }}
                    @enderror
                </div>

                <div class="form-group">
                    <label for="status">
                        status
                    </label>
                    <input type="text" id="status" name="status" value="{{ old('status', $task->status) }}">
                    @error("status")
                    {{ $message }}
                    @enderror
                </div>

                <div class="form-group">
                    <label for="project_id">
                        Projet
                    </label>
                    <select id="project_id" name="project_id">
                        <option value="">Sélectionner un projet</option>
                        @foreach($projets as $projet)
                            <option @selected(old('project_id', $task->project_id)) value="{{ $projet->id }}">{{ $projet->intitule }}</option>
                        @endforeach
                    </select>
                    @error("project_id")
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
                            <option @selected(old('etat_id', $task->etat_id)) value="{{ $etat->id }}">{{ $etat->intitule }}</option>
                        @endforeach
                    </select>
                    @error("etat_id")
                    {{ $message }}
                    @enderror
                </div>

                <button class="btn" type="submit">
                    @if($task->id)
                        Enregistrer
                    @else
                        Créer
                    @endif
                </button>

            </form>
        </div>
    </div>

</div>