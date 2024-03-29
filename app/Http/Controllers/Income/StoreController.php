<?php

namespace App\Http\Controllers\Income;

use App\Enums\CategoryTypeEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\Income\StoreRequest;
use App\Http\Resources\IncomeResource;
use App\Models\Category;
use App\Models\Income;
use Illuminate\Http\JsonResponse;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request): JsonResponse
    {
        $this->authorize('create', Income::class);
        $data = $request->safe();

        $income = $this->service->store($data);

        return response()->json(
            new IncomeResource($income),
        );
    }
}
