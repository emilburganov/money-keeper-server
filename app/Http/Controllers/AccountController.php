<?php

namespace App\Http\Controllers;

use App\Enums\CategoryTypeEnum;
use App\Http\Resources\AccountResource;
use App\Http\Resources\CategoryResource;
use App\Models\Account;
use App\Models\Category;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class AccountController extends Controller
{
    /**
     * Index the accounts
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $user = Auth::user();
        $accounts = $user->accounts;

        return response()->json(
            AccountResource::collection($accounts)
        );
    }

    /**
     * Create an account
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $user = Auth::user();

        $validator = Validator::make($request->all(), [
            'title' => 'required|string|between:3,60|unique:accounts,title,user_id' . $user->id,
            'currency_id' => 'required|exists:currencies,id',
        ]);

        if ($validator->fails()) {
            return $this->validationError($validator->errors());
        }

        $account = Account::query()->create([
            'title' => $request->title,
            'user_id' => $user->id,
            'currency_id' => $request->currency_id,
        ]);

        return response()->json(
            new AccountResource($account),
        );
    }

    /**
     * Update an account
     *
     * @param Category $category
     * @param Request $request
     * @return JsonResponse
     */
    public function update(Account $account, Request $request): JsonResponse
    {
        $user = Auth::user();

        $validator = Validator::make($request->all(), [
            'title' => 'required|string|between:3,60|unique:accounts,title,user_id' . $user->id,
            'user_id' => 'required|exists:users,id',
            'currency_id' => 'required|exists:currencies,id',
        ]);

        if ($validator->fails()) {
            return $this->validationError($validator->errors());
        }

        $account->update([
            'title' => $request->title,
            'currency_id' => $request->currency_id,
        ]);

        return $this->message('Account successful updated.', 202);
    }

    /**
     * Destroy an account
     *
     * @param Account $account
     * @return JsonResponse
     */
    public function destroy(Account $account): JsonResponse
    {
        $account->delete();

        return $this->message('Account successful destroyed.');
    }
}
