<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\User;

class IndexController extends Controller
{
    public function __invoke()
    {
        //return view('about');

        $userCount = User::all()->count();

        return view('admin.main.index', compact('userCount'));
    }

}
