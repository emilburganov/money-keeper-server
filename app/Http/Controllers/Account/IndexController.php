<?php

namespace App\Http\Controllers\Account;

use App\Http\Resources\AccountResource;
use Illuminate\Http\JsonResponse;

class IndexController extends BaseController
{
    public function __invoke(): JsonResponse
    {
        $accounts = $this->service->index();

        return response()->json(
            AccountResource::collection($accounts)
        );
    }
}
