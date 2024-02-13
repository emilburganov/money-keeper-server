<?php

namespace App\Http\Controllers;

use App\Enums\CategoryTypeEnum;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\IncomeResource;
use App\Models\Category;
use App\Models\Income;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class IncomeController extends Controller
{
    /**
     * Index the incomes
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $user = Auth::user();
        $incomes = $user->incomes;

        return response()->json(
            IncomeResource::collection($incomes)
        );
    }

    /**
     * Create an income
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|between:3,60',
            'amount' => 'required|numeric|min:0|max:1000000000',
            'category_id' => 'required|exists:categories,id',
            'account_id' => 'required|exists:accounts,id',
        ]);

        if ($validator->fails()) {
            return $this->validationError($validator->errors());
        }

        $income = Income::query()->create([
            'title' => $request->title,
            'amount' => $request->amount,
            'category_id' => $request->category_id,
            'account_id' => $request->account_id,
        ]);

        return response()->json(
            new IncomeResource($income),
        );
    }

    /**
     * Update an income
     *
     * @param Income $income
     * @param Request $request
     * @return JsonResponse
     */
    public function update(Income $income, Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|between:3,60',
            'amount' => 'required|decimal:15,2',
            'category_id' => 'required|exists:categories,id',
            'account_id' => 'required|exists:accounts,id',
        ]);

        if ($validator->fails()) {
            return $this->validationError($validator->errors());
        }

        $income->update([
            'title' => $request->title,
            'amount' => $request->amount,
            'category_id' => $request->category_id,
            'account_id' => $request->account_id,
        ]);

        return $this->message('Income successful updated.', 202);
    }

    /**
     * Destroy an income
     *
     * @param Income $income
     * @return JsonResponse
     */
    public function destroy(Income $income): JsonResponse
    {
        $income->delete();

        return $this->message('Income successful destroyed.');
    }
}
