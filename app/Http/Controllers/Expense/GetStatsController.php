<?php

namespace App\Http\Controllers\Expense;

use Illuminate\Http\JsonResponse;

class GetStatsController extends BaseController
{
    public function __invoke(): JsonResponse
    {
        [$labels, $values] = $this->service->getExpensesStats();

        return response()->json([
            'labels' => $labels,
            'values' => $values,
        ]);
    }
}
