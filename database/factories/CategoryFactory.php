<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Exception;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'name' => fake()->word(),
            'description' => fake()->text(100),
            'type_id' => random_int(1, 2),
            'user_id' => 1,
        ];
    }
}
