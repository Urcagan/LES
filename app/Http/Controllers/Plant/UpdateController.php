<?php

namespace App\Http\Controllers\Plant;

use App\Http\Controllers\Controller;
use App\Http\Requests\Plant\UpdateRequest;
use App\Models\Plant;


class UpdateController extends Controller{

    public function __invoke(UpdateRequest $request , Plant $plant)
    {
        $data = $request->validated();
        @$plant->update($data);
        return redirect()->route('plants.show', $plant->id);
    }
}
