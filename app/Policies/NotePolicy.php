<?php

namespace App\Policies;

use App\Models\Note;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class NotePolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return in_array($user->role, ['administrateur', 'professeur', 'etudiant']);
    }

    public function view(User $user, Note $note)
    {
        return $user->role === 'administrateur' || 
               $user->role === 'professeur' || 
               ($user->role === 'etudiant' && $user->id === $note->etudiant_id);
    }

    public function create(User $user)
    {
        return $user->role === 'administrateur' || $user->role === 'professeur';
    }

    public function update(User $user, Note $note)
    {
        return $user->role === 'administrateur' || ($user->role === 'professeur' && $user->id === $note->professeur_id);
    }

    public function delete(User $user, Note $note)
    {
        return $user->role === 'administrateur' || ($user->role === 'professeur' && $user->id === $note->professeur_id);
    }
}
