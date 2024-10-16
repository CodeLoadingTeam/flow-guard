<?php

namespace Database\Factories;

use App\Models\Condominium;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Domicile>
 */
class DomicileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'domicile_number' => fake()->randomNumber(2),
            'tower' => Str::upper(fake()->randomLetter()),
            'condominium_id' => Condominium::factory(),
        ];
    }
}
