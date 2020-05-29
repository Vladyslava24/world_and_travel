<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    /**
     * Атрибуты, для которых разрешено массовое назначение.
     *
     * @var array
     */
    protected $fillable = ['name', 'email'];

    public function applications(){
        return $this->hasMany('App\Models\Application');
    }

    public function feedbacks(){
        return $this->hasMany('App\Models\Afeedback');
    }
}
