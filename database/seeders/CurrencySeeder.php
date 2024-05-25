<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('currencies')->insert([
            'id' => 1,
            'title' => 'Российский рубль',
            'value' => 1,
            'code' => 'RUB',
        ]);

        DB::table('currencies')->insert([
            'id' => 16,
            'title' => 'Доллар США',
            'value' => 90,
            'code' => 'USD',
        ]);
    }
}
