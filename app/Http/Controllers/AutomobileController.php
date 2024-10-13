<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutomobileController extends Controller
{
    public function enter(Request $request)
    {
        dd(
            $request->all()
        );
    }
}
