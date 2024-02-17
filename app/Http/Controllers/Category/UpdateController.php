<?php

namespace App\Http\Controllers\Category;

use App\Http\Requests\Category\UpdateRequest;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\JsonResponse;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Category $category): JsonResponse
    {
        $data = $request->safe();

        $this->service->update($category, $data);

        return response()->json(
            new CategoryResource($category),
        );
    }
}
