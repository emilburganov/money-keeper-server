<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Currency;
use App\Models\Type;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::query()->create([
            'name' => 'Emil Burganov',
            'email' => 'emil.burganov03@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        Category::factory(10)->create();

        Currency::query()->create([
            'title' => 'Российский рубль',
            'code' => 'RUB',
        ]);

        Currency::query()->create([
            'title' => 'Dollar USA',
            'code' => 'USD',
        ]);
    }
}
