<?php

namespace App\Http\Controllers\Admin\Unit;

use App\Http\Controllers\Controller;
use App\Models\Unit;


class IndexController extends Controller
{
    public function __invoke()
    {
        $units = Unit::all();
        return view('admin.unit.index', compact('units'));
    }


}
