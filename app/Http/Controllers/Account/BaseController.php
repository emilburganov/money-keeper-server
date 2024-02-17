<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Services\Account\Service;

class BaseController extends Controller
{
    public Service $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}
