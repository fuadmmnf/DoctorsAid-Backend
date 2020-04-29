<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{

    public function upazilla(){
        return $this->belongsTo('App\Upazilla');
    }
}
