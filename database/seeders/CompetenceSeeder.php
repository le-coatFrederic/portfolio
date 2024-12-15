<?php

namespace Database\Seeders;

use App\Models\CV\Competence;
use Illuminate\Database\Seeder;

class CompetenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Competence::factory()->count(20)->create();
    }
}
