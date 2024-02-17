<?php

namespace App\Http\Controllers\Expense;

use App\Http\Requests\Expense\StoreRequest;
use App\Http\Resources\ExpenseResource;
use Illuminate\Http\JsonResponse;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request): JsonResponse
    {
        $data = $request->safe();

        $expense = $this->service->store($data);

        return response()->json(
            new ExpenseResource($expense),
        );
    }
}
