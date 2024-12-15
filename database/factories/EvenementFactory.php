<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CV\Evenement>
 */
class EvenementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $dateFin = $this->faker->dateTimeBetween('-10 years', 'now');
        $dateDebut = $this->faker->dateTimeAD($dateFin);

        return [
            "intitule" => $this->faker->unique()->sentence(),
            "etablissement" => $this->faker->sentence(),
            "lieu" => $this->faker->sentence(),
            "date_debut" => $dateDebut,
            "date_fin" => $dateFin,
            "description" => $this->faker->text(),
        ];
    }
}
