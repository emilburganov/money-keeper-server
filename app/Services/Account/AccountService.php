<?php

namespace App\Services\Account;

use App\Models\Account;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class AccountService
{
    public function index(): Collection
    {
        return Auth::user()->accounts;
    }

    public function store($data): Builder|Model
    {
        return Account::query()->create([
            'title' => $data->title,
            'user_id' => Auth::id(),
            'currency_id' => $data->currency_id,
        ]);
    }

    public function update(Account $account, $data): void
    {
        $account->update([
            'title' => $data->title,
            'currency_id' => $data->currency_id,
        ]);
    }

    public function destroy(Account $account): void
    {
        $account->delete();
    }

    public function getAccountsStats(): array
    {
        $currency = Auth::user()->currency;

        $accountsStats = Auth::user()->accounts()->get();

        $labels = $accountsStats->map(fn($accountsStat) => $accountsStat->title);
        $values = $accountsStats->map(fn($accountsStat) => round($accountsStat->total * $accountsStat->currency->value / $currency->value, 2));

        return [$labels, $values];
    }
}