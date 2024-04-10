<?php

namespace App\Http\Controllers\Transfer;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class GetTransfersStatsController extends BaseController
{
    public function __invoke(): JsonResponse
    {
        [$labels, $values] = $this->service->getTransfersStats();

        return response()->json([
            'labels' => $labels,
            'values' => $values,
        ]);
    }
}
