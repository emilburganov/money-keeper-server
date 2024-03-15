<?php

namespace App\Http\Controllers\Transfer;

use App\Http\Requests\Transfer\StoreRequest;
use App\Http\Resources\TransferResource;
use App\Models\Income;
use App\Models\Transfer;
use Illuminate\Http\JsonResponse;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request): JsonResponse
    {
        $this->authorize('create', Transfer::class);
        $data = $request->safe();

        $transfer = $this->service->store($data);

        return response()->json(
            new TransferResource($transfer),
        );
    }
}
