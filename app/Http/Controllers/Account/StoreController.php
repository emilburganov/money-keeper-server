<?php

namespace App\Http\Controllers\Account;

use App\Http\Requests\Account\StoreRequest;
use App\Http\Resources\AccountResource;
use Illuminate\Http\JsonResponse;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request): JsonResponse
    {
        $data = $request->safe();

        $account = $this->service->store($data);

        return response()->json(
            new AccountResource($account),
        );
    }
}
