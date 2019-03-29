<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Encadrement extends Model {

	protected $fillable=['categorie','sujet','user_id'];
	//
	public function User()
	{
		return $this->belongsTo('App\User');
	}
	public function Etudiants()
	{
	    return $this->belongsToMany('App\Etudiant');
	}

}
