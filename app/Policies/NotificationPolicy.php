<?php

namespace App\Policies;

use App\Models\Notification;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class NotificationPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return $user->role === 'administrateur' || $user->role === 'professeur' || $user->role === 'etudiant';
    }

    public function view(User $user, Notification $notification)
    {
        return $user->id === $notification->user_id || $user->role === 'administrateur';
    }

    public function create(User $user)
    {
        return $user->role === 'administrateur' || $user->role === 'professeur';
    }

    public function update(User $user, Notification $notification)
    {
        return $user->role === 'administrateur' || ($user->role === 'professeur' && $notification->user_id === $user->id);
    }

    public function delete(User $user, Notification $notification)
    {
        return $user->role === 'administrateur' || ($user->role === 'professeur' && $notification->user_id === $user->id);
    }

    public function restore(User $user, Notification $notification)
    {
        return $user->role === 'administrateur';
    }

    public function forceDelete(User $user, Notification $notification)
    {
        return $user->role === 'administrateur';
    }
}
