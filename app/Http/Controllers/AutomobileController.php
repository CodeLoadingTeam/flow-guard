<?php

namespace App\Http\Controllers;

use App\Models\Automobile;
use Illuminate\Http\Request;

class AutomobileController extends Controller
{
    public function enter(Request $request)
    {
        // $plateType = $request->input('plate_type');

        $plate = $request->input('plate');

        $dbResult = Automobile::query()
            ->where('plate', $plate)
            ->first();

        if (empty($dbResult)) {
            dd('não existe');
        }

        $data = [
            'resident'   => "{$dbResult->resident->first_name} {$dbResult->resident->last_name}",
            'automobile' => "{$dbResult->brand} {$dbResult->model} {$dbResult->year} ({$dbResult->color})",
            'plate'      => $dbResult->plate,
        ];

        dd('existe!', $data);
    }
}
