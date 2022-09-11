<?php

namespace App\Http\Controllers\Complex;

use App\Http\Controllers\Controller;
use App\Http\Requests\Complex\StoreRequest;
use App\Models\Complex;


class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Complex::create($data);
        return redirect()->route('complexes.index');
    }

}
