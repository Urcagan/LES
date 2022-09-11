<?php

namespace App\Http\Controllers\Plant;

use App\Http\Controllers\Controller;
use App\Models\Plant;


class ShowController extends Controller{

    public function __invoke(Plant $plant)
    {
        $complex = $plant->complex;
        return view('plant.show', compact('plant', 'complex'));

    }
}
