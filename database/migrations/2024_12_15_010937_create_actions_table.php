<?php

use App\Models\ProjectManagement\Action;
use App\Models\ProjectManagement\BackLogEntity;
use App\Models\ProjectManagement\Incident;
use App\Models\ProjectManagement\Task;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('actions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('type');
            $table->string('description');
            $table->dateTime('date');
            $table->morphs('actionable');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actions');
    }
};
