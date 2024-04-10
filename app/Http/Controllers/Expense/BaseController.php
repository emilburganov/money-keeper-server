<?php

namespace App\Http\Controllers\Expense;

use App\Http\Controllers\Controller;
use App\Services\Expense\ExpenseService;

class BaseController extends Controller
{
    public ExpenseService $service;

    public function __construct(ExpenseService $service)
    {
        $this->service = $service;
    }
}
