<?php

namespace App\Http\Controllers\Plant;

use App\Http\Controllers\Controller;
use App\Models\Plant;


class UpdateController extends Controller{

    public function __invoke(Plant $plant)
    {
        $data = request()->validate([
            'NamePlant' => 'string',
            'Description' => 'string',
            'complex_id' => 'integer',
        ]);
        @$plant->update($data);
        return redirect()->route('plants.show', $plant->id);
    }
}
