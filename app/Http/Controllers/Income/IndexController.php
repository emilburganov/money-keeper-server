<?php

namespace App\Http\Controllers\Income;

use App\Http\Resources\IncomeResource;
use Illuminate\Http\JsonResponse;

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
