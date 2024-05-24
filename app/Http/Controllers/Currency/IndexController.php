<?php

namespace App\Http\Controllers\Currency;

use App\Http\Resources\CurrencyResource;
use Illuminate\Http\JsonResponse;

class IndexController extends BaseController
{
    public function __invoke(): JsonResponse
    {
        $currencies = $this->service->index();

        return response()->json(
            CurrencyResource::collection($currencies)
        );
    }
}
