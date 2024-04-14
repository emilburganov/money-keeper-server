<?php

namespace App\Services\Income;

use App\Models\Income;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class IncomeService
{
    public function index(): Collection
    {
        return Auth::user()->incomes;
    }

    public function store($data): Builder|Model
    {
        return Income::query()->create([
            'title' => $data->title,
            'amount' => (float)$data->amount,
            'category_id' => $data->category_id,
            'account_id' => $data->account_id,
        ]);
    }

    public function update(Income $income, $data): void
    {
        $income->update([
            'title' => $data->title,
            'amount' => (float)$data->amount,
        ]);

        $income->category()->associate($data->category_id);
        $income->account()->associate($data->account_id);
        $income->save();
    }

    public function destroy(Income $income): void
    {
        $income->delete();
    }

    public function getIncomesStats(): array
    {
        $currency = Auth::user()->currency;

        $incomesStats = Income::query()
            ->join('accounts', 'incomes.account_id', '=', 'accounts.id')
            ->join('currencies', 'accounts.currency_id', '=', 'currencies.id')
            ->select(
                DB::raw('currencies.value as currency_value'),
                DB::raw('sum(amount) as sum'),
                DB::raw("DATE_FORMAT(incomes.created_at,'%M %Y') as date"),
            )
            ->where('user_id', Auth::id())
            ->groupBy('date', 'accounts.user_id', 'currencies.value')
            ->get();

        $labels = $incomesStats->map(fn($incomesStat) => $incomesStat->date);
        $values = $incomesStats->map(fn($incomesStat) => round($incomesStat->sum * $incomesStat->currency_value / $currency->value, 2));

        return [$labels, $values];
    }
}