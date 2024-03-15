<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\User\GetBalanceRequest;
use App\Http\Resources\AccountResource;
use Illuminate\Http\JsonResponse;

class GetBalanceController extends BaseController
{
    public function __invoke(GetBalanceRequest $request): JsonResponse
    {
        [$total, $incomes, $expenses] = $this->service->getBalance($request->currency);

        return response()->json([
            'total' => $total,
            'incomes' => $incomes,
            'expenses' => $expenses,
        ]);
    }
}
