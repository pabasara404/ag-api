<?php

namespace Database\Factories;

use App\Models\GnOfficer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GnDivision>
 */
class GnDivisionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'gn_code' => $this->faker->unique()->regexify('[A-Z]{3}\d{4}'),
            'name' => $this->faker->city,
            'mpa_code' => $this->faker->unique()->regexify('[A-Z]{3}\d{4}'),
            'grama_officer_id' => GnOfficer::inRandomOrder()->first()->id,
        ];
    }
}
