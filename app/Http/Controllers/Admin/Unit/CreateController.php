<?php

namespace App\Http\Controllers\Admin\Unit;

use App\Http\Controllers\Controller;
use App\Models\Plant;


class CreateController extends Controller
{
    public function __invoke()
    {
        $plants=Plant::all();
        return view( 'admin.unit.create',compact('plants'));
    }

}
