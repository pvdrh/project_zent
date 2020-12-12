<?php

namespace App\Policies;

use App\User;
use App\Oder;
use Illuminate\Auth\Access\HandlesAuthorization;

class OrderPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function forceDelete(User $user, Oder $oder)
    {
        return $user->role == 1;
    }
}
