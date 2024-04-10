<?php

namespace App\Services\Expense;

use App\Models\Expense;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ExpenseService
{
    public function index(): Collection
    {
        return Auth::user()->expenses()->get();
    }

    public function store($data): Builder|Model
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
        ]);

        $expense->category()->associate($data->category_id);
        $expense->account()->associate($data->account_id);
        $expense->save();
    }

    public function destroy(Expense $expense): void
    {
        $expense->delete();
    }

    public function getExpensesStats(): array
    {
        $currency = Auth::user()->currency;

        $expensesStats = Expense::query()
            ->join('accounts', 'expenses.account_id', '=', 'accounts.id')
            ->join('currencies', 'accounts.currency_id', '=', 'currencies.id')
            ->select(
                DB::raw('currencies.value as currency_value'),
                DB::raw('sum(amount) as sum'),
                DB::raw("DATE_FORMAT(expenses.created_at,'%M %Y') as date"),
            )
            ->where('user_id', Auth::id())
            ->groupBy('date', 'accounts.user_id', 'currencies.value')
            ->get();

        $labels = $expensesStats->map(fn($expensesStat) => $expensesStat->date);
        $values = $expensesStats->map(fn($expensesStat) => round($expensesStat->sum * $expensesStat->currency_value / $currency->value, 2));

        return [$labels, $values];
    }
}