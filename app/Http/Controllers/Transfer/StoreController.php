<?php

namespace App\Http\Controllers\Transfer;

use App\Http\Requests\Transfer\StoreRequest;
use App\Http\Resources\TransferResource;
use App\Models\Account;
use Illuminate\Http\JsonResponse;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request): JsonResponse
    {
        $data = $request->safe();

        $accountFrom = Account::query()->find($data->account_from_id);
        $accountTo = Account::query()->find($data->account_to_id);

        if ($accountFrom->currency_id !== $accountTo->currency_id) {
            return response()->json([
                'message' => __('errors.transfers.account.currencies.same'),
            ], 400);
        }

        if ($accountFrom->total < $data->amount) {
            return response()->json([
                'message' => __('errors.transfers.money.enough'),
            ], 400);
        }

        $transfer = $this->service->store($data);

        return response()->json(
            new TransferResource($transfer),
        );
    }
}
