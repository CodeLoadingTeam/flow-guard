<?php

namespace App\Http\Controllers;

use App\Models\Automobile;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AutomobileController extends Controller
{
    public function enter(Request $request)
    {
        // $plateType = $request->input('plate_type');

        $plate = $request->input('plate');

        $automobile = Automobile::query()
            ->where('plate', $plate)
            ->first();

        if (! $automobile) {
            return response()->json([
                'message' => 'O veículo não tem permissão para poder acessar a passagem!'
            ], Response::HTTP_FORBIDDEN);
        }

        $plateType = $automobile->plate_mercosul == true
            ? 'Mercosul'
            : 'Antiga';

        /** @todo adicionar dados restantes */
        $data = [
            'resident'    => "{$automobile->resident->first_name} {$automobile->resident->last_name}",
            'condominium' => '',
            'domicile'    => '',
            'datetime'    => '',
            'automobile'  => "{$automobile->brand} {$automobile->model} {$automobile->year} ({$automobile->color})",
            'plate'       => "{$automobile->plate} ($plateType)",
        ];

        return response()->json($data);
    }
}
