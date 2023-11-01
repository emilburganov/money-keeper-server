<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryResource;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * @param User $user
     * @return JsonResponse
     */
    public function index(User $user): JsonResponse
    {
        $categories = $user->categories;

        return response()->json(
            CategoryResource::collection($categories)
        );
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function create(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|between:3,100',
            'description' => 'max:100',
        ]);

        if ($validator->fails()) {
            return $this->validationError($validator->errors());
        }

        $category = Category::query()->create($request->only(['name', 'description']));

        return response()->json(
            new CategoryResource($category),
        );
    }

    /**
     * @param Category $category
     * @param Request $request
     * @return JsonResponse
     */
    public function update(Category $category, Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|between:3,100',
            'description' => 'max:100',
            'type_id' => 'exists:types,id'
        ]);

        if ($validator->fails()) {
            return $this->validationError($validator->errors());
        }

        $category->update($request->only(['name', 'description']));

        return $this->message('Category successful updated.', 202);
    }

    /**
     * @param User $user
     * @param Category $category
     * @return JsonResponse
     */
    public function destroy(User $user, Category $category): JsonResponse
    {
        $category->delete();

        return $this->message('Category successful deleted.');
    }
}
