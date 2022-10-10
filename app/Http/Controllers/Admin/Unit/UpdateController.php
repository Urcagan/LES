<?php

namespace App\Http\Controllers\Admin\Unit;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Unit\UpdateRequest;
use App\Models\Unit;


class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request , Unit $unit)
    {

        $data = $request->validated();
        $unit->update($data);
        return redirect()->route('admin.unit.show', $unit->id);
    }

}
