<?php

namespace App\Http\Controllers\Plant;

use App\Http\Controllers\Controller;
use App\Models\Plant;


class DestroyController extends Controller{

    public function __invoke(Plant $plant)
    {
        $plant->delete();
        return redirect()->route('plants.index');
    }
}
