<?php

namespace App\Services\Category;

use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;

class CategoryService
{
    public function index(): Collection
    {
        return Auth::user()->categories()->get();
    }

    public function store($data): Category
    {
        return Category::query()->create([
            'title' => $data->title,
            'user_id' => Auth::id(),
            'type' => $data->type,
        ]);
    }

    public function update(Category $category, $data): void
    {
        $category->update([
            'title' => $data->title,
            'type' => $data->type,
        ]);
    }

    public function destroy(Category $category): void
    {
        $category->delete();
    }
}