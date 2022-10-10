<?php

namespace App\Http\Controllers\Admin\Plant;

use App\Http\Controllers\Controller;
use App\Models\Plant;


class ShowController extends Controller{

    public function __invoke(Plant $plant)
    {
        $complex = $plant->complex;
        $units = $plant->units;
        return view('admin.plant.show', compact('plant', 'complex', 'units'));

    }
}
