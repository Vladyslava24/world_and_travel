<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    public function images(){
        return $this->hasMany('App\Models\TourImg');
    }

    public function applications(){
        return $this->hasMany('App\Models\Application');
    }
}
