<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    public function tours(){
        return $this->belongsTo('App\Models\Tour');
    }
}
