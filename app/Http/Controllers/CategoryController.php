<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function index(): JsonResponse
    {
        $categories = Category::all();

        return $this->baseDataResponse(CategoryResource::collection($categories));
    }

    public function create(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|between:3,100',
            'description' => 'max:100',
        ]);

        if ($validator->fails()) {
            return $this->validationErrorResponse($validator->errors());
        }

        $category = Category::query()->create($request->only(['name', 'description']));

        return $this->baseDataResponse(new CategoryResource($category));
    }

    public function update(Category $category, Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|between:3,100',
            'description' => 'max:100',
            'type_id' => 'exists:types,id'
        ]);

        if ($validator->fails()) {
            return $this->validationErrorResponse($validator->errors());
        }

        $category->update($request->only(['name', 'description']));

        return $this->messageDataResponse('Category updated successfully');
    }

    public function destroy(Category $category): JsonResponse
    {
        $category->delete();

        return $this->messageDataResponse('Category deleted successfully');
    }
}
