<?php

namespace App\Http\Controllers\Admin\Unit;

use App\Http\Controllers\Controller;
use App\Models\Unit;


class ShowController extends Controller
{
    public function __invoke(Unit $unit)
    {

        $plant = $unit->plant;
        return view('admin.unit.show', compact('unit', 'plant'));

    }

}
