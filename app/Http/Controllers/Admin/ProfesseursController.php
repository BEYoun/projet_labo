<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\facades\Auth;
use App\User;
use Illuminate\Support\facades\Hash;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\DB;

class ProfesseursController extends Controller {


	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Guard $auth)
	{
		//User::create(['email'=>'test@test.fr','password'=> Hash::make('nino')]);
		$user = User::first()/*->get()*/;
		Auth::login($user);
		$log=$auth->user();
		//$myProfile= DB::table('users')->where('id','=',$log->id)->get();
		$myProfile=User::with('cv')->where('id','=',$log->id)->get();
		//dd($mypro);
		//dd($auth->user()); 
		//Auth::attempt(['email' => 'test@test.fr', 'password' => 'nino']);
		//dd(Auth::check());
		return view('Admin/adminIndex',compact('log','myProfile'));

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
	public function getEncadrement(){
		return view('Admin/encadrement');
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
