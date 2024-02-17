<?php

namespace App\Http\Controllers\Category;

use App\Models\Category;
use Illuminate\Http\JsonResponse;

class DestroyController extends BaseController
{
    public function __invoke(Category $category): JsonResponse
    {
        $this->service->destroy($category);

        return response()->json([
            'message' => 'Category successful destroyed.',
        ]);
    }
}
