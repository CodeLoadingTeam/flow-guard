<?php

namespace Database\Factories;

use App\Models\Resident;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Automobile>
 */
class AutomobileFactory extends Factory
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
            'brand' => $brand = $this->getRandomBrand(),
            'model' => $this->getRandomModel($brand),
            'color' => $faker->safeColorName(),
            'year' => $faker->year(),
            'plate_mercosul' => $isMercosul = fake()->boolean(),
            'plate' => $isMercosul
                ? fake()->regexify('[A-Z]{3}[0-9][A-Z][0-9]{2}') // Gerar uma placa no padrão Mercosul: XXX0X00
                : fake()->regexify('[A-Z]{3}-[0-9]{4}'), // Gerar uma placa no padrão antigo: XXX-0000
            'resident_id' => Resident::factory(),
        ];
    }

    private function getRandomBrand(): string
    {
        $automobiles = $this->getAutomobiles();

        return fake()->randomKey($automobiles);
    }

    private function getRandomModel(string $brand): string
    {
        $automobiles = $this->getAutomobiles();

        return fake()->randomElement($automobiles[$brand]);
    }

    private function getAutomobiles(): array
    {
        return [
            'Chevrolet' => ['Cruze', 'Corsa'],
            'Fiat' => ['Argo', 'Palio'],
            'Ford' => ['EcoSport', 'Ka'],
            'Honda' => ['Civic'],
            'Hyundai' => ['HB20'],
            'Mitsubishi' => ['Lancer'],
            'Nissan' => ['Sentra'],
            'Peugeot' => ['208', '3008'],
            'Renault' => ['Kwid'],
            'Toyota' => ['Corolla'],
            'Volkswagen' => ['Gol', 'Nivus'],
        ];
    }
}
