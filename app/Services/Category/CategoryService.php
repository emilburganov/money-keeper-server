<?php

namespace App\Services\Category;

use App\Models\Category;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class CategoryService
{
    public function index(): Collection
    {
        return Auth::user()->categories;
    }

    public function store($data): Builder|Model
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
        ]);
    }

    public function destroy(Category $category): void
    {
        $category->delete();
    }
}