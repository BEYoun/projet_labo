<?php namespace App\Http\Controllers\SuperAdmin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Personnel;
use App\Departement;

class DepartementsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$departements = Departement::get();
		return view('SuperAdmin/Departement/indexDepartement',compact('departements'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		$personnels = Personnel::get();
		return view('SuperAdmin/Departement/ajoutDepartement',compact('personnels'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$departement = Departement::create($request->all());
		$personnel_responsable = Personnel::findOrFail($request->select);
		$departement->personnel_responsable()->associate($personnel_responsable);
		$departement->save();
		$personnels = Personnel::get();
		return view('SuperAdmin/Departement/ajoutDepartement',compact('personnels'));
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
