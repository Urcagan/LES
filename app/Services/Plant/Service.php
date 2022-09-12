<?php

namespace App\Services\Plant;

use App\Http\Controllers\Controller;
use App\Models\Plant;

class Service
{
    public function store($data)
    {
        Plant::create($data);
    }

    public function update($plant, $data)
    {
        $plant->update($data);
    }
}
