<?php

namespace Database\Seeders;

use App\Models\CV\Evenement;
use Illuminate\Database\Seeder;

class EvenementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Evenement::factory()->count(20)->create();
    }
}
