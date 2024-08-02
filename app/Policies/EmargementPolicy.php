<?php

namespace App\Policies;

use App\Models\Emargement;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class EmargementPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return in_array($user->role, ['administrateur', 'professeur']);
    }

    public function view(User $user, Emargement $emargement)
    {
        return in_array($user->role, ['administrateur', 'professeur']);
    }

    public function create(User $user)
    {
        return $user->role === 'administrateur';
    }

    public function update(User $user, Emargement $emargement)
    {
        return in_array($user->role, ['administrateur', 'professeur']);
    }

    public function delete(User $user, Emargement $emargement)
    {
        return $user->role === 'administrateur';
    }

    public function restore(User $user, Emargement $emargement)
    {
        return $user->role === 'administrateur';
    }

    public function forceDelete(User $user, Emargement $emargement)
    {
        return $user->role === 'administrateur';
    }
}
