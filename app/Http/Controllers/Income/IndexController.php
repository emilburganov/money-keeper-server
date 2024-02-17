<?php

namespace App\Http\Controllers\Income;

use App\Http\Controllers\Controller;
use App\Http\Resources\IncomeResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class IndexController extends BaseController
{
    public function __invoke(): JsonResponse
    {
        $incomes = $this->service->index();

        return response()->json(
            IncomeResource::collection($incomes)
        );
    }
}
