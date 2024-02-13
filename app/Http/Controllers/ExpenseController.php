<?php

namespace App\Http\Controllers;

use App\Http\Resources\ExpenseResource;
use App\Models\Expense;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ExpenseController extends Controller
{
    /**
     * Index the expenses
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $user = Auth::user();
        $expenses = $user->expenses;

        return response()->json(
            ExpenseResource::collection($expenses)
        );
    }

    /**
     * Create an expense
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

        $expense = Expense::query()->create([
            'title' => $request->title,
            'amount' => $request->amount,
            'category_id' => $request->category_id,
            'account_id' => $request->account_id,
        ]);

        return response()->json(
            new ExpenseResource($expense),
        );
    }

    /**
     * Update an expense
     *
     * @param Expense $expense
     * @param Request $request
     * @return JsonResponse
     */
    public function update(Expense $expense, Request $request): JsonResponse
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

        $expense->update([
            'title' => $request->title,
            'amount' => $request->amount,
            'category_id' => $request->category_id,
            'account_id' => $request->account_id,
        ]);

        return $this->message('Expense successful updated.', 202);
    }

    /**
     * Destroy an expense
     *
     * @param Expense $expense
     * @return JsonResponse
     */
    public function destroy(Expense $expense): JsonResponse
    {
        $expense->delete();

        return $this->message('Expense successful destroyed.');
    }
}
