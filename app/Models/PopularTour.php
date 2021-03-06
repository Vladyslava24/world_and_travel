<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PopularTour extends Model
{
    public function images(){
        return $this->hasMany('App\Models\PopularTourImg');
    }

    public function applications(){
        return $this->hasMany('App\Models\Application');
    }
}
