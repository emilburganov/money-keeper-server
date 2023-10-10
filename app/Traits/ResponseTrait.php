<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\MessageBag;

trait ResponseTrait
{
    protected function baseDataResponse(array|JsonResource $data, int $code = 200): JsonResponse
    {
        return response()->json([
            'data' => $data,
        ], $code);
    }

    protected function messageDataResponse(string $message, int $code = 200): JsonResponse
    {
        return response()->json([
            'data' => [
                'message' => $message,
            ],
        ], $code);
    }

    protected function messageErrorResponse(string $message = 'Unauthorized', int $code = 401): JsonResponse
    {
        return response()->json([
            'error' => [
                'message' => $message,
            ],
        ], $code);
    }

    protected function validationErrorResponse(MessageBag $errors): JsonResponse
    {
        return response()->json([
            'error' => [
                'errors' => $errors,
            ],
        ], 422);
    }
}
