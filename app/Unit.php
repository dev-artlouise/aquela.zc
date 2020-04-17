<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    public function apartment(){
        
        return $this->belongsTo(Apartment::class, 'apartment_id');
    }
}
