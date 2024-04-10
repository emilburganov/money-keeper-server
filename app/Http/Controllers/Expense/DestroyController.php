<?php

namespace App\Http\Controllers\Expense;

use App\Models\Expense;
use Illuminate\Http\JsonResponse;

class DestroyController extends BaseController
{
    public function __invoke(Expense $expense): JsonResponse
    {
        $this->service->destroy($expense);

        return response()->json([
            'message' => 'Expense successful destroyed.',
        ]);
    }
}
