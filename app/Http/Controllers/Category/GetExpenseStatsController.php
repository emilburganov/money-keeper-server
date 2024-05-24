<?php

namespace App\Http\Controllers\Category;

use App\Http\Requests\Category\GetExpenseStatsRequest;
use App\Http\Requests\Category\GetIncomeStatsRequest;
use Illuminate\Http\JsonResponse;

class GetExpenseStatsController extends BaseController
{
    public function __invoke(GetExpenseStatsRequest $request): JsonResponse
    {
        $data = $request->safe();

        [$labels, $values] = $this->service->getExpenseCategoriesStats($data);

        return response()->json([
            'labels' => $labels,
            'values' => $values
        ]);
    }
}
