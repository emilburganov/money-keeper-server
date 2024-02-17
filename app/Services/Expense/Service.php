<?php

namespace App\Services\Expense;

use App\Models\Currency;
use App\Models\Expense;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;

class Service
{
    public function index(): Collection
    {
        return Auth::user()->expenses()->get();
    }

    public function store($data): Expense
    {
        return Expense::query()->create([
            'title' => $data->title,
            'amount' => $data->amount,
            'category_id' => $data->category_id,
            'account_id' => $data->account_id,
        ]);
    }

    public function update(Expense $expense, $data): void
    {
        $expense->update([
            'title' => $data->title,
            'amount' => $data->amount,
            'category_id' => $data->category_id,
            'account_id' => $data->account_id,
        ]);
    }

    public function destroy(Expense $expense): void
    {
        $expense->delete();
    }
}