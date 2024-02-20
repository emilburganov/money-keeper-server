<?php

namespace App\Http\Controllers\Transfer;

use App\Models\Transfer;
use Illuminate\Http\JsonResponse;

class DestroyController extends BaseController
{
    public function __invoke(Transfer $transfer): JsonResponse
    {
        $this->service->destroy($transfer);

        return response()->json([
            'message' => 'Transfer successful destroyed.',
        ]);
    }
}
