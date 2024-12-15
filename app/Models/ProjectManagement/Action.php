<?php

namespace App\Models\ProjectManagement;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Action extends Model
{
    /** @use HasFactory<\Database\Factories\ActionFactory> */
    use HasFactory;

    protected $fillable = [
        'description',
        'date',
        'back_log_entity_id'
    ];

    public function back_log_entity(): BelongsTo {
        return $this->belongsTo(BackLogEntity::class);
    }
}
