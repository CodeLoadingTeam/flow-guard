<?php

namespace Database\Factories;

use App\Models\Automobile;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AutomobileEntryLog>
 */
class AutomobileEntryLogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'automobile_id' => Automobile::factory(),
            'action' => fake()->randomElement(['in', 'out']),
            'created_at' => fake()->dateTimeThisMonth(),
        ];
    }
}
