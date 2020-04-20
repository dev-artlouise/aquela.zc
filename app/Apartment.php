<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    protected $fillable =['name', 'address', 'city', 'information'];

    public function owner(){

        return $this->belongsTo(User::class, 'user_id');
    }

    public function units(){

        return $this->hasMany(Unit::class, 'apartment_id');
    }
}
