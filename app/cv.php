<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Cv extends Model {

	protected $fillable = ['photo','presentation'];
	//
	// public function competences(){
	// 	return $this->hasMany('App\Competence');
	// }
	// public function experiences(){
	// 	return $this->hasMany('App\Experience');
	// }
	// public function educations(){
	// 	return $this->hasMany('App\Education');
	// }
	public function user()
	{
		return $this->belongsTo('App\User');
	}
}
