<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model {

      protected $fillable=['nom','prenom'];
	//
      public function encadrements(){
            return $this->belongsToMany('App\Encadrement');
      }
}
