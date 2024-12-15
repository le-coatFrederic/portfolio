<?php

namespace App\Models\ProjectManagment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ticket extends Model
{
    /** @use HasFactory<\Database\Factories\TicketFactory> */
    use HasFactory;

    protected $fillable = [
        'number',
        'link'
    ];

    public function incident(): BelongsTo {
        return $this->belongsTo(Incident::class);
    }
}
