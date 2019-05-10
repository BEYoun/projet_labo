<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Stagiaire extends Model {
	
	//
	public function permanant()
	{
		return $this->belongsTo('App\User');
	}
}