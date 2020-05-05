<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upazilla extends Model
{
    public function patients(){
        return $this->hasMany('App\Patient');
    }

    public function doctors(){
        return $this->hasMany('App\Doctor');
    }
}
