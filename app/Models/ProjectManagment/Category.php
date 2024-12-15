<?php

namespace App\Models\ProjectManagment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;

    protected $fillable = [
        'intitule',
        'description',
    ];

    public function subjects(): BelongsToMany {
        return $this->belongsToMany(Sujet::class);
    }
}
