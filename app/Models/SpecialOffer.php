<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SpecialOffer extends Model
{
    public function images(){
        return $this->hasMany('App\Models\SpecialOfferImg');
    }

    public function applications(){
        return $this->hasMany('App\Models\Application');
    }
}
