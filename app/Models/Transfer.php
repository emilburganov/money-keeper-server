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

    public function account_from(): BelongsTo
    {
        return $this->belongsTo(Account::class, 'account_from_id', 'id');
    }

    public function account_to(): BelongsTo
    {
        return $this->belongsTo(Account::class, 'account_to_id', 'id');
    }
}
