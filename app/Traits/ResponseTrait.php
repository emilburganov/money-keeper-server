<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;

trait ResponseTrait
{
    public function data($content, $code = 200): JsonResponse
    {
        return response()->json([
            'data' => [
                $content
            ],
        ], $code);
    }

    public function messageError($message = 'Unauthorized', $code = 401): JsonResponse
    {
        return response()->json([
            'error' => [
                'message' => $message,
            ],
        ], $code);
    }

    public function validationError($errors): JsonResponse
    {
        return response()->json([
            'error' => [
                'errors' => $errors,
            ],
        ], 422);
    }
}
