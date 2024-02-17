<?php

namespace App\Services\Currency;

use App\Models\Currency;
use Illuminate\Database\Eloquent\Collection;

class Service
{
    public function index(): Collection
    {
        return Currency::all();
    }
}