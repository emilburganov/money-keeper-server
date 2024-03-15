<?php

namespace App\Http\Controllers\Category;

use App\Http\Requests\Category\StoreRequest;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\JsonResponse;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request): JsonResponse
    {
        $this->authorize('create', Category::class);
        $data = $request->safe();

        $category = $this->service->store($data);

        return response()->json(
            new CategoryResource($category),
        );
    }
}
