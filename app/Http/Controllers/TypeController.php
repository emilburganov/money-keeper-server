<?php

namespace App\Http\Controllers;

use App\Http\Resources\TypeResource;
use App\Models\Type;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TypeController extends Controller
{
    /**
     * Index the types
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $types = Type::all();

        return response()->json(
            TypeResource::collection($types)
        );
    }

    /**
     * Create a type
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function create(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|between:3,100',
        ]);

        if ($validator->fails()) {
            return $this->validationError($validator->errors());
        }

        $type = Type::query()->create($request->only(['name']));

        return response()->json([
            new TypeResource($type)
        ]);
    }

    /**
     * Update a type
     *
     * @param Type $type
     * @param Request $request
     * @return JsonResponse
     */
    public function update(Type $type, Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|between:3,100',
        ]);

        if ($validator->fails()) {
            return $this->validationError($validator->errors());
        }

        $type->update($request->only(['name']));

        return $this->message('Type successful updated.',202);
    }

    /**
     * Destroy a type
     *
     * @param Type $type
     * @return JsonResponse
     */
    public function destroy(Type $type): JsonResponse
    {
        $type->delete();

        return $this->message('Type successful destroyed.');
    }
}
