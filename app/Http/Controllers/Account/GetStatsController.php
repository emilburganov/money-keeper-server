<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\JsonResponse;

class GetStatsController extends BaseController
{
    public function __invoke(): JsonResponse
    {
        [$labels, $values] = $this->service->getAccountsStats();

        return response()->json([
            'labels' => $labels,
            'values' => $values
        ]);
    }
}
