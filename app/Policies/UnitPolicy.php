<?php

namespace App\Policies;

use App\Unit;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UnitPolicy
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
    public function read(User $user, Unit $unit){

        if(empty($unit->apartment)) {
            
            return false;
        }
        return $user->id == $unit->apartment->user_id;
    }

     /**
     * Determine whether the user can delete the unit.
     *
     * @param  \App\User  $user
     * @param  \App\Unit  $unit
     * @return mixed
     */
     //Only real owner can edit
    public function edit(User $user, Unit $unit)
    {
        if(empty($unit->apartment)) {

            return false;
        }
        return $user->id == $unit->apartment->user_id;
    }

    /**
     * Determine whether the user can create Units.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function add(User $user) {
       
        //only owner can add unit to their apartment
        return $user->hasRole('owner');
    }


    /**
     * Determine whether the user can delete the unit.
     *
     * @param  \App\User  $user
     * @param  \App\Unit  $unit
     * @return mixed
     */

     //Only real owner can delete
    public function delete(User $user, Unit $unit)
    {
        if(empty($unit->apartment)) {
            
            return false;
        }
        return $user->id == $unit->apartment->user_id;
    }
}
