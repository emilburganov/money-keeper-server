<?php

namespace App\Http\Controllers\Transfer;

use App\Http\Requests\Transfer\UpdateRequest;
use App\Http\Resources\TransferResource;
use App\Models\Income;
use App\Models\Transfer;
use Illuminate\Http\JsonResponse;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Transfer $transfer): JsonResponse
    {
        $this->authorize('update', $transfer);
        $data = $request->safe();

        $this->service->update($transfer, $data);

        return response()->json(
            new TransferResource($transfer),
        );
    }
}
