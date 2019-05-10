<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctorant extends Model {
	
    //
    public function personnel()
	{
		return $this->belongsTo('App\Personnel');
	}
}