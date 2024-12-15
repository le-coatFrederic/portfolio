<?php

use App\Models\ProjectManagement\BackLogEntity;
use App\Models\ProjectManagement\Etat;
use App\Models\ProjectManagement\Project;
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
        Schema::create('back_log_entity', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('intitule');
            $table->string('description');
            $table->foreignIdFor(Project::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Etat::class)->constrained()->cascadeOnDelete();
        });

        Schema::table('actions', function (Blueprint $table) {
            $table->foreignIdFor(BackLogEntity::class)->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('back_log_entity');
    }
};
