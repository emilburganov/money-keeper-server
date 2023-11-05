<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\MessageBag;

trait ResponseTrait
{
    /**
     * Message json response trait
     *
     * @param string $message
     * @param int $code
     * @return JsonResponse
     */
    protected function message(string $message, int $code = 200): JsonResponse
    {
        return response()->json([
            'message' => $message,
        ], $code);
    }

    /**
     * Validation errors json response trait
     *
     * @param MessageBag $errors
     * @return JsonResponse
     */
    protected function validationError(MessageBag $errors): JsonResponse
    {
        return response()->json([
            'errors' => $errors,
            'message' =>  __('messages.validation_error'),
        ], 422);
    }
}
