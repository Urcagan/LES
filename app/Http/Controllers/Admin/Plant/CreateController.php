<?php

namespace App\Http\Controllers\Admin\Plant;

use App\Http\Controllers\Controller;
use App\Models\Complex;


class CreateController extends Controller{

    public function __invoke()
    {
        $complexes = Complex::all();
        return view( 'admin.plant.create', compact('complexes'));
    }
}
