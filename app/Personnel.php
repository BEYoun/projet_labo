<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Personnel extends Model {
	protected $fillable=['nom','prenom','mail','tel','fax','addresse','type','status'];
	//
	public function permanant()
	{
		return $this->belongsTo('App\User');
	}
}
