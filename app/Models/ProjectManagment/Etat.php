<?php

namespace App\Models\ProjectManagment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Etat extends Model
{
    /** @use HasFactory<\Database\Factories\EtatFactory> */
    use HasFactory;

    protected $fillable = [
        'intitule',
        'description',
    ];

    public function actions(): HasMany {
        return $this->hasMany(Action::class);
    }

    public function back_log_entities(): HasMany {
        return $this->hasMany(BackLogEntity::class);
    }

    public function projects(): HasMany {
        return $this->hasMany(Project::class);
    }

    public function subjects(): HasMany {
        return $this->hasMany(Sujet::class);
    }
}
