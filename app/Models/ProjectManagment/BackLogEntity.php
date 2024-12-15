<?php

namespace App\Models\ProjectManagment;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BackLogEntity extends Model
{
    protected $fillable = [
        'intitule',
        'description',
        'project_id',
        'etat_id'
    ];

    public function etat(): BelongsTo {
        return $this->belongsTo(Etat::class);
    }

    public function project(): BelongsTo {
        return $this->belongsTo(Project::class);
    }

    public function actions(): HasMany {
        return $this->hasMany(Action::class);
    }
}
