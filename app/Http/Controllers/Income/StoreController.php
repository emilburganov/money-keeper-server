<?php

namespace App\Http\Controllers\Income;

use App\Http\Requests\Income\StoreRequest;
use App\Http\Resources\IncomeResource;
use Illuminate\Http\JsonResponse;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request): JsonResponse
    {
        $data = $request->safe();

        $income = $this->service->store($data);

        return response()->json(
            new IncomeResource($income),
        );
    }
}
