<?php

namespace App\Http\Controllers\Transfer;

use App\Http\Requests\Transfer\StoreRequest;
use App\Http\Resources\TransferResource;
use App\Models\Account;
use App\Models\Income;
use App\Models\Transfer;
use Illuminate\Http\JsonResponse;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request): JsonResponse
    {
        $this->authorize('create', Transfer::class);
        $data = $request->safe();

        $accountFrom = Account::query()->find($data->account_from_id);

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
