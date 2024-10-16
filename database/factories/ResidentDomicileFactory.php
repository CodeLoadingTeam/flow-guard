<?php

namespace Database\Factories;

use App\Models\Domicile;
use App\Models\Resident;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ResidentDomicile>
 */
class ResidentDomicileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'resident_id' => Resident::factory(),
            'domicile_id' => Domicile::factory(),
        ];
    }
}
