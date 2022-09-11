<?php

namespace App\Http\Controllers\Plant;

use App\Http\Controllers\Controller;
use App\Models\Plant;


class StoreController extends Controller{

    public function __invoke()
    {
        $data = request()->validate([
            'NamePlant' => 'string',
            'Description' => 'nullable | string',
            'complex_id' => 'required | numeric',
        ]);
        Plant::create($data);
        return redirect()->route('plants.index');
    }
}
