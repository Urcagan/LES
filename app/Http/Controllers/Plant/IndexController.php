<?php

namespace App\Http\Controllers\Plant;

use App\Http\Controllers\Controller;
use App\Models\Plant;


class IndexController extends Controller{

    public function __invoke()
    {
        $plants = Plant::all();

        return view('plant.index', compact('plants'));
    }
}
