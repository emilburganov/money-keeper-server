<?php

namespace App\Services\Category;

use App\Models\Category;
use App\Models\Expense;
use App\Models\Income;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class CategoryService
{
    public function index(): Collection
    {
        return Auth::user()->categories;
    }

    public function store($data): Builder|Model
    {
        return Category::query()->create([
            'title' => $data->title,
            'user_id' => Auth::id(),
            'type' => $data->type,
        ]);
    }

    public function update(Category $category, $data): void
    {
        $category->update([
            'title' => $data->title,
        ]);
    }

    public function destroy(Category $category): void
    {
        $category->delete();
    }

    public function getIncomeCategoriesStats($data): array
    {
        $currency = Auth::user()->currency;
        $categoriesStats = Auth::user()->categories()->get();

        $labels = $categoriesStats->map(function ($categoriesStat) {
            return $categoriesStat->title;
        });

        $values = $categoriesStats->map(function ($categoriesStat) use ($currency, $data) {
            $incomes = $categoriesStat->incomes();

            if (isset($data->date_from)) {
                $dateFrom = Carbon::parse($data->date_from)
                    ->addHours(23)
                    ->addMinutes(59)
                    ->addSeconds(59);
                $incomes->where('created_at', '>=', $dateFrom);
            }

            if (isset($data->date_to)) {
                $dateTo = Carbon::parse($data->date_to)
                    ->addHours(23)
                    ->addMinutes(59)
                    ->addSeconds(59);
                $incomes->where('created_at', '<=', $dateTo);
            }

            $incomes = $incomes->get();

            return $incomes->reduce(function (int $total, Income $income) use ($currency) {
                return $total + round(($income->amount * $income->account->currency->value / $currency->value));
            }, 0);
        });

        return [$labels, $values];
    }

    public function getExpenseCategoriesStats($data): array
    {
        $currency = Auth::user()->currency;
        $categoriesStats = Auth::user()->categories()->get();

        $labels = $categoriesStats->map(function ($categoriesStat) {
            return $categoriesStat->title;
        });

        $values = $categoriesStats->map(function ($categoriesStat) use ($currency, $data) {
            $expenses = $categoriesStat->expenses();

            if (isset($data->date_from)) {
                $dateFrom = Carbon::parse($data->date_from)
                    ->addHours(23)
                    ->addMinutes(59)
                    ->addSeconds(59);
                $expenses->where('created_at', '>=', $dateFrom);
            }

            if (isset($data->date_to)) {
                $dateTo = Carbon::parse($data->date_to)
                    ->addHours(23)
                    ->addMinutes(59)
                    ->addSeconds(59);
                $expenses->where('created_at', '<=', $dateTo);
            }

            $expenses = $expenses->get();

            return $expenses->reduce(function (int $total, Expense $expense) use ($currency) {
                return $total + round(($expense->amount * $expense->account->currency->value / $currency->value));
            }, 0);
        });

        return [$labels, $values];
    }
}