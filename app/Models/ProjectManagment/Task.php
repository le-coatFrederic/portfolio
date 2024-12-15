<?php

namespace App\Models\ProjectManagment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends BackLogEntity
{
    /** @use HasFactory<\Database\Factories\TaskFactory> */
    use HasFactory;

    protected $fillable = [
        'intitule',
        'description',
        'status',
        'deadline',
    ];
}
