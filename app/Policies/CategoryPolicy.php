<?php

namespace App\Policies;

use App\User;
use App\Category;
use Illuminate\Auth\Access\HandlesAuthorization;

class CategoryPolicy
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

    public function create(User $user)
    {
        if($user->role == 2) return false;
        else return true;
    }

    public function update(User $user)
    {
        if($user->role == 1 || $user->role == 2) return true;
    }

    public function delete(User $user)
    {
        if( $user->role == 1) return true;
    }
}
