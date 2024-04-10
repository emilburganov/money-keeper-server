<?php

namespace App\Http\Controllers\Income;

use Illuminate\Http\JsonResponse;

class GetIncomesStatsController extends BaseController
{
    public function __invoke(): JsonResponse
    {
        [$labels, $values] = $this->service->getIncomesStats();

        return response()->json([
            'labels' => $labels,
            'values' => $values,
        ]);
    }
}
