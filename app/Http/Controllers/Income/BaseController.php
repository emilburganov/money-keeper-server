<?php

namespace App\Http\Controllers\Income;

use App\Http\Controllers\Controller;
use App\Services\Income\Service;

class BaseController extends Controller
{
    public Service $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}
