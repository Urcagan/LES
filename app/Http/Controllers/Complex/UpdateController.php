<?php

namespace App\Http\Controllers\Complex;

use App\Http\Controllers\Controller;
use App\Models\Complex;


class UpdateController extends Controller
{
    public function __invoke(Complex $complex)
    {

        $data = request()->validate([
            'NameComplex' => 'string',
            'Description' => 'string',
        ]);
        @$complex->update($data);
        return redirect()->route('complexes.show', $complex->id);
    }

}
