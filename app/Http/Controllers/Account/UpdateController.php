<?php

namespace App\Http\Controllers\Account;

use App\Http\Requests\Account\UpdateRequest;
use App\Http\Resources\AccountResource;
use App\Models\Account;
use Illuminate\Http\JsonResponse;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Account $account): JsonResponse
    {
        $data = $request->safe();

        $this->service->update($account, $data);

        return response()->json(
            new AccountResource($account),
        );
    }
}
