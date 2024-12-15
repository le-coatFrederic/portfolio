<?php

use App\Models\ProjectManagement\Category;
use App\Models\ProjectManagement\Etat;
use App\Models\ProjectManagement\Sujet;
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
        Schema::create('sujets', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('intitule');
            $table->longText('description');
            $table->foreignIdFor(Etat::class);
        });

        Schema::create('category_sujet', function (Blueprint $table) {
            $table->foreignIdFor(Category::class);
            $table->foreignIdFor(Sujet::class);
            $table->primary(['category_id', 'sujet_id']);
        });

        Schema::table('projects', function (Blueprint $table) {
            $table->foreignIdFor(Sujet::class)->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sujets');
    }
};
