<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\facades\Auth;
use App\User;
use App\Etudiant;
use App\Encadrement;
use Illuminate\Support\facades\Hash;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\DB;

class ProfesseursController extends Controller {


	public function __constuct(){
		$this->middleware='auth';
	}
	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Guard $auth)
	{
		//User::create(['email'=>'test@test.fr','password'=> Hash::make('nino')]);
		
		Auth::attempt(['email' => 'test@test.fr', 'password' => 'nino']);
		$log=$auth->user();
		//$myProfile= DB::table('users')->where('id','=',$log->id)->get();
		$myProfile=User::with('cv')->where('id','=',$log->id)->get()->first();
		//dd($mypro);
		//dd($auth->user()); 
		//dd(Auth::check());
		return view('Admin/adminIndex',compact('myProfile'));

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}





	public function getCv(){
		return view('Admin/CV');
	}


	public function getEncadrement(Guard $auth,Request $request){
		$var = $request->all()['cat'];
		$encadrements =  Encadrement::where(["categorie" => "$var"])->get();
		
		return view('Admin/encadrement',compact('encadrements'));
	}

	public function getAddEncadrement(Request $request){
		
		$etudiants=Etudiant::all();
		return view('Admin/encadrement_ajout',compact('etudiants','request'));
	}
	public function postAddEncadrement(Guard $auth,Request $request){
		$encadrement= Encadrement::create(["categorie"=>$request->all()["select"],"sujet"=>$request->all()["text-input"],"user_id"=>$auth->user()->id]);
		$tab=array();
		$i=0;
		foreach($request->all()['multiple-select'] as $key=>$value){
			$tab[$i]=intval($value);
			$i++;
		}
		$encadrement->etudiants()->sync($tab);
		return redirect('admin/professeurs/encadrement');
	}










	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
