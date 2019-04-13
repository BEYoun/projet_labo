<?php namespace App\Http\Controllers;

use Illuminate\Contracts\Auth\Guard;
use Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
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
		return view('welcome');
	}
	public function about(){
		return view('about');
	}
	public function service(){
		return view('service');
	}
	public function projects(){
		return view('projects');
	}
	public function blog(){
		return view('blog');
	}
	public function team(){
		return view('team');
	}
	public function singleTeamPage(){
		return view('singleTeamPage');
	}
	public function singleEquipePage(){
		return view('singleEquipePage');
	}
	public function detailBlog(){
		return view('detailBlog');
	}
	
	
}
