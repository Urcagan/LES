<?php

namespace App\Http\Controllers\Admin\Unit;

use App\Http\Controllers\Controller;
use App\Models\Unit;

class DestroyController extends Controller
{
    public function __invoke(Unit $unit)
    {
        $unit->delete();
        return redirect()->route('admin.unit.index');
    }

}
