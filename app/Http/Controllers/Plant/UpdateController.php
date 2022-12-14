<?php

namespace App\Http\Controllers\Plant;

use App\Http\Requests\Admin\Plant\UpdateRequest;
use App\Models\Plant;


class UpdateController extends BaseController {

    public function __invoke(UpdateRequest $request , Plant $plant)
    {
        $data = $request->validated();

        $this->service->update($plant, $data);

        return redirect()->route('plants.show', $plant->id);
    }
}
