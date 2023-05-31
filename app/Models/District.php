<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    public function canton(){
        return $this->belongsTo('App\Models\Canton');
    }

    public function customer(){
        return $this->hasMany('App\Models\Customer');
    }
}
