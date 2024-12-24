<?php

namespace App\Models\ProjectManagement;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Project extends Model
{
    /** @use HasFactory<\Database\Factories\ProjectFactory> */
    use HasFactory;

    protected $fillable = [
        'intitule',
        'description',
        'date_debut',
        'date_fin',
        'etat_id',
        'sujet_id'
    ];

    public function sujet(): BelongsTo {
        return $this->belongsTo(Sujet::class);
    }

    public function etat(): BelongsTo {
        return $this->belongsTo(Etat::class);
    }

    public function contacts(): BelongsToMany {
        return $this->belongsToMany(Contact::class)->withPivot('role');
    }

    public function incidents(): MorphMany {
        return $this->morphMany(Incident::class, 'projectable');
    }

    public function tasks(): MorphMany {
        return $this->morphMany(Task::class, 'projectable');
    }
}
