<?php

namespace App\Http\Controllers\Admin\Complex;

use App\Http\Controllers\Controller;


class CreateController extends Controller
{
    public function __invoke()
    {
        return view( 'admin.complex.create');
    }

}
