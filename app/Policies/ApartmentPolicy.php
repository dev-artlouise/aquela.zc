<?php

namespace App\Policies;

use App\Apartment;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ApartmentPolicy
{
    use HandlesAuthorization;

    //check if admin
    public function before(User $user){
        if ($user->hasRole('admin')){
            return true;
        }
    }

    //browse for owner only
    public function browse(User $user){
        
        return $user->hasRole('owner');
    }

    //read for owner only
    public function read(User $user, Apartment $apartment){
        
        return $user->id == $apartment->user_id;
    }

     /**
     * Determine whether the user can delete the apartment.
     *
     * @param  \App\User  $user
     * @param  \App\Apartment  $apartment
     * @return mixed
     */
     //Only real owner can edit
    public function edit(User $user, Apartment $apartment)
    {
        return $user->id == $apartment->user_id;
    }

    /**
     * Determine whether the user can create apartments.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function add(User $user) {
        //
    }


    /**
     * Determine whether the user can delete the apartment.
     *
     * @param  \App\User  $user
     * @param  \App\Apartment  $apartment
     * @return mixed
     */

     //Only real owner can delete
    public function delete(User $user, Apartment $apartment)
    {
        return $user->id == $apartment->user_id;
    }
}
