<?php

namespace App\Http\Controllers\Admin\Unit;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Unit\StoreRequest;
use App\Models\Unit;


class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Unit::create($data);
        return redirect()->route('admin.unit.index');
    }

}
