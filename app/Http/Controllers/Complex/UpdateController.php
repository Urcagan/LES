<?php

namespace App\Http\Controllers\Complex;

use App\Http\Controllers\Controller;
use App\Http\Requests\Complex\UpdateRequest;
use App\Models\Complex;


class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request , Complex $complex)
    {

        $data = $request->validated();
        $complex->update($data);
        return redirect()->route('complexes.show', $complex->id);
    }

}
