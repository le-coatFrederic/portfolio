<?php

namespace App\Models\CV;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TypeEvenement extends Model
{
    use HasFactory;

    public function evenements(): HasMany {
        return $this->hasMany(Evenement::class)->chaperone();
    }
}
