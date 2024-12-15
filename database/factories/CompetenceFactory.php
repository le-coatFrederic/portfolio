<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CV\Competence>
 */
class CompetenceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "intitule" => $this->faker->unique()->word(),
            "description" => $this->faker->text(),
            "priorite" => $this->faker->randomElement(["1", "2", "3", "4", "5", "6", "7", "8", "9"]),
        ];
    }
}
