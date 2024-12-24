<?php

namespace App\Models\ProjectManagement;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Incident extends Model
{
    /** @use HasFactory<\Database\Factories\IncidentFactory> */
    use HasFactory;

    protected $fillable = [
        'intitule',
        'description',
        'project_id',
        'etat_id'
    ];

    public function tickets(): HasMany {
        return $this->hasMany(Ticket::class);
    }

    public function etat(): BelongsTo {
        return $this->belongsTo(Etat::class);
    }

    public function projectable(): MorphTo {
        return $this->morphTo();
    }

    public function actions(): MorphMany {
        return $this->morphMany(Action::class, 'actionable');
    }
}
