<?php

namespace App\Policies;

use App\Models\Payment;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PaymentPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return $user->role === 'administrateur';
    }

    public function view(User $user, Payment $payment)
    {
        return $user->role === 'administrateur' || $user->id === $payment->user_id;
    }

    public function create(User $user)
    {
        return $user->role === 'administrateur';
    }

    public function update(User $user, Payment $payment)
    {
        return $user->role === 'administrateur';
    }

    public function delete(User $user, Payment $payment)
    {
        return $user->role === 'administrateur';
    }

    public function restore(User $user, Payment $payment)
    {
        return $user->role === 'administrateur';
    }

    public function forceDelete(User $user, Payment $payment)
    {
        return $user->role === 'administrateur';
    }
}
