<?php

use App\Models\CV\TypeEvenement;
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
        Schema::create('type_evenements', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('intitule');
            $table->string('description');
        });

        Schema::table('evenements', function (Blueprint $table) {
           $table->foreignIdFor(TypeEvenement::class)->nullable()->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('type_evenements');
    }
};
