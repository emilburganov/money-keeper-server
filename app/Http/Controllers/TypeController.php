<?php

namespace App\Http\Controllers;

use App\Http\Resources\TypeResource;
use App\Models\Type;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TypeController extends Controller
{
    public function index(): JsonResponse
    {
        $types = Type::all();

        return $this->baseDataResponse(TypeResource::collection($types));
    }

    public function create(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|between:3,100',
        ]);

        if ($validator->fails()) {
            return $this->validationErrorResponse($validator->errors());
        }

        $type = Type::query()->create($request->only(['name']));

        return $this->baseDataResponse(new TypeResource($type));
    }
}
