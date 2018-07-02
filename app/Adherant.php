<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adherant extends Model
{

    protected $fillable = [
        'first_name', 'last_name', 'email', 'user_id', 'licence_number',
    ];

	/* 
	* relation with model User
	*/
    public function user(){
    	return $this->belongsTo('App\User');
    }
}
