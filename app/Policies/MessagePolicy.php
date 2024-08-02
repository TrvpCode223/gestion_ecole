<?php

namespace App\Policies;

use App\Models\Message;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class MessagePolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return $user->role === 'administrateur' || $user->role === 'professeur' || $user->role === 'etudiant';
    }

    public function view(User $user, Message $message)
    {
        return $user->id === $message->sender_id || $user->id === $message->receiver_id;
    }

    public function create(User $user)
    {
        return $user->role === 'administrateur' || $user->role === 'professeur' || $user->role === 'etudiant';
    }

    public function delete(User $user, Message $message)
    {
        return $user->id === $message->sender_id || $user->id === $message->receiver_id;
    }

    public function restore(User $user, Message $message)
    {
        return $user->role === 'administrateur';
    }

    public function forceDelete(User $user, Message $message)
    {
        return $user->role === 'administrateur';
    }
}
