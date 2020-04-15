<?php

namespace App\Observers;

use App\Apartment;
use App\Mail\ApartmentActivated;
use Illuminate\Support\Facades\Mail;

class ApartmentObserver
{
    /**
     * Handle the apartment "created" event.
     *
     * @param  \App\Apartment  $apartment
     * @return void
     */
    public function created(Apartment $apartment)
    {
        //
    }

    /**
     * Handle the apartment "updated" event.
     *
     * @param  \App\Apartment  $apartment
     * @return void
     */
    public function updated(Apartment $apartment)
    {
        // check if is_active column changed
        if ($apartment->getOriginal('is_active') == false && $apartment->is_active == true){
            
            //send mail to user(owner)
            Mail::to($apartment->owner)->send(new ApartmentActivated($apartment));

            //change role from customer to owner
            $apartment->owner->setRole('owner');

        } else {
            //dd('Pending Activation Request');
        }
            
        
    }  

    /**
     * Handle the apartment "deleted" event.
     *
     * @param  \App\Apartment  $apartment
     * @return void
     */
    public function deleted(Apartment $apartment)
    {
        //
    }

    /**
     * Handle the apartment "restored" event.
     *
     * @param  \App\Apartment  $apartment
     * @return void
     */
    public function restored(Apartment $apartment)
    {
        //
    }

    /**
     * Handle the apartment "force deleted" event.
     *
     * @param  \App\Apartment  $apartment
     * @return void
     */
    public function forceDeleted(Apartment $apartment)
    {
        //
    }
}
