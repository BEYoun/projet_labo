<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Departement extends Model {
	protected $fillable=['name','titre','description'];
	//
	public function personnel()
	{
		return $this->hasMany('App\Personnel');
	}
	public function personnel_responsable()
	{
		return $this->belongsTo('App\Personnel');
	}
}