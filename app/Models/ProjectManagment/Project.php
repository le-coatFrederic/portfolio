<?php

namespace App\Models\ProjectManagment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    /** @use HasFactory<\Database\Factories\ProjectFactory> */
    use HasFactory;

    protected $fillable = [
        'intitule',
        'description',
        'date_debut',
        'date_fin',
    ];

    public function subjects(): BelongsTo {
        return $this->belongsTo(Sujet::class);
    }

    public function etat(): BelongsTo {
        return $this->belongsTo(Etat::class);
    }

    public function contacts(): BelongsToMany {
        return $this->belongsToMany(Contact::class);
    }

    public function back_log_entities(): HasMany {
        return $this->hasMany(BackLogEntity::class);
    }
}
