<?php

namespace App\Http\Controllers\Account;

use App\Models\Account;
use Illuminate\Http\JsonResponse;

class DestroyController extends BaseController
{
    public function __invoke(Account $account): JsonResponse
    {
        $this->service->destroy($account);

        return response()->json([
            'message' => 'Account successful destroyed.',
        ]);
    }
}
