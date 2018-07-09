<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{

    protected $fillable = [
        'date', 'heure_debut', 'heure_fin', 'terrain_id', 'user_id',
    ];

    /* 
    * relation with model User
    */
    public function user(){
        return $this->belongsTo('App\User');
    }

	/* 
	* relation with model Terrain
	*/
    public function terrain(){
    	return $this->belongsTo('App\Terrain');
    }
}
