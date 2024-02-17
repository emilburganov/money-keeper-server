<?php

namespace App\Services\Income;

use App\Models\Currency;
use App\Models\Income;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;

class Service
{
    public function index(): Collection
    {
        return Auth::user()->incomes()->get();
    }

    public function store($data): Income
    {
        return Income::query()->create([
            'title' => $data->title,
            'amount' => $data->amount,
            'category_id' => $data->category_id,
            'account_id' => $data->account_id,
        ]);
    }

    public function update(Income $income, $data): void
    {
        $income->update([
            'title' => $data->title,
            'amount' => $data->amount,
            'category_id' => $data->category_id,
            'account_id' => $data->account_id,
        ]);
    }

    public function destroy(Income $income): void
    {
        $income->delete();
    }
}