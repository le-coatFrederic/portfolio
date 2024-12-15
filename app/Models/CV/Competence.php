<?php

namespace App\Models\CV;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Competence extends Model
{
    use HasFactory;

    protected $fillable = [
        'intitule',
        'description',
        'priorite',
    ];

    public function evenements(): BelongsToMany {
        return $this->belongsToMany(Evenement::class);
    }
}
