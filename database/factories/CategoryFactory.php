<?php

namespace Database\Factories;

use App\Enums\CategoryTypeEnum;
use App\Models\Category;
use App\Models\User;
use Exception;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Validation\Rule;

/**
 * @extends Factory<Category>
 */
class CategoryFactory extends Factory
{
    /**
     * @return array
     * @throws Exception
     */
    public function definition(): array
    {
        return [
            'title' => fake()->word(),
            'type' => CategoryTypeEnum::INCOMES,
            'user_id' => 1,
        ];
    }
}
