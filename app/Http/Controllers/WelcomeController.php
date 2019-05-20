<?php namespace App\Http\Controllers;

use Illuminate\Contracts\Auth\Guard;
use Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Presentation;

class WelcomeController extends Controller {


	public function __construct(){
		$this->middleware('guest');
	}
	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index(Request $auth)
	{
		return view('Labo/Acceuil');
	}
	public function about(){
		$presentations= Presentation::get();
		return view('Labo/Presentation',compact('presentations'));
	}
	public function organigramme(){
		return view('Labo/organigramme');
	}
	public function service(){
		return view('Labo/service');
	}
	public function personnels(){
		return view('Labo/personnels');
	}
	public function effectifs(){
		return view('Labo/effectifs');
	}
	public function distinctions(){
		return view('Labo/distinctions');
	}
	public function departements_equipes(){
		return view('Labo/Recherche/departements-equipes');
	}
	public function projets(){
		return view('Labo/Recherche/projets');
	}
	public function poles_de_plates_formes(){
		return view('Labo/Recherche/poles-de-plates-formes');
	}
	public function ateliers_de_prototypage(){
		return view('Labo/Recherche/ateliers_de_prototypage');
	}
	public function ressources_documentaires(){
		return view('Labo/Recherche/ressources-documentaires');
	}
	public function collaborations_internationales(){
		return view('Labo/Recherche/collaborations-internationales');
	}

	public function map(){
		return view('Labo/Collaboration/index');
	}


	public function these_publiees(){
		return view('Labo/publications/these-publiees');
	}
	public function parutions(){
		return view('Labo/publications/parutions');
	}
	public function publications(){
		return view('Labo/publications/publications');
	}


	public function manifestations(){
		return view('Labo/animation/manifestations');
	}
	public function associations(){
		return view('Labo/animation/associations');
	}
	public function seminaires(){
		return view('Labo/animation/seminaires');
	}
	public function soutenances(){
		return view('Labo/animation/soutenances');
	}
	


	public function theses_en_cours(){
		return view('Labo/formation/theses-en-cours');
	}
	public function theses_soutenues(){
		return view('Labo/formation/theses-soutenues');
	}
	public function filieres_denseignements(){
		return view('Labo/formation/filieres-denseignements');
	}
	public function eacutecoles_doctorales(){
		return view('Labo/formation/eacutecoles-doctorales');
	}
	public function masters(){
		return view('Labo/formation/masters');
	}


	public function pdf(){
		return view('Labo/pdf/pdf');
	}
	












	public function divers(){
		return view('Labo/personnelView/pagepersonnel');
	}

	
}
