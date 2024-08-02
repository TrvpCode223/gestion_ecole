<?php

namespace App\Policies;

use App\Models\Exam;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ExamPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return $user->role === 'administrateur' || $user->role === 'professeur';
    }

    public function view(User $user, Exam $exam)
    {
        return $user->role === 'administrateur' || $user->role === 'professeur';
    }

    public function create(User $user)
    {
        return $user->role === 'administrateur' || $user->role === 'professeur';
    }

    public function update(User $user, Exam $exam)
    {
        return $user->role === 'administrateur' || $user->role === 'professeur';
    }

    public function delete(User $user, Exam $exam)
    {
        return $user->role === 'administrateur' || $user->role === 'professeur';
    }

    public function enroll(User $user, Exam $exam)
    {
        return $user->role === 'administrateur' || $user->role === 'professeur';
    }

    public function restore(User $user, Exam $exam)
    {
        return $user->role === 'administrateur' || $user->role === 'professeur';
    }

    public function forceDelete(User $user, Exam $exam)
    {
        return $user->role === 'administrateur' || $user->role === 'professeur';
    }

    public function addResult(User $user, Exam $exam)
    {
        return $user->role === 'administrateur' || $user->role === 'professeur';
    }

    public function updateResult(User $user, Exam $exam)
    {
        return $user->role === 'administrateur' || $user->role === 'professeur';
    }

    public function deleteResult(User $user, Exam $exam)
    {
        return $user->role === 'administrateur' || $user->role === 'professeur';
    }
}
