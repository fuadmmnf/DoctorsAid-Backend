<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    public function doctortype(){
        return $this->belongsTo('App\Doctortype');
    }


}
