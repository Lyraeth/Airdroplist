<?php

namespace App\Policies;

use App\Models\Airdrop;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class AirdropsPolicy
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
    public function view(User $user, Airdrop $airdrop): bool
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
    public function update(User $user, Airdrop $airdrop): bool
    {
        return $user->id == $airdrop->id;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Airdrop $airdrop): bool
    {
        return $user->id == $airdrop->id;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Airdrop $airdrop): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Airdrop $airdrop): bool
    {
        //
    }
}