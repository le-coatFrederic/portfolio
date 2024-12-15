<?php

use App\Models\CV\Competence;
use App\Models\CV\Evenement;
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
        Schema::create('competences', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('intitule');
            $table->string('description');
            $table->integer('priorite');
        });

        Schema::create('competence_evenement', function (Blueprint $table) {
            $table->foreignIdFor(Competence::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Evenement::class)->constrained()->cascadeOnDelete();
            $table->primary(['competence_id', 'evenement_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('competences');
        Schema::dropIfExists('competence_evenement');
    }
};
