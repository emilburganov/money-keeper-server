<?php

namespace App\Http\Controllers\Income;

use App\Http\Controllers\Controller;
use App\Models\Income;
use Illuminate\Http\JsonResponse;

class DestroyController extends BaseController
{
    public function __invoke(Income $income): JsonResponse
    {
        $this->authorize('delete', $income);
        $this->service->destroy($income);

        return response()->json([
            'message' => 'Income successful destroyed.',
        ]);
    }
}
