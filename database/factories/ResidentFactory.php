<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Resident>
 */
class ResidentFactory extends Factory
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
            'first_name' => $faker->firstName(),
            'last_name' => $faker->lastName(),
            'document' => $faker->cpf(),
            'phone_number' => $faker->phoneNumber(),
        ];
    }
}
