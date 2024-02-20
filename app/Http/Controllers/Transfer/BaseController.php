<?php

namespace App\Http\Controllers\Transfer;

use App\Http\Controllers\Controller;
use App\Services\Transfer\Service;

class BaseController extends Controller
{
    public Service $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}
