<?php

namespace App\Http\Controllers\Admin\Plant;

use App\Http\Requests\Admin\Plant\StoreRequest;


class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $this->service->store($data);

        return redirect()->route('admin.plants.index');
    }
}
