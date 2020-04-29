<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
	protected $fillable = array(
        'upazilla_id',
        'name',
        'mobile',
        'device_id',
        'password',
        'bmdc_number'
        // The rest of the column names that you want it to be mass-assignable.
    );
    public function doctortype(){
        return $this->belongsTo('App\Doctortype');
    }

	public function upazilla(){
        return $this->belongsTo('App\Upazilla');
    }
}
