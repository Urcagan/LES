<?php

namespace App\Http\Controllers\Admin\Complex;

use App\Http\Controllers\Controller;
use App\Models\Complex;


class EditController extends Controller
{
    public function __invoke(Complex $complex)
    {

        return view('admin.complex.edit', compact('complex'));
    }

}
