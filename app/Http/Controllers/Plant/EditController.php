<?php

namespace App\Http\Controllers\Plant;

use App\Http\Controllers\Controller;
use App\Models\Complex;
use App\Models\Plant;


class EditController extends Controller{

    public function __invoke(Plant $plant)
    {
        $complexes = Complex::all();

        return view('plant.edit', compact('plant','complexes'));
    }
}
