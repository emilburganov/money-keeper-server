<?php

namespace App\Services\Account;

use App\Models\Account;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;

class Service
{
    public function index(): Collection
    {
        return Auth::user()->accounts()->get();
    }

    public function store($data): Account
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
        if ( $account->user_id === Auth::id()) {
            $account->delete();
        }
    }
}