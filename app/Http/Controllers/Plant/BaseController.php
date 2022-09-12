<?php

namespace App\Http\Controllers\Plant;

use App\Http\Controllers\Controller;
use App\Services\Plant\Service;

class BaseController extends Controller
{
    public $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}
