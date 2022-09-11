<?php

namespace App\Http\Controllers\Complex;

use App\Http\Controllers\Controller;
use App\Models\Complex;


class EditController extends Controller
{
    public function __invoke(Complex $complex)
    {
        return view('complex.edit', compact('complex'));
    }

}
