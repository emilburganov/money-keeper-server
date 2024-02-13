<?php

namespace App\Http\Controllers;

use App\Enums\CategoryTypeEnum;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    /**
     * Index the categories
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $user = Auth::user();
        $categories = $user->categories;

        return response()->json(
            CategoryResource::collection($categories)
        );
    }

    /**
     * Create a category
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $user = Auth::user();

        $validator = Validator::make($request->all(), [
            'title' => 'required|string|between:3,60|unique:categories,title',
            'type' => [Rule::enum(CategoryTypeEnum::class)],
        ]);

        if ($validator->fails()) {
            return $this->validationError($validator->errors());
        }

        $category = Category::query()->create([
            'title' => $request->title,
            'user_id' => $user->id,
            'type' => $request->type,
        ]);

        return response()->json(
            new CategoryResource($category),
        );
    }

    /**
     * Update a category
     *
     * @param Category $category
     * @param Request $request
     * @return JsonResponse
     */
    public function update(Category $category, Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|between:3,100|unique:categories,title,' . $category->id,
            'type' => [Rule::enum(CategoryTypeEnum::class)],
        ]);

        if ($validator->fails()) {
            return $this->validationError($validator->errors());
        }

        $category->update([
            'title' => $request->title,
            'type' => $request->type,
        ]);;

        return $this->message('Category successful updated.', 202);
    }

    /**
     * Destroy a category
     *
     * @param Category $category
     * @return JsonResponse
     */
    public function destroy(Category $category): JsonResponse
    {
        $category->delete();

        return $this->message('Category successful destroyed.');
    }
}
