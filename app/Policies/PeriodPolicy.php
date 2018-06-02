<?php

namespace App\Policies;

use App\User;
use App\Period;
use Illuminate\Auth\Access\HandlesAuthorization;

class PeriodPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the period.
     *
     * @param  \App\User  $user
     * @param  \App\Period  $period
     * @return mixed
     */
    public function view(User $user, Period $period)
    {
        //
    }

    /**
     * Determine whether the user can create periods.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the period.
     *
     * @param  \App\User  $user
     * @param  \App\Period  $period
     * @return mixed
     */
    public function update(User $user, Period $period)
    {
        return true;
    }

    /**
     * Determine whether the user can delete the period.
     *
     * @param  \App\User  $user
     * @param  \App\Period  $period
     * @return mixed
     */
    public function delete(User $user, Period $period)
    {
        return true;
    }
}
