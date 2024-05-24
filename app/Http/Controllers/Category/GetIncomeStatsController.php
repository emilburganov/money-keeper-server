<?php

namespace App\Http\Controllers\Category;

use App\Http\Requests\Category\GetIncomeStatsRequest;
use Illuminate\Http\JsonResponse;

class GetIncomeStatsController extends BaseController
{
    public function __invoke(GetIncomeStatsRequest $request): JsonResponse
    {
        $data = $request->safe();

        [$labels, $values] = $this->service->getIncomeCategoriesStats($data);

        return response()->json([
            'labels' => $labels,
            'values' => $values
        ]);
    }
}
