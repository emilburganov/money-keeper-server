<?php

namespace App\Http\Controllers\Currency;

use App\Http\Controllers\Controller;
use App\Services\Currency\CurrencyService;

class BaseController extends Controller
{
    public CurrencyService $service;

    public function __construct(CurrencyService $service)
    {
        $this->service = $service;
    }
}
