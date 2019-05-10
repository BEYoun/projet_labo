<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Permanent extends Model {
	protected $fillable=['permanent'];
	//
	public function personnel()
	{
		return $this->belongsTo('App\Personnel');
	}
}