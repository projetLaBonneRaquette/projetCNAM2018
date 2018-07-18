<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Terrain extends Model
{

	protected $table = 'terrain';

	protected $fillable = [
        'nom',
    ];

	/* 
	* relation with model reservation
	*/
    public function reservation(){
    	return $this->hasMany('App\Reservation');
    }
}
