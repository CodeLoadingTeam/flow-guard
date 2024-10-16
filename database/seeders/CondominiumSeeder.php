<?php

namespace Database\Seeders;

use App\Models\Automobile;
use App\Models\Condominium;
use App\Models\Domicile;
use App\Models\Resident;
use App\Models\ResidentDomicile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CondominiumSeeder extends Seeder
{
    private const DOMICILE_QUANTITY = 8;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $condominium = Condominium::factory()->create();

        $this->createDomiciles($condominium->id);
    }

    private function createDomiciles(int $condominiumId)
    {
        $half = self::DOMICILE_QUANTITY / 2;

        // terão dois residentes por domicílio com um veículo
        for ($num = 0; $num < $half; $num++) {
            $domicile = Domicile::factory()->create([
                'domicile_number' => $num + 1,
                'tower' => 'A',
                'condominium_id' => $condominiumId,
            ]);

            $this->createResidents($domicile->id, 2, 1);
        }

        // terá um residente por domicílio com dois veículos
        for ($num = $half; $num < self::DOMICILE_QUANTITY; $num++) {
            $domicile = Domicile::factory()->create([
                'domicile_number' => $num + 1,
                'tower' => 'B',
                'condominium_id' => $condominiumId,
            ]);

            $this->createResidents($domicile->id, 1, 2);
        }
    }

    private function createResidents(
        int $domicileId, 
        int $residentQuantity, 
        int $automobileQuantity,
    ) {
        for ($num = 0; $num < $residentQuantity; $num++) {
            $resident = Resident::factory()->create();

            ResidentDomicile::factory()->create([
                'resident_id' => $resident->id,
                'domicile_id' => $domicileId,
            ]);

            $this->createAutomobiles($resident->id, $automobileQuantity);
        }
    }

    private function createAutomobiles(int $residentId, int $automobileQuantity)
    {
        for ($num = 0; $num < $automobileQuantity; $num++) {
            Automobile::factory()->create([
                'resident_id' => $residentId,
            ]);
        }
    }
}
