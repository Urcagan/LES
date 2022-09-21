<?php

namespace App\Http\Controllers\Admin\Complex;

use App\Http\Controllers\Controller;
use App\Http\Requests\Complex\StoreRequest;
use App\Models\Complex;


class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        //Complex::firstOrCreate($data);
        Complex::firstOrCreate([ 'NameComplex'=> $data['NameComplex']],[
            'NameComplex'=>$data['NameComplex'],
            'Description'=>$data['Description'],
        ]);
        return redirect()->route('admin.complex.index');
    }

}
