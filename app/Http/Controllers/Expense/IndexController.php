<?php

namespace App\Http\Controllers\Expense;

use App\Http\Resources\ExpenseResource;
use Illuminate\Http\JsonResponse;

class IndexController extends BaseController
{
    public function __invoke(): JsonResponse
    {
        $expenses = $this->service->index();

        return response()->json(
            ExpenseResource::collection($expenses)
        );
    }
}
