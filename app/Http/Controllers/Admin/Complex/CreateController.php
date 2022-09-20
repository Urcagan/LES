<?php

namespace App\Http\Controllers\Complex;

use App\Http\Controllers\Controller;


class CreateController extends Controller
{
    public function __invoke()
    {
        return view( 'complex.create');
    }

}
