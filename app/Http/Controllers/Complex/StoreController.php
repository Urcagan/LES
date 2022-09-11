<?php

namespace App\Http\Controllers\Complex;

use App\Http\Controllers\Controller;
use App\Models\Complex;


class StoreController extends Controller
{
    public function __invoke()
    {
        $data = request()->validate([
            'NameComplex' => 'required | string',
            'Description' => 'nullable | string',
        ]);
        Complex::create($data);
        return redirect()->route('complexes.index');
    }

}
