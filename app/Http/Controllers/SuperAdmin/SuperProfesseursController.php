<?php namespace App\Http\Controllers\SuperAdmin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\facades\Auth;
use App\user;
use Illuminate\Support\facades\Hash;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SuperProfesseursController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */


	
	
	public function index(Guard $auth)
	{
		
		return view('SuperAdmin/index');
	}
	public function getAutorisation()
	{
		$users = User::all();
		return view('SuperAdmin/users',compact('users'));
	}
	public function getForum()
	{
		return view('SuperAdmin/forum');
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
