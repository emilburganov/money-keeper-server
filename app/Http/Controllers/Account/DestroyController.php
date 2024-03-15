<?php

namespace App\Http\Controllers\Account;

use App\Models\Account;
use Illuminate\Http\JsonResponse;

class DestroyController extends BaseController
{
    public function __invoke(Account $account): JsonResponse
    {
        $this->authorize('delete', Account::class);
        $this->service->destroy($account);

        return response()->json([
            'message' => 'Account successful destroyed.',
        ]);
    }
}
