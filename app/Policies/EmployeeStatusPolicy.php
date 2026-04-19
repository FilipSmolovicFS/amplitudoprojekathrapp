<?php

namespace App\Policies;

use App\Models\EmployeeStatus;
use App\Models\User;
use App\Permissions\Permissions;
use Illuminate\Auth\Access\Response;

class EmployeeStatusPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can(Permissions::MANAGE_STATUS);
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, EmployeeStatus $status): bool
    {
        return $user->can(Permissions::MANAGE_STATUS);
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can(Permissions::MANAGE_STATUS);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, EmployeeStatus $status): bool
    {
        return $user->can(Permissions::MANAGE_STATUS);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, EmployeeStatus $status): bool
    {
        return $user->can(Permissions::MANAGE_STATUS);
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, EmployeeStatus $status): bool
    {
        return $user->can(Permissions::MANAGE_STATUS);
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, EmployeeStatus $status): bool
    {
        return $user->can(Permissions::MANAGE_STATUS);
    }
}
