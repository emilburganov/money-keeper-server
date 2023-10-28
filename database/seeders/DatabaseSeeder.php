<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
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
        Type::query()->create([
            'name' => 'Incomes',
        ]);

        Type::query()->create([
            'name' => 'Expenses',
        ]);

        User::query()->create([
            'name' => 'Emil Burganov',
            'email' => 'emil.burganov03@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        Category::factory(10)->create();
    }
}
