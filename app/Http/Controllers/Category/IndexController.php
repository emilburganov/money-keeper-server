<?php

namespace App\Http\Controllers\Category;

use App\Http\Resources\CategoryResource;
use Illuminate\Http\JsonResponse;

class IndexController extends BaseController
{
    public function __invoke(): JsonResponse
    {
        $categories = $this->service->index();

        return response()->json(
            CategoryResource::collection($categories)
        );
    }
}
