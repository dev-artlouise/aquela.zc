<?php

namespace App\Policies;

use App\Unit;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UnitPolicy
{
    use HandlesAuthorization;

    //
    /*public function before($user, $ability){
           
        if ($user->hasRole('admin')){
            return true;
        }
    }
    */

    //browse for owner and admin
    public function browse(User $user){
        
        return $user->hasRole([
            'owner',
            'admin'
            ]);
    }

    
    public function read(User $user, Unit $unit){

        //read for owner only
        if(empty($unit->apartment)) {
            
            return false;
        }

        //allow admin to read
        if ($user->hasRole('admin')){
            
            return true;
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
