<?php

namespace App\Http\Controllers\Admin\Unit;

use App\Http\Controllers\Controller;
use App\Models\Plant;
use App\Models\Unit;


class EditController extends Controller
{
    public function __invoke(Unit $unit)
    {
        $plants=Plant::all();
        return view('admin.unit.edit', compact('unit', 'plants'));
    }

}
