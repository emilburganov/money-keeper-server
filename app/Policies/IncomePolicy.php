<?php

namespace App\Policies;

use App\Models\Account;
use App\Models\Category;
use App\Models\Income;
use App\Models\User;

class IncomePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Income $income): bool
    {
        return $income->user->getKey() === $user->getKey();
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        $category = Category::query()->find(request()->category_id);
        $account = Account::query()->find(request()->account_id);

        return (
            $category->user->getKey() === $user->getKey() &&
            $account->user->getKey() === $user->getKey()
        );
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Income $income): bool
    {
        $category = Category::query()->find(request()->category_id);
        $account = Account::query()->find(request()->account_id);

        return (
            $income->user->getKey() === $user->getKey() &&
            $category->user->getKey() === $user->getKey() &&
            $account->user->getKey() === $user->getKey()
        );
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Income $income): bool
    {
        return $income->user->getKey() === $user->getKey();
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Income $income): bool
    {
        return $income->user->getKey() === $user->getKey();
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Income $income): bool
    {
        return $income->user->getKey() === $user->getKey();
    }
}
