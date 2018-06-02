<?php

namespace App\Policies;

use App\User;
use App\Hour;
use Illuminate\Auth\Access\HandlesAuthorization;

class HourPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the hour.
     *
     * @param  \App\User  $user
     * @param  \App\Hour  $hour
     * @return mixed
     */
    public function view(User $user, Hour $hour)
    {
        //
    }

    /**
     * Determine whether the user can create hours.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the hour.
     *
     * @param  \App\User  $user
     * @param  \App\Hour  $hour
     * @return mixed
     */
    public function update(User $user, Hour $hour)
    {
        return true;
    }

    /**
     * Determine whether the user can delete the hour.
     *
     * @param  \App\User  $user
     * @param  \App\Hour  $hour
     * @return mixed
     */
    public function delete(User $user, Hour $hour)
    {
        return true;
    }
}
