<?php

namespace App\Models\ProjectManagement;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sujet extends Model
{
    /** @use HasFactory<\Database\Factories\SujetFactory> */
    use HasFactory;

    protected $fillable = [
        'intitule',
        'description',
    ];

    public function etat(): BelongsTo {
        return $this->belongsTo(Etat::class);
    }

    public function categories(): BelongsToMany {
        return $this->belongsToMany(Category::class);
    }

    public function projets(): HasMany {
        return $this->hasMany(Project::class);
    }
}
