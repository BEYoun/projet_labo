<?php namespace App\Http\Controllers\SuperAdmin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Personnel;
use App\Permanent;
use App\Doctorant;
use App\Stagiaire;

class PersonnelsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$doctorants = Doctorant::with('personnel')->get();
		$permanents = Permanent::with('personnel')->get();
		$stagiaires = Stagiaire::with('personnel')->get();
		//
		return view('SuperAdmin/Personnel/listerPersonnel',compact('doctorants','stagiaires','permanents'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('SuperAdmin/Personnel/ajoutPersonnel');
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		Personnel::create($request->all());
		$perso = Personnel::where('mail','=',$request->mail)->firstOrFail();

		if($request->type=='permanent'){
			$permanent=Permanent::create(['permanent'=>true]);
			$permanent->personnel()->associate($perso);
			$permanent->save();
		}
		if($request->type=='non permanent'){
			$permanent=Permanent::create(['permanent'=>false]);
			$permanent->personnel()->associate($perso);
			$permanent->save();
		}
		if($request->type=='doctorant'){
			$permanent=Doctorant::create([]);
			$permanent->personnel()->associate($perso);
			$permanent->save();
		}
		if($request->type=='stagiaire'){
			$permanent=Stagiaire::create([]);
			$permanent->personnel()->associate($perso);
			$permanent->save();
		}
		return view('SuperAdmin/Personnel/ajoutPersonnel');

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
