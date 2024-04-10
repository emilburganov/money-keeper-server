<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Services\Account\AccountService;

class BaseController extends Controller
{
    public AccountService $service;

    public function __construct(AccountService $service)
    {
        $this->service = $service;
    }
}
