<?php

namespace App\Policies;

use App\Models\Account;
use App\Models\Category;
use App\Models\Income;
use App\Models\Transfer;
use App\Models\User;

class TransferPolicy
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
    public function view(User $user, Transfer $transfer): bool
    {
        return $transfer->user->getKey() === $user->getKey();
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        $accountFrom = Account::query()->find(request()->account_from_id);
        $accountTo = Account::query()->find(request()->account_to_id);

        return (
            $accountFrom->user->getKey() === $user->getKey() &&
            $accountTo->user->getKey() === $user->getKey()
        );
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Transfer $transfer): bool
    {
        $accountFrom = Account::query()->find(request()->account_from_id);
        $accountTo = Account::query()->find(request()->account_to_id);

        return (
            $transfer->user->getKey() === $user->getKey() &&
            $accountFrom->user->getKey() === $user->getKey() &&
            $accountTo->user->getKey() === $user->getKey()
        );
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Transfer $transfer): bool
    {
        return $transfer->user->getKey() === $user->getKey();
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Transfer $transfer): bool
    {
        return $transfer->user->getKey() === $user->getKey();
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Transfer $transfer): bool
    {
        return $transfer->user->getKey() === $user->getKey();
    }
}
