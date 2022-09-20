<?php

namespace App\Http\Controllers\Complex;

use App\Http\Controllers\Controller;
use App\Models\Complex;

class DestroyController extends Controller
{
    public function __invoke(Complex $complex)
    {
        $complex->delete();
        return redirect()->route('complexes.index');
    }

}
