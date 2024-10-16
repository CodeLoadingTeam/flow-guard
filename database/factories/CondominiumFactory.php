<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Condominium>
 */
class CondominiumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = fake('pt_BR');

        return [
            'name' => $faker->company(),
            'street' => $faker->streetName(),
            'neighborhood' => "{$faker->firstName()} {$faker->lastName()}",
            'number' => $faker->randomNumber(3),
        ];
    }
}
