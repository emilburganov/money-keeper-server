<?php

namespace App\Services\Transfer;

use App\Models\Transfer;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TransferService
{
    public function index(): Collection
    {
        return Auth::user()->transfers;
    }

    public function store($data): Builder|Model
    {
        return Transfer::query()->create([
            'title' => $data->title,
            'amount' => $data->amount,
            'account_from_id' => $data->account_from_id,
            'account_to_id' => $data->account_to_id,
        ]);
    }

    public function update(Transfer $transfer, $data): void
    {
        $transfer->update([
            'title' => $data->title,
            'amount' => $data->amount,
        ]);

        $transfer->accountFrom()->associate($data->account_from_id);
        $transfer->accountTo()->associate($data->account_to_id);
        $transfer->save();
    }

    public function destroy(Transfer $transfer): void
    {
        $transfer->delete();
    }

    public function getTransfersStats(): array
    {
        $currency = Auth::user()->currency;

        $transfersStats = Transfer::query()
            ->join('accounts', 'transfers.account_from_id', '=', 'accounts.id')
            ->join('currencies', 'accounts.currency_id', '=', 'currencies.id')
            ->select(
                DB::raw('currencies.value as currency_value'),
                DB::raw('sum(amount) as sum'),
                DB::raw("DATE_FORMAT(transfers.created_at,'%M %Y') as date"),
            )
            ->where('user_id', Auth::id())
            ->groupBy('date', 'accounts.user_id', 'currencies.value')
            ->get();

        $labels = $transfersStats->map(fn($transfersStat) => $transfersStat->date);
        $values = $transfersStats->map(fn($transfersStat) => round($transfersStat->sum * $transfersStat->currency_value / $currency->value, 2));

        return [$labels, $values];
    }
}