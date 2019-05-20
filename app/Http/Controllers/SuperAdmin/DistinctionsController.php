<?php namespace App\Http\Controllers\SuperAdmin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Distinction;
use Illuminate\Http\Request;
use App\Personnel;

class DistinctionsController extends Controller {

	public function getThese(){
		$theses = Distinction::where('type','=','these');
		return view('SuperAdmin/Distinction/theseList',compact('theses'));
	}
	public function getAddThese(){
		$responsable = Personnel::get();
		return view('SuperAdmin/Distinction/theseAdd',compact('responsable'));
	}

	public function getScience(){
		$prixScientifiques = Distinction::where('type','=','scientifique');
		return view('SuperAdmin/Distinction/scientifiqueList',compact('prixScientifiques'));
	}
	public function getAddScience(){
		$responsable = Personnel::get();
		return view('SuperAdmin/Distinction/scientifiqueAdd',compact('responsable'));
	}

	public function getHonorifique(){
		$prixHonorifique = Distinction::where('type','=','honorifique');
		return view('SuperAdmin/Distinction/honorifiqueList',compact('prixHonorifique'));
	}
	public function getAddHonorifique(){
		$responsable = Personnel::get();
		return view('SuperAdmin/Distinction/honorifiqueAdd',compact('responsable'));
	}

	public function getNomination(){
		$nominations = Distinction::where('type','=','nomination');
		return view('SuperAdmin/Distinction/nominationList',compact('nominations'));
	}
	public function getAddNomination(){
		$responsable = Personnel::get();
		return view('SuperAdmin/Distinction/nominationAdd',compact('responsable'));
	}

}
