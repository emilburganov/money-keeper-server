<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Account extends Model
{
    protected $guarded = false;
    protected $appends = ['total'];

    public function currency(): BelongsTo
    {
        return $this->belongsTo(Currency::class);
    }

    public function incomes(): HasMany
    {
        return $this->hasMany(Income::class);
    }

    public function expenses(): HasMany
    {
        return $this->hasMany(Expense::class);
    }

    public function expenseTransfers(): HasMany
    {
        return $this->hasMany(Transfer::class, 'account_from_id');
    }

    public function incomeTransfers(): HasMany
    {
        return $this->hasMany(Transfer::class, 'account_to_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function getTotalAttribute(): float
    {
        $expenses = $this->expenses()->sum('amount');
        $expenseTransfers = $this->expenseTransfers()->sum('amount');
        $incomes = $this->incomes()->sum('amount');
        $incomeTransfers = $this->incomeTransfers()->sum('amount');

        return $incomes + $incomeTransfers - $expenses - $expenseTransfers;
    }

    public function getExpensesTotalAttribute(): float
    {
        return $this->expenses()->sum('amount');
    }

    public function getIncomesTotalAttribute(): float
    {
        return $this->incomes()->sum('amount');
    }
}
