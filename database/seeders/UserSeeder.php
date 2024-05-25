<?php

namespace Database\Seeders;

use App\Enums\CategoryTypeEnum;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::query()->create([
            'name' => 'Emil Burganov',
            'email' => 'emil.burganov03@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        /* Categories */
        $user->categories()->create([
           'title' => 'Оплата ЖКХ',
           'type' => CategoryTypeEnum::EXPENSES,
        ]);

        $user->categories()->create([
            'title' => 'Развлечения',
            'type' => CategoryTypeEnum::EXPENSES,
        ]);

        $user->categories()->create([
            'title' => 'Продукты',
            'type' => CategoryTypeEnum::EXPENSES,
        ]);

        $user->categories()->create([
            'title' => 'Одежда',
            'type' => CategoryTypeEnum::EXPENSES,
        ]);

        $user->categories()->create([
            'title' => 'Транспорт',
            'type' => CategoryTypeEnum::EXPENSES,
        ]);

        $user->categories()->create([
            'title' => 'Другие расходы',
            'type' => CategoryTypeEnum::EXPENSES,
        ]);

        $user->categories()->create([
            'title' => 'Зарплата',
            'type' => CategoryTypeEnum::INCOMES,
        ]);

        $user->categories()->create([
            'title' => 'Премия',
            'type' => CategoryTypeEnum::INCOMES,
        ]);

        $user->categories()->create([
            'title' => 'Подарок',
            'type' => CategoryTypeEnum::INCOMES,
        ]);

        $user->categories()->create([
            'title' => 'Стипендия',
            'type' => CategoryTypeEnum::INCOMES,
        ]);

        $user->categories()->create([
            'title' => 'Продажа',
            'type' => CategoryTypeEnum::INCOMES,
        ]);

        $user->categories()->create([
            'title' => 'Вклады',
            'type' => CategoryTypeEnum::INCOMES,
        ]);

        /* Accounts */
        $user->accounts()->create([
            'title' => 'Банковская карта (₽)',
            'currency_id' => 1,
        ]);

        $user->accounts()->create([
            'title' => 'Наличные (₽)',
            'currency_id' => 1,
        ]);

        $user->accounts()->create([
            'title' => 'Копилка (₽)',
            'currency_id' => 1,
        ]);

        $user->accounts()->create([
            'title' => 'Банковская карта ($)',
            'currency_id' => 16,
        ]);

        $user->accounts()->create([
            'title' => 'Наличные ($)',
            'currency_id' => 16,
        ]);

        $user->accounts()->create([
            'title' => 'Копилка ($)',
            'currency_id' => 16,
        ]);

        /* Incomes */
        DB::table('incomes')->insert([
            'title' => 'Зарплата за февраль',
            'amount' => 70000,
            'category_id' => 7,
            'account_id' => 2,
            'created_at' => '2024.02.15',
            'updated_at' => '2024.02.15',
        ]);

        DB::table('incomes')->insert([
            'title' => 'Зарплата за март',
            'amount' => 40000,
            'category_id' => 7,
            'account_id' => 1,
            'created_at' => '2024.03.15',
            'updated_at' => '2024.03.15',
        ]);

        DB::table('incomes')->insert([
            'title' => 'Зарплата за апрель',
            'amount' => 50000,
            'category_id' => 7,
            'account_id' => 1,
            'created_at' => '2024.04.15',
            'updated_at' => '2024.04.15',
        ]);

        DB::table('incomes')->insert([
            'title' => 'Премия за апрель',
            'amount' => 40000,
            'category_id' => 8,
            'account_id' => 1,
            'created_at' => '2024.04.15',
            'updated_at' => '2024.04.15',
        ]);

        DB::table('incomes')->insert([
            'title' => 'Зарплата за май',
            'amount' => 60000,
            'category_id' => 7,
            'account_id' => 1,
            'created_at' => '2024.05.15',
            'updated_at' => '2024.05.15',
        ]);

        DB::table('incomes')->insert([
            'title' => 'Премия за май',
            'amount' => 12000,
            'category_id' => 8,
            'account_id' => 1,
            'created_at' => '2024.04.15',
            'updated_at' => '2024.04.15',
        ]);

        DB::table('incomes')->insert([
            'title' => 'Подарок на ДР',
            'amount' => 10000,
            'category_id' => 9,
            'account_id' => 3,
            'created_at' => '2024.05.20',
            'updated_at' => '2024.05.20',
        ]);

        DB::table('incomes')->insert([
            'title' => 'Стипендия за май',
            'amount' => 5000,
            'category_id' => 10,
            'account_id' => 1,
            'created_at' => '2024.05.22',
            'updated_at' => '2024.05.22',
        ]);

        DB::table('incomes')->insert([
            'title' => 'Открытие счета в валюте',
            'amount' => 500,
            'category_id' => 12,
            'account_id' => 4,
            'created_at' => '2024.05.20',
            'updated_at' => '2024.05.20',
        ]);

        /* Expenses */
        DB::table('expenses')->insert([
            'title' => 'Одежда на свадьбу',
            'amount' => 50000,
            'category_id' => 4,
            'account_id' => 1,
            'created_at' => '2024.02.15',
            'updated_at' => '2024.02.15',
        ]);

        DB::table('expenses')->insert([
            'title' => 'ЖКХ за март',
            'amount' => 7000,
            'category_id' => 1,
            'account_id' => 1,
            'created_at' => '2024.03.15',
            'updated_at' => '2024.03.15',
        ]);

        DB::table('expenses')->insert([
            'title' => 'Транспорт за год',
            'amount' => 40000,
            'category_id' => 5,
            'account_id' => 2,
            'created_at' => '2024.04.15',
            'updated_at' => '2024.04.15',
        ]);

        DB::table('expenses')->insert([
            'title' => 'Продукты на апрель',
            'amount' => 20000,
            'category_id' => 3,
            'account_id' => 1,
            'created_at' => '2024.04.15',
            'updated_at' => '2024.04.15',
        ]);

        DB::table('expenses')->insert([
            'title' => 'Роллы',
            'amount' => 2000,
            'category_id' => 3,
            'account_id' => 1,
            'created_at' => '2024.05.15',
            'updated_at' => '2024.05.15',
        ]);

        DB::table('expenses')->insert([
            'title' => 'ЖКХ за апрель',
            'amount' => 6000,
            'category_id' => 1,
            'account_id' => 1,
            'created_at' => '2024.04.15',
            'updated_at' => '2024.04.15',
        ]);

        DB::table('expenses')->insert([
            'title' => 'Тур в Диснейленд',
            'amount' => 100000,
            'category_id' => 2,
            'account_id' => 1,
            'created_at' => '2024.05.20',
            'updated_at' => '2024.05.20',
        ]);

        DB::table('expenses')->insert([
            'title' => 'ЖКХ за май',
            'amount' => 6000,
            'category_id' => 1,
            'account_id' => 1,
            'created_at' => '2024.05.22',
            'updated_at' => '2024.05.22',
        ]);

        /* Transfers */
        DB::table('transfers')->insert([
            'title' => 'Снятие наличных',
            'amount' => 4000,
            'account_from_id' => 1,
            'account_to_id' => 2,
            'created_at' => '2024.03.04',
            'updated_at' => '2024.03.04',
        ]);

        DB::table('transfers')->insert([
            'title' => 'Перевод на карту',
            'amount' => 500,
            'account_from_id' => 2,
            'account_to_id' => 1,
            'created_at' => '2024.04.14',
            'updated_at' => '2024.04.14',
        ]);

        DB::table('transfers')->insert([
            'title' => 'Снятие наличных',
            'amount' => 2000,
            'account_from_id' => 1,
            'account_to_id' => 2,
            'created_at' => '2024.05.24',
            'updated_at' => '2024.05.24',
        ]);

        DB::table('transfers')->insert([
            'title' => 'Перевод на карту',
            'amount' => 1200,
            'account_from_id' => 2,
            'account_to_id' => 1,
            'created_at' => '2024.05.25',
            'updated_at' => '2024.05.25',
        ]);
    }
}
