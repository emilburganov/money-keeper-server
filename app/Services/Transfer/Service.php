<?php

namespace App\Services\Transfer;

use App\Models\Transfer;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;

class Service
{
    public function index(): Collection
    {
        return Auth::user()->transfers()->get();
    }

    public function store($data): Transfer
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
            'account_from_id' => $data->account_from_id,
            'account_to_id' => $data->account_to_id,
        ]);
    }

    public function destroy(Transfer $transfer): void
    {
        $transfer->delete();
    }
}