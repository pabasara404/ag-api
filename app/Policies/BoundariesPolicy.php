<?php

namespace App\Policies;

use App\Models\Boundaries;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class BoundariesPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Boundaries  $boundaries
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Boundaries $boundaries)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Boundaries  $boundaries
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Boundaries $boundaries)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Boundaries  $boundaries
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Boundaries $boundaries)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Boundaries  $boundaries
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Boundaries $boundaries)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Boundaries  $boundaries
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Boundaries $boundaries)
    {
        //
    }
}
