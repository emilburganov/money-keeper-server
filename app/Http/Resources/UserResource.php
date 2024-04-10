<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $currency = $this->currency;

        $incomes = round($this
            ->accounts()
            ->get()
            ->reduce(function ($sum, $account) use ($currency) {
                return $sum + round(
                    $account->incomes_total * $account->currency->value / $currency->value,
                    2
                );
            }, 0), 2);

        $expenses = round($this
            ->accounts()
            ->get()
            ->reduce(function ($sum, $account) use ($currency) {
                return $sum + round(
                    $account->expenses_total * $account->currency->value / $currency->value,
                    2
                );
            }, 0), 2);

        $total = round($this
            ->accounts()
            ->get()
            ->reduce(function ($sum, $account) use ($currency) {
                return $sum + round(
                    $account->total * $account->currency->value / $currency->value,
                    2
                );
            }, 0), 2);

        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'avatar' => $this->avatar,
            'currency' => new CurrencyResource($this->currency),
            'total' => $total,
            'incomes' => $incomes,
            'expenses' => $expenses,
            'created_at' => $this->created_at->format('Y-m-d H:i'),
        ];
    }
}
