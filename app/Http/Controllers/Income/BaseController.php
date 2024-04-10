<?php

namespace App\Http\Controllers\Income;

use App\Http\Controllers\Controller;
use App\Services\Income\IncomeService;

class BaseController extends Controller
{
    public IncomeService $service;

    public function __construct(IncomeService $service)
    {
        $this->service = $service;
    }
}
