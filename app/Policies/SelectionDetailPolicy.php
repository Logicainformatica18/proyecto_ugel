<?php

namespace App\Policies;

use App\Models\SelectionDetail;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class SelectionDetailPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, SelectionDetail $selectionDetail): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, SelectionDetail $selectionDetail): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, SelectionDetail $selectionDetail): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, SelectionDetail $selectionDetail): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, SelectionDetail $selectionDetail): bool
    {
        //
    }
}
