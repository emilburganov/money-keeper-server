<?php

namespace App\Http\Controllers\Transfer;

use App\Http\Controllers\Controller;
use App\Services\Transfer\TransferService;

class BaseController extends Controller
{
    public TransferService $service;

    public function __construct(TransferService $service)
    {
        $this->service = $service;
    }
}
