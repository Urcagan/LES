<?php

namespace App\Http\Controllers\Plant;

use App\Http\Requests\Plant\StoreRequest;


class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $this->service->store($data);

        return redirect()->route('plants.index');
    }
}
