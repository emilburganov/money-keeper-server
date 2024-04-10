<?php

namespace App\Http\Controllers\Expense;

use App\Http\Requests\Expense\UpdateRequest;
use App\Http\Resources\ExpenseResource;
use App\Models\Account;
use App\Models\Expense;
use Illuminate\Http\JsonResponse;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Expense $expense): JsonResponse
    {
        $data = $request->safe();

        $account = Account::query()->find($data->account_id);

        if ($account->total < $data->amount) {
            return response()->json([
                'message' => __('errors.expenses.money.enough'),
            ], 400);
        }

        $this->service->update($expense, $data);

        return response()->json(
            new ExpenseResource($expense),
        );
    }
}
