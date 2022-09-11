<?php

namespace App\Http\Controllers\Plant;

use App\Http\Controllers\Controller;
use App\Http\Requests\Plant\StoreRequest;
use App\Models\Plant;


class StoreController extends Controller{

    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Plant::create($data);
        return redirect()->route('plants.index');
    }
}
