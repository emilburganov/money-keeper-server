<?php

namespace App\Services\User;

use App\Models\Currency;
use Illuminate\Support\Facades\Auth;

class UserService
{
    public function getBalance(int $currency): array
    {
        $currency = Currency::query()->find($currency);

        $incomes = 0;

        $expenses = 0;

        $total = Auth::user()
            ->accounts()
            ->get()
            ->reduce(function($sum, $account) use ($currency) {
                return $sum + round($account->total * $account->currency->value / $currency->value, 2);
            }, 0);

        return [$total, $incomes, $expenses];
    }
}