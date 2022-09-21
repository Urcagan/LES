<?php

namespace App\Http\Controllers\Admin\Complex;

use App\Http\Controllers\Controller;
use App\Models\Complex;


class ShowController extends Controller
{
    public function __invoke(Complex $complex)
    {

        $plants = $complex->plants;

        //$plants = Plant::where('complex_id', $complex->id)->get();
        // dd($plants);

        return view('admin.complex.show', compact('complex', 'plants'));

    }

}
