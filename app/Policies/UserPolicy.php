<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
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

    public function viewAny(User $user)
    {
        return $user->role == 1 ;
    }

    public function view(User $user, User $model)
    {
        if ($user->role == 1 || $user->role == 2) return true;
    }

    public function create(User $user)
    {
        if($user->role == 2) return false;
        else return true;
    }

    public function update(User $user, User $model)
    {
        return($user->role == 1 || $user->role == 2);
    }

    public function delete(User $user, User $model)
    {
        if ($user->role == 1) return true;
    }
}
