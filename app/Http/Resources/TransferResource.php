<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TransferResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'amount' => $this->amount,
            'account_from' => new AccountResource($this->accountFrom),
            'account_to' => new AccountResource($this->accountTo),
            'created_at' => $this->created_at->format('Y-m-d H:i'),
        ];
    }
}
