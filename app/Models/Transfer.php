<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transfer extends Model
{
    protected $guarded = false;

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function accountFrom(): BelongsTo
    {
        return $this->belongsTo(Account::class, 'account_from_id', 'id');
    }

    public function accountTo(): BelongsTo
    {
        return $this->belongsTo(Account::class, 'account_to_id', 'id');
    }

    public function user(): BelongsTo
    {
        return $this->accountFrom->belongsTo(User::class);
    }
}
