<?php

namespace App\Http\Controllers\Income;

use App\Http\Controllers\Controller;
use App\Http\Requests\Income\UpdateRequest;
use App\Models\Income;
use Illuminate\Http\JsonResponse;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Income $income): JsonResponse
    {
        $data = $request->safe();

       $this->service->update($income, $data);

        return response()->json([
            'message' => 'Income successful updated.',
        ], 202);
    }
}
