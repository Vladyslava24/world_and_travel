<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cruise extends Model
{
    public function images(){
        return $this->hasMany('App\Models\CruiseImg');
    }
}
