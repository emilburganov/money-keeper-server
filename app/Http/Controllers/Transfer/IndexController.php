<?php

namespace App\Http\Controllers\Transfer;

use App\Http\Resources\TransferResource;
use Illuminate\Http\JsonResponse;

class IndexController extends BaseController
{
    public function __invoke(): JsonResponse
    {
        $transfers = $this->service->index();

        return response()->json(
            TransferResource::collection($transfers)
        );
    }
}
