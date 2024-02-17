<?php

namespace App\Http\Controllers\Category;

use App\Http\Requests\Category\StoreRequest;
use App\Http\Resources\CategoryResource;
use Illuminate\Http\JsonResponse;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request): JsonResponse
    {
        $data = $request->safe();

        $category = $this->service->store($data);

        return response()->json(
            new CategoryResource($category),
        );
    }
}
