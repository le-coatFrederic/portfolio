<?php

namespace App\Models\CV;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Evenement extends Model
{
    use HasFactory;

    protected $fillable = [
        'intitule',
        'etablissement',
        'lieu',
        'description',
        'date_debut',
        'date_fin',
        'type_evenement'
    ];

    public function type_evenement(): BelongsTo {
        return $this->belongsTo(TypeEvenement::class);
    }

    public function competences(): BelongsToMany {
        return $this->belongsToMany(Competence::class);
    }
}
