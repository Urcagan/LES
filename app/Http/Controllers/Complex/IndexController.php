<?php

namespace App\Http\Controllers\Complex;

use App\Http\Controllers\Controller;
use App\Models\Complex;


class IndexController extends Controller
{
    public function __invoke()
    {
        $complexes = Complex::all();
        return view('complex.index', compact('complexes'));
    }


}
