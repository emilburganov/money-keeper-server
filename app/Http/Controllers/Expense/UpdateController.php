<?php

namespace App\Http\Controllers\Expense;

use App\Http\Requests\Expense\UpdateRequest;
use App\Http\Resources\AccountResource;
use App\Http\Resources\ExpenseResource;
use App\Models\Expense;
use Illuminate\Http\JsonResponse;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Expense $expense): JsonResponse
    {
        $data = $request->safe();

        $this->service->update($expense, $data);

        return response()->json(
            new ExpenseResource($expense),
        );
    }
}
