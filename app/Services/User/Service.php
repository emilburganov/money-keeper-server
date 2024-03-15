<?php

namespace App\Services\User;

use Illuminate\Support\Facades\Auth;

class Service
{
    public function getBalance(string $currency): array
    {
        $incomes = Auth::user()
            ->incomes()
            ->get()
            ->map(function ($income) use ($currency) {
                if ($income->currency->code !== $currency) {
                    $income->amount *= $currency->rate;
                }
            }
            )
            ->sum('amount');
        $expenses = Auth::user()->expenses()->sum('amount');

        return [$incomes - $expenses, $incomes, $expenses];
    }
}