<?php

namespace App\Http\Controllers\Admin\Plant;

use App\Http\Controllers\Controller;
use App\Models\Plant;


class IndexController extends Controller{

    public function __invoke()
    {
        $plants = Plant::all();

        return view('admin.plant.index', compact('plants'));
    }
}
