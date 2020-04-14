<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function units(){

        return $this->belongsToMany(Unit::class, 'booking_units', 'booking_id','unit_id' )->withPivot('quantity','price');
    }    
        
    public function user(){
        return $this->belongsto(User::class);
    }
    
}
