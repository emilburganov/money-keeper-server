<?php

namespace App\Services\Currency;

use App\Models\Currency;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Http;

class CurrencyService
{
    public function index(): Collection
    {
        return Currency::all();
    }

    public function updateRates(): void
    {
        $response = Http::get('https://www.cbr-xml-daily.ru/daily_json.js');
        $currencies = $response->json();

        foreach ($currencies['Valute'] as $currency) {
            Currency::query()->updateOrCreate(
                ['code' => $currency['CharCode']],
                [
                    'title' => $currency['Name'],
                    'value' => $currency['Value'] / $currency['Nominal'],
                    'code' => $currency['CharCode'],
                ]);
        }
    }
}