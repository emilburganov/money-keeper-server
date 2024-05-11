<?php

namespace App\Http\Controllers\Transfer;

use App\Http\Requests\Transfer\UpdateRequest;
use App\Http\Resources\TransferResource;
use App\Models\Account;
use App\Models\Transfer;
use Illuminate\Http\JsonResponse;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Transfer $transfer): JsonResponse
    {
        $data = $request->safe();

        $accountFrom = Account::query()->find($data->account_from_id);
        $accountTo = Account::query()->find($data->account_to_id);

        if ($accountFrom->currency_id !== $accountTo->currency_id) {
            return response()->json([
                'message' => __('errors.transfers.account.currencies.same'),
            ], 400);
        }

        if ($accountFrom->total + $transfer->amount < $data->amount) {
            return response()->json([
                'message' => __('errors.transfers.money.enough'),
            ], 400);
        }

        $this->service->update($transfer, $data);

        return response()->json(
            new TransferResource($transfer),
        );
    }
}
